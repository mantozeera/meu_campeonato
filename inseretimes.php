<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Campeonato - Cadastro</title>
</head>
<body>
    <!-- Aqui é realizado o cadastro dos times -->
    <form action="lertimes.php" method="POST">
        <?php for($i=1; $i<9; $i++){ ?> <!-- Determina 8 campos de texto no formulário, um para equipe -->
            <input name="equipe[<?=$i?>]" type="text" placeholder="Equipe: <?=$i?>"><br />
        <?php } ?>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>