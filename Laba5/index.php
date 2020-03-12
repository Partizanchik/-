<?php

require_once "Student.php";

echo <<< HEREDOC
<h2>Создать студента</<h2></h2>
<form action="index.php" method="get">
    <input name="name" type="text" required="required"> Имя<br> 
    <input name="surname" type="text" required="required"> Фамилия<br> 
    <input name="faculty" type="text" required="required"> Факультет<br> 
    <input name="courseNumber" type="number" required="required"> Номер курса<br> 
    <input name="groupNumber" type="number" required="required"> Номер группы<br> 
    <input name="age" type="number" required="required"> Возраст<br>
    <input name="sex" type="text" required="required"> Пол<br><br> 
    <button type="submit">Создать объект студента</button>
</form>
HEREDOC;

//function printObj($obj){
//    print_r($obj);
//}

if ($_GET['name'] && $_GET['surname'] && $_GET['faculty'] && $_GET['courseNumber'] && $_GET['groupNumber'] && $_GET['age'] && $_GET['sex']){
    $student = new Student($_GET['age'], $_GET['sex']);
    $student->setName($_GET['name']);
    $student->setSurname($_GET['surname']);
    $student->setFaculty($_GET['faculty']);
    $student->setCourseNumber($_GET['courseNumber']);
    $student->setGroupNumber($_GET['groupNumber']);

    $student->printObj();

//    printObj($student);
}
