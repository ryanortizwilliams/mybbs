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
            <li><a href="#">Home</a></li>
            <li> <a href="index.php">Forum</a></li>
            <li> <a href="home-jp.php">日本語</a></li>
        </ul>
        </div>
       

    </header>

    <div class="main-content">
    
    <div class="homepage-box">
            <div class="post">

                <div class="welcome-message">
                <h1>Welcome to the MyBBS Page</h1>
                <h3>Click <a href="index.php">here</a> to visit the forums in English</h3>
                <h3>日本語のページは <a href="home-jp.php">こちら</a>をクリックしてください</h3>
                </div>

                 
                <div class="about">
                    <h2>So What is this page?</h2>
                    <p>This is a simple BBS(Bulletin Board System) using HTML, PHP and MySQL. The user interface can be viewed in either Japanese or English. </p>

                </div>

                <div>
                    <h2>My progress</h2>
                    <div class="daily-log">
                        <h4>March 10th, 2023</h4>
                        <p>After recieving this as an assignment, I decided to sit down and write a plan. This is my first project using PHP and MySQL so there was bound to be many things I dont know. I decided that I would start by drawing a simple design for the BBS system. After that I would aim to code it in pure HTML first.</p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Make basic plan</li>
                                <li>-Draw up initial design</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>1 Hour</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>March 11th, 2023</h4>
                        <p>I coded the inital design in pure HTML. After that, I started to think about how a BBS system in PHP would work theoretically. After thinking for some time I came up with this flow for making posts:</p>
                        <ol>
                            <li>1. Connect to the database using SQL</li> <br>
                            <li>2. Use a while loop to fetch each post's information</li><br>
                            <li>3. Insert that information into the "content-box" div</li><br>
                        </ol>
                        <br>
                        <p>There's a lot of things here that I don't know how to do so I will dedicate the next day to studying.</p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Code up the design in HTML</li>
                                <li>-Figure out what I need to learn</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>2.5 Hours</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>March 12th, 2023</h4>
                        <p>Today I only studied. I worked through units that seemed relevant in Codecademy's PHP course and reviewed While and For loops in PHP.</p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Study</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>4 Hours</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>March 13th, 2023</h4>
                        <p>Today, I installed MAMP so I can work on a local server. I had never used MAMP before so I spent a couple hours learning about it. My only goal for today was to be able to succesfully connect to the server using PHP. It took a bit of time but I finally was able to connect successfuly. After that, I tried to pull information from the database but I couldn't get it to work properly.That will be my next goal.</p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Study</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>2.5 Hours</p>
                        </div>
                    </div>
                  

                    <div class="daily-log">
                        <h4>March 14th, 2023</h4>
                        <p>Today I just wanted to get the test post information that was already in the database and insert it into the content box. in theory using echo and inserting the data into a string using "{$variable}" should work but I was getting errors every time. I thought maybe there was an issue of using double quotes inside of double quotes so I used string concatenation instead of having one large string. It was difficult to get such a long string concated correctly but I eventually got it.  </p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Pull information from the database</li>
                                <li>-Insert that information into the correct post format</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>3 Hours</p>
                        </div>
                    </div>


                    <div class="daily-log">
                        <h4>March 15th, 2023</h4>
                        <p>Today's main goal is to send data from the form to the database. Compared to yesterday, this was much easier. I was able to get the data to send to the database without issue. However, after refreshing the page, the same information would be sent to the database again causing duplicate posts. I then tried to use the "header()" function to reload the page without duplication but that also didn't work. So I decided the best way would be to redirect to a different page so I created the "thank-you.php" page. However using  "header('Location: thank-you.php')" Did not succesfully redirect it either.   </p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Send data from the form to the database</li>
                                <li>-Create the "thank-you.php" confirmation page</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>4 Hours</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>March 16th, 2023</h4>
                        <p>Today I realized that I've been coding this project in English when it should be in Japanese. It wouldn't be too much work to have the page be bilingual so I duplicated each page I made and translated everything into Japanese. I then added the "日本語" and "EN" links to the header so the user can switch between the two on any page. Then there was the final boss: The Redirecting Issue. Every search I came up with advised me to use the header() function. I checked for misspellings, I tried using single quotes, double quotes, changing the spacing afer "the Location:" part. Nothing was working correctly. Then I realized the simplist(and probably correct) answer was to just use the "action:" parameter in the form to redirect and post the information to the database from there. This finally worked and the BBS system was working properly!  </p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Make the pages bilingual</li>
                                <li>-Redirect the user to the confirmation page succesfully</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>5 Hours</p>
                        </div>
                    </div>

                    <div class="daily-log">
                        <h4>March 17th, 2023</h4>
                        <p>Today is the duedate for this project. I still had a little time so I decided to add this log of my work to the home page. Before it was just the inital "welcome" message at the top but it seemed a little boring. Afterthat I checked everything and uploaded the code to <a href="https://github.com/ryanortizwilliams/mybbs">github</a>.</p>
                        <div class="conclusion">
                            <h4>Things accomplished:</h4>
                            <ul>
                                <li>-Add progress log to homepage</li>
                                <li>-Upload to github</li>
                                <li>-Final Check</li>
                            </ul>
                            <h4>Total Time:</h4>
                            <p>4 Hours</p>
                        </div>
                    </div>
                    





                </div>

                <div class="reflection">
                    <h2>Reflection</h2>
                    <div class="what-i-learned">
                        <h4>What did I learn?</h4>
                        <p>After doing this project, I feel a lot more comfortable using PHP. For having only just learned it, I feel very accomplished having completed this project on my own. It is also my first time interacting with the backend for a project using MySQL so I now have a better understanding of how databases work.</p>
                    </div>
                    <div class="improve">
                        <h4>What can I improve?</h4>
                        <p>I still don't feel very confident using SQL and PHP together. I was able to successfully connect to the database as well as pull and post data. But I think if I have to do it again, I might need to search some things again. I'd like to be able to do it without searching so much.</p>
                        <p>I'd also like to try to impement more features into the system such as:</p>
                        <ul>
                            <li>-Paging</li>
                            <li>-Functional delete and edit buttons</li>
                            <li>-A reply system</li>
                            <li>-A login system</li>
                        </ul>
                    </div>

                    <div class="conclusion">
                            <h4>Things accomlished:</h4>
                            <ul>
                                <li>-Manipulate databases using MySQL</li>
                                <li>-Created a bilingual site</li>
                                <li>-Comlete the project without outside help</li>
                            </ul>
                            <h4>Time it took:</h4>
                            <p>26 Hours</p>
                        </div>


                </div>
                    
        

    

            </div>
        

    </div>

</body>
</html>