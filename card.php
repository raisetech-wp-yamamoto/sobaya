<?php
/**
 *  投稿内容   
 */
?>
<article class="hentry">
    <div class="hentry-content">
        <header class="entry-header">
            <h2 class="entry-title c-title--post"><?php the_title(); ?></h2>
            <div class="entry-meta">
                <time class="entry-date published"><?php echo get_the_date('Y年m月d日'); ?></time>
                <?php
                    $category = get_the_category();
                    echo '<p class="cat-links" rel="category">'.$category[0]->name.'</p>';
                ?>
            </div>
        </header>
        <div class="entry-content">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</article>
