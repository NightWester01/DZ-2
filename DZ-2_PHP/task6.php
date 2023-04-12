<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $signs = array(
        array("start" => "21-03", "end" => "20-04", "name" => "Овен"),
        array("start" => "21-04", "end" => "20-05", "name" => "Телец"),
        array("start" => "21-05", "end" => "21-06", "name" => "Близнецы"),
        array("start" => "22-06", "end" => "22-07", "name" => "Рак"),
        array("start" => "23-07", "end" => "22-08", "name" => "Лев"),
        array("start" => "23-08", "end" => "22-09", "name" => "Дева"),
        array("start" => "23-09", "end" => "22-10", "name" => "Весы"),
        array("start" => "23-10", "end" => "22-11", "name" => "Скорпион"),
        array("start" => "23-11", "end" => "21-12", "name" => "Стрелец"),
        array("start" => "22-12", "end" => "19-01", "name" => "Козерог"),
        array("start" => "20-01", "end" => "18-02", "name" => "Водолей"),
        array("start" => "19-02", "end" => "20-03", "name" => "Рыбы")
    );
    $month = date("m", strtotime($date));
    $day = date("d", strtotime($date));
    $result = "";
    foreach ($signs as $sign) {
        $start_date = date($sign["start"]."-Y");
        $start_ts = strtotime($start_date);
        $end_date = date($sign["end"]."-Y");
        $end_ts = strtotime($end_date);
        $user_date = date($month."-".$day."-Y");
        $user_ts = strtotime($user_date);
        if (($user_ts >= $start_ts) && ($user_ts <= $end_ts)) {
            $result = $sign["name"];
            break;
        }
    }
    echo "Ваш знак зодиака: ". $result;
}
?>
<form method="post">
    <label>Введите дату рождения в формате '31.12':</label><br>
    <input type="text" name="date"><br>
    <input type="submit" value="Отправить">
</form>