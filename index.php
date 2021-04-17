<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PYC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Demo styles -->
  <style>

    @font-face {
    font-family: 'JSDongkang-Regular';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/JSDongkang-RegularA1.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
      font-family: 'JSDongkang-Regular';
    }

    .swiper-container {
      width: 100%;
      height: 100%;
      background: #000;
    }

    .swiper-slide {
      font-size: 18px;
      color: #fff;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding: 40px 60px;
    }

    .parallax-bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 130%;
      height: 100%;
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center;
    }

    .swiper-slide .title {
      font-size: 41px;
      font-weight: 300;
    }

    .swiper-slide .subtitle {
      font-size: 21px;
    }

    .swiper-slide .text {
      font-size: 14px;
      max-width: 400px;
      line-height: 1.3;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="parallax-bg" style="background-image:url(earth.jpg)" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">안녕하세요</div>
        <div class="subtitle" data-swiper-parallax="-200">PYC 소개</div>
        <div class="text" data-swiper-parallax="-100">
          <p>간단한 편의기능을 제공하며 빠르게 훑어볼수 있는 높은 퀄리티의 사이트를 찾고계신가요?</p>
          <p>잘오셨어요!</p>
          <p>PYC의 기능을 소개해드릴게요!</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">일상을 편리하게 완성하다</div>
        <div class="subtitle" data-swiper-parallax="-200">여러가지 편의기능</div>
        <div class="text" data-swiper-parallax="-100">
          <p>현재 시간에 따라 바뀌는 배경과, 하루에 대한 짧은 문장이 있어요.</p>
          <p>타이머, 알람, 스톱워치 등 다양한 기능이 있고, </p>
          <p>간단한 계산을 할수 있는 계산기도 있습니다!.</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">소통하며 발전하는 하루</div>
        <div class="subtitle" data-swiper-parallax="-200">실시간으로 올라오는 팁들</div>
        <div class="text" data-swiper-parallax="-100">
          <p>다른 유저들에게서 하루를 정리하며 느낀점과 팁을 받고,</p>
          <p>여러분도 다른 유저들에게 팁을 써보세요!</p>
        </div>
        <div style = 'cursor: pointer; color: yellow;' onclick="location.href='main.php'">PYC 시작하기</div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      speed: 700,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>

</html>
