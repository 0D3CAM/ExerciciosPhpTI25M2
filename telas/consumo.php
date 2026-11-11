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
    <title>Calcular Consumo</title>
</head>
<body>
    <h1>Informe os valores para o calculo de consumo:</h1>
    <form method="POST">
        <label>Informe a potencia:</label>
        <input type="text" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe o número de horas:</label>
        <input type="text" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe a qtde de dias:</label>
        <input type="text" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>

        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
            
                
                $resultado = $funcoes->consumoEnergia($num1, $num2, $num3);//utilizando o metodo da classe funcoes 
            }
            ?>
        </button>
    </form>

<?php
        if(isset($_POST['primeiroNumero'])){
            echo "O consumo foi de: " .$resultado ." kWh";
        }   
        else{
            echo "Preencha os campos";
        }
        ?>

    
</body>
</html>