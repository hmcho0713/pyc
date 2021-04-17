<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <title>채팅방</title>
  <link rel='stylesheet' href='chat.css'>
</head>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<div class='nickname_container'>
  <input type='text' name='nickname' class='nick_input' placeholder='닉네임 입력' maxlength="10"/>
  <input type='checkbox' class='scroll'>
  <label>옛날 글 보기</label>
  <input type="submit" value='적용' class='submit_chat' id='nick'
  onclick='closePop()'>
  </div>
  <div style ='float: left;' class='nick_button'>닉네임 수정</div><br>
 <div onclick='openPop()'
 style ='float: left; cursor: pointer;'>설정</div>
 <div class='input_family'>
 <form action='1.php' method='POST'>
  <textarea name="content" placeholder='내용을 입력하세요' class='input_chat'
   rows='2' cols='50' maxlength="150"></textarea>
  <input type="submit" value='전송' class='submit_chat'>
  <input type='hidden' name = 'chat_nick' class='chat_nickq'>
  </form>
  </div>
  <div name='text_content' class='chat_container'>
    <?php
    echo file_get_contents('chat.txt')
    ?>
  </div>
  <script src='script.js'></script>
</body>
</html>
