<?php
    $conn = mysqli_connect("localhost", "root", "", "cliente");
    mysqli_set_charset($conn, "utf8");
    if(!$conn) {
        echo "Erro: ".mysqli_conect_error();
    }
?>