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
    <title>Area Trapézio</title>
</head>
<body>  
    <h1>Informe a base e a altura do triangulo (EM CENTÍMETROS):</h1>
    <form method="POST">
        <label>Informe a base maior:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe a base menor:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <label>Informe a altura:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular!
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];

                $resultado = $funcoes->areaTrapezio($num1,$num2,$num3);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
    echo "A área do trapézio é: " .$resultado ."cm²";
    }
    else{
    echo "Preencha os campos";
    }
    ?>

    
</body>
</html>