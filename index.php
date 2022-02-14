<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Meu Campeonato</title>

</head>
<body class="fundo">
    <?php
        include('conexao.php');
        // Verificando quantas equipes estão cadastradas, e limitando apenas em 8 equipes
        $sql_check = "SELECT * FROM equipes";
            $resultado_check = $MySQLi->query($sql_check) OR trigger_error($MySQLi->error, E_USER_ERROR);
            $num_equipes = 0;
            while($componente_check = $resultado_check -> fetch_object()){
                $num_equipes++;
            }
            if($num_equipes != 8){
                echo "Quantidades de equipes incorreta para o campeonato!!!";
                exit();
            }

        // limpa tabelas de confrontos
        $sql = "truncate confronto";
        $resultado = $MySQLi->query($sql) OR trigger_error($MySQLi->error, E_USER_ERROR);

        // Gera os resultados aleatórios, lembrando que você pode voltar para o resultado dos jogos anteriores por inserção do usuário
        $srand1 = 0;
        $srand1 = $_POST['seed'];

        if(!$srand1)$srand1 = 0;

        srand($srand1);

        $time = range(1, 8); // Gera uma array com tamanho 8
        shuffle($time); // Embaralha o array time
        
        // Inicializa e zera a pontuação das equipes
        for($i=1; $i<9; $i++){
            $pontos[$i] = 0;
        }
    ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 alinhar">
                    <div class="quartas">
                        <?php
                            echo "<h4>Quartas de final:</h4>"; 
                            include('quartas.php');
                        ?>
                    </div>
                    <div class="semi-final">
                        <?php
                            echo "<h4>Semi-final:</h4>"; 
                            include('cria_semifinal.php');
                        ?>  
                    </div>
                    <div class="terceiro-lugar">
                        <?php
                            echo "<h4>Terceiro Lugar:</h4>"; 
                            include('terceiro_lugar.php');
                        ?>
                    </div>
                    <div class="final">
                        <?php
                            echo "<h4>Final:</h4>"; 
                            include('final.php');
                        ?>
                    </div>

                    <div class="aln">
                        <form action="index.php" method="POST">
                            <input class="form-control" type="number" name="seed" placeholder="Semente de Sorteio">
                            <button type="submit" class="btn btn-success">Sortear</button>
                        </form>
                        <a class="btn btn-warning" href="inseretimes.php">Cadastrar novos times</a>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>