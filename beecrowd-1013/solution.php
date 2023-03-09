<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1013</title>
</head>

<body>
    <?php 
    $nums = readline();
    $nums = explode(" ",$nums);
    
    $calculo = ($nums[0]+$nums[1]+abs($nums[0]-$nums[1]))/2;
    
    if ($calculo > $nums[2]){
      echo "{$calculo} eh o maior\n";
    } else{
      echo "{$nums[2]} eh o maior\n";
    }
?>
</body>

</html>