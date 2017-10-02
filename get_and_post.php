<?php

$username = $_GET["username"];

if(isset($_GET["username"]) && $_GET["username"] != ''){
    $username = $_GET["username"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Teste</title>
</head>
<body>

<?php if($username) : ?>
    <p>Meu usuário é <?=$username?></p>
<?php else : ?>
    <form method="get">
        <input type="text" name="username">
        <input type="submit">
    </form>
<?php endif; ?>

</body>
</html>