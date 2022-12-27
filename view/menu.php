<a href="/">Main</a>
<?php if (is_null($username)): ?>
<a href="/?controller=security">Log in</a>
<?php endif; ?>
<?php if (!is_null($username)): ?>
<a href="/?controller=tasks">Tasks</a>
<p>Welcome <?=$username?>! <a href="?controller=security&action=logout">[Exit]</a></p>
<?php endif; ?>
