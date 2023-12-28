<?php
session_start();
?>
<p class="match"> Match No: 
    <?php
    include "db_conn.php";
    $match_no = $_GET['mno'];
    echo $match_no;
    $stream = "select * from stream_link where match_no = '$match_no'";
    $s = mysqli_query($conn, $stream);
    $stream_link = mysqli_fetch_assoc($s);
    ?>
</p>
<iframe width="1320" height="600" src="<?php echo $stream_link['link']; ?>" title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen></iframe>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    iframe {
        display: block;
        margin: auto auto;
    }

    .match {
        width: 100%;
        background-color: #000;
        justify-content: center;
        display: flex;
        align-items: center;
        color: #fff;
        height: 60px;
        font-weight: 700;
        font-size: 1.5rem;
        font-family: monospace;
    }
</style>