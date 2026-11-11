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
    <title>Quadrado e Cubo</title>
</head>
<body>
    
    <h1>Informe os valores que deseja multiplicar:</h1>
    <form method="POST">
        <label>Informe o primeiro número:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        

        <button type="submit">Multiplicar
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];          
                
                $quadrado = $funcoes->calcularQuadrado($num1);//utilizando o metodo da classe funcoes 
                $cubo = $funcoes->calcularCubo($num1);//utilizando o metodo da classe funcoes 

            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
    echo "O quadrado é: " .$quadrado ."";
    echo "" ." O cubo é: " .$cubo;
    }
    else{
    echo "Preencha os campos";
    }
    ?>

</body>
</html>