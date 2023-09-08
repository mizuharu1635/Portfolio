<?php
define('MODE_INITIAL', 0);  //初期モード
define('MODE_CONFIRM', 1);  //確認モード
define('MODE_REDISP', 2);   //再表示モード
define('MODE_REGIST', 3);   //送信モード
//処理モード取得
$intMode = MODE_INITIAL;
if (isset($_POST["mode"]) == true && $_POST["mode"] != "") {
    $intMode = intval($_POST["mode"]);
}

//名前とメールアドレス取得
$strName = "";
$strMail = "";
$strMessage = "";
if ($intMode == MODE_CONFIRM || $intMode == MODE_REDISP || $intMode == MODE_REGIST) {

    //  $_POSTから名前の取得
    if (isset($_POST["name"]) == true && $_POST["name"] != "") {
        $strName = $_POST["name"];
    }

    //  $_POSTからメールアドレスの取得
    if (isset($_POST["mail"]) == true && $_POST["mail"] != "") {
        $strMail = $_POST["mail"];
    }

    // $_POSTからメッセージの取得
    if (isset($_POST["message"]) == true && $_POST["message"] !="") {
        $strMessage = $_POST["message"];
    }
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
    <div class="up"></div>
    <div class="down"></div>
    <div class="line"></div>
    <header id="top">
        <div class="nav">
            <ul class="list">
                <li><a href="#About">About</a></li>
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
                    <p>笑うと目が消えるってよく言われます。</p>
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

            <section class="Portfolio">
                <h2 id="Portfolio">Portfolio</h2>
                <div class="work-box">    
                    <div class="portfolios">
                        <article class="works">
                            <div class="work">
                                <a href="#top" target="_blank"><img src="images/portfolio-photo1.webp" alt="ポートフォリオサイト"></a>
                            </div>
                            <div class="caption">
                                <p>My Portfolio</p>
                                <p>使用した言語</p>
                                <p>HTML, SCSS, JavaScript, php</p>
                                <p>制作時間:45時間</p>
                                <p>GitHubは<a href="https://github.com/mizuharu1635/Portfolio.git" target="_blank">こちら</a></p>
                            </div>
                        </article>
                        <article class="works">
                            <div class="work">
                                <a href="https://watspr.conohawing.com/harukigram/" target="_blank"><img src="images/portfolio-photo2.webp" alt="Harukigram"></a>
                            </div>
                            <div class="caption">
                                <p>Harukigram</p>
                                <p>使用した言語</p>
                                <p>HTML, CSS</p>
                                <p>制作時間:5時間</p>
                                <p>GitHubは<a href="https://github.com/mizuharu1635/harukigram.git" target="_blank">こちら</a></p>
                            </div>
                        </article>
                    </div>
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
                <div class="form">
                    <p>ポートフォリオについて</p>
                    <p>今後のポートフォリオの参考にさせて頂きますので、</p>
                    <p>ご感想（良かった所、悪かった所）、また改善点など</p>
                    <p>思いついたことがあればご記入ください。</p>
                    <?php
                    if ($intMode == MODE_INITIAL || $intMode == MODE_REDISP) {
                    //  初期モード、再表示モードの場合
                     ?>
                    <!-- 入力画面 -->
                    <form action="#Contact" method="post">
                        <div class="flex">
                            <p>お名前</p>
                            <p><input type="text" name="name" value="<?php echo $strName; ?>" placeholder="例）水俣春輝"></p>
                        </div>
                        <div class="flex">
                            <p>メール</p>
                            <p><input type="email" name="mail" value="<?php echo $strMail; ?>" placeholder="例）mizuharu35@gmail.com"></p>
                        </div>
                        <div class="flex">
                            <p>感　想</p>
                            <p><textarea name="message" id="form" cols="30" rows="10"><?php echo $strMessage; ?></textarea></p>
                        </div>
                        <input type="hidden" name="mode" value="<?php echo(MODE_CONFIRM); ?>">
                        <p class="form-btn"><input type="submit" name="confirm" value="確認"></p>
                    </form>
                    <?php } else if($intMode == MODE_CONFIRM) { 
                    //確認画面の場合    
                    ?>
                    <h1>確認画面</h1>
                    <?php
                        echo "名前: ".$_POST["name"]."<br>";
                        echo "メールアドレス: ".$_POST["mail"]."<br>";
                        echo "メッセージ内容: ".$_POST["message"]."<br>";
                    ?>
                    <div class="form-action-btn">
                        <form action="#Contact" method="post">
                            <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
                            <input type="hidden" name="mail" value="<?php echo $_POST["mail"]; ?>">
                            <input type="hidden" name="message" value="<?php echo $_POST["message"]; ?>">
                            <input type="hidden" name="mode" value="<?php echo(MODE_REDISP); ?>">
                            <p class="form-btn"><input type="submit" name="back" value="←戻る"></p>
                        </form>
                        <form action="#Contact" method="post">
                            <input type="hidden" name="name" value="<?php echo $_POST["name"]; ?>">
                            <input type="hidden" name="mail" value="<?php echo $_POST["mail"]; ?>">
                            <input type="hidden" name="message" value="<?php echo $_POST["message"]; ?>">
                            <input type="hidden" name="mode" value="<?php echo(MODE_REGIST); ?>">
                            <p class="form-btn"><input type="submit" name="send" value="送信→"></p>
                        </form>
                    </div>
                    <?php
                    } else if ($intMode == MODE_REGIST) {
                        //登録モードの場合
                        $strName    = $_POST["name"];
                        $strMail    = $_POST["mail"];
                        $strMessage = $_POST["message"];

                        $message = "メッセージを受け付けました。\r\n"
                                 . "名前:" . $strName . "\r\n"
                                 . "mail:" . $strMail . "\r\n"
                                 . "メッセージ内容:\r\n"
                                 . preg_replace("/\r\n|\r|\n/", "\r\n", $strMessage);
                        mail($strMail, 'メッセージを送っていただきありがとうございます。', $strMessage);
                        mail('mizuharu35@gmail.com', 'メッセージを送っていただきありがとうございます。', $strMessage);
                        $strName    = "";
                        $strMail    = "";
                        $strMessage = "";
                    ?>
                    
                    <!-- 完了画面 -->
                    <h1>送信しました。メッセージありがとうございました。<br></h1>
                    <a href="index.php" class="return-btn">topに戻る</a>

                    <?php
                    }
                    ?>
                </div>
            </section>
            <div class="top-button">
                <a class="return_top" href="#top"><i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>