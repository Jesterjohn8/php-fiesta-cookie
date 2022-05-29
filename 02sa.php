<?php
include '01sa.php';

function hp_sum($_jester){
    $total_hp=0;
    $total_attack=0;
        foreach ($_jester as $total_HP){         
        $total_hp +=intval($total_HP["hp"]);
        $total_attack +=intval($total_HP["attack"]);
    }
    echo "The Total HP is ".$total_hp."<br>";
    echo "The average Attack is ".$total_attack/10;                
}  
hp_sum($_jester);
?>
