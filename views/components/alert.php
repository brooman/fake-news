<div class="alert alert-dismissible alert-<?= $alert['type']; ?>">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading">
        <?= ucfirst($alert['header']); ?>:
    </h4>
    <p class="mb-0">
        <?= $alert['message']; ?>
    </p>
</div>