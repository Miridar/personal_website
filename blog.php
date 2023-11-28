<!DOCTYPE html>
<html>

<head>
    <title>Šteidler | Blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\blog-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

    <main>
        <div class="blog-posts">
            <a href="blogPosts\why-i-quit-my-university-studies.php" class="post-block">
                <img src="images\blog\robot-infront-university.jpg" alt="Sad Robot Standing in front of a University">
                <div>
                    <div class="post-header"><b>Why I Quit my University Studies</b></div>
                    <div class="post-date">12. 12. 2023</div>
                    <div class="post-text">
                        I’ve always loved learning new stuff, especially anything related to IT. But a few
                        weeks ago, made a decision that . . .
                    </div>
                    <div class="read-more"><b>Read more</b></div>
                </div>
            </a>
            <a href="blogPosts\why-i-decided-to-create-my-own-personal-website.php" class="post-block">
                <img src="images\blog\robot-behind-desk-2.jpg" alt="Robot Behind a Desk">
                <div>
                    <div class="post-header"><b>Why I Decided to Create My Own Personal Website</b></div>
                    <div class="post-date">22. 11. 2023</div>
                    <div class="post-text">
                        Hi there! This is my first blog post and I'm glad that you're reading it on my personal website.
                        This is a place where I can show you who I am, what . . .
                    </div>
                    <div class="read-more"><b>Read more</b></div>
                </div>
            </a>
            <a href="blogPosts\why-i-decided-to-create-my-own-personal-website.php" class="post-block">
                <img src="images\blog\robot-behind-desk-2.jpg" alt="Robot Behind a Desk">
                <div>
                    <div class="post-header"><b>Why I Decided to Create My Own Personal Website</b></div>
                    <div class="post-date">22. 11. 2023</div>
                    <div class="post-text">
                        Have you ever wondered what it would be like to have your own personal website? A place where
                        you can . . .
                    </div>
                    <div class="read-more"><b>Read more</b></div>
                </div>
            </a>
            <!-- No more posts bellow this one -->
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

</body>

</html>