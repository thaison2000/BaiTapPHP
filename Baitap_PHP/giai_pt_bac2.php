<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="a">Nhap vao he so a: </label><input type="text" name="a"><br>
        <label for="b">Nhap vao he so b: </label><input type="text" name="b"><br>
        <label for="c">Nhap vao he so c: </label><input type="text" name="c"><br>
        <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $delta = $b*$b-4*$a*$c;

    if($a ==0){
        echo'Phuong trinh co nghiem duy nhat la x = '. ((-$c)/$b);
    }
    else{
        if($delta==0){
            echo 'Phuong trinh co nghiem kep la x = '. ((-$b)/(2*$a));
        }
        else if($delta<0){
            echo 'Phuong trinh vo nghiem';
        }
        else{
            echo 'Phuong trinh co 2 nghiem phan biet la x1 = '.(((-$b)+ sqrt($delta))/(2*$a)). ' va x2 = '.(((-$b)- sqrt($delta))/(2*$a));
        }
    }
}
?>