<?php
require_once("connection.php");

if(isset($_GET["id"]) && $_GET["id"]) {
    $id = $_GET["id"];
    $connectionSQLite = new ConnectionSQLite;
    $connectionSQLite->executeNonSelect("DELETE FROM tasks WHERE id = $id");
    header("Location: http://localhost:8000");
}

?>