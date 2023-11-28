<!DOCTYPE html>
<html>

<head>
    <title>Šteidler | Curriculum Vitae</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/curriculum-vitae-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT']."/header.php"; ?>

    <main>

        <section class="character-sheet">
            <img class="dice-img" src="images\curriculum_vitae\dice1.png" alt="Dice 1">
            <img class="pencil-img" src="images\curriculum_vitae\pencil.png" alt="Pencil">
            <div class="heading">
                <h1>Character Sheet</h1>
            </div>
            <section class="character-info">
                <h2 class="section-heading">Character Information</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Current Fraction</th>
                    </tr>
                    <tr>
                        <td>Martin Šteidler</td>
                        <td>IT Analyst</td>
                        <td>ČSOB</td>
                    </tr>
                    <tr class="space">
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Level</th>
                        <th>Race</th>
                        <th>Alignment</th>
                    </tr>
                    <tr>
                        <td id="level"></td>
                        <td>Human</td>
                        <td>Neutral Good</td>
                    </tr>
                    <tr class="space">
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <th>Background</th>
                        <th>Nationality</th>
                        <th>Personality Type</th>
                    </tr>
                    <tr>
                        <td>Self-taught</td>
                        <td>Czech</td>
                        <td>INTJ</td>
                    </tr>
                </table>
            </section>

            <section class="portrait">
                <h2>Portrait</h2>
                <img src="images/curriculum_vitae/portrait.jpg" alt="Portrait of Martin Šteidler">
            </section>

            <section class="attributes">
                <h2>Attributes</h2>
                <div class="attributes-list">
                    <div class="attribute-box">
                        <div class="attribute-text">Strength</div>
                        <div class="attribute-number">12</div>
                    </div>
                    <div class="attribute-box">
                        <div class="attribute-text">Dexterity</div>
                        <div class="attribute-number">8</div>
                    </div>
                    <div class="attribute-box">
                        <div class="attribute-text">Constitution</div>
                        <div class="attribute-number">11</div>
                    </div>
                    <div class="attribute-box">
                        <div class="attribute-text">Intelligence</div>
                        <div class="attribute-number">15</div>
                    </div>
                    <div class="attribute-box">
                        <div class="attribute-text">Wisdom</div>
                        <div class="attribute-number">13</div>
                    </div>
                    <div class="attribute-box">
                        <div class="attribute-text">Charisma</div>
                        <div class="attribute-number">11</div>
                    </div>
                </div>

            </section>

            <section class="proficiencies-languages">
                <h2 class="section-heading">Proficiencies and Languages</h2>
                <div class="proficiencies-languages-box">
                    <div class="proficiencies">
                        <h3>Proficiencies</h3>
                        <ul>
                            <li>Project Implementation and Completion</li>
                            <li>Documentation</li>
                            <li>System Design and Maintenance</li>
                            <li>Prompt Engineering</li>
                            <li>Cybersecurity and Protection</li>
                            <li>Multidisciplinarity</li>
                        </ul>
                    </div>
                    <div class="languages">
                        <h3>Languages</h3>
                        <table>
                            <tr>
                                <td>&#8226;</td>
                                <td>Czech</td>
                                <td>★★★★★</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>English</td>
                                <td>★★★★☆</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>Spanish</td>
                                <td>★★☆☆☆</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>UML</td>
                                <td>★★★★☆</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>C#</td>
                                <td>★★★☆☆</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>Java</td>
                                <td>★★☆☆☆</td>
                            </tr>
                            <tr>
                                <td>&#8226;</td>
                                <td>Python</td>
                                <td>★★☆☆☆</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            <section class="features">
                <h2 class="section-heading">Features and Traits</h2>
                <ul>
                    <li><strong>Adaptability:</strong> Thrives in various environments and quickly masters new
                        technologies and paradigms.</li>
                    <li><strong>Problem-Solving:</strong> Excellent analytical skills, with a proven track record of
                        deciphering complex problems and delivering effective solutions.</li>
                    <li><strong>Creativity:</strong> Innovative thinker, often sees out-of-the-box solutions that
                        others miss.</li>
                    <li><strong>Determination:</strong> Persistent in the face of challenges, always striving to
                        complete tasks to the highest standard.</li>
                    <li><strong>Initiative:</strong> Takes action without being prompted, proactively seeking
                        opportunities and challenges.</li>
                    <li><strong>Collaboration:</strong> Works well with others, respecting different perspectives and
                        contributing to the team’s success.</li>
                </ul>

            </section>
        </section>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT']."/footer.php"; ?>

    <script src="javascript\calculateLevel.js"></script>

</body>

</html>