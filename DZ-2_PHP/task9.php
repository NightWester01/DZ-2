<form method="post">
    <textarea name="text"></textarea>
    <br>
    <button type="submit">Посчитать</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = $_POST['text'];
    $wordsCount = str_word_count($text);
    $charsCount = strlen($text);
    $charsCountWithoutSpaces = strlen(str_replace(' ', '', $text));
    echo "Количество слов: $wordsCount<br>";
    echo "Количество символов: $charsCount<br>";
    echo "Количество символов без пробелов: $charsCountWithoutSpaces";
}
?>