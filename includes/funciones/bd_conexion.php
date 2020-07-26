<?php
    $conn = new mysqli('localhost', 'root', 'root', 'gdlwebcamp');
    mysqli_set_charset($conn, 'utf8');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
}
?>