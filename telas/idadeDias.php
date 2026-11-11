<?php
    namespace Projeto\Exercicios\telas;
    //PROTOCOLOS: GET E POST
    //GET = +RAPIDO / -SEGURO
    //POST = +LENTO / +SEGURO
    require_once("../funcoesPhp/funcoes.php"); //acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; //acessando a classe

    $funcoes = new Funcoes(); //Criando um vinculo com a classe funcoes
    $resultado="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade em dias</title>
</head>
<body>
    <h1>Informe sua idade e receba a quantidade de dias:</h1>
    <form method="POST">
        <label>Informe sua idade:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>

        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
    
                $resultado = $funcoes->converterIdadeDias($num1);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "A idade em dias é: " .$resultado ." dias";
        }   
        else{
            echo "Preencha os campos";
        }
        ?>

    
</body>
</html>