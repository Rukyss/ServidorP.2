<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <?php
        echo "➥ Ejercicio 1.a";
        echo "<br>";
        //ej1.a Concatena tres cadenas y las muestra
        $hola="Hola";
        $espacio=" ";
        $mundo="Mundo";
        $resultadomundo=$hola.$espacio.$mundo;

        echo $resultadomundo;
        echo "<br><br>";

        echo "➥ Ejercicio 1.b";
        echo "<br>";
        //ej1.b Muestra una variable booleana
        $vBoleana=true;
        echo $vBoleana;
        echo "<br><br>";

        echo "➥ Ejercicio 1.c";
        echo "<br>";
        //ej1.c Muestra una variable flotante
        $vFloat=3.14;
        echo $vFloat;
        echo "<br><br>";

        echo "➥ Ejercicio 1.d";
        echo "<br>";
        //ej1.d Muestra un array asociativo
        $vArray = array("1", "2", "3");
        $resultadoArray = array("valor" => 1, "valor2" => 2, "valor3" => 3);
        print_r($resultadoArray) ;
        echo "<br><br>";

        echo "➥ Ejercicio 2";
        echo "<br>";
        //ej2 no muestra nada, debido a que solo muestra cuando el boleano es 1, si es 0 no se muestra.
        $vmodificada = $vBoleana=null;
        echo $vmodificada;
        echo "<br><br>";

        echo "➥ Ejercicio 3";
        echo "<br>";
        //Ej3 Elimina espacios en blanco de $resultadomundo y lo muestra
        $vsinespacios=str_replace(" ","",$resultadomundo);
        echo $vsinespacios;
        echo "<br><br>";

        echo "➥ Ejercicio 4";
        echo "<br>";
        //ej4 Muestra un texto con caracteres especiales
        $texto="El operador \"+\" sirve para sumar el valor de variables. Con la \"/\" podemos
        dividir valores entre variables. El símbolo del dólar \"$\" indica que estamos
        utilizando variables pero no lo usaremos en las constantes o globales.";
        echo $texto;
        echo "<br><br>";

        echo "➥ Ejercicio 5";
        echo "<br>";
        //ej5 Muestra la longitud (número de caracteres) del texto
        echo strlen($texto);
        echo "<br><br>";

        echo "➥ Ejercicio 6";
        echo "<br>";
        //ej6 Elimina las vocales del texto y lo muestra
        $vocales=array("a", "e", "i", "o", "u");
        $sinvocales=str_replace($vocales, "", "Hola Mundo");
        echo $sinvocales;
        echo "<br><br>";

        echo "➥ Ejercicio 7";
        echo "<br>";
        //ej7 Comprueba si una variable está vacía y muestra el resultado
        $variablesin;
        echo empty($variablesin);
        echo "<br><br>";

        echo "➥ Ejercicio 8";
        echo "<br>";
        //ej8 Convierte $resultadomundo en un entero y lo muestra
        $resultadomundo;
        $entero = intval($resultadomundo);
        echo $entero;
        echo "<br><br>";

        echo "➥ Ejercicio 9";
        echo "<br><br>";
        //ej9 Calcula y muestra la raíz cuadrada de 144
        echo "➥ Ejercicio 9.a";
        echo "<br>";
        echo "La raíz cuadrada de 144 = ";
			$raiz = sqrt(144);
			echo $raiz;
            echo "<br><br>";

            // Ejercicio 9.b: Calcula y muestra 2 elevado a la 8va potencia
            echo "➥ Ejercicio 9.b";
            echo "<br>";
			echo "La potencia 2^8 = ";
			$potencia = pow(2, 8);
			echo $potencia;
            echo "<br><br>";

             // Ejercicio 9.c: Calcula y muestra el resto de la división de 100 entre 6
            echo "➥ Ejercicio 9.c";
            echo "<br>";
			echo "El resto de la división de 100/6 = ";
			$resto = 100 % 6;
			echo $resto;
            echo "<br><br>";

            // Ejercicio 9.d: Calcula y muestra el máximo común divisor de 3 y 6
            echo "➥ Ejercicio 9.d";
            echo "<br>";
			echo "El máximo común divisor de 3 y 6.";
			$n1 = 3;
			$n2 = 6;

			while ($n2 != 0) { 
				$mcd = $n2;
				$n2 = $n1 % $mcd;
				$n1 = $mcd;
			}

			echo $mcd;
    ?>
</body>
</html>