<?php

function runCommand($cmd) {
    return shell_exec($cmd) ?: 'Нет доступа';
}

?>