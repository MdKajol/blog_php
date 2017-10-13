<div class="post">
    <h4 class="post-title"><?php echo ucfirst("post title");?></h4>
    <p class="post-details">Author: <span>Author Name</span> | Date: <span><?php echo date('d/m/y'); ?></span> | Like: <span>3</span></p>
    <p class="post-details">Catagory: <span>Catagory Name</span> | Comment: <span>10</span></p>
    <hr />
    <p class="post-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the <a href="<?php echo site_link(INC . 'single_post.php'); ?>">Read More...</a></p>
    <hr />
    <p class="post-feedback">
        <a class="post-like" href="#"><i class="fa fa-heart-o"></i></a>
        <a class="post-comment" href="#"><i class="fa fa-comment-o"></i></a>
        <a class="post-share" href="#"><i class="fa fa-share"></i></a>
    </p>
</div>