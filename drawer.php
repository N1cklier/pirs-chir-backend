<?php
include 'drawer_functions.php';
$num = isset($_GET['num']) ? (int)$_GET['num'] : 0;
?>
<!DOCTYPE html>
<html>
<head><title>Drawer</title></head>
<body>
    <h1>Drawer</h1>
    <form method="GET">
        <input type="number" name="num" value="<?= $num ?>">
        <button type="submit">Рисовать</button>
    </form>
    <div><?= drawSVG($num) ?></div>
</body>
</html>