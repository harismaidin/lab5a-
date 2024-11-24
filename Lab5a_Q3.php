<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4; 
        $height = 2;
        $area = calculateArea($width, $height);
    ?>

    <p>
        <?php 
            echo "The area of a rectangle with a width of $width and $height is $area"; 
        ?>
    </p>
</body>
</html>
