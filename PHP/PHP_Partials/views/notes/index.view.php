<?php require base_path(('views/Partials/head.php')); ?>
<?php require base_path(('views/Partials/nav.php')); ?>
<?php require base_path(('views/Partials/banner.php')); ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note): ?>
            <ul>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">

                        <?= htmlspecialchars($note['body']) ?>
                    </a>

                </li>
            </ul>

        <?php endforeach ?>

        <p class="mt-6">
            <a href="/notes/create" class="text-blue-500 hover:underline">Create note</a>
        </p>
    </div>
</main>
<?php require base_path(('views/Partials/footer.php')); ?>