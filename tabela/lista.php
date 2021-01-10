<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
    body{
        font-size:30px;
    }
   th, tr,td{
    
        border:1px solid black;
    }
</style>
    
    
</head>
<body>
    <?php
    $lista = file("lista.csv");
    for ($i=0;$i<sizeof($lista);$i++){
        $lista[$i] = explode (",",$lista[$i]);
    }
    
    //var_dump($lista);
    
    ?>
    <table>
    <tr>
    <th>NOME</th>
    <th>JOGO FAVORITO</th>
    </tr>
    <?php
    foreach($lista as $players): ?>
    <tr>
    <td><?php echo "$players[0]"?></td>
        <td><?php echo "$players[1]"?></td>
        </tr>
        
    <?php endforeach ?>
    </table>
</body>
</html>