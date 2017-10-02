<?php
require_once("connection.php");

$connectionSQLite = new ConnectionSQLite;

if(isset($_POST["nome_task"])) {
    $nome_task = $_POST["nome_task"];

    $connectionSQLite->executeNonSelect("INSERT INTO tasks (name) VALUES ('$nome_task')");

}

$results = $connectionSQLite->executeSelect("SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <h1>Tarefas</h1>
    </div>

    <div class="row">
        <ul>
            <?php foreach($results as $result): ?>
                <li><?php echo $result["name"]; ?> <a href="delete_task.php?id=<?php echo $result["id"]; ?>"><span style="color: red;">✗</span></a></li>
            <?php endforeach; ?>
            <li><a href="insert_task.php">Nova Tarefa</a></li>
        </ul>
    </div>
</div>

</body>
</html>