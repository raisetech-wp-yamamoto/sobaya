<?php
/**
 * Template Name: access */
?>
<?php get_header(); ?>
    <main>
        <section class="l-wrapper">
            <div class="l-main">
                <div class="l-contents u-margin-auto">
                    <h2 class="c-title--contents"><span class="first-chara">店</span>舗情報</h2>
                    <dl class="access-info">
                        <?php
                            $page_id = 9;
                            $content = get_page($page_id);
                            echo $content -> post_content;
                        ?>
                    </dl>
                </div>
            </div>
        </section>
        <section class="p-map">
            <img src="<?php echo get_template_directory_uri(); ?>/image/bg_map.png" alt="">
            <div class="resize-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985332994!2d139.7432442154142!3d35.658584838820786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1616406395262!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/image/bg_map.png" alt="">
        </section>
<?php get_footer(); ?>