<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="number one">
        <input type="text" name="num2" placeholder="number two">
        <select name="operator">
            <option value="">None</option>
            <option value="">Add</option>
            <option value="">Sub</option>
            <option value="">Mult</option>
            <option value="">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <?php 
       if (isset($_GET['submit'])) {
           $result1 = $_GET['num1'];
           $result2 = $_GET['num2'];
           $operator = $_GET['operator'];
       }
    ?>
</body>
</html>