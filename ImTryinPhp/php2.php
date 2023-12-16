<!-- ARRAY -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
$angka = [[1,2,3],[4,5,6],[7,8,9,10]];
?>

<?php foreach($angka as $a) : ?>
    <?php foreach($a as $b) : ?>
    <?= $b; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>