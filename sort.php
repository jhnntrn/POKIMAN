<?php
// the very top of the page: start a session to remember the previous options
session_start();
if (!isset($_SESSION["order"]))
  $_SESSION["order"] = array("col" => false, "dir" => false);
// set defaults
$dir = 0;
$col = "column1";
$orderBy = array("id", "P_Name", "TypeName", "HP", "Attack", "Defense", "Sp_Attack", "Sp_Defense", "Speed", "stat_total");
$orderDir = array("DESC", "ASC");
// check $_GET data
if (isset($_POST["orderBy"]) && in_array($_POST["orderBy"], $orderBy)) {
  $col = $_POST["orderBy"];
}
// check if same col is clicked as last time
// if it is the same => change the order, if not => use default
if ($_SESSION["order"]["col"] == $col) {
  // 1 becomes 0, 0 becomes 1
  $dir = 1 - $_SESSION["order"]["dir"];
}
// remember current options
$_SESSION["order"]["col"] = $col;
$_SESSION["order"]["dir"] = $dir;
// set the order
$sort = $orderDir[$dir];
// set the correct query
$query = "SELECT * FROM Pokedex ORDER BY $col $sort";
?>