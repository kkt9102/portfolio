<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서울예술대학교</title>

    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Slick 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!-- 폰트어썸 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <?php
        include_once "favicon.php";
    ?>

    <link rel="stylesheet" href="./resource/index.css">
    <link rel="stylesheet" href="./resource/info-page-menu-bar.css">
    <link rel="stylesheet" href="./resource/greetings.css">
    <link rel="stylesheet" href="./resource/academic-schedule-section.css">
    <link rel="stylesheet" href="./resource/history.css">
    <link rel="stylesheet" href="./resource/mission-lesson.css">
    <script src="./resource/index.js"></script>
    <script src="./resource/hasClass.js"></script>
    <script src="./resource/academic-schedule-section.js"></script>
    <script src="./resource/history.js"></script>
    
    
    




    <!-- http://localhost:8077/portfolio/seoularts/index.php# -->
</head>

<body>
    <!-- side-quick-menu HTML -->
    <div class="side-quick-menu fixed color-fff">
        <nav>
            <ul class="">
                <div class="title flex flex-ai-c flex-jc-c text-align-center">QUICK MENU</div>
                <li class="flex flex-ai-c"><a href="#" class="block flex flex-ai-c flex-jc-c">일반인</a></li>
                <li class="flex flex-ai-c"><a href="#" class="block flex flex-ai-c flex-jc-c">재학생</a></li>
                <li class="flex flex-ai-c"><a href="#" class="block flex flex-ai-c flex-jc-c">교직원</a></li>
                <li class="flex flex-ai-c"><a href="#" class="block flex flex-ai-c flex-jc-c text-align-center">오시는길</a>
                </li>
                <li class="flex flex-ai-c"><a href="#" class="block flex flex-ai-c flex-jc-c">홍보관</a></li>
            </ul>
        </nav>

    </div>
    <!-- top-bar HTML -->
    <div class="top-bar-1">
        <div class="menu-box-1 con color-fff">
            <nav class="flex flex-jc-sb">
                <ul class="left sns-icon flex">
                    <li class="facebook"><a href="#" class="block"></a></li>
                    <li class="instagram"><a href="#" class="block"></a></li>
                    <li class="blog"><a href="#" class="block"></a></li>
                    <li class="youtube"><a href="#" class="block"></a></li>
                </ul>
                <ul class="right flex flex-ai-c">
                    <li><a href="#" class="block">LOGIN</a></li>
                    <li class="search"><a href="#" class="block"></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- top-bar-2 HTML -->
    <div class="top-bar-2 text-align-center relative">
        <div class="top-bar-2-box con flex flex-ai-c">
            <div class="logo flex-1-0-0 flex-ai-c">
                <a href="index.php" class="block"></a>
            </div>
            <nav class="menu-box-2 flex-1-0-0">
                <ul class="flex flex-ai-c">
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">대학소개</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">인사말</span></a>
                                        <ul>
                                            <li><a href="chairman-greetings.php" class="block"><span class="relative">이사장 인사말</span></a></li>
                                            <li><a href="president-greetings.php" class="block"><span class="relative">총장 인사말</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="founder.php" class="block"><span class="relative">설립자소개</span></a></li>
                                    <li class="flex-1-0-0"><a href="history.php" class="block"><span class="relative">연혁</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">이념/교육목표</span></a>
                                        <ul>
                                            <li><a href="mission-lesson.php" class="block"><span class="relative">창학이념/교훈</span></a></li>
                                            <li><a href="educationalgoals.php" class="block"><span class="relative">교육목표</span></a></li>
                                            <li><a href="talent.php" class="block"><span class="relative">인재상/핵심역량</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">발전 4대지표</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">비전/발전계획</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">미래비전선포</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">중장기 발전계획(비전 2015)</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="item-2 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">대학헌장/윤리강령</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">대학헌장</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">윤리강령</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">조직구성 및 교내연락처</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학교상장</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">심볼마크</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">교가</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">동문활동</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">동문수상</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">언론보도</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">예결산서</span></a></li>
                                </ul>
                            </nav>
                            <nav class="item-3 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">정보공시</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">자체평가</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">캠퍼스맵</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">입학안내</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">모집요강</span></a>
                                        <ul>
                                        <li><a href="#" class="block"><span class="relative">학사과정</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">전문학사과정</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">등록금 안내</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">원서접수현황</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">입시공지사항</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">지원제도</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">가산점 제도</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">장학금 안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">기숙사 안내</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">입시정보</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">인터넷 원서접수</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">수험생 정보서비스</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">실기고사 유의사항</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">입시 캘린더</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">전년도지원율</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">문의안내전화</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="item-2 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">입학상담</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">Q&A</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">FAQ</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">수험생정보서비스</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">입시자료실</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">동랑청소년종합예술제</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">예술제 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">참가신청</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">커뮤니티</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span>동랑청소년예술캠프</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">예술캠프 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">참가신청</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">커뮤니티</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">교육</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학부소개</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학사과정</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">공연창작학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">미디어창작학부</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">전문학사과정</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">공연학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">영상학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">음악학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">문예학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">디자인학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">커뮤니케이션학부</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">예술창작기초학부</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">지원센터</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">예술공학센터</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">프로젝트</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">공지사항</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">기자재</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">국제교류원</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">국제교류원 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">국제교류프로그램</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">STUDY ABROAD</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">STUDY AT SEOUL ARTS</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">컬처허브(CultureHub)</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">해외기관교류</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">소식<span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">창작·실습지원센터</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">공용컴퓨터랩</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">무대공방</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">예장</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">의상보관실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">의상제작실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">음향실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">실습기자재보관실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">디자털아카이빙실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">통합대여시스템</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생상담센터</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">학생상담센터</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">심리상담 프로그램</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">성폭력상담센터 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">사이버신고센터</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">문화예술교육원</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">평생교육원 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">예술아카데미 과정</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">특별 교육과정</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">학점은행제 안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">커뮤니티</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="item-2 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">예술정보센터</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">교육방송국</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">산학협력단</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">문화예술산업융합센터</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">문화예술산업융합센터 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">공간안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">공연,전시프로그램 소개</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생창작역량시스템</span></a></li>
                                </ul>
                            </nav>
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">취·창업지원센터</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">교수학습지원센터</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">장애소수학생지원센터</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">대학생활</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">규정집/의견수렴</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">규정집</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">규정 제·개정 의견수렴</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학사일정</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학사행정</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">제증명서발급</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생증발급안내</span></a></li>
                                </ul>
                            </nav>
                            <nav class="item-2 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">장학제도</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">장학생 기본기준</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">교내장학금</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">국가관련장학금</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">기금장학금</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">교외장학금</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">발전기금</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">인사말</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">기부자예우</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">만원장학금</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">발전기금</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">병무안내</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생활동</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">학생회조직 및 학생자치기구</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">동아리 현황</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생복지 및 학생상담실</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">학교시설 이용안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">통학버스 운행안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">학생상담실</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">보건실</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="item-3 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">연연생활관(기숙사)</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">기숙사 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">생활안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">입/퇴사안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">정보공유</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">교육수요자 만족도 조사</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">커뮤니티</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">코로나-19 공지</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">재택수업 FAQ</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">공지사항</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">구성원 참여·소통</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">핫뉴스</span></a></li>
                                </ul>
                            </nav>
                            <nav class="item-2 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">전시 및 공연</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">홍보영상</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">식단안내</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">교외공지</span></a></li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">학생지원비교과프로그램</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="flex-1-0-0"><a href="#" class="block"><span
                                class="relative flex flex-jc-c flex-ai-c">동랑예술원</span></a>
                        <div class="drop-down-menu">
                            <nav class="item-1 block">
                                <ul class="con flex flex-jc-sb">
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">동랑예술원 소개</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">경영이념</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">설립자 소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">오시는 길</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">드라마센터</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">어제와 오늘</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">시설안내</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">공연정보</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">동랑레퍼토리극단</span></a>
                                        <ul>
                                            <li><a href="#" class="block"><span class="relative">소개</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">수상이력</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">공연작품</span></a></li>
                                            <li><a href="#" class="block"><span class="relative">수상작품</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="flex-1-0-0"><a href="#" class="block"><span class="relative">동랑청소년극단</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li class="btn-menu">
                        <a href="#" class="block relative">
                            <div></div>
                            <div></div>
                            <div></div>
                        </a>
                    </li>
                </ul>
                <!-- 
                <div class="bottom-line con">
                    <div class="line"></div>
                </div>
                -->
            </nav>
        </div>
    </div>