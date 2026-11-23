<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes
    {
        private float $num1;
        private float $num2;
        private float $resultado;
        private float $quadrado;
        private float $cubo;
        private string $digitos;
        private float $parteInteira;
        private float $parteDecimal;
        private float $num;
 

        
        //Construtor = Instancia as variaveis -> Cria as variaveis na memoria do servidor 

        public function __construct()
        {
            $this->num1 = 0;
            $this->num2 = 0;
            $this->resultado = 0;
            $this->digitos = 0;
        }//fim do construtor

        //Método de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        
        }

        public function subtrairDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 - $num2;
            return $this->resultado;
    
        }

        public function multiplicarDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 * $num2;
            return $this->resultado;

        }

        public function dividirDoisNumeros(float $num1,float $num2)
        {
        if($num2 <= 0 ){
            return "Impossível dividir por 0";
        }
        else{
            $this->resultado = $num1 / $num2;
             return $this->resultado;

        }
        }

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }
        
        public function calcularX1X2(int $a,int $b,int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Não possui raízes reais";
            }
            else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br> <br> X2 = $x2";
            }
        }

        public function dobrarNumero(int $num1)
        {
           $this->resultado = $num1 * 2;
           return $this->resultado;
        }

        public function mediaTres(int $num1,int $num2,int $num3)
        {
            $this-> resultado = ($num1 + $num2 + $num3)/3;
            return $this->resultado;
        }

        public function raizQuadrada(int $num1){
            $this-> resultado = sqrt($num1);
            return $this->resultado;
        }

        public function converterMetrosCentimetros(int $num1){
            $this-> resultado = $num1*100;
            return $this->resultado;
        }

        public function raioCirculo(int $num1){
            $this-> resultado = pi()*$num1*$num1;
            return $this->resultado;

        }

        public function converterCelsiusFaren(int $num1){
             $this-> resultado = (($num1*(9/5)) + 32);
             return $this->resultado;
        }

        public function desconto10(int $num1){
            $this->resultado = $num1*0.9;
            return $this->resultado;
        }

        public function converterIdadeMeses(int $num1){
            $this->resultado = $num1*(12);
            return $this->resultado;    
        }

        public function calcParImpar(int $num1){
            if($num1%2 == 0){
                return "O número é par";
            }
            else{
                return "O número é impar";
            }
        }

        public function areaTriangulo(int $num1, int $num2)//num 1 = base num 2 = altura 
        {
            $this->resultado = (($num1*$num2)/2);
            return $this->resultado;
        }

        public function volumeCaixa(int $num1, int $num2, int $num3){
            $this-> resultado = $num1*$num2*$num3;
            return $this->resultado;
        }

        public function calcularQuadrado(float $num1){
            $this->quadrado = $num1*$num1;
            return $this->quadrado;
        }

        public function calcularCubo(float $num1){
            $this->cubo = $num1*$num1*$num1;
            return $this->cubo;

        }

        public function add18Imposto(int $num1){
            $this->resultado = $num1*1.18;
            return $this->resultado;
        }
        
        public function velocidadeMedia(int $num1, int $num2){
            $this-> resultado = $num1/$num2;
            return $this-> resultado;
        }

        public function media2Numeros(int $num1, int $num2){
            $this-> resultado = ($num1+$num2)/2;
            return $this-> resultado;
        }

        public function valorSalario(int $num1){
            $this->resultado = $num1*7.37;
            return $this->resultado;
        }

        public function converterIdadeDias(int $num1){
            $this->resultado = $num1*365;
            return $this->resultado;    
        }

        public function idade100Anos(int $num1){
            $this->resultado = 100-$num1;
            return $this->resultado;    
        }

        public function somaTres(int $num1, int $num2, int $num3){
            $soma = $num1+$num2+$num3;
            return $soma;    
        }
        public function mediaTresNumeros(int $num1, int $num2, int $num3){
            $media = ($num1+$num2+$num3)/3;
            return $media;    
        }

        public function areaTrapezio(int $num1, int $num2, int $num3){
            $resultado = (($num1+$num2)*$num3)/2;
            return $resultado;    
        }

        public function converterDiasSegundos(int $num1){
            $this->resultado = $num1*24*3600;
            return $this->resultado;
        }

        public function somarDigitos(int $num1){
     
        $digitos = str_split((string)$num1);
        $soma = array_sum($digitos);

        return $soma;
        }

        public function inversoMultiplicativo(int $num1){
            $this->resultado = (1/$num1)*$num1;
            return $this->resultado;
        }

        public function pitagoras(int $num1,int $num2){
            $this->resultado = sqrt(($num1*$num1)+($num2*$num2));
            return $this->resultado;

        }

        public function raizCubica(int $num1){
            $this->resultado = $num1**(1/3);
            return $this->resultado;   
        }

        public function juroSimples(float $num1,float $num2, int $num3)//capital = num1 juros = num2 tempo = num3
        {
            $this->resultado = $num1*($num2/100)*$num3;
            return $this->resultado;   
        }
        
        public function juroComposto(float $num1,float $num2, int $num3){
            $this->resultado = $num1*(1+($num2/100))**$num3;
            return $this->resultado;   
        }

        public function converterGrausRad(float $num1){
            $this->resultado = $num1*(pi()/180);
            return $this->resultado;
        }

        public function valorPorcentagem(float $num1){
            $this->resultado = $num1/100;
            return $this->resultado;
        }

        public function mediaPonderada(float $num1,float $num2,float $num3,int $peso1, int $peso2, int $peso3)
        {
            $this->resultado = (($num1*$peso1)+($num2*$peso2)+($num1*$peso3))/($peso1+$peso2+$peso3);
            return $this->resultado;
        }

        public function parteInteiraDecimal(float $num1) {
            $this->parteInteira = (int)$num1;         
            $this->parteDecimal = $num1 - $this->parteInteira; 

            return "inteira " .$this->parteInteira ." decimal " .$this->parteDecimal;
        }

        public function rendimentoConta(float $num1){
            $rendimento = $num1 * (5/100);
            $this->resultado = $num1 + $rendimento;
            return $this->resultado;
        }

        public function consumoEnergia(float $num1, float $num2, int $num3){
            $this->resultado = ($num1*$num2*$num3)/1000;
            return $this->resultado;
        }

        public function converterFarenCelsius(int $num1){
            $this-> resultado = (($num1 - 32)* (5/9));
            return $this->resultado;
        }

        public function calcularDensidade(float $num1, float $num2){
            $this-> resultado = $num1/$num2;
            return $this->resultado;
        } 

        public function multiploProximo(float $num1){
            $this->resultado = $num1/10;
            return $this->resultado;
        }

        //for: quantidade especifica de repetições
        //while: nao sabe qtde especifica (senha, autenticação)

        public function tabuada(float $num1){
            $msg = "";
            for($i = 0; $i <=10; $i++){
                $msg .= "<br>$num1 * $i = " .($num1*$i);//pegar dado, add na variavel msg e voltar no contador                
            }// fim do for

            return $msg;
        }
        
        public function decBinario(float $decimal){     
            $msg = "";
            $resultado = "";
            while($decimal/ 2 != 0){
                $resultado .= " " .$decimal % 2;//coletando o resto da divisão
                $decimal = (int)$decimal/2; //Contribuir para o critério de parada
            }
            return strrev($resultado);
        }

        public function decHexa(float $decimal){
            $resto = 0;
            $resultado = "";
            while($decimal / 16 != 0){
                $resto = $decimal % 16;//coletando o resto da divisão

                switch($resto){
                    case 10:
                        $resultado .="A";
                    case 11:
                        $resultado .="B";    
                    case 12:
                        $resultado .="C";
                     case 13:
                        $resultado .="D";
                    case 14:
                        $resultado .="E";    
                    case 15:
                        $resultado .="F";
                    break;
                default:
                    $resultado .= $resto;
                    break;
                }

                $decimal = (int)$decimal/16; //Contribuir para o critério de parada
            }
            return strrev($resultado);
        }
        
        public function senha(string $senha){
            $senhaBD = 1234;
            do{
                if($senha = $senhaBD){
                    $msg = "Erro, Digite Novamente!";
                }
                else{
                    $msg = "Bem-Vindo!";
                }

            }while($senhaBD != $senha);
            return $msg;
        }

        public function verificarSinal(float $num1){
            if($num1 > 0){
                return "Positivo";
            }
            else if($num1 == 0){
                return "Zero";
            }
            else{
                return "Negativo";
            }         
        
        
        }

        public function ler2Numeros(float $num1, float $num2)
        {
            if($num1 > $num2){
                return "O número: " .$num1 ." é maior";
            }
            else if($num1 < $num2){
                return "O número: " .$num2 ." é maior";
            }
            else {
                return "Iguais";
            }
        }

        public function tresNumeros(float $num1, float $num2, float $num3)
        {
            $maior = 0;
            $menor = 0;

            //maior

            if($num1 > $num2 && $num1 > $num3){
                $maior = $num1;
            }else if($num2 > $num1 && $num2 > $num3){
                $maior = $num2;
            }else if($num3 > $num1 && $num3 > $num2){
                $maior = $num3;
            }else{
                $maior = $num1;
            }
            
            //menor
            if($num1 < $num2 && $num1 < $num3){
                $menor = $num1;
            }else if($num2 < $num1 && $num2 < $num3){
                $menor = $num2;
            }else if($num3 < $num1 && $num3 < $num2){
                $menor = $num3;
            }else{
                $menor = $num1;
            }
            
            if($maior == $menor)
            {
                return "Iguais";        
            }         
            else
            {
                return "O maior elemento é: ".$maior. "<br> o menor elemento é: ".$menor;
            }


        }

        public function bissexto(int $num1)
        {
            if($num1 % 4 == 0){
                return "bissexto";
        }
        else{
            return "não é bissexto";
        }
        }

        public function calcularImc(float $num1,float $num2){
            $this->resultado = $num1/($num2**2);

            if($this->resultado < 18.5){
                return "Magreza";
            }
            else if ($this->resultado >= 18.5 && $this->resultado <= 24.9){
                return $this->resultado ." Peso Normal";
            }
            else if ($this->resultado >= 25 && $this->resultado < 29.9){
                return  $this->resultado ." Sobrepeso";
            }
            else if ($this->resultado >= 30 && $this->resultado < 34.9 ){
                return  $this->resultado ." Obesidade grau I";
            }
            else if($this->resultado >= 35 && $this->resultado < 39.9){
                return  $this->resultado ." Obesidade grau II";
            }
            else{
                return  $this->resultado ." Obesidade grave";
            }
        }

        public function votarIdade($num1){
            if($num1 >= 16 && $num1 < 18 || $num1 > 60){
                return "Voto opcional";
            }
            else if($num1 >= 18 && $num1 <= 60){
                return "Voto Obrigatório";
            }
            else{
                return "Não vota.";
            }
        }

        public function mediaNotas(float $num1,float $num2,float $num3){
            $media = $this->mediaTres($num1,$num2,$num3);
            if($media <= 7){
                return "Aprovado";
            }
            else if($media > 6 && $media < 7){
                return "Recuperação";
            }
            else{
                return "Reprovado";
            }
        }
        public function intervaloNumeros(float $num1,float $num2,float $num3)
        {
            $intervalo = 0;

            if($num2 > $num3){
                $intervalo = $num2;
                $num2 = $num3;
                $num3 = $intervalo;
            }
            if($num1 >= $num2 && $num1 <= $num3){
                return $num1 ." Está no intervalo de " .$num2 ." e " .$num3;
            }

            else
            {
                return $num1 ." Não está no intervalo de " .$num2. " e " .$num3;
            }
        }
            
        public function classificarPessoa(int $num1){
            if($num1 < 12){
                return "Criança";
            }
            else if($num1 >= 12 && $num1 < 18){
                return "Jovem";
            }
            else if ($num1 >= 18 && $num1 < 60){
                return "Adulto";
            }
            else{
                return "Idoso";
            }
        
        }

        public function triangulo(float $num1, float $num2, float $num3){
            if($num1 == $num2 && $num2 == $num3){
                return "Triângulo Equilátero";
            }
            else if($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
                return "Triângulo Isósceles";
            }
            else{
                return "Triângulo escaleno";
            }
        }

        public function diaDaSemana(int $num1){
            if($num1 == 1){
                return "Domingo";
            }
            if($num1 == 2){
                return "Segunda";
            }
            if($num1 == 3){
                return "Terça";
            }
            if($num1 == 4){
                return "Quarta";
            }
            if($num1 == 5){
                return "Quinta";
            }
            if($num1 == 6){
                return "Sexta";
            }
            if($num1 == 7){
                return "Sábado";
            }
            else{
                return "Digite um número de 1 a 7";
            }
        }
        
        public function conceito(float $num1){
            if($num1 <= 2){
                return "Conceito: F";
            }
            else if($num1 > 2 && $num1 <= 4){
                return "Conceito: D";
                }
            else if($num1 > 4 && $num1 <= 6){
                return "Conceito: C";
            }
            else if($num1 > 6 && $num1 <= 8){
                return "Conceito: B";
            }
            else if($num1 > 8 && $num1 <= 10){
                return "Conceito: A";
            }
            else{
                return "Digite um número de 0 a 10";
            }
        }
        
        public function temperatura(float $num1){
            if($num1 < 18){
                return "Frio";
            }
            else if($num1 >= 18 && $num1 < 26){
                return "Agradável";
            }
            else{
                return "Quente";
            }
        }

        public function umAteSelecionado(int $num1){
            $msg = "";
            
            for($i = 1; $i <=$num1; $i++){
                    $msg .= $i ." ";
            }// fim do for
            return $msg;
        }

        public function contagemRegressiva(float $num1)
        {
            $msg = "";
            for($i = $num1; $i >=0; $i--){
                $msg .= $i ." ";                
            }// fim do for
            return $msg;
        }

        public function somarAteN(int $num1){
            $msg = 0;
            for($i = 0; $i <= $num1; $i++){
                $msg += $i;
            }
            return $msg;
        }

        public function multiplosAte100(float $num1){
            $msg = "";
            for($i = 0; $i <=100; $i++){
                $msg .= "<br>$num1 * $i = " .($num1*$i);//pegar dado, add na variavel msg e voltar no contador                
            }// fim do for
            return $msg;
        }

        public function funcaoMedia8Notas(float $nota1, float $nota2, float $nota3, float $nota4,float $nota5, float $nota6, float $nota7, float $nota8)
        {
            $notas = 
            [$nota1, $nota2, $nota3, $nota4,
            $nota5, $nota6, $nota7, $nota8];

            $soma = 0;

            for ($i = 0; $i <= 8; $i++) {
                $soma += $notas[$i];
            }

            $media = $soma / 8;

            if ($media >= 7) {
                return "Média: " .$media ." Aprovado";
            } else {
                return "Média: " .$media ." Reprovado";
            }
        }//fiz por vetor aprendi na documentação, nunca que eu ia fazer isso na mão

        public function mediaTemperaturas(float $num1, float $num2, float $num3, float $num4,float $num5, float $num6, float $num7){
            $msg = "";
            $temperatura = [$num1, $num2, $num3, $num4, $num5, $num6, $num7];

            for($i = 0; $i <= 6; $i++){
                if($temperatura[$i] >= 30){
                    $msg .= $temperatura[$i] ."° ";
                }
            }
            return "As temperaturas maiores de 30° são: " .$msg ;
        }

        public function numeroImpares($num1){
            $msg = 0;
            
            for($i = 0; $i <= $num1; $i++){     
                if($i % 2 != 0)
                {
                    $msg += $i;
                }
            }
            return $msg;
        }
        
    } //fim da classe

?> 
