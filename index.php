<!DOCTYPE html>
<html>
    <header>
    </header>
    <body>
       <!-- Comentário -->
       <?php 
            /* Comentário */
            echo"Nome: Murilo Henrique Silva Santos";
            echo"<br>";
            echo "Meu primeiro script em PHP!";
            echo"<br>";
            echo"<br>";
            var_dump(3.14);
            echo"<br>";
            var_dump("Murilo");
        ?>
        <!--divisão-->
        <br>
        <br>
        <!--divisão-->
        <?php
            define("INFERIOR",1);
            define("SUPERIOR",100);
            $numero = rand(INFERIOR, SUPERIOR); /* --RAND = -- */
            echo "Meu numero da sorte é: <br>";
            echo $numero."<br>"
        ?>
        <!--divisão-->
        <br>
        <!--divisão-->
        <?php
            $valor = 24;  /* --$(SIFRÃO) = VARIAVEL)-- */
            if($valor == 18){ /* --IF = SE-- */
                echo "O valor é 18"; /* --ECHO = IMPRIMIR NA TELA-- */
            } elseif ($valor >= 10) {
                echo "O valor é maior ou igual a 10";
            } else {
                echo "O valor é menor que 10";
            }
        ?>
        <!--DIVISÃO-->
        <br>
        <?php
            /* --VALOR MINIMO--*/
            echo"<br>";
            echo"O valor minimo é : ";
            echo(min(0,130,20,-3,-200)."<br>");
            echo"O valor máximo é: ";
            echo(max(0,130,20,-30,-200));
        ?>
    </body>
</html>