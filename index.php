<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $word = $_GET['badWord'];
        $text = "Tre Anelli ai Re degli Elfi sotto il cielo, 
        <br> Sette ai Principi dei Nani nell'aule di pietra, 
        <br> Nove agli Uomini Mortali dal fato crudele, 
        <br> Uno al Nero Sire sul suo trono tetro 
        <br> Nella Terra di Mordor dove le Ombre si celano.
        <br> Un Anello per trovarli, Uno per vincerli, 
        <br> Uno per radunarli e al buio avvincerli 
        <br> Nela Terra di Mordor dove le Ombre si celano.";
        $censoredText = str_ireplace("$word", "***", "$text");
    ?>
    <h1>This is the bad word: <?php echo $word; ?></h1>
    <p><?php echo $text ?></p>

    <form action="" method="get">
        <label for="selectBadWord">Write the word you would like to censor:</label>
        <input type="text" name="badWord" id="selectBadWord">
        <button>Select!</button>
    </form>
    <h1>This is the censored text:</h1>
    <p><?php echo $censoredText ?></p>
</body>
</html>