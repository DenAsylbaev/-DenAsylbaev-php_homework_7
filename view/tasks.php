<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
    <?php include "menu.php" ?>
    <div>
        <h1><?=$pageHeader?></h1>
        <form action="?controller=tasks&action=add" method="post">
            <input type="text" name="task" placeholder="Опишите новую задачу">
            <input type="submit" value="Добавить">
        </form>
        <?php foreach ($tasks as $key => $task): ?>
            <div>
                <?= $task['description']?>
                <a href="?controller=tasks&action=done&key=<?=$key?>">[Done]</a>
            </div>
        <?php endforeach; ?>
        
    </div>


</body>