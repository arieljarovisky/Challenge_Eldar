<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=eldar', 'root', '');
} catch (PDOException $e) {
echo "todo mal";
}
