<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mybbs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
        <h1>My BBS</h1>
        </div>
        <div class="links">
        <ul>
            <li><a href="home-jp.php">ホーム</a></li>
            <li> <a href="mybbs-jp.php">掲示板</a></li>
            <li> <a href="home-en.php">EN</a></li>
        </ul>
        </div>
       

    </header>

    <div class="main-content">
    
    <div class="homepage-box">
            <div class="post">
                <div class="welcome-message">
                <h1>MyBBSへようこそ</h1>
                <h3>掲示板は <a href="mybbs-jp.php">こちら</a>をクリックしてください。</h3>
                <h3>Click <a href="home-en.php">here</a> to visit the English page</h3>
                </div>

                <div>
                    <h2>My progress</h2>
                    <div class="daily-log">
                        <h4>３月１０日（金）</h4>
                        <p>課題説明会終わったあと、計画を詳しく考えた。PHPとM y SQLをプロジェクトで使うのが初めてで分からないことばかりので、とりあえず簡単なデザインから始めた。そして、そのデザインをHTMLとCSSで作ってみると決めた。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-簡単な計画を作る</li>
                                <li>-デザインを描く</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>1時間</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>３月１１日（土）March 11th, 2023</h4>
                        <p>昨日描いたデザインをHTMLで作った。そして、PHPでBBSを作りには論理的にどのような流れだろうと考えてみた。それで以下の流れとなった:</p>
                        <ol>
                            <li>1. データーベースと繋ぐ</li> <br>
                            <li>2. Whileループで各ポストのデータを引く</li><br>
                            <li>3. そのデータを”content-box”というdivに入れる</li><br>
                        </ol>
                        <br>
                        <p>この中で、やり方分からないのがあるので明日を学習に集中すると決めた。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-描いたデザインをHTMLで作る</li>
                                <li>-知識不足している部分を指して学習計画作る</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>2.5時間</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>３月１２日（日）</h4>
                        <p>今日は学習しました。CodecademyでPHPコースの役に立ちそうなレッスンを学んだ。主にループとデータベースの練習した。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-学習</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>4時間</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>３月１３日（月）</h4>
                        <p>ローカルで開発するためにMAMPをインストールした。MAMP使う経験がなかったために２時間ぐらい使い方を学んだ。それから、ローカルのデーターベースに繋ぐことことを目標とした。少し時間かかったけど成功できた。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-学習</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>2.5時間</p>
                        </div>
                    </div>
                  

                    <div class="daily-log">
                        <h4>３月１４日（火）</h4>
                        <p>今日は、もうデータベスにあるポストをSQLで引き、”content-box”の適当のところに入れることを目標とした。Echoと”{$variable}”を使ったら入れれるはずと思ったけど、何回もエラーが出てきた。そして、「””」を 「‘’」に変えたり、色々試してけどエラーが続いた。それで、コンカティネイトを使ってみた。ストリングが長くて複雑なので正しくするのが難しかったけど結局成功できた。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-データーベースからデータを使うようになる</li>
                                <li>-そのデータを正しいところに入れること</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>3時間</p>
                        </div>
                    </div>


                    <div class="daily-log">
                        <h4>３月１５日（水）</h4>
                        <p>今日の目標は記入されたフォームのデータをデータベースに送ること。昨日と比べて楽だった。データベースへの送信はすぐできたけど、BBSをリフレッシュするたびにそのデータがもう一度データーベースに届かれると気づいた。PHPのheader()でリロードすればその問題避けれるかもしれないと思ったけど、それも無理だった。それで最も良い方法は違うページへリダイレクトすると思ったので”thank-you.php”のページを作った。でも、"header('Location: thank-you.php')" でリダイレクトも成功しなかった。</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-フォームのデータをデータベースに送ること</li>
                                <li>-"thank-you.php"確認ページの作成</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>4時間</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>３月１６日（木）</h4>
                        <p>今まで、日本語で作るべくページを英語で開発しているときづいた。今まで作ったページを日本語にするだけでちょっともったいないと思ったので、バイリンガルで作ることを決めた。Headerに「日本語」と「EN」のボタンを作って、ユーザーが簡単に変えれることにした。それ終わって、最後にリフレッシの問題と取り組んだ。何回調べても「Header使ったらいい」しかでてこなったのでどこかで書き間違えたかどうかを確認してたけど、何しても上手く進まなかった。それで、フォームのactionを使って、”thank-you.php”のページでデータベースへ送る方が簡単と気付いた。それでBBSのシステムがスムーズに使えるようになった！</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-バイリンガル化</li>
                                <li>-リダイレクトできるようになる</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>5 Hours</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>月１６日（金）</h4>
                        <p>今日は締切日。少し時間が残っていたので、この活動記録をホームページに追加した。そして、最後のチェック終わってから<a href="https://github.com/ryanortizwilliams/mybbs">github</a>にアップした。
</p>
                        <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-活動記録の追加</li>
                                <li>-githubにアップする</li>
                                <li>-最終確認</li>
                            </ul>
                            <h4>Total Time:</h4>
                            <p>4時間</p>
                        </div>
                    </div>
                    





                </div>

                <div class="reflection">
                    <h2>感想</h2>
                    <div class="what-i-learned">
                        <h4>何学んだのか?</h4>
                        <p>
この課題やってから、PHPを使う自身が少しついた。覚えたばかりのに課題を一人で最後までやり切ったと達成感があった。バックエンドを触るのも初めてなので、データベースなどの理解深めた。</p>
                    </div>
                    <div class="improve">
                        <h4>これから頑張ること</h4>
                        <p>SQLとPHPを一緒に使う自身がまだない。データベースに繋ぐことができたけど、もう一度するとした、また調べないといけないことがあると思う。これから、何も調べずにMySQLを使いこなせるようになりたい。</p>
                        <p>そして、この課題に追加したことがある。例えば：</p>
            
                        <ul>
                            <li>-ページング</li>
                            <li>-削除、編集機能</li>
                            <li>-返事のシステム</li>
                            <li>-ログインシステム</li>
                        </ul>
                    </div>

                    <div class="conclusion">
                            <h4>できたこと:</h4>
                            <ul>
                                <li>-SQLでデーターベースを使う</li>
                                <li>-バイリンガルのページを作る</li>
                                <li>-一人で課題完成できた</li>
                            </ul>
                            <h4>かかった時間:</h4>
                            <p>26時間</p>
                        </div>


                </div>
                    


            </div>

        

    </div>

</body>
</html>