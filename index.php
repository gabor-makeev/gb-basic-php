<?php

require_once "User.php";
require_once "Task.php";
require_once "TaskService.php";

$user1 = new User("John", "john@test.test");
$user2 = new User("Sam", "sam@test.test");
$user3 = new User("Lisa", "lisa@test.test");

$task = new Task($user1, "John's task");

TaskService::addComment($user2, $task, "Sam's comment to John's task");
TaskService::addComment($user3, $task, "Lisa's comment to John's task");

$taskComments = $task->getComments();

foreach ($taskComments as $comment) {
    $author = $comment->getAuthor()->getUsername();
    $text = $comment->getText();
    echo "[$author]: $text" . PHP_EOL;
}
