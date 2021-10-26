<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        function br(){
            return "<hr/>";
        }
        date_default_timezone_set('America/Sao_Paulo');
        echo date('d/m/Y H:i');
        echo '<br/>';
        echo date_default_timezone_get();
        echo br();
        

        $dataInicial = '2021-10-20';
        $dataFinal = '2021-11-20';
        $diasIni1970 = strtotime($dataInicial);
        $diasFin1970 = strtotime($dataFinal);
        $dife = abs($diasFin1970 - $diasIni1970);
        echo  $dife/(24*60*60);

    
    ?>
</body>

</html>