function openPop() {
  $('.nickname_container').css('visibility', 'visible')
  $('.nickname_container').css('top', '30%')
  $('.nickname_container').css('opacity', '100')

  document.querySelector('.nick_input').value=localStorage.getItem('nickname')

  if (localStorage.getItem('oldchat') == 'auto') {
      document.querySelector('.scroll').checked=true
   } else {
     document.querySelector('.scroll').checked=false
   }

}

function closePop() {
  $('.nickname_container').css('top', '20%')
  $('.nickname_container').css('opacity', '0')
  $('.nickname_container').css('visibility', 'hidden')

  document.querySelector(".nick_button").innerText=document.querySelector(".nick_input").value;
  localStorage.setItem('nickname', document.querySelector(".nick_input").value);

  document.querySelector('.chat_nickq').value=localStorage.getItem('nickname');

  var checkbox =
  document.querySelector('.scroll')

   if (checkbox.checked == true) {
     document.querySelector('.chat_container').style.overflow='auto'
     localStorage.setItem('oldchat', 'auto')
   } else {
     document.querySelector('.chat_container').style.overflow='hidden'
     localStorage.setItem('oldchat', 'hidden')
   }
}

document.querySelector('.chat_nickq').value=localStorage.getItem('nickname');

document.querySelector('.nick_button').innerText=localStorage.getItem('nickname');

if (localStorage.getItem('nickname')==null) {
   localStorage.setItem('nickname', '이름 없음');
    document.querySelector('.nick_input').value='이름 없음'
}

 document.querySelector('.chat_container').style.overflow=localStorage.getItem('oldchat')
