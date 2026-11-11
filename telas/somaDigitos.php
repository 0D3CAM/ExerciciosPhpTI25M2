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
    <title>Soma Digitos</title>
</head>
<body>
    
    <h1>Informe o dígito e receba o valor dos dígitos:</h1>
    <form method="POST">
        <label>Informe o número:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero" min="0" max="999"/>
        
        <button type="submit">Somar Dígitos!
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
     
                $soma = $funcoes ->somarDigitos($num1);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
                echo "O resultado é: " .$soma;
        }
            else{
                echo "Preencha os campos";
        }
    ?>

</body>
</html>