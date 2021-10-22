<?php
require_once('db.php');

$db = new db();
$task = empty($_GET['task']) ? 'index' : $_GET['task'];
$page = empty($_GET['page']) ? 'index' : $_GET['page'];
require_once('home.php');