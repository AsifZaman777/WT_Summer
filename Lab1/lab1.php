<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Lab1/process.php" method="POST">
    
    Enter the first number: <input type="text" name="first"><br>
    Enter the second number : <input type="text" name="sec"><br>

    Select the operation:
    <input type="radio" name="add">+
    <input type="radio" name="sub">-
    <input type="radio" name="mul">X
    <input type="radio"name="div">/
    <br><br>

    <input type="submit" value="submit" name="submit">
    

    </form>
</body>
</html>