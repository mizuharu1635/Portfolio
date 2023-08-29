<?php
    session_start();
    $mode = 'input';
    if( isset($_POST['back']) && $_POST['back'] ){
        // なにもしない時
    } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
        // 確認ボタンを押したとき
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email']    = $_POST['email'];
        $_SESSION['message']  = $_POST['message'];
        $mode = 'confirm';
    } else if( isset($_POST['send']) && $_POST['send'] ) {
        //送信ボタンを押したとき
        $message = "メッセージを受け付けました。\r\n"
                 . "名前:" . $_SESSION['fullname'] . "\r\n"
                 . "email:" . $_SESSION['email'] . "\r\n"
                 . "メッセージ内容:\r\n"
                 . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
        mail($_SESSION['email'], 'メッセージを送っていただきありがとうございます。', $message);
        mail('mizuharu35@gmail.com', 'メッセージを送っていただきありがとうございます。', $message);
        $_SESSION = array();
        $mode = 'send';
    } else {
        $_SESSION['fullname'] = "";
        $_SESSION['email']    = "";
        $_SESSION['message']  = "";
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/favicon.png">
    <!-- テキストのフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&family=Zen+Maru+Gothic:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- 見出しのフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&family=Poppins:wght@900&display=swap" rel="stylesheet">
    <title>My Portfolio</title>
    <script src="https://kit.fontawesome.com/a6bab3216a.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="top">
        <div class="nav">
            <ul class="list">
                <li><a href="#About">About</a></li>
                <!-- <li><a href="#Skills">Skills</a></li> -->
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#Hobbies">Hobbies</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="mainVisual">
            <h1 class="smooth anim">Haruki<wbr>　Portfolio</h1>
        </div>
        <div class="content">
            <section class="About">
                <h2 id="About">About</h2>
                <div class="profile" id="smile">
                    <h3>About Me</h3>
                    <div class="mypic">
                        <img src="images/mypic.webp" alt="自分の写真">
                    </div>
                    <p>水俣 春輝</p>
                    <p>Mizumata Haruki</p>
                    <p>平成16年 3月 5日生まれ　19歳</p>
                    <p>宮崎県宮崎市生まれ</p>
                    <p>好きなことは写真撮影とフットサルとお菓子作りです。</p>
                    <p>興味のあることは、Reactなどのフレームワークや、UI/UXデザインです</p>
                </div>
                <dl class="line-left">
                        <dt>2022年</dt>
                        <dd>3月<br>日章学園高等学校<br>パティシエ科卒業</dd>
                        <dd>4月<br>有限会社オッティモに<br>パティシエとして入社</dd>
                        
                        <dd>6月<br>退職</dd>
    
                        <dd>9月～<br>タイムズカーに<br class="indention">アルバイトで入社<br>洗車・回送<br class="indention">レンタカーの在庫管理、電話受付</dd>
                        
                        <dt>2023年</dt>
                        <dd>3月～<br>職業訓練校<br class="indention">ライブビジネススクール<br class="indention">フロントエンジニア科で<br>HTML、CSS、JavaScript、<br class="indention">PHP、WordPressなどの<br class="indention">基本的なスキルや<br class="indention">IT知識を学ぶ</dd>
                </dl>
            </section>
            <!-- <section class="Skills">
                <h2 id="Skills">Skills</h2>
                <div class="leaves-container">
                    <span class="leaf leaf-1"></span>
                </div>
                <div class="icon">
                    <div class="skill">
                        <p>HTML</p>
                        <i class="fa-brands fa-html5"></i>
                        <p class="html">理解度<br><span class="star">★★★★★</span></p>
                    </div>
                    <div class="skill">
                        <p>css</p>
                        <i class="fa-brands fa-css3-alt"></i>
                        <p class="css">理解度<br><span class="star">★★★★★</span></p>
                    </div>
                    <div class="skill">
                        <p>sass</p>
                        <i class="fa-brands fa-sass"></i>
                        <p class="sass">理解度<br><span class="star"></span>★★★★☆</span></p>
                    </div>
                    <div class="skill">
                        <p>JavaScript</p>
                        <i class="fa-brands fa-square-js"></i>
                        <p class="js">理解度<br><span class="star">★★★★☆</span></p>
                    </div>
                    <div class="skill">
                        <p>React</p>
                        <i class="fa-brands fa-react"></i>
                        <p class="react">勉強中</p>
                    </div>
                    <div class="skill">
                        <p>WordPress</p>
                        <i class="fa-brands fa-wordpress"></i>
                        <p class="wordpress">理解度<br><span class="star">★★★★☆</span></p>
                    </div>
                    
                </div>
                <div class="icon">
                    <div class="skill">
                        <p>php</p>
                        <i class="fa-brands fa-php"></i>
                        <p class="php">理解度<br><span class="star">★★★☆☆</span></p>
                    </div>
                    
                    <div class="skill">
                        <p>camera</p>
                        <i class="fa-solid fa-camera"></i>
                        <p class="camera">理解度<br><span class="star">★★★★★</span></p>
                    </div>
                    <div class="skill">
                        <p>Lightroom</p>
                        <i class="fa-solid fa-sliders"></i>
                        <p class="Lightroom">理解度<br><span>★★★★★</span></p>
                    </div>
                    <div class="skill">
                        <p>smile</p>
                        <a href="#smile">
                            <i class="fa-solid fa-face-smile"></i>
                        </a>
                        <p class="weixin">笑顔<span class="stars">★★★★★★★★★★★★★★★★★★</span></p>
                    </div>
                </div>
            </section> -->

            <section class="Portfolio">
                <h2 id="Portfolio">Portfolio</h2>
                <div class="portfolios">
                    <article class="works">
                        <div class="work">
                            <a href="file:///C:/Users/liveb/OneDrive/デスクトップ/ポートフォリオsass/portfoliosass/index.html" target="_blank"><img src="images/portfolio-photo1.png" alt="写真1"></a>
                        </div>
                        <div class="caption">
                            <p>My Portfolio</p>
                            <p>使用した言語</p>
                            <p>HTML, SCSS, JavaScript, php</p>
                            <p>制作時間:40時間</p>
                        </div>
                    </article>
                    <article class="works">
                        <div class="work">
                            <a href="#"><img src="images/portfolio-photo1.png" alt="写真2"></a>
                        </div>
                        <div class="caption">
                            <p>タイトル</p>
                            <p>使用した言語</p>
                            <p>HTML, CSS, JavaScript</p>
                            <p>制作時間:〇時間</p>
                        </div>
                    </article>
                    <article class="works">
                        <div class="work">
                            <a href="#"><img src="images/portfolio-photo1.png" alt="写真3"></a>
                        </div>
                        <div class="caption">
                            <p>タイトル</p>
                            <p>使用した言語</p>
                            <p>HTML, CSS, JavaScript</p>
                            <p>制作時間:〇時間</p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="Hobbies">
                <h2 id="Hobbies">Hobbies</h2>
                <div class="icon-button">
                    <div class="photos">
                        <i class="fa-solid fa-camera"></i>
                        <a class="btn-down" href="#photos">photos <span class="triangle">▼</span></a>
                    </div>
                    <div class="movies">
                        <i class="fa-solid fa-film"></i>
                        <a class="btn-down" href="#movies">movies <span class="triangle">▼</span></a>
                    </div>
                </div>
                <section class="photo" id="photos">
                    <h3>photo</h3>
                    <div class="thumbnail">
                        <p>wildbird</p>
                        <img src="images/Hobbies6.webp" alt="">
                    </div>
                    <div class="bird_photo">
                        <div class="bird">
                            <figure>
                                <img src="images/Hobbies8.webp" alt="bird">
                            </figure>
                        </div>
                        <div class="bird">
                            <figure>
                                <img src="images/Hobbies9.webp" alt="bird">
                            </figure>
                        </div>
                        <div class="bird">
                            <figure>
                                <img src="images/Hobbies10.webp" alt="bird">
                            </figure>
                        </div>
                    </div>
                    <div class="more">
                        <input type="button" value="more" class="more-btn">
                        <div class="more-photo">
                            <div class="bird_photo">
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies11.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies13.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies14.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies15.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies16.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies17.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies1.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies2.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies3.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies4.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies5.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="bird">
                                    <figure>
                                        <img src="images/Hobbies7.webp" alt="bird">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail">
                        <p>landscape</p>
                        <img src="images/Hobbies21.webp" alt="天の川">
                    </div>
                    <div class="landscape_photo">
                        <div class="landscape">
                            <figure>
                                <img src="images/Hobbies20.webp" alt="bird">
                            </figure>
                        </div>
                        <div class="landscape">
                            <figure>
                                <img src="images/Hobbies18.webp" alt="bird">
                            </figure>
                        </div>
                        <div class="landscape">
                            <figure>
                                <img src="images/Hobbies22.webp" alt="bird">
                            </figure>
                        </div>
                    </div>
                    <div class="more">
                        <input type="button" value="more" class="more-btn">
                        <div class="more-photo">
                            <div class="landscape_photo">
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies23.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies24.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies25.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies26.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies27.webp" alt="bird">
                                    </figure>
                                </div>
                                <div class="landscape">
                                    <figure>
                                        <img src="images/Hobbies28.webp" alt="bird">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="movie" id="movies">
                    <h3>movie</h3>
                    <div class="video1">
                        <!-- アカショウビンのYouTube -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/YcIHas2qpYA?si=t6YXhCw4yzJUfXg_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video2">
                        <!-- ルリビタキのYouTube -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/CSUQz0NPkzg?si=RQwinIqeiM12JKCI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="video3">
                        <!-- コシジロヤマドリのYouTube -->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/44WSB2pCqig?si=N9dwszgFt6aEq5JV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <section class="Contact">
                <h2 id="Contact">Contact</h2>
                <div class="icons">
                    <a class="instagram" href="https://www.instagram.com/mizuharu_photo/" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="github" href="https://github.com/mizuharu1635?tab=repositories" target="_blank">
                        <i class="fa-brands fa-square-github"></i>
                    </a>
                    <a class="twitter" href="https://twitter.com/mizuharu_photo" target="_blank">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
                <!-- <div class="form">
                    <p>ポートフォリオについて</p>
                    <p>今後のポートフォリオの参考にさせて頂きますので、</p>
                    <p>ご感想（良かった所、悪かった所）、また改善点など</p>
                    <p>思いついたことがあればご記入ください。</p>
                    <form action="./index.html" method="post">
                        <div class="flex">
                            <p>お名前</p>
                            <p><input type="text" name="fullname" value="" placeholder="例）水俣春輝"></p>
                        </div>
                        <div class="flex">
                            <p>メール</p>
                            <p><input type="email" name="email" value="" placeholder="例）mizuharu35@gmail.com"></p>
                        </div>
                        <div class="flex">
                            <p>感　想</p>
                            <p><textarea name="message" id="form" cols="30" rows="10"></textarea></p>
                        </div>
                        <p class="send"><input type="submit" name="confirm" value="確認"></p>
                    </form>
                </div> -->
                <div class="form">
                    <p>ポートフォリオについて</p>
                    <p>今後のポートフォリオの参考にさせて頂きますので、</p>
                    <p>ご感想（良かった所、悪かった所）、また改善点など</p>
                    <p>思いついたことがあればご記入ください。</p>
                    <?php if( $mode == 'input' ){ ?>
                    <!-- 入力画面 -->
                    <form action="#Contact" method="post">
                        <div class="flex">
                            <p>お名前</p>
                            <p><input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" placeholder="例）水俣春輝"></p>
                        </div>
                        <div class="flex">
                            <p>メール</p>
                            <p><input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="例）mizuharu35@gmail.com"></p>
                        </div>
                        <div class="flex">
                            <p>感　想</p>
                            <p><textarea name="message" id="form" cols="30" rows="10"><?php echo $_SESSION['message'] ?></textarea></p>
                        </div>
                        <p class="send"><input type="submit" name="confirm" value="確認"></p>
                    </form>
                    <?php } else if( $mode == 'confirm' ){ ?>
                    <!-- 確認画面 -->
                    <form action="#Contact" method="post">
                        名前:    <?php echo $_SESSION['fullname'] ?><br>
                        Eメール: <?php echo $_SESSION['email'] ?><br>
                        メッセージ内容:<br>
                        <?php echo nl2br($_SESSION['message']) ?><br>
                        <input type="submit" name="back" value="戻る">
                        <input type="submit" name="send" value="送信">
                    </form>
                    <?php } else { ?>
                        <!-- 完了画面 -->
                        送信しました。メッセージありがとうございました。<br>
                    <?php } ?>
                    </div>
                <!-- <div class="form">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc9D13-31jQwGkubgAxJPNp7DCDMFZk9cQADu_Lv3JKyO4tng/viewform?embedded=true" width="640" height="800" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
                </div> -->
            </section>
            <div class="top-button">
                <a class="return_top" href="#top"><i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>