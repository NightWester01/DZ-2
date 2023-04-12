<?php
if (isset($_POST['year']) && is_numeric($_POST['year'])) {
    $year = $_POST['year'];
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo $year . ' год - високосный';
    } else {
        echo $year . ' год - не високосный';
    }
}
?>
<form method="post">
    <input type="text" name="year" placeholder="Введите год">
    <button type="submit">Проверить</button>
</form>