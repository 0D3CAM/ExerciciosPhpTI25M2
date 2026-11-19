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
    <title>temperaturas</title>
</head>
<body>
    <h1>Informe as temperaturas:</h1> 
    <form method="POST">
        <label>Informe a temperatura 1:</label>
        <input type="text" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe a temperatura 2:</label>
        <input type="text" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe a temperatura 3:</label>
        <input type="text" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>
        
        <label>Informe a temperatura 4:</label>
        <input type="text" id="quartoNumero" name="quartoNumero"/>
        
        <label>Informe a temperatura 5:</label>
        <input type="text" id="quintoNumero" name="quintoNumero"/>
        <br><br>
        
        <label>Informe a temperatura 6:</label>
        <input type="text" id="sextoNumero" name="sextoNumero"/>
        <br><br>

        <label>Informe a temperatura 7:</label>
        <input type="text" id="setimoNumero" name="setimoNumero"/>
        <br><br>
        


        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $num1 = $_POST['primeiroNumero'];
                $num2 = $_POST['segundoNumero'];
                $num3 = $_POST['terceiroNumero'];
                $num4 = $_POST['quartoNumero'];
                $num5 = $_POST['quintoNumero'];
                $num6 = $_POST['sextoNumero'];
                $num7 = $_POST['setimoNumero'];

                $resultado = $funcoes->mediaTemperaturas($num1,$num2,$num3,$num4,$num5,$num6,$num7);
            } //deve ter um jeito mais facil de fazer isso
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