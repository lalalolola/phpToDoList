<?php
require_once('helpers.php');
require_once('functions.php');
require_once('data.php');

$page_content = include_template('main.php', [
    'tasks' => $tasks,
    'projects' => $projects
]);

$layout_content = include_template('layout.php', [
    'content' => $page_content,
    'title' => 'Дела в порядке'
]);

print($layout_content);