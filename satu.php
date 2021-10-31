<!DOCTYPE html>
<html lang="en">
<body>
  <form method="POST" name="frmpost" action="">
    Input number:<br>
    <input type="text" name='number' id='number' value='' /><br>
    Input Target:<br>
    <input type="text" name='target' id='target' value='' /><br>
    <input type='submit' name='btnCheck' value='Check'/>
</form>
</body>
<?php
  $nums = $_POST['number'];
  $target = $_POST['target'];
  $number = explode(",",$nums);

  foreach ($number as $item => $value){
    unset($number[$item]);
    $nextKey = array_search(($target - $value), $number);
    if ($nextKey){
      echo "[$item, $nextKey]";
    }
  }
?>