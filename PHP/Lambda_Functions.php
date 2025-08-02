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



    /* $filterByAuthor = function ($books, $author) {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book["author"] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };

    $filteredBooks = $filterByAuthor($books, "Andy Weir");
*/




    /*function filter($items, $key, $value)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    $filteredBooks = filter($books, "realseYear", "2000");*/


    function filter($items, $function)
    {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($function($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    /* $filteredBooks = filter($books, function ($book) {
        return $book["realseYear"] < "2000";
    });*/

    // Using Built-in Function
    $filteredBooks = array_filter($books, function ($book) {
        return $book["author"] === "Andy Weir";
    });
    ?>



    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?php echo $book['url']; ?>" target="_blank">
                    <?php echo $book['title']; ?> (<?php echo $book['realseYear'] ?>) by <?php echo $book['author']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>