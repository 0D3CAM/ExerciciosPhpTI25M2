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
    <title>Média 3 numeros</title>
</head>
<body>
    <h1>Informe os valores para a média separados:</h1>
    <form method="POST">
        <label>Informe o numero 1:</label>
        <input type="number" id="primeiroNumero" name="primeiroNumero"/>

        <label>Informe o peso 1:</label>
        <input type="number" id="primeiroPeso" name="primeiroPeso"/>
        
        <label>Informe o 2:</label>
        <input type="number" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe o peso 2:</label>
        <input type="number" id="segundoPeso" name="segundoPeso"/>
        <br><br>

                <label>Informe o 3:</label>
        <input type="number" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>
        
        <label>Informe o peso 3:</label>
        <input type="number" id="terceiroPeso" name="terceiroPeso"/>
        <br><br>


        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $peso1 = $_POST['primeiroPeso'];
                $num2 = $_POST['segundoNumero'];
                $peso2 = $_POST['segundoPeso'];
                $num3 = $_POST['terceiroNumero'];
                $peso3 = $_POST['terceiroPeso'];
                
                $resultado = $funcoes->mediaPonderada($num1, $num2, $num3,$peso1,$peso2,$peso3);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "A média é: " .$resultado;
        }   
        else{
            echo "Preencha os campos";
        }
        ?>

    
</body>
</html>