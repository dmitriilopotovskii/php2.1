<?php
require __DIR__ . '/controllers/AdminController.php';
$news  = new AdminController;
$news->actionAdd();
$news->imgAdd();
header("Location: /");
