<?php 
include '01sa.php';

function pokemon_defense($_jester,$limit_number){
  echo 'Defense_Limit :'.$limit_number .'<br>';
  foreach($_jester as $pokemon => $defense){
     if($defense['defense'] >=  $limit_number){
        echo $_jester[$pokemon]['species'].' Defense: '.$_jester[$pokemon]['defense'].'<br>';
     }
  }
}
$limit_number = 0;
echo '<form method="POST">
        <input type="number" name="user_input" placeholder="DefenseLimit">
            <button name="button">Submit</button>
      </form>';
if(isset($_POST['button'])){
  $limit_number = $_POST['user_input'];
}
pokemon_defense($_jester,$limit_number);
?>