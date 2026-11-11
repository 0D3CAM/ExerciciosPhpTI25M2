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
    <title>Converter graus em rad</title>
</head>
<body>
    
    <h1>Informe o angulo em graus para converter em radianos:</h1>
    <form method="POST">
        <label>Informe o angulo:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        

        <button type="submit">Converter!
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                
                $resultado = $funcoes->converterGrausRad($num1);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

    <?php
            if(isset($_POST['primeiroNumero'])){
    echo "O valor em radianos é: " .$resultado ." rad";
    }
    else{
    echo "Preencha os campos";
    }
    ?>

</body>
</html>