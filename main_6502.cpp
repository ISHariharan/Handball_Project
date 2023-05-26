#include<bits/stdc++.h>
using namespace std;

using Byte = unsigned char;
using Word = unsigned short;  

using u32 = unsigned int;

Byte Global;

//creating memory
struct Mem{
    static constexpr u32 MAX_MEM = 1024*64;
    Byte Data[MAX_MEM];

    void Initialise(){
        for(u32 i =0; i< MAX_MEM; i++){
            Data[i] = 0;
        }
    }

    //read 1 byte function
    Byte operator[](u32 Address) const{
        //asset here address is< MAX_MEM
        return Data[Address];
    }

    //write 1 byte function
    Byte &operator[](u32 Address){
        //asset here address is< MAX_MEM
        return Data[Address];
    }

    //Wrties 2 bytes 
    void WriteWord( Word Value, u32 Address, u32 Cycles ){
        Data[Address]    = Value & 0xFF;
        Data[Address + 1]= (Value >> 8);
        Cycles -= 2;
    } 
};

struct CPU{
    using Byte = unsigned char;
    using Word = unsigned short;  

    Word PC; //program counter
    Word SP; //stack pointer 

    Byte A,X,Y; //These are the registers 


    //Status flags
    Byte C: 1;//carry flag
    Byte Z: 1;
    Byte I: 1;//interrupt Flag
    Byte D: 1;//decimal mode Flag
    Byte B: 1;//break Command Flag 
    Byte V: 1;//Overflow Flag
    Byte N: 1;//Negative Flag

    void reset( Mem &memory){
        PC = 0xFFFC; //Settting up the value of the PC when it resets 
        D = 0; //Setting up the value for Decimal flag
        SP = 0x0100;//it is the first address in the stack after zero paging
        A = X = Y = 0;//all the registers to zero
        C = Z = I = B = V = N = 0;//setting all the flags to zero
        memory.Initialise();

    }

    //opcode                                 //zero page
    static constexpr Byte INS_LDA_IM = 0xA9, INS_LDA_ZP = 0xA5, INS_LDA_ZPX = 0xB5, INS_JSR = 0x20; 

    Byte FetchByte(u32 &Cycles,Mem &memory){
        Byte Data = memory[PC];
        PC++;
        Cycles--;
        return Data;
    }

    Word FetchWord(u32 &Cycles, Mem &memory){
        //6502 is little endian 
        Word Data = memory[PC];
        PC++;

        Data |= (memory[PC] << 8);
        PC++;
        Cycles+=2;

        //if you have to handle endian we have to swap bytes here 
        //if (PLATFORM_BIG_ENDIAN)
        //swapBytesInWord()
        return Data;
    }
    
    Byte ReadByte(u32 &Cycles, Byte Address ,Mem &memory){
        Byte Data = memory[Address];
        Cycles--;
        return Data;
    }

    void LDASetStatus(){
        Z = (A == 0);
        N = (A & 0b10000000) > 0;
    }

    void Execute(u32 Cycles,Mem &memory){
        while(Cycles > 0){
            Byte Ins = FetchByte( Cycles, memory); 
            switch (Ins){
                case INS_LDA_IM:{
                    Byte Value = FetchByte( Cycles, memory );
                    A = Value;
                    Global = A;
                    LDASetStatus();
                }break;
                case INS_LDA_ZP:{
                    Byte ZeroPageAddr = FetchByte( Cycles, memory );
                    A =  ReadByte(Cycles, ZeroPageAddr, memory);
                    LDASetStatus();
                }break;
                case INS_LDA_ZPX:{
                    Byte ZeroPageAddr = FetchByte( Cycles, memory );
                    ZeroPageAddr += X;
                    Cycles--;
                    A = ReadByte( Cycles, ZeroPageAddr, memory);
                    LDASetStatus();

                }break;
                //it takes only 16 bit address mode 
                case INS_JSR:{
                    Word SubAddr = FetchWord(Cycles, memory);
                    memory.WriteWord(PC-1, SP, Cycles);
                    memory[SP] = PC - 1;
                    Cycles--;
                    PC = SubAddr;
                    Cycles--; 
                }break;
                default:
                {
                    printf("\nInstruction not handled %d", Ins );
                }break;
            }
        }
    }
};

int main(){
    Mem mem;
    CPU cpu;
    cpu.reset( mem );
    //start - inline a little program
    mem[0xFFFC] = CPU::INS_LDA_ZP;
    mem[0xFFFD] = 0X42;
    mem[0x0042] = 0x84;
    //end - inline a little program
    cpu.Execute( 3, mem ); //Execute 9 instructions //load accumulator takes 2 cycles 
    
    return 0;
}