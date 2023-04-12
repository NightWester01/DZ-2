<?php
if (isset($_POST['date'])) {
    $date = $_POST['date'];
    $dayOfWeek = date('l', strtotime($date));
    echo 'День недели: ' . $dayOfWeek;
}
?>
<form method="post">
    <input type="text" name="date" placeholder="Введите дату в формате дд.мм.гггг">
    <button type="submit">Проверить</button>
</form>