<?php
    session_start();
    $_SESSION['code'] == "" ? header("Location: src/index/index.php") : header("Location: levar-para-tela-inicial.php"); 