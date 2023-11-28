<!DOCTYPE html>
<html>

<head>
    <title>Šteidler | Blog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/post-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

    <main>
        <div class="post">
            <h1 class="post-title">Why I Decided to Create My Own Personal Website</h1>
            <hr>
            <div class="paragraph-with-image">
                <div class="text">
                    Hi there! This is my first blog post and I'm glad that you're reading it on my personal website.
                    This is a place where I can show you who I am, what I do, and what I love. A place where I can be myself, have fun, and share my thoughts. A
                    place where I can meet new people, learn new things, and grow my network. In this blog post, I want
                    to tell you why I decided to create my own personal website and why you should too.
                </div>
                <img class="image" src="..\images\blog\robot-behind-desk-2.jpg" alt="Robot Behind a Desk with a Cat">
            </div>
            <p class="paragraph">
                Creating my own personal website was not only a fun and creative process, but also a
                great learning opportunity. I learned (and still am learning) how to use HTML, CSS, and JavaScript to
                design and develop my website, and how to use SEO and social media to promote my website. I’m also
                learing how to write engaging and informative blog posts, and how to use images and videos to enhance my
                content.
            </p>
            <p class="paragraph">
                One of the main reasons why I created my own personal website is that it allows me to
                show off my skills and achievements to the world. I can use my website as a portfolio of my work, as a
                resume of my education and experience, and as a proof of my passion and dedication. I can also use my
                personal website as a way to share my opinions, insights, and perspectives on various topics that
                interest me, such as technology, education, books and many others.
            </p>
            <img class="image" src="..\images\blog\robots-shaking-hands.jpg" alt="Two Robots Shaking Hands">
            <p class="paragraph">
                Another reason why I created my own personal website is that it helps me to connect
                with other people who share my interests, goals, and values. I can use my website to reach out to people
                who I admire, who I want to learn from, or who I want to work with.
            </p>
            <p class="paragraph">
                Creating my own personal website has been a great decision.
                It has helped me to learn new skills, to show my work, and to connect with others. It has also given me
                a lot of satisfaction, pride, and joy. I encourage you to create your own personal website too, if you
                haven’t already. It is a rewarding and enjoyable experience that can open up many opportunities for you.
                Thank you for reading and I hope to see you again soon!
            </p>
            <p id="post-date" class="post-date"></p>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

    <script src="javascript\date-format.js"></script>
    <script>
        document.getElementById("post-date").innerHTML = formatDate("2023-11-10");
    </script>

</body>

</html>