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
    <title>Densidade</title>
</head>
<body>
    
    <h1>Informe os valores para calcular a densidade:</h1>
    <form method="POST">
        <label>Informe a massa (em g):</label>
        <input type="text" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe o volume em (cm³):</label>
        <input type="text" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Calcular!
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];//massa
                $num2 = $_POST['segundoNumero'];// volume
            
                $resultado = $funcoes->calcularDensidade($num1,$num2);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "A densidade é: " .$resultado ."g/cm³";
        }
        else{
            echo "Preencha os campos";
        }
    ?>

</body>
</html>