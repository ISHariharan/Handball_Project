<!DOCTYPE html>
<html>
<head>
    <title>Value Storage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <input type="button" value="+" onclick="totalclick_30(1)" class="match-bet-option">
    <span id="totalclicks-30">0</span>
    <input type="button" value="-" onclick="totalclick_30(-1)" class="match-bet-option">
    <input type="button" value="+" onclick="totalclick_29(1)" class="match-bet-option">
    <span id="totalclicks-29"> 0 </span>
    <input type="button" value="-" onclick="totalclick_29(-1)" class="match-bet-option">
    <form action="store.php" method="post">
        <input type="hidden" id="hiddenValue-1" name="valueToStore-1">
        <input type="hidden" id="hiddenValue-2" name="valueToStore-2">
        <input type="submit" value="Upload">
    </form>

    <script>

        function totalclick_30(click) {
            const totalclick = document.getElementById('totalclicks-30');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var hiddenValueInput_1 = document.getElementById("hiddenValue-1");
                hiddenValueInput_1.value = sumvalue;
        }

        function totalclick_29(click){
                const totalclick = document.getElementById('totalclicks-29');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var hiddenValueInput_2 = document.getElementById("hiddenValue-2");
                hiddenValueInput_2.value = sumvalue;
            }
    </script>
</body>
</html>
