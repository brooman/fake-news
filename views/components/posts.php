<div class="container">
    <?php foreach ($posts as $post): ?>
    <div class="row">
        <div class="card bg-primary mb-4 col-sm-12 col-md-8 offset-md-2">
            <h2 class="display-4 text-white">
                <?= $post['title']; ?>
            </h2>
            <div class="d-flex justify-content-between">
                <p>
                    <?= $post['name']; ?><br>
                    <?= date('h:m d M Y', $post['creationdate']); ?>
                </p>
                <div class="like-container">
                    <span id="like-count-<?= $post['id']; ?>">
                        <?= $post['likes']; ?>
                    </span>
                    <a class="like-button" id="liker-<?= $post['id']; ?>"
                        data-id="<?= $post['id']; ?>">👍</a>
                </div>
            </div>
            <hr class="mt-0 mb-4">
            <p class="lead">
                <?= nl2br($post['content']); ?>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
</div>