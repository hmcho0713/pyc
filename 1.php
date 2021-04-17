<!doctype html>
<head></head>
<body>
<?php



$txt = $_POST['content'];

if ($txt != null) {

$nickname = $_POST['chat_nick'];

$prev = file_get_contents('chat.txt');

file_put_contents("chat.txt", '<div>'.$nickname.' : '.$txt.'</div>');

file_put_contents("chat.txt", $prev, FILE_APPEND);


header('Location: https://pyc.hmcho0713.repl.co/chat.php');

} else if ($txt == null) {
  header('Location: https://pyc.hmcho0713.repl.co/chat.php');
}


?>
</body>
