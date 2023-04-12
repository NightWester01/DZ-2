<?php
$today = time();
$new_year = strtotime('31 December');
$diff = $new_year - $today;
$days_left = round($diff / 86400); // 86400 - количество секунд в одном дне
echo 'До нового года осталось ' . $days_left . ' дней';
?>