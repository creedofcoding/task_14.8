<?php
session_start();
include 'functions.php';

$login_enter = $_POST['login'];
$password_enter = $_POST['password'];
$datebirthday = $_POST['datebirthday'];

/* print_r($datebirthday);
print_r("<br>");

$_SESSION['checkDayBirth'] = getDateDifferent($datebirthday);
print_r($_SESSION['checkDayBirth']); */

if ($_POST['login'] !== '' && $_POST['password'] !== '' && $_POST['datebirthday'] !== '') {
    $_SESSION['checkDayBirth'] = getDateDifferent($datebirthday);
    print_r($_SESSION['checkDayBirth']);
    if (checkPassword($login_enter, $password_enter)) {
        $_SESSION['authorized'] = true;
        $_SESSION['currentUser'] = $login_enter;
        header('Location: index.php');
    } else {
        $_SESSION['message'] = 'Такого пользователя не существует. Повторите попытку ввода данных.';
        header('Location: login.php');
    }
} else {
    $_SESSION['message'] = 'Не введены логин, пароль или дата рождения. Повторите попытку ввода данных.';
    header('Location: login.php');
}
