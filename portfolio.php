<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="신입 웹 퍼블리셔 김기태 포트폴리오 페이지 입니다.">
    <title>Portfolio | 웹 퍼블리셔 김기태</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="/resource/img/favicon.png">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- fontaswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="resource/common.css">
    <link rel="stylesheet" href="resource/section-1.css">
    <link rel="stylesheet" href="resource/section-2.css">
    <link rel="stylesheet" href="resource/section-3.css">
    <link rel="stylesheet" href="resource/section-4.css">
    <link rel="stylesheet" href="resource/section-5.css">
    <link rel="stylesheet" href="resource/mobile.css">
    <link rel="stylesheet" href="resource/media.css">
    <link rel="stylesheet" href="resource/popup.css">
    <script src="resource/common.js"></script>
</head>

<body>

    <!-- top-menu-bar HTML -->
    <div class="popup-background"></div>
    <div class="top-menu-bar fixed">
        <ul class="con flex flex-jc-sa">
            <li class="flex flex-ai-c" onClick="scroll_move('1')">Home</li>
            <li class="flex flex-ai-c" onClick="scroll_move('2')">About Me</li>
            <li class="flex flex-ai-c" onClick="scroll_move('3')">Skill</li>
            <li class="flex flex-ai-c" onClick="scroll_move('4')">Portfolio</li>
            <li class="flex flex-ai-c" onClick="scroll_move('5')">Contact</li>
        </ul>
    </div>
    <div class="mobile-top-menu-bar fixed">
        <div class="bars-btn absolute">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="fixed">
            <ul>
                <li class="block" onClick="scroll_move('1')">Home</li>
                <li class="block" onClick="scroll_move('2')">About Me</li>
                <li class="block" onClick="scroll_move('3')">Skill</li>
                <li class="block" onClick="scroll_move('4')">Portfolio</li>
                <li class="block" onClick="scroll_move('5')">Contact</li>
            </ul>
        </nav>

    </div>
    <!-- section.1 HTML -->
    <section id="section-1">
        <div class="home-section color-fff relative pc-view">
            <div class="pc-bg"></div>
            <div class="main-text-box text-align-center">
                <p class="title">Portfolio-Page</p>
                <p class="sub-title-1">Web Publisher Kim Ki Tae</p>
                <p class="sub-title-2">언제나 열정적으로 도전하는 웹 퍼블리셔 김기태 입니다.</p>
            </div>
            <div class="scroll-guide text-align-center absolute">
                <i class="fas fa-angle-double-down"></i>
                <div class="scroll-text"><span class="pc-view">Click!</span><span class="mobile-view">Touch!</span>
                </div>
            </div>
        </div>
        <div class="mobile-view color-fff relative">
            <div class="mobile-bg"></div>
            <div class="main-text-box text-align-center">
                <p class="title">Portfolio-Page</p>
                <p class="sub-title-1">Web Publisher Kim Ki Tae</p>
                <p class="sub-title-2">언제나 열정적으로 도전하는 웹 퍼블리셔 김기태 입니다.</p>
            </div>
            <div class="scroll-guide text-align-center absolute">
                <i class="fas fa-angle-double-down"></i>
                <div class="scroll-text">Touch!</div>
            </div>
        </div>
    </section>
    <!-- section.2 HTML -->
    <section id="section-2">
        <div class="about-me-section con pc-view">
            <div class="section-title section-2">About Me</div>
            <div class="about-me-box flex flex-jc-sa">
                <div class="proflie-img "></div>
                <div class="">
                    <div class="text-box">
                        <p>김기태 Kim ki Tae</p>
                        <p>1991.02.08</p>
                        <p>대전광역시 서구</p>
                        <p>2020.04 ~ 2020.10 / SBS 아카데미 아트학원 UX/UI 디자인과정 수료</p>
                        <p>2009.03 ~ 2015.02 / 배재대학교 칠예과 졸업</p>
                        <p>2006.03 ~ 2009.02 / 용인고등학교 졸업</p>
                    </div>
                    <div class="section-sub-title">keyword</div>
                    <p>#감각적인&ensp;&ensp;#탐구하는&ensp;&ensp;#독특한 시각&ensp;&ensp;#끈기있는</p>
                    <div class="section-sub-title">Vision</div>
                    <p>웹페이지를 만드는데 푹 빠진 신입 웹퍼블리셔 김기태입니다. 저는 누구나 쉽게 접근할 수 있는
                        웹사이트를 만드는 것이 저의 목표입니다. 이 목표를 위해 항상 공부하는 자세로 다양한 컨셉의
                        웹 사이트들을 보고 다양한 코드들을 분석하고 이해하는 것을 즐깁니다. 좋은 웹 사이트란
                        화려한 전경에서도 해당 사이트가 보여주고자 하는 요소가 명확하게 보여지는 것이 좋은
                        디자인요소를 갖춘 웹 사이트라고 생각합니다. 제가 정한 목표에 다가가기 위해 스스로가
                        발전해나갈 수 있도록 노력하고 있습니다.
                    </p>
                    <div class="section-sub-title">Hobby</div>
                    <ul class="hobby flex">
                        <li class="movie icon relative">
                            <div class="hover-box absolute">질리도록 영화보기</div>
                        </li>
                        <li class="camera icon relative">
                            <div class="hover-box absolute">좋은 사진이 <br>나올 때 까지 <br>수만번 사진찍기</div>
                        </li>
                        <li class="backpack icon relative">
                            <div class="hover-box absolute">즐거운 마음으로 여행다니기</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-view">
            <div class="section-title">About Me</div>
            <div class="about-me-box">
                <div class="profile-img"></div>
                <div class="text-box con font-size-14">
                    <div class="profile">
                        <p>김기태 &ensp;Kim Ki Tae &ensp;1991.02.08</p>
                        <p>대전광역시 서구</p>
                        <p>2020.04 ~ 2020.10</p>
                        <p>-SBS 아카데미 아트학원 UX/UI 디자인과정 수료</p>
                        <p>2009.03 ~ 2015.02</p>
                        <p>-배재대학교 칠예과 졸업</p>
                        <p>2006.03 ~ 2009.02</p>
                        <p>-용인고등학교 졸업</p>
                    </div>
                    <div class="section-sub-title text-align-center">keyword</div>
                    <p>#감각적인&ensp;&ensp;#탐구하는&ensp;&ensp;#독특한 시각&ensp;&ensp;#끈기있는</p>
                    <div class="section-sub-title text-align-center">Vision</div>
                    <p>웹페이지를 만드는데 푹 빠진 신입 웹퍼블리셔 김기태입니다. 저는 누구나 쉽게 접근할 수 있는
                        웹사이트를 만드는 것이 저의 목표입니다. 이 목표를 위해 항상 공부하는 자세로 다양한 컨셉의
                        웹 사이트들을 보고 다양한 코드들을 분석하고 이해하는 것을 즐깁니다. 좋은 웹 사이트란
                        화려한 전경에서도 해당 사이트가 보여주고자 하는 요소가 명확하게 보여지는 것이 좋은
                        디자인요소를 갖춘 웹 사이트라고 생각합니다. 제가 정한 목표에 다가가기 위해 스스로가
                        발전해나갈 수 있도록 노력하고 있습니다.</p>
                    <div class="section-sub-title text-align-center">Hobby</div>
                    <ul class="hobby flex">
                        <li class="movie icon relative"></li>
                        <li class="camera icon relative"></li>
                        <li class="backpack icon relative"></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- section.3 HTM L-->
    <section id="section-3">
        <div class="skill-section con">
            <div class="section-title section-3">Skills</div>
            <div class="skill-box">
                <nav class="skill-list flex flex-jc-sb flex-wrap-wrap">
                    <ul class="coding">
                        <div class="sub-title flex flex-ai-c flex-jc-c"><span
                                class="inline-block skill-icon"></span>CODING</div>
                        <li id="html">
                            <div class="text relative">HTML</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="css">
                            <div class="text relative">CSS</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="js_jq">
                            <div class="text relative">JavaScript·jQuery</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <div class="text-box">
                            <p>웹 표준·웹 접근성을 고려한 마크업을 구현합니다.</p>
                            <p>상황에 맞는 StyleSheet 적용 및 효과를 구현합니다.</p>
                            <p>기본적인 알고리즘의 이해 및 다양한 플러그인을 사용합니다.</p>
                        </div>
                    </ul>
                    <ul class="graphic">
                        <div class="sub-title flex flex-ai-c flex-jc-c"><span
                                class="inline-block skill-icon"></span>GRAPHIC</div>
                        <li id="ps">
                            <div class="text relative">Photoshop</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="ai">
                            <div class="text relative">Illustrator</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="lr">
                            <div class="text relative">Lightroom</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <div class="text-box">
                            <p>UX/UI 디자인을 이해하고 이를 바탕으로 디자인 합니다.</p>
                            <p>기본적인 Icon 및 Logo 작업을 합니다.</p>
                            <p>기본적인 사진촬영 및 Adobe 툴을 이용한 사진보정 및 합성작업을 합니다.</p>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <!--
        <div class="mobile-view">
            <div class="section-title">Skills</div>
            <div class="skill-box con font-size-14">
                <nav class="coding">
                    <ul>
                    <div class="sub-title flex flex-ai-c flex-jc-c"><div class="skill-icon"></div>Coding</div>
                        <li id="html">
                            <div class="text relative">HTML</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="css">
                            <div class="text relative">CSS</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="js_jq">
                            <div class="text relative">JavaScript·jQuery</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <nav class="graphic">
                    <ul>
                    <div class="sub-title flex flex-ai-c flex-jc-c"><div class="skill-icon"></div>Graphic</div>
                        <li id="ps">
                            <div class="text relative">Photoshop</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="ai">
                            <div class="text relative">Illustrator</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                        <li id="lr">
                            <div class="text relative">Lightroom</div>
                            <div class="graph">
                                <div class="progress-bar"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        -->
    </section>
    <!-- section.4 HTML -->
    <section id="section-4">
        <div class="portfolio-section con pc-view">
            <div class="section-title section-4">Portfolio</div>
            <nav class="tab-menu">
                <ul class="flex flex-jc-c">
                    <li class="all active">All</li>
                    <li class="rede">ReDesign</li>
                    <li class="res">Responsive</li>
                </ul>
            </nav>
            <nav class="portfolio-work">
                <ul class="row relative">
                    <li id="seoularts" class="item-1 cell rede">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">리디자인 사이트</div>
                                <div class="brand-name">서울예술대학교</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">서울예술대학교</p>
                                    <p class="ex">기존의 사이트는 메인의 구성요소들이 너무 모여있으며
                                        오래된 디자인 구성요소를 조금 더 직관적이고 노출이 필요한
                                        콘텐츠 부분을 추가해주었습니다. (상세페이지 추가중)
                                    </p>
                                    <p class="kinds">#리뉴얼 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, slick 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.seoularts.ac.kr/mbs/kr/index.jsp"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/seoularts/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_seoul-arts"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="byn" class="item-2 cell res">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">BYN CORP</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">BYN CORP</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC #반응형</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, slick 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="http://www.byncorp.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/byncorp/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_BYNCOR"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="canon" class="item-3 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">캐논코리아 컨슈머이미징</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">캐논코리아 컨슈머이미징</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.<br>
                                        ver.1의 경우 슬라이드를 직접 제작하였고 <br>ver.2 의 경우 슬라이더 플러그인을 사용하고<br>
                                        float을 이용하여 만들었습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, owl carousel, slick-slide 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span><span
                                            class="color-4"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.canon-ci.co.kr/main" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/canon/index.php" target="_blank"
                                                class="block">Demo Site ver.1</a></li>
                                        <li class=""><a href="../portfolio/canon-re/index.php" target="_blank"
                                                class="block">Demo Site ver.2</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_Canon-ci"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="metanett" class="item-4 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">메타넷티플랫폼</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">메타넷티플랫폼</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, slick 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span><span
                                            class="color-4"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="http://www.metanettplatform.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/metanettplatform/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_metanettplatform"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="kakaoenter" class="item-5 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">카카오엔터프라이즈</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">카카오엔터프라이즈</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.kakaoenterprise.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/kakaoenterprise/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_kakaoenterprise"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="dma" class="item-6 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">대전시립미술관</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">대전시립미술관</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.daejeon.go.kr/dma/index.do" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/dma/index.php" target="_blank"
                                                class="block">Demo
                                                Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_DMA" target="_blank"
                                                class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="razer" class="item-7 cell res">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">RAZER</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">RAZER</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다. <br>ver.2 의 경우 모바일용 페이지를 위해 <br>float을 이용하여 다시한번
                                        제작하였습니다.
                                    </p>
                                    <p class="kinds">#모작 #반응형</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.razer.com/" target="_blank"
                                                class="block">Original
                                                Site</a></li>
                                        <li class=""><a href="../portfolio/razer/index.php" target="_blank"
                                                class="block">Demo Site ver.1</a></li>
                                        <li class=""><a href="../portfolio/razer-re/index.php" target="_blank"
                                                class="block">Demo Site ver.2</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_razer"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="sony" class="item-8 cell res">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">소니 코리아</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">소니 코리아</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC #반응형</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span><span
                                            class="color-4"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.sony.co.kr/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/sonyKorea/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_sonykorea"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="leica" class="item-9 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">라이카 카메라 코리아</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">라이카 카메라 코리아</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.leica-store.co.kr/main/main.asp"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/leica/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_leica"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="kdb" class="item-10 cell">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">KDB 산업은행</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">KDB 산업은행</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, full-page 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span><span class="color-3"></span><span
                                            class="color-4"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.kdb.co.kr/index.jsp" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/kdb/index.php" target="_blank"
                                                class="block">Demo
                                                Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_KDB" target="_blank"
                                                class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="reserve" class="item-11 cell rede res">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">리디자인 사이트</div>
                                <div class="brand-name">스타벅스 리저브</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">스타벅스 리저브</p>
                                    <p class="ex">기존의 사이트는 특별한 커피임에도 기본적인
                                        홈페이지의 색과 레이아웃을 이용하고 있기에 '리저브' 로고의 색과
                                        어두운 색을 사용하여 오직 '리저브'만을 위한 페이지로 제작하였습니다.
                                    </p>
                                    <p class="kinds">#리뉴얼 #PC</p>
                                    <p class="using">HTML, CSS ,javaScript, jQuery, kakao맵 API 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.starbucks.co.kr/coffee/reserve_info.do"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/reserve/public/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_reserve"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="pearlabyss" class="item-12 cell res">
                        <div class="origin">
                            <div class="title absolute text-align-center">
                                <div class="kinds">모작 사이트</div>
                                <div class="brand-name">펄어비스 공식 홈페이지</div>
                            </div>
                            <div class="img"></div>
                            <div class="popup row fixed">
                                <div class="close-btn absolute">
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class="img cell"></div>
                                <div class="text-box cell">
                                    <p class="logo"></p>
                                    <p class="brand-name">펄어비스 공식 홈페이지</p>
                                    <p class="ex">기존의 사이트를 동일하게 제작했습니다.
                                    </p>
                                    <p class="kinds">#모작 #PC #모바일 #반응형</p>
                                    <p class="using">HTML, CSS, JavaScript, jQuery, owl carousel 이용</p>
                                    <p class="color-use flex flex-jc-c">COLOR : <span class="color-1"></span><span
                                            class="color-2"></span></p>
                                </div>
                                <div class="link-box cell">
                                    <ul class="">
                                        <li class=""><a href="https://www.pearlabyss.com/ko-KR" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/pearlabyss/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_reserve"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="mobile-view">
            <h2 class="section-title">Portfolio</h2>
            <nav class="tab-menu-btn">
                <ul class="flex flex-jc-c flex-wrap-wrap">
                    <li class="mobile active">Mobile</li>
                    <li class="web">Web</li>
                    <div class="pc-view-alret text-align-center">이 페이지들은 모바일 화면에 최적화 되어있지 않습니다.</div>
                </ul>
            </nav>
            <nav class="portfolio-work">
                <ul class="con">
                    <li id="byn" class="mobile active">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="http://www.byncorp.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/byncorp/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_BYNCOR"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="razer" class="mobile active">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.razer.com/" target="_blank"
                                                class="block">Original
                                                Site</a></li>
                                        <li class=""><a href="../portfolio/razer/index.php" target="_blank"
                                                class="block">Demo Site ver.1</a></li>
                                        <li class=""><a href="../portfolio/razer-re/index.php" target="_blank"
                                                class="block">Demo Site ver.2</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_razer"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="sony" class="mobile active">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.sony.co.kr/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/sonyKorea/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_sonykorea"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="reserve" class="mobile active">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">리디자인 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.starbucks.co.kr/coffee/reserve_info.do"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/reserve/public/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_reserve"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="pearlabyss" class="mobile active">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.pearlabyss.com/ko-KR" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/pearlabyss/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_reserve"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="seoularts" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">리디자인 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.seoularts.ac.kr/mbs/kr/index.jsp"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/seoularts/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_seoul-arts"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="canon" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.canon-ci.co.kr/main" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/canon/index.php" target="_blank"
                                                class="block">Demo Site ver.1</a></li>
                                        <li class=""><a href="../portfolio/canon-re/index.php" target="_blank"
                                                class="block">Demo Site ver.2</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_Canon-ci"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="metanett" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="http://www.metanettplatform.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/metanettplatform/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_metanettplatform"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="kakaoenter" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.kakaoenterprise.com/" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/kakaoenterprise/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_kakaoenterprise"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="dma" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.daejeon.go.kr/dma/index.do" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/dma/index.php" target="_blank"
                                                class="block">Demo
                                                Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_DMA" target="_blank"
                                                class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="leica" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.leica-store.co.kr/main/main.asp"
                                                target="_blank" class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/leica/index.php" target="_blank"
                                                class="block">Demo Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_leica"
                                                target="_blank" class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                    <li id="kdb" class="web">
                        <div class="mobile-origin">
                            <div class="item-box relative">
                                <div class="img"></div>
                                <div class="kinds">모작 사이트</div>
                                <ul class="link-list">
                                        <li class=""><a href="https://www.kdb.co.kr/index.jsp" target="_blank"
                                                class="block">Original Site</a></li>
                                        <li class=""><a href="../portfolio/kdb/index.php" target="_blank"
                                                class="block">Demo
                                                Site</a></li>
                                        <li class=""><a href="https://github.com/kkt9102/portfolio_KDB" target="_blank"
                                                class="block">Git Repositories</a></li>
                                    </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- section.5 HTML -->
    <section id="section-5">
        <div class="contact-section con">
            <div class="section-title section-5">Contact</div>
            <div class="contact-box">
                <form action onsubmit="sendEmailFormSubmit(this); return false;" name="sendEmailForm">
                    <input type="hidden" name="receiverName" value="김기태">
                    <input type="hidden" name="receiverEmail" value="creater@kakao.com">
                    <div class="name">
                        <div class="title-text">Name / Company</div><input type="text" name="senderName"
                            placeholder="이름을 입력해주세요.">
                    </div>
                    <div class="email">
                        <div class="title-text">E-mail</div><input type="email" name="senderEmail"
                            placeholder="이메일을 입력해주세요.">
                    </div>
                    <div class="text-box">
                        <div class="title-text">Contents</div>
                        <textarea name="body" placeholder="내용을 입력해주세요."></textarea>
                    </div>
                    <div class="btn flex flex-jc-c">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
            <div class="icon-box">
                <ul class="flex flex-jc-sa pc-view">
                    <li class="phone flex flex-ai-c">
                        <div class="icon"></div>
                        <div class="text">82+ 10-4336-2559</div>
                    </li>
                    <li class="mail flex flex-ai-c">
                        <div class="icon"></div>
                        <div class="text">creater@kakao.com / kkt9102@gmail.com</div>
                    </li>
                    <li class="kakao flex flex-ai-c">
                        <div class="icon"></div>
                        <div class="text">kkt9102</div>
                    </li>
                </ul>
            </div>
            <div class="copyright con text-align-center">Copyrightⓒ2020. Web Publisher kim Ki Tae. All rights reserved.
            </div>
        </div>
    </section>
    <!-- mobile HTML -->

</body>

</html>