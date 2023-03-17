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
            <li> <a href="#">掲示板</a></li>
            <li> <a href="index.php">EN</a></li>
        </ul>
        </div>
       

    </header>

    <div class="main-content">
    
    
    
        <?php
    
   // database information
    $servername = "mysql1.php.xdomain.ne.jp";
    $username  = "ryanortiz_user";
    $password = "Ikininone1";
    $dbname = "ryanortiz_db";

    // create connection 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // check connection
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo " ";
    }

    // select data
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);

    // fetch data

    if(mysqli_num_rows($result) > 0){

        // output data for each row
        while($row = mysqli_fetch_assoc($result)){

            $user_name = $row["post_name"];
            $post_date = $row["post_date"];
            $post_text = $row["post_text"];

            echo '<div class="content-box">
                <div class="post">
                    <div class="user-info">
                        <p>投稿者： '.$user_name.'</p>
                        <p class="post-time">'.$post_date.'</p>
                    </div>
                    <div class="content">
                        <p>'.$post_text.'</p>
                    </div>

                    <div class="actions">
                        <a href="#">返事</a>
                        <a href="#">編集</a>
                        <a href="#">削除</a>
                    </div>
                </div>         
            </div>';
        }
    }
    ?>

        <div class="content-box">
            <div class="post">
                <div class="user-info">
                    <p>投稿者： <span class="user"> ユーザー名 </span></p>
                </div>
                <div class="content">
                    <p>これはHTMLで書いてあるテスト投稿です。</p>
                </div>

                <div class="actions">
                    <a href="#">返事</a>
                    <a href="#">編集</a>
                    <a href="#">削除</a>
                </div>
            </div>

            <div class="post">
                <div class="user-info">
                    <p>コメント： User</p>
                </div>
                <div class="content">
                    <p>これはHTMLで書いてあるコメントの見本です。</p>
                </div>

                <div class="actions">
                    <a href="#">返事
                    </a>
                    <a href="#">編集</a>
                    <a href="#">削除</a>
                </div>
            </div>
        </div>

        <div class="post-form">
            <form method="POST" action="thank-you-jp.php">
                <label for="username">名前</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="post_text">本文</label><br>
               <textarea name="post_text" id="post_text" cols="30" rows="10"></textarea><br>
               <input type="submit" name= "submit" value="投稿">
            </form>

        </div>



    </div>

</body>
</html>