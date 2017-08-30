<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //tipos elementares ou básicos
            //integer
            $tipoVariavel = 11;
            //float
            $tipoVariavel = 1.1;
            //string
            $tipoVariavel = "cadeia de caracteres";
            //booleano
            $tipoVariavel = true;
            
            //tipos compostos
            //array
            $tipoVariavel = array(1,2,3);
            $tipoVariavel = [1,2];
            //object
            $tipoVariavel = new DateTime();
            
            //tipos especiais
            //resource
            $tipoVariavel = fopen("index.php", "r");
            //null
            $tipoVariavel = NULL;
            
            var_dump($tipoVariavel);
            echo "<br><br>";
            
            $integer = 12;
            echo "A variável $integer é do tipo " . gettype($integer);
            
            $float = 12.12;
            echo "<br>A variável $float é do tipo " . gettype($float);
            
            $string = "texto";
            echo "<br>A variável $string é do tipo " . gettype($string);
            
            $boolean = FALSE;
            echo "<br>A variável $boolean é do tipo " . gettype($boolean);
            
            $array = array();
            echo "<br>A variável array é do tipo " . gettype($array);
            
            $object = new DateTime();
            echo "<br>A variável object é do tipo " . gettype($object);
            
            $resource = fopen("index.php", "r");
            echo "<br>A variável $resource é do tipo " . gettype($resource);
            
            $null = null;
            echo "<br>A variável $null é do tipo " . gettype($null);

        ?>
    </body>
</html>
