<?php require('Partials/head.php') ?>
<?php require('Partials/nav.php') ?>
<?php require('Partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">


        <p class="mb-4">
            <a href="/PHP/PHP_Partials/notes" class="text-blue-500 underline">Go Back...</a>
        </p>
        <p>

            <?= $note['body'] ?>

        </p>

    </div>
</main>
<?php require('Partials/footer.php') ?>