<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BYN BLACKYAK</title>
  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- Slick 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

  <link rel="stylesheet" href="bynCorp.css">
  <script src="bynCorp.js"></script>
</head>

<body>
<!-- 모작페이지 알람 -->
<div class="alerted active">
  <div class="alert-box inline-block">이 페이지는 포트폴리오를 위한 모작페이지 입니다.
    <div class="close-btn text-align-center">
      <div class="close-text inline-block">확인</div>
    </div>
  </div>
</div>
<!-- 모작페이지 알람 끝 -->
  <!--
//Slick 불러오기//
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
-->


  <!-- top-menu-bar HTML -->
  <div class="top-menu-bar con">
    <div class="logo absolute-left"><a href="#"><img src="http://www.byncorp.com/byn_images/BYN_logo.svg" alt=""></a>
    </div>
    <nav class="top-menu-box con-1 text-align-center">
      <ul class="row">
        <li class="cell"><a href="#" class="block">홈</a></li>
        <li class="cell"><a href="#" class="block">브랜드</a>
          <ul>
            <li><a href="#" class="block">블랙야크</a></li>
            <li><a href="#" class="block">블랙야크키즈</a></li>
            <li><a href="#" class="block">마모트</a></li>
            <li><a href="#" class="block">나우</a></li>
            <li><a href="#" class="block">힐크릭</a></li>
            <li><a href="#" class="block">마운티아</a></li>
          </ul>
        </li>
        <li class="cell"><a href="#" class="block">BYN소개</a>
          <ul>
            <li><a href="#" class="block">BYN소개</a></li>
            <li><a href="#" class="block">CEO인사말</a></li>
            <li><a href="#" class="block">회사연혁</a></li>
          </ul>
        </li>
        <li class="cell"><a href="#" class="block">새소식</a>
          <ul>
            <li><a href="#" class="block">보도자료</a></li>
            <li><a href="#" class="block">브랜드캠페인</a></li>
            <li><a href="#" class="block">커뮤니케이션 채널</a></li>
          </ul>
        </li>
        <li class="cell"><a href="#" class="block">사회공헌</a>
          <ul>
            <li><a href="#" class="block">사회공헌활동</a></li>
            <li><a href="#" class="block">나눔재단</a></li>
            <li><a href="#" class="block">장학재단</a></li>
            <li><a href="#" class="block">해피스텝</a></li>
            <li><a href="#" class="block">런닝인더히말라야</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="lang absolute-right"><img
        src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2Fbzh0Ee%2FbtqEsCTCtb0%2FuwdAerP5k6bd2CMA5Tjvu1%2Fimg.png"
        alt="">
      <nav class="absolute-right">
        <ul>
          <li><a href="#" class="block relative">KO</a>
            <ul>
              <li><a href="#" class="block">EN</a></li>
              <li><a href="#" class="block">CN</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- 모바일용 메뉴 HTML -->
   <div class="mobile-menu absolute-right">
     <div class="mobile-btn relative">
       <div></div>
       <div></div>
       <div></div>
     </div>
  </div>
  <nav class="mobile-menu-box">
    <ul>
      <li><a href="#" class="block">홈</a></li>
      <li><a href="#" class="block">브랜드</a>
        <ul>
          <li><a href="#" class="block">블랙야크</a></li>
          <li><a href="#" class="block">블랙야크키즈</a></li>
          <li><a href="#" class="block">마모트</a></li>
          <li><a href="#" class="block">나우</a></li>
          <li><a href="#" class="block">힐크릭</a></li>
          <li><a href="#" class="block">마운티아</a></li>
        </ul>
      </li>
      <li><a href="#" class="block">BYN소개</a>
        <ul>
          <li><a href="#" class="block">BYN소개</a></li>
          <li><a href="#" class="block">CEO인사말</a></li>
          <li><a href="#" class="block">회사연혁</a></li>
        </ul>
      </li>
      <li><a href="#" class="block">새소식</a>
        <ul>
          <li><a href="#" class="block">보도자료</a></li>
          <li><a href="#" class="block">브랜드캠페인</a></li>
          <li><a href="#" class="block">커뮤니케이션 채널</a></li>
        </ul>
      </li>
      <li><a href="#" class="block">사회공헌</a>
        <ul>
          <li><a href="#" class="block">사회공헌활동</a></li>
          <li><a href="#" class="block">나눔재단</a></li>
          <li><a href="#" class="block">장학재단</a></li>
          <li><a href="#" class="block">해피스텝</a></li>
          <li><a href="#" class="block">런닝인더히말라야</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  </div>
  <!-- video HTML -->
  <div class="video-box">
    <div style="padding:56.25% 0 0 0;position:relative;">
    <iframe
        src="https://player.vimeo.com/video/387899626?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1"
        style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen"
        allowfullscreen></iframe>
    <!--
    <iframe src="https://player.vimeo.com/video/387899626?autoplay=1&loop=1&title=0&background=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
    </iframe>
      -->
      </div>
    <script src="https://player.vimeo.com/api/player.js"></script>
  </div>
  <!-- 카운터 메뉴 HTML -->
  <div class="counter-menu con">
    <h2>BYN PROGRESS 2020</h2>
    <div class="text1 color777">2020년 비와이엔블랙야크 고객과 함께하는 혁신과 사회공헌 활동 현황</div>
    <div class="counter-box row con-2">
      <div class="counter-box-1 cell">
        <div class="counter1">명</div>
        <div class="tr"></div>
        <div class="font-size14 color777">BAC 맴버</div>
      </div>
      <div class="counter-box-2 cell">
        <div class="counter2">백만</div>
        <div class="tr"></div>
        <div class="font-size14 color777">해피스텝</div>
      </div>
      <div class="counter-box-3 cell">
        <div class="counter3">회</div>
        <div class="tr"></div>
        <div class="font-size14 color777">클린 마운틴</div>
      </div>
      <div class="counter-box-4 cell">
        <div class="counter4">제품</div>
        <div class="tr"></div>
        <div class="font-size14 color777">ISPO 어워드 수상</div>
      </div>
    </div>
  </div>
  <!-- slider-menu HTML -->
  <div class="slide-menu con relative">
    <div class="slider con-5">

      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbNnBHT%2FbtqEyfkjItW%2FHAnf2y5lJpQ9abXeQ2usN0%2Fimg.jpg"
            alt=""></a></div>
      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FeoIBBM%2FbtqExCNPX2u%2FNYghkM4kjFmwJM9zaaSuR0%2Fimg.jpg"
            alt=""></a></div>
      <div class="active"><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbMlnUh%2FbtqExZIPASv%2FakMJbL77dx8l7SioQSlkn1%2Fimg.jpg"
            alt=""></a></div>

      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbNnBHT%2FbtqEyfkjItW%2FHAnf2y5lJpQ9abXeQ2usN0%2Fimg.jpg"
            alt=""></a></div>
      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FeoIBBM%2FbtqExCNPX2u%2FNYghkM4kjFmwJM9zaaSuR0%2Fimg.jpg"
            alt=""></a></div>
      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbMlnUh%2FbtqExZIPASv%2FakMJbL77dx8l7SioQSlkn1%2Fimg.jpg"
            alt=""></a></div>

      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbNnBHT%2FbtqEyfkjItW%2FHAnf2y5lJpQ9abXeQ2usN0%2Fimg.jpg"
            alt=""></a></div>
      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FeoIBBM%2FbtqExCNPX2u%2FNYghkM4kjFmwJM9zaaSuR0%2Fimg.jpg"
            alt=""></a></div>
      <div><a href="#"><img
            src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbMlnUh%2FbtqExZIPASv%2FakMJbL77dx8l7SioQSlkn1%2Fimg.jpg"
            alt=""></a></div>

    </div>
    <div class="button">
      <div class="next"><img
          src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FTWq2J%2FbtqEBdA2ene%2FhGRW5eH7EFHllWqfIGDFr1%2Fimg.png"
          alt=""></div>
      <div class="prev"><img
          src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FcK32wf%2FbtqEBnQ2bSV%2FRUnYwxbL6CANymmbJNtVk0%2Fimg.png"
          alt=""></div>
    </div>

  </div>
  <!-- 포트폴리오 메뉴 -->
  <div class="portfolio-menu con text-align-center">
    <div class="con-2">
      <h2>BRAND PORTFOLIO</h2>
      <div class="menu-box-2">
        <div class="top-list inline-block">
          <div class="list1 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_01.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">블랙야크</div>
              <div class="brand-en">OUTDOOR</div>
              <div class="brand-ex">히말라야로부터 영감을 받은 아웃도어 브랜드로, 고기능<br>성 프리미엄 제품을 주로 생산합니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FJKSuy%2FbtqEbuQ5XIC%2FHixJq4O3BAwbJrmQGaqKK0%2Fimg.png"
                      alt=""><span class="icon-text absolute">FACEBOOK</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>
          <div class="list2 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_02.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">블랙야크키즈</div>
              <div class="brand-en">KIDS</div>
              <div class="brand-ex">블랙야크의 기능성 제품에 <br>
                키즈 감성의 재미를 더한 브랜드입니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>
          <div class="list3 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_03.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">나우</div>
              <div class="brand-en">LIFESTYLE</div>
              <div class="brand-ex">미국 포틀랜드에 본사를 둔, 지속 가능성을 추구하는 도시<br>형 기술 캐주얼 브랜드입니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FJKSuy%2FbtqEbuQ5XIC%2FHixJq4O3BAwbJrmQGaqKK0%2Fimg.png"
                      alt=""><span class="icon-text absolute">FACEBOOK</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="bottom-list inline-block">
          <div class="list4 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_04.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">마모트</div>
              <div class="brand-en">OUTDOOR</div>
              <div class="brand-ex">다양한 아웃도어 활동 시 사용 가능한 제품을 주로 생산하<br>는 미국 브랜드로, 고가 제품 위주로 생산됩니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FJKSuy%2FbtqEbuQ5XIC%2FHixJq4O3BAwbJrmQGaqKK0%2Fimg.png"
                      alt=""><span class="icon-text absolute">FACEBOOK</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>
          <div class="list5 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_05.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">힐크릭</div>
              <div class="brand-en">GOLF</div>
              <div class="brand-ex">모던 브리티쉬 감각의 트렌디한 <br>기능성 골프웨어 입니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FJKSuy%2FbtqEbuQ5XIC%2FHixJq4O3BAwbJrmQGaqKK0%2Fimg.png"
                      alt=""><span class="icon-text absolute">FACEBOOK</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>
          <div class="list6 inline-block">
            <div class="img-box"><img src="http://www.byncorp.com/byn_images/main_06.jpg" alt="" class="box-radius-top">
            </div>
            <div class="content-box box-radius-bottom">
              <div class="brand-kr">마운티아</div>
              <div class="brand-en">OUTDOOR</div>
              <div class="brand-ex">합리적인 가격대 제품을 주로 생산하는 <br>아웃도어 라이프스타일 아웃도어 브랜드입니다.</div>
              <div class="icon-box font-size12">
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbtRWIu%2FbtqEd8S9btT%2Fl5pWRKZ2uKeLFp70B2s8y1%2Fimg.png"
                      alt=""><span class="icon-text absolute">브랜드 쇼핑몰</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FJKSuy%2FbtqEbuQ5XIC%2FHixJq4O3BAwbJrmQGaqKK0%2Fimg.png"
                      alt=""><span class="icon-text absolute">FACEBOOK</span></div>
                </a>
                <a href="#" class="icon inline-block">
                  <div class="img-box"><img
                      src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fk.kakaocdn.net%2Fdn%2FbdaROR%2FbtqEbRk1s2s%2FNidbPAArEeCxUwPeSrW6U1%2Fimg.png"
                      alt=""><span class="absolute icon-text">INSTARGRAM</span></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 하단 사이트맵 HTML -->
  <div class="con">
    <div class="site-map con-2 row">
      <div class="left-text cell">
        <div class="font-size14">비와이엔블랙야크</div>
        <div class="font-size14 color777">Make Life Joyful<br>
          전세계 사람들의 삶을 즐겁게 하는<br>
          글로벌 라이프스타일 NO.1 기업으로 도약<br>
          Since 1973</div>
      </div>
      <nav class="site-map-menu cell-right font-size14">
        <ul class="row">
          <li class="cell">
            <div>브랜드</div>
            <ul>
              <li><a href="#">블랙야크</a></li>
              <li><a href="#">블랙야크키즈</a></li>
              <li><a href="#">마모트</a></li>
              <li><a href="#">나우</a></li>
              <li><a href="#">힐크릭</a></li>
              <li><a href="#">마운티아</a></li>
            </ul>
          </li>
          <li class="cell">
            <div>BYN소개</div>
            <ul>
              <li><a href="#">BYN소개</a></li>
              <li><a href="#">CEO인사말</a></li>
              <li><a href="#">회사연혁</a></li>
              <li><a href="#">런닝인더히말라야</a></li>
            </ul>
          </li>
          <li class="cell">
            <div>새소식</div>
            <ul>
              <li><a href="#">보도자료</a></li>
              <li><a href="#">브랜드캠페인</a></li>
              <li><a href="#">커뮤니케이션 채널</a></li>
            </ul>
          </li>
          <li class="cell">
            <div>사회공헌</div>
            <ul>
              <li><a href="#">사회공헌활동</a></li>
              <li><a href="#">나눔재단</a></li>
              <li><a href="#">장학재단</a></li>
              <li><a href="#">해피스텝</a></li>
              <li><a href="#">런닝인더히말라야</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- 최하단 bar HTML -->
  <div class="con bottom-bar">
    <div class="con-3">
      <div class="adr-box row inline-block">
        <div class="img-box cell inline-block"><img src="https://kkt9102.github.io/img1/blog/article/portfolio/byn/footer_logo.png" alt=""><!-- http://www.byncorp.com/byn_images/footer_logo.png -->
        </div>
        <div class="adr-text font-size14 inline-block">
          <div>서울 특별시 서초구 바우뫼로 201 블랙야크 양재사옥(06745)</div>
          <div>Copyright © BYN BLACK YAK.CO., LTD. All Rights Reserved.</div>
        </div>

      </div>
      <div class="select-box cell-right">
        <select name="site-move" id="">
          <option value="#">FAMILY SITE</option>
          <option value="#">블랙야크</option>
          <option value="#">블랙야크키즈</option>
          <option value="#">나우</option>
          <option value="#">마모트</option>
          <option value="#">힐크릭</option>
          <option value="#">마운티아</option>
        </select>
      </div>
    </div>
  </div>


</body>

</html>