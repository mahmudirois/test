<?php

$i;
for($i=1; $i<=50; $i++){
    if($i%3 ==0){
        echo "Foo\n";
    } else if($i%5 == 0){
        echo "Bar\n";
    }else if($i%3==0 && $i%5 == 0){
        echo "FooBar\n";
    }

}