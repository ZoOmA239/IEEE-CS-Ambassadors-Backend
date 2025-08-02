<?php
$books = [
    ["title" => "Harry Potter", "author" => "J.K. Rowling", "realseYear" => "1890", "url" => "https://example.com/harry-potter"],
    ["title" => "The Hobbit", "author" => "J.R.R. Tolkien", "realseYear" => "1995", "url" => "https://example.com/the-hobbit"],
    ["title" => "1984", "author" => "George Orwell", "realseYear" => "1780", "url" => "https://example.com/1984"],
    ["title" => "To Kill a Mockingbird", "author" => "Andy Weir", "realseYear" => "2000", "url" => "https://example.com/to-kill-a-mockingbird"],
    ["title" => "Pride and Prejudice", "author" => "Andy Weir", "realseYear" => "1865", "url" => "https://example.com/pride-and-prejudice"]
];




// Using Built-in Function
$filteredBooks = array_filter($books, function ($book) {
    return $book["author"] === "Andy Weir";
});

require 'index.view.php';
