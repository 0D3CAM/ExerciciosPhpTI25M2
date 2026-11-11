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
    <title>Hipotenusa</title>
</head>
<body>
    <h1>Informe os valores dos catetos:</h1>

    <form method="POST">
        <label>Informe o primeiro cateto:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe o segundo cateto:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">Somar
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
            
                $resultado = $funcoes->pitagoras($num1,$num2);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
        if(isset($_POST['primeiroNumero'])){
            echo "O valor da hipotenusa é: " .$resultado;
        }
        else{
            echo "Preencha os campos";
        }
    ?>
   
</body>
</html>