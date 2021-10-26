<!DOCTYPE html>


<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        function br(){
            return "<hr>";
        }
        $num = 8;
        echo ceil($num).br(); //arredonda para cima
        echo floor($num).br(); //arredonda para baixo
        echo round($num).br(); //arrendoda com base na fracao (.0 .4 -> para baixo) (.5 .9 -> para cima)
        echo rand().br(); //gerar um falor aleatório (maior valor aleatório possível)
        echo getrandmax().br(); //descobre o valor maximo que pode ser aleatorio a depender do sistema operacional
        echo decbin($num).br();
        echo exp(8).br();
        echo pow(exp(1),8).br();
        echo is_finite(log(0)).br();
        echo sqrt(9); //raiz quadrada
    
    ?>
</body>

</html>