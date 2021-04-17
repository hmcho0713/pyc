let now = new Date()
  let year = now.getFullYear(); // 년도
  let month = now.getMonth() + 1;  // 월
  let date = now.getDate();  // 날짜
  let hours = now.getHours(); // 시
  let minutes = now.getMinutes();  // 분
  let seconds = now.getSeconds();  // 초

//시간 설정
function time() {
  let now = new Date()
  let year = now.getFullYear(); // 년도
  let month = now.getMonth() + 1;  // 월
  let date = now.getDate();  // 날짜
  let hours = now.getHours(); // 시
  let minutes = now.getMinutes();  // 분
  let seconds = now.getSeconds();  // 초
  document.querySelector('.year').innerText = year + '/'
  document.querySelector('.month').innerText = month + '/'
  document.querySelector('.date').innerText = date + ''
  document.querySelector('.hours').innerText = hours + ':'
  document.querySelector('.minutes').innerText = minutes + ':'
  document.querySelector('.seconds').innerText = seconds + ''


}

setInterval(time, 1000)

var morningVar = 0

function morningBack(){
  if (morningVar==2) {
    morningVar=0
  } else {
    morningVar = morningVar+1
  }

if (morningVar==0) {
document.body.style.backgroundImage="url('background/morning.jpg')"
}
else if (morningVar==1) {
document.body.style.backgroundImage="url('background/morning2.jpg')"
}
else if (morningVar==2) {
document.body.style.backgroundImage="url('background/morning3.jpg')"
}

}

//document.body.style.backgroundImage="url('background/morning.jpg')"

document.querySelector('.time_sentence').innerText='hello'

function backImg() {
  if (hours>7){
    if (hours<11){
      morningBack()
    }
  }
}

setInterval(backImg, 60000)
