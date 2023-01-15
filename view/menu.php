<div>
    <div class="menu_list">
        <a href="/">Главная</a>
        <a href="/?controller=tasks">Задачи</a>
    </div>

    <?php if($username !== null) : ?>
        <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">[Выход]</a></p>
    <?php else : ?>
        <a href="/?controller=security" class="input_link">Вход в систему </a>
    <?php endif;?>
</div>

<style>
    .menu_list {
        display: flex;
        justify-content: space-around;
        font-size: 16px;
        padding: 10px;
        background-color: #0d6efd;
    }
    .menu_list a {
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
    }
    .input_link {
        display: block;
        color: #fff;
        position: absolute;
        top: 5%;
        right: 2%;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 600;
    }
</style>
