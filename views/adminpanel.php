<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="text-white">Welcome,
                <?= $name; ?>
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <div class="card text-white bg-success mb-3" style="min-height: 15rem;">
                <div class="card-body">
                    <h4 class="card-title">Create new post</h4>
                    <p class="card-text">Click the button below to open the editor and publish your new post!</p>
                </div>
                <button class="btn btn-primary">New post</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card text-white bg-danger mb-3" style="min-height: 15rem;">
                <div class="card-body">
                    <h4 class="card-title">Edit or delete a post</h4>
                    <p class="card-text">Be careful! Once you've edited or removed a post it cannot be restored back to
                        its
                        previous version</p>
                </div>
                <button class="btn btn-primary">Edit posts</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card text-white bg-info mb-3" style="min-height: 15rem;">
                <div class="card-body">
                    <h4 class="card-title">There isn't anything here yet...</h4>
                    <p class="card-text">...but there might be something here in the future!</p>
                </div>
                <button class="btn btn-primary disabled">???</button>
            </div>
        </div>
    </div>
</div>