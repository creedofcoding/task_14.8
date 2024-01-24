<?php

function getUsersList()
{
    include 'user_list.php';
    return $user_list;
};

function existsUser($login)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            return true;
        }
    }
    return false;
}

function checkPassword($login, $password)
{
    $all_users = getUsersList();
    foreach ($all_users as $user) {
        if ($user['login'] === $login) {
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
    }
    return false;
}

function getCurrentUser()
{
    if (isset($_SESSION['currentUser']) && !empty($_SESSION['currentUser'])) {
        return $_SESSION['currentUser'];
    } else return null;
}

function getDateDifferent($date_birthday)
{
    $date_today = new DateTime(date('d.m.Y')); // Текущая дата
    //print_r($date_today);
    //print_r("<br>");
    $date_birth = new DateTime($date_birthday);  // Дата рождения
    //print_r($date_birth);
    //print_r("<br>");
    $date_birth->setDate($date_today->format('Y'), $date_birth->format('m'), $date_birth->format('d')); // Меняем год на текущий
    //print_r($date_birth);
    //print_r("<br>");

    $different = $date_birth->diff($date_today);  // Вычисляем разницу между датами
    //print_r($different);
    if ($different->invert) // отрицательный период (т.е. сегодняшняя дата меньше даты др)
    {
        return 365 - $different->days;  // выводим кол-во дней 
    } else {
        if ($different->days === 0) {    // если период и интервал дней = 0, значит сегодня др
            return $different->days;
        } else { // все остальное значит что др уже прошел
            $date_birth->modify('+1year');   // добавляем год к дате рождения, для подсчета дней от сегодняшней даты до след др
            $different = $date_birth->diff($date_today); // снова вычисляем разницу между датами
            return $different->days;
        }
    }
}

//getDateDifferent("2001-06-05");