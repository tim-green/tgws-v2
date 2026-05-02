<?php /* blog */ ?>
<header id="blog" class="purple-gradient full-viewport">
    <div class="wrapper">
        <div>
            <h2 class="large-heading second-level-heading" data-text="Latest post from SomeWhat Creative">
                <span>Latest post from SomeWhat Creative</span>
                <span class="visually-hidden">Latest post from SomeWhat Creative</span>
            </h2>
            <div class="content">
                <h4 class="medium-heading second-level-heading">
                    <a id="blog-link" href="#" class="external-linkBlog" rel="follow" target="_blank"></a>
                </h4>
                <p id="blog-excerpt" class="post-excerpt"></p>
            </div>
        </div>
    </div>
</header>

<script>
function decodeHTML(html) {
    var txt = document.createElement('textarea');
    txt.innerHTML = html;
    return txt.value;
}

fetch('https://www.somewhatcreative.net/wp-json/wp/v2/posts?per_page=1&_fields=title,link,excerpt')
    .then(function(response) { return response.json(); })
    .then(function(posts) {
        if (!posts || posts.length === 0) return;

        var post    = posts[0];
        var link    = document.getElementById('blog-link');
        var excerpt = document.getElementById('blog-excerpt');

        link.href        = post.link;
        link.textContent = decodeHTML(post.title.rendered.replace(/<[^>]+>/g, ''));

        excerpt.innerHTML = post.excerpt.rendered;

        var readMore = excerpt.querySelector('a');
        if (readMore) {
            readMore.href   = post.link;
            readMore.target = '_blank';
            readMore.rel    = 'follow';
        }
    })
    .catch(function(error) {
        console.error('Failed to load post:', error);
    });
</script>