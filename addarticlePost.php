<?php
require __DIR__ . '/controllers/AdminController.php';
$news  = new AdminController;
$news->NewsAdd();
$news->imgAdd();
header("Location: /");
