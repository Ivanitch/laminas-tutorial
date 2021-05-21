<?php
$db = new PDO('sqlite:' . __DIR__ . '/laminas.db');
$fh = fopen(__DIR__ . '/post.sql', 'r');
while ($line = fread($fh, 4096)) {
    $line = trim($line);
    $db->exec($line);
}
fclose($fh);
