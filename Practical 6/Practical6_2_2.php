<html>
<head>
    <title>Even Odd Demo</title>
</head>
<body>
    <?php
        for ($i=1; $i <= 10; $i++) { 
            $num = $i;
            print "<br>";
            if ($num % 2 == 1) {
                printf("Number %d is Odd...",$num);
            } else {
                printf("Number %d is Even...",$num);
            }
        }
    ?>
</body>
</html>