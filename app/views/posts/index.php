<?php require_once APPROOT.'/views/inc/header.php'; ?>
<?php message('post_message'); ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">Add Post</a>
        </div>
    </div>
<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h3 class="card-title"><?php echo $post->title; ?></h3>
        <div class="bg-light p-2 mb-3">Created by <?php echo $post->name; ?> at <?php echo $post->postCreated; ?></div>
        <p class="card-text"><?php echo $post->content; ?></p>
        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId;?>" class="btn btn-info">More</a>
    </div>
<?php endforeach; ?>
    </div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>