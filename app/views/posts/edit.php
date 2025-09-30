<!-- Blog Post (Right Sidebar) Start -->
    <div class="col-md-12 page-body">
        <div class="row">
            <div class="sub-title">
                <a href="#" title="Go to Home Page">
                    <h2>Back Home</h2>
                </a>
                <a href="#comment" class="smoth-scroll">
                    <i class="icon-bubbles"></i>
                </a>
            </div>

            <div class="col-md-12 content-page">
                <div class="col-md-12 blog-post">
                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>Post Form</h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Form Start -->
                    <form action="/posts/<?php echo $posts['id']?>/slug-du-post/edit/form.html" method="put">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"  value="<?php echo $posts['title']?? ''?>"/>
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea id="text" name="text" class="form-control" rows="5"><?php echo $posts['text']?? ''?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Image</label>
                            <input type="file" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="text">Quote</label>
                            <textarea id="quote" name="quote" class="form-control" rows="5"><?php echo $posts['quote']??''?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="text">Category</label>
                            <select id="category_id" name="category_id" class="form-control">
                                <option disabled selected> Select your category</option>
                                <?php foreach ($categories as $category):?>
                                <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                        <div>
                            <input class="btn btn-primary" type="submit"value="submit"/>
                            <input class="btn btn-secondary" type="reset" value="reset"/>
                        </div>
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
