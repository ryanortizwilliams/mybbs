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
            <li> <a href="index.php">掲示板</a></li>
            <li> <a href="mybbs-jp.php">EN</a></li>
        </ul>
        </div>
       

    </header>

    <div class="main-content">
    
    <div class="thank-you">
        <h1>投稿ありがとうございます!</h1>
        <p> ホームプーじ戻るために<a href="#">ここ</a>をクリックしください！それとも、掲示板へ直接戻るため、<a href="mybbs-jp.php">ここ</a>をクリックしてくだし！
           
    </div>

        

    </div>
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

        
        if (isset($_POST['submit'])){
            //set variables for each form area
            
            $username = $_POST['username'];
            $post_text = $_POST['post_text'];
            $datetime = date('Y-m-d H:i:s');

         
            
            //insert data into database

            $sql = "INSERT INTO posts (post_name, post_date, post_text) VALUES ('$username', '$datetime', '$post_text')";

            if (mysqli_query($conn, $sql)){
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
        
        }
        
            //closer connection
            mysqli_close($conn);
        
        ?>


</body>
</html>