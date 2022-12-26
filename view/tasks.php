<head>
    <meta charset="UTF-8">
    <title>Main</title>
</head>
<body>
<?php include "menu.php" ?>
<h2>Tasks:</h2>
<?php foreach ($tasks as $task): ?>
    <div>
        <?=$task?> [Done]
    </div>
<?php endforeach; ?>
</body>
