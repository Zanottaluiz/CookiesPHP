<?php
if(isset($_POST['nome'])){
    $venc = time() + (30*24*60*60); //30 dias = 30d x 24hrs x 60min x 60s
    setcookie ("nome", $_POST['nome'], $venc);
    header("Location: boasvindas.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form method="post" action="">
        <p>Qual é o seu nome?</p>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>