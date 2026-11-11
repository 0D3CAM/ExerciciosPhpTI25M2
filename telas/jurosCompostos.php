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
    <h1>Informe os valores para calcular o juros compostos:</h1>
    <form method="POST">
        <label>Informe o capital inicial (R$):</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe a taxa de juros:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe o tempo de aplicação ou empréstimo:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
            
                
                $resultado = $funcoes->juroComposto($num1,$num2,$num3);
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "O valor de juros será de: R$" .$resultado;
        }   
        else{
            echo "Preencha os campos";
        }
?>


</body>
</html>