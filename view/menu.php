<a href="/">Main</a>
<a href="/?controller=security">Authorization</a>
<a href="/?controller=tasks">Tasks</a>
<?php if ($username !== null): ?>
<p>Welcome <?=$username?>! <a href="?action=logout">[Exit]</a></p>
<?php endif; ?>
