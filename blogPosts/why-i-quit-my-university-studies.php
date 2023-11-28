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
            <h1 class="post-title">Why I Quit my University Studies</h1>
            <hr>
            <div class="paragraph-with-image">
                <div class="text">
                    I’ve always loved learning new stuff, especially anything related to IT. But a few
                    weeks ago, made a decision that might seem (un)surprising to some people: I quit my
                    university studies. I didn’t just do it on a whim, but after thinking hard about what I really want
                    and need. I’m going to tell you why I made this choice and what I’m going to do next.
                </div>
                <img class="image" src="..\images\blog\robot-infront-university.jpg" alt="Sad Robot Standing in front of
                    a University">
            </div>
            <p class="paragraph">
                The main reason why I quit university was that I felt it was a waste of time. I was spending
                hours on assignments and lectures that didn’t teach me anything new or useful for my career goals.
                I wanted to learn at my own speed and pick the topics that I was interested in and that mattered. I think that the world (and
                especially IT industry) is changing rapidly every year and what we learn in university is not really relevant.
                For example, why should I learn how to use old technologies like Java or SQL when I can learn how to use
                newer technologies like Python or MongoDB? Why should I memorize the syntax of different languages when I
                can just Google it or use ChatGPT? It’s like travelling by horse in the age of cars. I like
                to work smart and use technologies to make my work easier, which is the opposite of what university teaches.
            </p>
            <img class="image" src="..\images\blog\car-vs-horse.jpg" alt="Robot in a Car and Robot on a Horse">
            <p class="paragraph">
                Of course, I didn’t just end my studies without thinking about the consequences. I thought
                about some of the benefits of finishing university, like getting a degree, having a network of friends and
                teachers and having more credibility in the job market. But I realized that these benefits were not
                that important to me and that I could get them in other ways. For example, I can get certificates or
                badges from online courses or platforms, I can network with other learners and professionals through
                social media like LinkedIn or Twitter, and I can show off my skills and projects through my website or
                refs.
            </p>
            <p class="paragraph">
                So, I decided to focus my time and energy on learning and building something else. I
                want to follow my own projects and passions, and learn from the best resources and mentors online. 
                I think this is the best way for me to grow as a learner and as a person. I’m not saying that this is the right
                choice for everyone, but it is the right choice for me. I respect and admire anyone who chooses to stay
                in university, and I hope that they are happy and fulfilled in their journey. I also hope that you will support
                and encourage me in my journey, and that we can learn from each other along the way. Thanks for reading.
            </p>
            <p id="post-date" class="post-date"></p>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

    <script src="javascript\date-format.js"></script>
    <script>
        document.getElementById("post-date").innerHTML = formatDate("2023-12-12");
    </script>

</body>

</html>