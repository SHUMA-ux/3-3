<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice2</title>
</head>
<body>
    <form action="result.php" method="post">
        <p>好きな名前を入れてください</p>
        <input type="text" name="my_name" />
        <p>1~6の中で好きな数字を入れてください</p>
        <select name="number">
                <?php for($x=1;6>=$x;$x++){?>
                <option value ="<?php echo $x; ?>">
                <?php echo $x; ?>
                </option>
                <?php }?>
                </select>
        <br>
        <input type="submit" value="申込" />
    </form>
</body>
</html>