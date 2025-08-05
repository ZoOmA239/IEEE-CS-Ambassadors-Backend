<?php require('Partials/head.php') ?>
<?php require('Partials/nav.php') ?>
<?php require('Partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p>Hello ,<?= $_SESSION['user']['email'] ?? 'Guest' ?> Welcome To The Home Page</p>
    </div>
</main>

<?php require('Partials/footer.php') ?>