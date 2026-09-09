<?php
include 'sort_functions.php';
$input = isset($_GET['arr']) ? $_GET['arr'] : '';
$arr = parseArray($input);
$sorted = shellSort($arr);
?>
<!DOCTYPE html>
<html>
<head><title>Сортировка Шелла</title></head>
<body>
    <h1>Сортировка Шелла (вариант 5)</h1>
    <form method="GET">
        <input type="text" name="arr" value="<?= htmlspecialchars($input) ?>" placeholder="5,2,8,1,9">
        <button type="submit">Сортировать</button>
    </form>
    <?php if ($input !== ''): ?>
        <p>Исходный: <?= htmlspecialchars($input) ?></p>
        <p>Результат: <?= implode(', ', $sorted) ?></p>
    <?php endif; ?>
</body>
</html>