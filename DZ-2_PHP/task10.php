<?php 
if (isset($_POST['submit'])) {
    $text = str_replace(' ', '', $_POST['text']);
    $counts = array();
    for ($i = 0; $i < strlen($text); $i++) {
        $char = substr($text, $i, 1);
        if (isset($counts[$char])) {
            $counts[$char]++;
        } else {
            $counts[$char] = 1;
        }
    }
    $totalChars = strlen($text);
    foreach ($counts as $char => $count) {
        $percent = $count / $totalChars * 100;
        echo "$char: $percent%";
    }
}
?>