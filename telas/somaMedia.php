<?php
    namespace Projeto\Exercicios\telas;
    //PROTOCOLOS: GET E POST
    //GET = +RAPIDO / -SEGURO
    //POST = +LENTO / +SEGURO
    require_once("../funcoesPhp/funcoes.php"); //acessando o arquivo
    use Projeto\Exercicios\funcoesPhp\Funcoes; //acessando a classe

    $funcoes = new Funcoes(); //Criando um vinculo com a classe funcoes
    $resultado="";
    $soma = "";
    $media ="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma e Média</title>
</head>
<body>
    <h1>Informe os valores para a soma e a média:</h1>
    <form method="POST">
        <label>Informe o 1:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe o 2:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe o 3:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
            
                
                $soma = $funcoes->somaTres($num1,$num2,$num3);
                $media = $funcoes->mediaTresNumeros($num1,$num2,$num3);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "A soma é: " .$soma;
            echo "" ." A média é: " .$media;
        }   
        else{
            echo "Preencha os campos";
        }
?>


</body>
</html>