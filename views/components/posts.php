<?php foreach ($posts as $post): ?>
<div class="card text-white bg-dark mt-3">
    <div class="card-header">
        <?= $post['title']; ?>
    </div>
    <div class="card-body">
        <p class="card-text">
            <?= $post['content']; ?>
        </p>
    </div>
</div>
<?php endforeach;
