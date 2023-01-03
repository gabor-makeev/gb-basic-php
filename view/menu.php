<a href="/">Главная</a>
<?php if (is_null($username)): ?>
<a href="/?controller=security">Войти</a>
<a href="/?controller=signup">Зарегистрироваться</a>
<?php endif; ?>
<?php if (!is_null($username)): ?>
<a href="/?controller=tasks">Задачи</a>
<p>Рады вас приветствовать, <?=$username?>! <a href="?controller=security&action=logout">[Выйти]</a></p>
<?php endif; ?>
