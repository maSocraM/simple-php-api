<?php

require_once "Db.php";
require_once "Transactions.php";

header("Access-Control-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$db = new Db();

$transactions = new Transactions($db->connect_db());
echo $transactions->get_transactions();

