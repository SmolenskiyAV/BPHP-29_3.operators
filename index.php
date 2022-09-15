<?php
// ### Task 2 - стандартизатор имени ###

//====================================================================================================
if(!function_exists('mb_ucfirst')) {    // если указанная функция 'mb_ucfirst' определена

    function mb_ucfirst($str) { // функция перевода первого символа строки в верхний регистр

        $fc = mb_strtoupper(mb_substr($str, 0, 1));

        return $fc . mb_substr($str, 1);

    }
}
//====================================================================================================

echo "Ввведи ИМЯ:\n";
$first_name = trim(fgets(STDIN)); // читаем Имя из STDIN
$first_name = mb_ucfirst($first_name);
echo "\n";

echo "Ввведи ФАМИЛИЮ:\n";
$last_name = trim(fgets(STDIN)); // читаем Фамилию из STDIN
$last_name = mb_ucfirst($last_name);
echo "\n";

echo "Ввведи ОТЧЕСТВО:\n";
$patronymic = trim(fgets(STDIN)); // читаем Отчество из STDIN
$patronymic = mb_ucfirst($patronymic);
echo "\n";

$fullname = $last_name . ' ' . $first_name . ' ' . $patronymic;
echo 'Полное имя: ' . $fullname . "\n";

$fio = mb_substr($last_name, 0, 1) . mb_substr($first_name, 0, 1) . mb_substr($patronymic, 0, 1);
echo 'ФИО: ' . $fio . "\n";

$surnameAndInitials = $last_name . ' ' . mb_substr($first_name, 0, 1) . '.' . mb_substr($patronymic, 0, 1) . '.';
echo 'Конкатенация фамилии с инициалами имени и отчества: ' . $surnameAndInitials . "\n";