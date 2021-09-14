<?php /* blog */ ?>
<header id="blog" class="purple-gradient full-viewport">
	<div class="wrapper">
        <div>
        <h2 class="large-heading second-level-heading" data-text="Latest post from SomeWhat Creative">
            <span>Latest post from SomeWhat Creative</span> 
            <span class="visually-hidden">Latest post from SomeWhat Creative</span>
        </h2>

        <?php 
        $url="https://somewhatcreative.net/wp-json/wp/v2/posts?per_page=1"; 
        $ch= curl_init(); 
    
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_URL,$url); 
        
        $result=curl_exec($ch); 
        $posts= json_decode($result, true); 
        foreach ($posts as $post) 
        { 
        ?>

            <div class="content">
                <h4 class="medium-heading second-level-heading">
                <a href="<?php echo $post['link']; ?>" class="external-linkBlog" rel="follow" target="_blank">
                <?php echo $post['title']['rendered']; ?>  
                </a>
                </h4>
                <?php 
                    echo $post['excerpt']['rendered']; 
                ?>
            </div>
             <?php } ?>
        </div>
	</div>
</header>


		