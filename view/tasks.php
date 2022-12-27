<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>
<body>
<?php include "menu.php" ?>
<h2>Задачи:</h2>
<?php if (!is_null($tasks)): ?>
    <?php foreach ($tasks as $key => $task): ?>
        <div>
            <?=$task->getDescription()?> <a href="/?controller=tasks&action=complete&key=<?=$key?>">[Готово]</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<form action="/?controller=tasks" method="post">
    <input type="text" name="description" placeholder="Описание задания">
    <input type="submit" value="Добавить">
</form>
</body>
