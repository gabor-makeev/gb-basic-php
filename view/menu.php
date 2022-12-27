<a href="/">Main</a>
<?php if (is_null($username)): ?>
<a href="/?controller=security">Log in</a>
<?php endif; ?>
<a href="/?controller=tasks">Tasks</a>
<?php if (!is_null($username)): ?>
<p>Welcome <?=$username?>! <a href="?action=logout">[Exit]</a></p>
<?php endif; ?>
