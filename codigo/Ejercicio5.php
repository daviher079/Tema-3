<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <?
            $anio=$_GET['anio'];
            echo $anio,"<br>";

            if($anio%4==0)
            {
                if($anio%100==0)
                {
                    if($anio%400==0)
                    {
                        echo "Es bisiesto";
                    }
                    else
                        echo "No es bisiesto";
                }
                else
                    echo "Es bisiesto";
            }else
            {
                echo "No es bisiesto";
            }

        ?>
    </main>
</body>
</html>