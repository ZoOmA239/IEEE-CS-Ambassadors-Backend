<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <h1>Recommended Books</h1>
    <?php
    $books = [
        "Harry Potter",
        "The Hobbit",
        "1984",
        "To Kill a Mockingbird",
        "Pride and Prejudice"
    ];
    ?>
    <ul>
        <?php /*foreach ($books as $book) {
            echo "<li>$book</li>";
        }*/
        ?>

        <!-- Or short way -->
        <?php foreach ($books as $book): ?>
            <li><?php echo $book; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>