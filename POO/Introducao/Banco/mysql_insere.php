<?php

//inserindo com mysqli

$conn = new mysqli('localhost', 'root', '123', 'livro');

mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES (1, 'Carlos Antonio')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES ('2', 'Mario Antonio')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES ('3', 'Jose Antonio')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES ('4', 'Luiz Carlos')");
mysqli_query($conn, "INSERT INTO famosos (codigo, nome) VALUES ('5', 'Carlos Magno')");

