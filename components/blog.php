<?php /* blog */ ?>
<header id="blog" class="purple-gradient full-viewport">
	<div class="wrapper">
        <div>
        <h2 class="large-heading second-level-heading" data-text="Latest post from SomeWhat Creative">
            <span>Latest post from SomeWhat Creative</span> 
            <span class="visually-hidden">Latest post from SomeWhat Creative</span>
        </h2>

        <?php include_once('config/blog-connect.php');?>
            <div class="content">
                <h4 class="medium-heading second-level-heading">
                    <a href="<?php echo $item_link[0]; ?>" class="external-linkBlog" rel="follow" target="_blank">
                    <?php echo $item_title[0]; ?>
                    </a>
                </h4>
                
                <p class="post-excerpt"><?php echo $item_description[0]; ?></p>
            </div>
        </div>
	</div>
</header>


		