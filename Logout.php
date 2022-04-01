<?php 


session_start(); // habilita sessao
session_destroy(); // limpa sessao, apaga tudo

header("Location: login.php"); 