<?php
function hinh1(){
    for($i=1;$i<=5;$i++){
        for($j=0;$j<$i;$j++){
            echo '*&nbsp';
        }
        echo '<br>';
    }
}

function hinh2(){
    for($i=1;$i<=5;$i++){
        for($j=6;$j>$i;$j--){
            echo '*&nbsp';
        }
        echo '<br>';
    }
}

function hinh3(){
    $temp = 6;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=6;$j++){
            if($j<$temp){
                echo '&nbsp&nbsp&nbsp';
            }
            else{
                echo '*&nbsp';
            }
        }
        $temp--;
        echo '<br>';
    }
}

function hinh4(){
    $temp = 2;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=6;$j++){
            if($j<$temp){
                echo '&nbsp&nbsp&nbsp';
            }
            else{
                echo '*&nbsp';
            }
        }
        $temp++;
        echo '<br>';
    }
}

function hinh5(){
    $temp = 0;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=9;$j++){
                if($j>=5-$temp && $j<=5+$temp){
                    echo '*&nbsp';
                }
                else{
                    echo '&nbsp&nbsp&nbsp';
                }
            }
            $temp++;
            echo '<br>';
        }
}

function hinh6(){
    $temp = 5;
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=9;$j++){
                if($j>5-$temp && $j<5+$temp){
                    echo '*&nbsp';
                }
                else{
                    echo '&nbsp&nbsp&nbsp';
                }
            }
            $temp--;
            echo '<br>';
        }
}


hinh1();
echo '<br>';
hinh2();
echo '<br>';
hinh3();
echo '<br>';
hinh4();
echo '<br>';
hinh5();
echo '<br>';
hinh6();