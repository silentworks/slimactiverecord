<h1>Tasks</h1>
<ul>
	<?php foreach ($tasks as $task): ?>
	<li><a href="<?php echo Slim::getInstance()->urlFor('task_edit', array('id' => $task->id)); ?>"><?php echo $task->name; ?></a> <a href="<?php echo Slim::getInstance()->urlFor('task_delete', array('id' => $task->id)); ?>">Delete</a></li>
	<?php endforeach; ?>
</ul>

<form action="<?php echo Slim::getInstance()->urlFor('task_new'); ?>" method="post">
	<input type="submit" value="Add Task" />
</form>