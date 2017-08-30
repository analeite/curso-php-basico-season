<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //operadores aritméticos
            $valor1 = 15;
            $valor2 = 7;
            
            //soma
            $soma = $valor1 + $valor2;
            echo "O valor da soma dos números $valor1 e $valor2 é $soma <br>";
            
            //subtração
            $subtracao = $valor1 - $valor2;
            echo "O valor da subtração dos números $valor1 e $valor2 é $subtracao <br>";
                    
            //multiplicação
            $multiplicacao = $valor1 * $valor2;
            echo "O valor da multiplicação dos números $valor1 e $valor2 é $multiplicacao <br>";
            
            //divisão
            $divisao = $valor1 / $valor2;
            echo "O valor da divisão dos números $valor1 e $valor2 é $divisao <br>";
            
            //modulo
            $modulo = $valor1 % $valor2;
            echo "O valor do módulo dos números $valor1 e $valor2 é $modulo <br>";
            
            //exponenciação
            $exponenciacao = $valor1 ** $valor2;
            echo "O valor da potência dos números $valor1 e $valor2 é $exponenciacao <br>";
            
            /*
             * Precedencia
             */
            // * / % + -
            
            $media = (10 + 4) / 2;
            echo "A média é $media<br>";
            
            /*
             * Funções Matemáticas
             */
            
            //valor absoluto
            $valorAbsoluto = -6;
            echo "O valor absoluto de $valorAbsoluto é ". abs($valorAbsoluto);
            
            //potenciação
            $valor1 = 4;
            $valor2 = 3;
            $potenciacao = pow($valor1, $valor2);
            echo "<br><br>A potencia de $valor1 <sup>$valor2</sup> é $potenciacao";
            
            //raiz
            $raiz = sqrt(4);
            $valor = 4;
            echo "<br>O valor da raiz quadrada do número $valor é $raiz<br>";
            
            //round
            $valor = 4.6;
            echo "O arredondamento de $valor é " . round($valor) . "<br>";
            
            //intval
            $valor = 4.4;
            echo "O valor inteiro de $valor é " . intval($valor) . "<br>";
            
            //number_format
            $valor = 4;
            echo "R$ " . number_format($valor,2, ",", ".") . "<br>";
            
        ?>
    </body>
</html>
