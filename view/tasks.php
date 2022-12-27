<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
<?php include "menu.php" ?>
<h2>Tasks:</h2>
<?php if (!is_null($tasks)): ?>
    <?php foreach ($tasks as $key => $task): ?>
        <div>
            <?=$task->getDescription()?> <a href="/?controller=tasks&action=complete&key=<?=$key?>">[Done]</a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<form action="/?controller=tasks" method="post">
    <input type="text" name="description" placeholder="Enter task description">
    <input type="submit" value="Add task">
</form>
</body>
