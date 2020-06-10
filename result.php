<?php
$result = require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
    <b>Результат вычислений:</b>
		<?= $result ?>
 <br/> 
		<a href="index.php">вернуться </a>
</body>
</html>
