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
    <title>Horas trabalhadas</title>
</head>
<body>
    <h1>O valor de uma hora é de R$7,37, digite abaixo o numero de horas trabalhadas no mês:</h1>
    <form method="POST">
        <label>Informe o número de horas:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>

        <button type="submit">Calcular Salário
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
    
                $resultado = $funcoes->valorSalario($num1);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "O valor do salário é de: R$ " .$resultado;
        }   
        else{
            echo "Preencha os campos";
        }
        ?>

    
</body>
</html>