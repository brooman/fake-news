<div class="container">
    <?php foreach ($posts as $post): ?>
    <div class="jumbotron">
        <h2 class="display-3">
            <?= $post['title']; ?>
        </h2>
        <p>
            <?= $post['name']; ?>
        </p>
        <p class="lead">
            <?= $post['content']; ?>
        </p>
        <p>
            <?= date('h:m d M Y', $post['creationdate']); ?>
        </p>
    </div>
    <?php endforeach; ?>
</div>