<?php

$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

$tasks = [
  [
    'title' => 'Собеседование в IT-компании',
    'date-done' => '01.12.2019',
    'project' => $projects[2],
    'is-done' => false
  ],
  [
    'title' => 'Выполнить тестовое задание',
    'date-done' => '25.12.2019',
    'project' => $projects[2],
    'is-done' => false
  ],
  [
    'title' => 'Сделать задание первого раздела',
    'date-done' => '21.12.2019',
    'project' => $projects[1],
    'is-done' => true
  ],
  [
    'title' => 'Встреча с другом',
    'date-done' => '22.12.2019',
    'project' => $projects[0],
    'is-done' => false
  ],
  [
    'title' => 'Купить корм для кота',
    'date-done' => null,
    'project' => $projects[3],
    'is-done' => false
  ],
  [
    'title' => 'Заказать пиццу',
    'date-done' => null,
    'project' => $projects[3],
    'is-done' => false
  ],
];