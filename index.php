<?php
include __DIR__.'/calc.php';
?>
<form action="/result.php" method="POST">
 <input type="text" name="x">
 <select name="operation">
 <option value="sum">+</option>
 <option value="diff">-</option>
  <option value="del">/</option>
 <option value="proizv">*</option>
 </select>
 <input type="text" name="y">
  <input type="submit" value="Посчитать">


</form>
