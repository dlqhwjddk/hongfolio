<?
    include_once $_SERVER['DOCUMENT_ROOT']."/asset/php/db.php";
?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>HONGFOLIO</title>
        <link rel="stylesheet" href="asset/css/about.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="asset/js/about.js"></script>
    </head>
    <body>
        <div class="mobile">
            <p>
                본 페이지는 상업용 목적이 아닌
                개인용 포트폴리오 목적으로 제작되었습니다.
                1920*1080 사이즈 또는
                태블릿 화면에 최적화 되어있으니,
                해당 사이즈로 보시는 것을 권장합니다.
            </p>
        </div>
        
        <div class="wrap" id="top">

            <div class="header">

                <a class="menu back" href="#" onclick="goBack();">
                    <span>BACK</span>
                    <span></span>
                </a>

                <a class="logo" href="index.html">
                HONG<br>FOLIO</a>

                <a class="menu" href="#contact">
                    <span>CONTACT</span>
                    <span></span>
                </a>                

            </div>

            <div class="start">
                <div class="about_me">
                    <img src="asset/img/icon/down_arrow.png" alt="">
                    <img src="asset/img/icon/down_arrow(2).png" alt="">
                    <span>ABOUT</span>
                    <span>ME</span>
                </div>
            </div>

            <div class="intro">
                <div class="title">
                    <span>INTRODUCE&nbsp;&nbsp;</span>
                </div>
                <div class="profile">
                    <div></div>
                    <div></div>
                    <div class="top">

                        <p><img src="asset/img/photo21.jpg" alt=""></p>

                        <div class="text">
                            <p>홍정아
                            1995.04.27</p>
                            <span>2016.02<br>수원과학대학교 호텔조리학과 졸업</span>
                            <span>2019.12.30 - 2020.06.08<br>그린컴퓨터 아카데미 프론트엔드 과정 수료</span>
                        </div>

                    </div>

                </div>
                <div class="intro_text">
                    <p>
                        저에게 코딩은 마치 거대한 "큐브 퍼즐"처럼 느껴졌습니다.
                    </p>
                    <p>
                        저는 코딩 작업을 진행할 때 마다 
                        거대한 퍼즐을 맞춰가는 기분이 들었습니다. 
                        그중에서도 한쪽을 완벽하게 맞추더라도 
                        다른쪽 면도 신경쓰지 않으면 안되는 큐브 퍼즐 같았습니다. 
                    </p>
                    <p>
                        이것이 마치 공부가 아닌 놀이 처럼 즐겁게 다가왔습니다.  
                        좀처럼 진행이 되지 않던것을 풀어냈을 때 큰 성취감이 들었고 
                        그런 점이 바로 코딩의 매력이라고 생각하였습니다. 
                    </p>
                    <p>
                        저는 앞으로도 현재에 머무르지 않고 
                        계속해서 새로운 것들을 받아들이며
                        경험해보는 자세로 임하도록 하겠습니다.
                    </p>
                </div>
            </div>

            <div class="skill">
                <div class="title">
                    <span>SKILL LIST&nbsp;&nbsp;</span>
                </div>
                <div class="skill_list">
                    <ul class="line1">
                        <li class="html">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>HTML5</strong>
                                    <small>상황에 맞는 태그 사용을 할 수 있고, 각 태그들의 기능과 필수속성을 정확히 알고있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="css">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>CSS3</strong>
                                    <small>CSS 속성에 대해 잘 알고있고, 
                                    콘텐츠 페이지의 각종 스타일링을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="jquery">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JQUERY</strong>
                                    <small>간단한 동적 화면을 수월하게 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="javascript">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JAVASCRIPT</strong>
                                    <small>jQuery 문법과 혼합하여 동적 기능 구현을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="line2">
                       <li class="javascript">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JAVASCRIPT</strong>
                                    <small>jQuery 문법과 혼합하여 동적 기능 구현을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="html">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>HTML5</strong>
                                    <small>상황에 맞는 태그 사용을 할 수 있고, 각 태그들의 기능과 필수속성을 정확히 알고있습니다.</small>
                                </div>
                            </div>
                        </li>

                        <li class="php">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>PHP</strong>
                                    <small>MYSQL을 이용하여 사용자, 관리자
                                    페이지를 만들수 있습니다. </small>
                                </div>
                            </div>
                        </li>
                        <li class="git">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>GIT</strong>
                                    <small>git을 사용하여 형상관리를 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="line1">

                        <li class="jquery">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JQUERY</strong>
                                    <small>간단한 동적 화면을 수월하게 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                      <li class="php">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>PHP</strong>
                                    <small>MYSQL을 이용하여 사용자, 관리자
                                    페이지를 만들수 있습니다. </small>
                                </div>
                            </div>
                        </li>
                       <li class="css">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>CSS3</strong>
                                    <small>CSS 속성에 대해 잘 알고있고, 
                                    콘텐츠 페이지의 각종 스타일링을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="git">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>GIT</strong>
                                    <small>git을 사용하여 형상관리를 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="skill_list2">
                    <ul>
                        <li class="html">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>HTML5</strong>
                                    <small>상황에 맞는 태그 사용을 할 수 있고, 각 태그들의 기능과 필수속성을 정확히 알고있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="css">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>CSS3</strong>
                                    <small>CSS 속성에 대해 잘 알고있고, 
                                    콘텐츠 페이지의 각종 스타일링을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="jquery">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JQUERY</strong>
                                    <small>간단한 동적 화면을 수월하게 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="javascript">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>JAVASCRIPT</strong>
                                    <small>jQuery 문법과 혼합하여 동적 기능 구현을 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                        <li class="php">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>PHP</strong>
                                    <small>MYSQL을 이용하여 사용자, 관리자
                                    페이지를 만들수 있습니다. </small>
                                </div>
                            </div>
                        </li>
                        <li class="git">
                            <div></div>
                            <div></div>
                            <div>
                                <span>MY SKILL</span>
                                <div class="skill_text">
                                    <p>FRONT-END</p>
                                    <strong>GIT</strong>
                                    <small>git을 사용하여 형상관리를 할 수 있습니다.</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="contact" id="contact">
                <div class="title">
                    <span>CONTACT&nbsp;&nbsp;</span>
                </div>
                <div class="card">
                    <div></div>
                    <div>
                        <div class="card_text">
                            <section class="brand">
                                <span class="logo">HONG<br>FOLIO</span>
                                <span>web developer</span>
                            </section>
                            <section class="information">
                                <div class="left">
                                    <p>NAME</p>
                                    <p>PHONE</p>
                                    <p>EMAIL</p>
                                    <p>KAKAO ID</p>
                                </div>
                                <div class="right">
                                    <p>홍정아</p>
                                    <p>010.2410.0427</p>
                                    <p>dlqhwjddk427@naver.com</p>
                                    <p>dlQhwjddk</p>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
                <div class="contact_box">
                    <div></div>
                    <div></div>
                    <div>
                        <div class="circle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <form action="asset/php/insert_res.php" method="post">
                            <p>
                                <label for="name">NAME</label>
                                <input type="text" id="name" name= "name" required>
                            </p>
                            <p>
                                <label for="email">EMAIL</label>
                                <input type="email" id="email" name="email" required>
                            </p>
                            <p>
                                <label for="message">MESSAGE</label>
                                <textarea id="message" name="message" required></textarea>
                            </p>
                            <p>
                                <input type="submit" value="SUBMIT">
                            </p>
                        </form>
                    </div>

                </div>
            </div>

            <div class="top_box">
                <a href="#">
                    <p>▲
                    TOP</p>
                </a>
            </div>

        </div>

    </body>
    </html>