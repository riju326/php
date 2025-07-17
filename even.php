<?php
for($i=20; $i<=50; $i++){
    if($i%2==0){
        echo $i." ";
    }
}
echo "<hr>";
for($i=1; $i<=3; $i++){
    for($j=1; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}
?>