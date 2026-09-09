<?php include 'server_functions.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Информация о сервере</title></head>
<body>
    <h1>Информация о сервере</h1>
    <h2>whoami</h2>
    <pre><?= runCommand('whoami') ?></pre>
    <h2>id</h2>
    <pre><?= runCommand('id') ?></pre>
    <h2>ls -la</h2>
    <pre><?= runCommand('ls -la /var/www/html') ?></pre>
    <h2>ps aux</h2>
    <pre><?= runCommand('ps aux | head -10') ?></h2>
    <h2>uname -a</h2>
    <pre><?= runCommand('uname -a') ?></pre>
    <h2>pwd</h2>
    <pre><?= runCommand('pwd') ?></pre>
</body>
</html>