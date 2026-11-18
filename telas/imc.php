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
    <title>Multiplicar</title>
</head>
<body>
    
    <h1>Informe os valores para calcular seu IMC:</h1>
    <form method="POST">
        <label>Informe seu peso:</label>
        <input type="text" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe a sua altura:</label>
        <input type="text" id="segundoNumero" name="segundoNumero"/>
        <br><br>

        <button type="submit">calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                
                $resultado = $funcoes->calcularImc($num1,$num2);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
    echo $resultado;
    }
    else{
    echo "Preencha os campos";
    }
    ?>

</body>
</html>