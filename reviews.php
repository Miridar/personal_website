<?php
include 'includes/dbh.inc.php';

function getReviews($section)
{
    global $pdo;
    $sql = "SELECT section, title, year, creator, rating, review FROM reviews WHERE section = :section ORDER BY year DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['section' => $section]);
    return $stmt->fetchAll();
}

function displayReviews($reviews, $isMovie = false)
{
    foreach ($reviews as $row) {
        // Generate and echo the HTML for each review...
        echo '<div class="dropdown">';
        if ($row['year'] != "") {
            echo '<div class="title"><b>' . $row['title'] . '</b> (' . $row['year'] . ')</div>';
        } else {
            echo '<div class="title"><b>' . $row['title'] . '</b></div>';
        }
        echo '<div class="author">' . $row['creator'] . '</div>';
        if ($row['rating'] != null) {
            $rating = str_repeat('★ ', $row['rating']) . str_repeat('☆ ', 10 - $row['rating']);
            echo '<div class="rating">' . $rating . '</div>';
        }
        if ($row['review'] != "") {
            echo '<img class="more" src="images\ui_arrow_more_less.png" alt="Show More">';
            echo '<div class="dropdown-content">';
            echo '<div class="review-text">' . $row['review'] . '</div>';
            echo '<img class="less" src="images\ui_arrow_more_less.png" alt="Show Less">';
            echo '</div>';
        }
        echo '</div>';
    }
}

$bookReviews = getReviews('books');
$movieReviews = getReviews('movies');
$bookCount = count($bookReviews);
$movieCount = count($movieReviews);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Steidler | Reviews</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reviews-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/header.php"; ?>

    <main>
        <div class="reviews">
            <section class="books">
                <div class="section-header">
                    <div class="number">(<?php echo $bookCount; ?>)
                    </div>
                    <h1>Books</h1>
                    <div class="blank"></div>
                </div>
                <hr>
                <?php displayReviews($bookReviews); ?>
            </section>
            <div class="vertical-line"></div>
            <section class="movies">
                <div class="section-header">
                    <div class="blank"></div>
                    <h1>Movies</h1>
                    <div class="number-right">(<?php echo $movieCount; ?>)
                    </div>
                </div>
                <hr>
                <?php displayReviews($movieReviews); ?>
            </section>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . "/footer.php"; ?>

</body>

<script src="javascript/dropdown.js"></script>

</html>