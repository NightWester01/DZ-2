<?php
if (isset($_POST['birthday'])) {
    $birthday = strtotime($_POST['birthday']);
    $today = time();
    $age = date_diff(date_create(date('Y-m-d', $birthday)), date_create(date('Y-m-d', $today)))->y;
    echo 'Вам ' . $age . ' лет';
}
?>
<form method="post">
    <input type="text" name="birthday" placeholder="Введите дату рождения в формате дд.мм.гггг">
    <button type="submit">Проверить</button>
</form>