<?php 
    if (session_status() === PHP_SESSION_ACTIVE) {
        header('location: ./painel');
    } else {
        header('location: ./login');
    }
?>