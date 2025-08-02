<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <?php
    $books = [
        ["title" => "Harry Potter", "author" => "J.K. Rowling", "url" => "https://example.com/harry-potter"],
        ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "url" => "https://example.com/the-hobbit"],
        ["title" => "1984", "author" => "George Orwell", "url" => "https://example.com/1984"],
        ["title" => "To Kill a Mockingbird", "author" => "Harper Lee", "url" => "https://example.com/to-kill-a-mockingbird"],
        ["title" => "Pride and Prejudice", "author" => "Jane Austen", "url" => "https://example.com/pride-and-prejudice"]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?php echo $book['url']; ?>" target="_blank">
                    <?php echo $book['title']; ?> by <?php echo $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>