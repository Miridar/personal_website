<!DOCTYPE html>
<html>

<head>
    <title>Steidler | Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    
    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

    <main>
        <div class="container">
            <h1>Contact Me</h1>
            <div class="paragraph">Thank you for visiting my website. I appreciate your interest in my work and hobbies. If you have any
                feedback, suggestions, or questions for me, please feel free to contact me using the form below or by
                emailing me at <a href="mailto:martin@steidler.cz">martin@steidler.cz</a>. I would also love to hear
                from you if you are interested in
                collaborating on any exciting projects!
            </div>
            <div class="form-image">
                <img src="images\robot-with-mailbox.png" alt="Robot with Mailbox">
                <form action="/submit_form" method="post">
                    <label for="name">*Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">*Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="subject">*Subject:</label>
                    <input type="subject" id="subject" name="subject" required>

                    <label for="message">*Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <div class="g-recaptcha" data-sitekey="6Lc6UR4pAAAAAIYcwvI2YpEGIpXZgOkIhXjuD9G4" data-callback="enableBtn"></div>
                    <button type="submit" id="submitBtn" disabled>Submit</button>
                </form>
            </div>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

    <script src="javascript\textarea.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>

</html>