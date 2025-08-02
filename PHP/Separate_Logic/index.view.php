<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>

</head>

<body>




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