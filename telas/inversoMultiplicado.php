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
    <title>Inverso Multiplicativo</title>
</head>
<body>
    
    <h1>Informe o valor que deseja multiplicar:</h1>
    <form method="POST">
        <label>Informe o número:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        
        <button type="submit">Dobrar
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
     
                $resultado = $funcoes ->inversoMultiplicativo($num1);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
                echo "O resultado de (1/{$num1})*{$num1} é: " .$resultado;
        }
            else{
                echo "Preencha os campos";
        }
    ?>

</body>
</html>