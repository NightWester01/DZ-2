<?php
$current_date = date('Y-m-d');
$holidays = array(
    '2022-01-01' => 'Новый год',
    '2022-01-07' => 'Рождество Христово',
    '2022-02-14' => 'День святого Валентина',
    '2022-03-08' => 'Международный женский день',
    '2022-05-01' => 'Праздник Весны и Труда',
    '2022-05-09' => 'День Победы',
    '2022-06-01' => 'День защиты детей',
    '2022-11-04' => 'День народного единства',
    '2022-12-25' => 'Рождество',
    '2023-01-01' => 'Новый год'
);
if (isset($holidays[$current_date])) {
    $holiday_name = $holidays[$current_date];
    echo "Поздравляем вас с праздником $holiday_name!";
}
?>