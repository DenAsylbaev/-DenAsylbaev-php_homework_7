<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
    <?php include "menu.php" ?>
    <div>
        <h1><?=$pageHeader?></h1>
        <?php if(!$username) : ?>
            <form method="post">
                <input type="text" name="username" placeholder="input your name">
                <input type="submit" value="Send">
            </form>
        <?php endif ?>
    </div>


</body>