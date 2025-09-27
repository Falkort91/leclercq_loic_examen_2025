<div class="col-md-12 page-body">
    <div class="row">
        <div class="col-md-12 content-page">
            <!-- ADD A POST -->
            <div>
                <a href="form.html" type="button" class="btn btn-primary">Add a Post</a>
            </div>
            <!-- ADD A POST END -->

            <!-- Blog Post Start -->
             <?php foreach ($posts as $post): ?>
            <div class="col-md-12 blog-post row">
                <div class="post-title">
                    <a href="single.html">
                        <h1>
                          <?php echo $post['title']?>
                        </h1>
                    </a>
                </div>
                <div class="post-info">
                    <span><?php echo date('d.M.Y', strtotime($post['created_at']));?></span> | <span><?php echo $post['name']?></span>
                </div>
                <p>
                    <?php echo $post['text']?>
                </p>
                <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right">
                    <span>Read More</span>
                </a>
            </div>
            <?php endforeach ?>
            <!-- Blog Post End -->

            <?php include_once '../app/views/templates/partials/_nav.php';?> 

        </div>
    </div>
</div>