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
    <title>Média</title>
</head>
<body>
    <h1>Informe os valores para calcular a média:</h1> 
    <form method="POST">
        <label>Informe a nota 1:</label>
        <input type="text" id="primeiroNumero" name="primeiroNumero"/>
        
        <label>Informe a nota 2:</label>
        <input type="text" id="segundoNumero" name="segundoNumero"/>
        <br><br>
        
        <label>Informe a nota 3:</label>
        <input type="text" id="terceiroNumero" name="terceiroNumero"/>
        <br><br>
        
        <label>Informe a nota 4:</label>
        <input type="text" id="quartoNumero" name="quartoNumero"/>
        
        <label>Informe a nota 5:</label>
        <input type="text" id="quintoNumero" name="quintoNumero"/>
        <br><br>
        
        <label>Informe a nota 6:</label>
        <input type="text" id="sextoNumero" name="sextoNumero"/>
        <br><br>

        <label>Informe a nota 7:</label>
        <input type="text" id="setimoNumero" name="setimoNumero"/>
        <br><br>
        
        <label>Informe a nota 8:</label>
        <input type="text" id="oitavoNumero" name="oitavoNumero"/>
        <br><br>


        <button type="submit">Calcular
            <?php
            if(isset($_POST['primeiroNumero'])){
                $nota1 = $_POST['primeironotaero'];
                $nota2 = $_POST['segundonotaero'];
                $nota3 = $_POST['terceironotaero'];
                $nota4 = $_POST['quartonotaero'];
                $nota5 = $_POST['quintonotaero'];
                $nota6 = $_POST['sextonotaero'];
                $nota7 = $_POST['setimonotaero'];
                $nota8 = $_POST['oitavonotaero'];

                $resultado = $funcoes->funcaoMedia8Notas($nota1,$nota2,$nota3,$nota4,$nota5,$nota6,$nota7,$nota8);
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