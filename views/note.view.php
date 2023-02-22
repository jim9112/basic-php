<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <a href="/notes">Back</a>
    <h2 class="text-2xl">Hello. Here is your note:</h2>
    <p><?= $note['body'] ?></p>
    <!-- /End replace -->
  </div>
</main>
<?php require('partials/footer.php') ?>