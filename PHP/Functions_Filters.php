<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>
    <?php
    $books = [
        ["title" => "Harry Potter", "author" => "J.K. Rowling", "realseYear" => "1890", "url" => "https://example.com/harry-potter"],
        ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "realseYear" => "1995", "url" => "https://example.com/the-hobbit"],
        ["title" => "1984", "author" => "George Orwell", "realseYear" => "1780", "url" => "https://example.com/1984"],
        ["title" => "To Kill a Mockingbird", "author" => "Andy Weir", "realseYear" => "2000", "url" => "https://example.com/to-kill-a-mockingbird"],
        ["title" => "Pride and Prejudice", "author" => "Andy Weir", "realseYear" => "1865", "url" => "https://example.com/pride-and-prejudice"]
    ];



    function filterBooksByAuthor($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book["author"] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>



    <ul>
        <?php foreach ($books as $book): ?>
            <!-- Check if the author is Andy Weir -->
            <?php if ($book["author"] === "Andy Weir") : ?>
                <li>
                    <a href="<?php echo $book['url']; ?>" target="_blank">
                        <?php echo $book['title']; ?> (<?php echo $book['realseYear'] ?>) by <?php echo $book['author']; ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>


    <!-- Using Function -->
    <!-- Second Method -->
    <ul>
        <?php foreach (filterBooksByAuthor($books, "Andy Weir") as $book): ?>
            <li>
                <a href="<?php echo $book['url']; ?>" target="_blank">
                    <?php echo $book['title']; ?> (<?php echo $book['realseYear'] ?>) by <?php echo $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>