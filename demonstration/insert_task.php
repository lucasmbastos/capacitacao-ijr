<!DOCTYPE html>
<html>
<head>
    <title>Tarefas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <h1>Nova Tarefa</h1>
    </div>

    <div class="row">
        <form method="post" action="/">
            <div class="form-group">
                <label for="nome_task">Nome</label>
                <input type="text" class="form-control" name="nome_task" placeholder="Caminhar na praia..." required="True">
            </div>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </form>
    </div>
</div>

</body>
</html>