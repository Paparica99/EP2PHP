<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_4_1</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
            background-color: #3cf3ed;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> 4.1 แสดงชื่อ-นามสกุล ชื่อเล่น ด้วยตัวแปร</h1>
    <H2><?php
        echo "Hello PHP";
        ?></H2>
    <?php echo "Mr.Kittisak Wongwiangchan";
    echo "<br>";
    $nickname = "Bank";
    $age = 25;
echo "Nickname : ".$nickname;
        echo "<br>Age : ".$age."ปี";
        
    ?>
    <h3><a href="index.html">Home</a></h3>
    <a href="index.html"><input type="button" value="Home"></a>
</body>
<footer>
    <p>
        Copy Right &copy ; by Thonburi University
    </p>
</footer>

</html>