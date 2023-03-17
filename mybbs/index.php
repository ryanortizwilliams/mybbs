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
            <li><a href="home-en.php">Home</a></li>
            <li> <a href="#">Forum</a></li>
            <li> <a href="mybbs-jp.php">日本語</a></li>
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
                        <p>Posted by '.$user_name.'</p>
                        <p class="post-time">'.$post_date.'</p>
                    </div>
                    <div class="content">
                        <p>'.$post_text.'</p>
                    </div>

                    <div class="actions">
                        <a href="#">Reply</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a>
                    </div>
                </div>         
            </div>';
        }
    }
    ?>

        <div class="content-box">
            <div class="post">
                <div class="user-info">
                    <p>Posted by <span class="user"> User </span></p>
                </div>
                <div class="content">
                    <p>This is a test post written in pure HTML</p>
                </div>

                <div class="actions">
                    <a href="#">Reply</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </div>

            <div class="post">
                <div class="user-info">
                    <p>Commented by User</p>
                </div>
                <div class="content">
                    <p>This is a test comment written in HTML to demonstrate how comments would appear if implemented</p>
                </div>

                <div class="actions">
                    <a href="#">Reply</a>
                    <a href="#">Edit</a>
                    <a href="#">Delete</a>
                </div>
            </div>
        </div>

        <div class="post-form">
            <form method="POST" action="thank-you-en.php">
                <label for="username">Name</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="post_text">Message</label><br>
               <textarea name="post_text" id="post_text" cols="30" rows="10"></textarea><br>
               <input type="submit" name= "submit" value="Submit">
            </form>

        </div>
       

    </div>

</body>
</html>