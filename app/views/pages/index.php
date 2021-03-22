<?php require APPROOT . '/views/includes/header.php'; ?>

<h1><?php echo $data['title'] ?></h1>

<ul>
    <?php foreach ($data['notes'] as $note) : ?>
        <li><?php echo $note->title; ?></li>
    <?php endforeach; ?>
</ul>

<?php require APPROOT . '/views/includes/footer.php'; ?>