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
    ?>
    <h1>This is the bad word: <?php echo $word; ?></h1>

    <form action="" method="get">
        <label for="selectBadWord">Write the word you would like to censor:</label>
        <input type="text" name="badWord" id="selectBadWord">
        <button>Select!</button>
    </form>
</body>
</html>