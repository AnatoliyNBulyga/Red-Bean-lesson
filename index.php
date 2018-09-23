<?php 

require "db.php";

// Создание новых записей
/*$course = R::dispense('courses');
$course->title = "Курс по React";
$course->tuts = 10;
$course->homeworks = 8;
$course->level = "Для новичков";
$course->price = 100;
R::store($course);*/

// Вывод записей из БД
/*$courses = R::find('courses');
print_r( $courses );
foreach ($courses as $course) {
	// print_r($course);
	echo "ID: ". $course->id ."<br>";
	echo "Название: ". $course->title ."<br>";
	echo "Кол-во уроков: ". $course->tuts ."<br>";
	echo "Уровень: ". $course->level ."<br>";
	echo "<hr>";
}*/

// Обновление записи в БД
// Получение одного курса
// $course = R::load('courses', 4);
// print_r($course);
// echo "ID: ". $course->id ."<br>";
// echo "Название: ". $course->title ."<br>";
// echo "Кол-во уроков: ". $course->tuts ."<br>";
// echo "Уровень: ". $course->level ."<br>";
// echo "Цена: ". $course->price ."<br>";

/*$course->title = "React - ступень 2-я";
$course->tuts = 14;
$course->price = 80;
$course->students = 20;
$course->img = "<img src='react.png'>";

R::store($course);*/

//Удаление записи
$course = R::load('courses', 3);
R::trash( $course );

 ?>