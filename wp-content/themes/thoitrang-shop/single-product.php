<?php 
 defined('ABSPATH') || exit;

 get_header('shop');
?>

<main class="single-product-container">

    <?php
    /**
     * Hook: woocommerce_before_main_content
     *
     * Mặc định mở thẻ <div> chứa nội dung sản phẩm + breadcrumb
     */
    do_action('woocommerce_before_main_content');

    while (have_posts()) :
        the_post();

        /**
         * Gọi nội dung chi tiết sản phẩm
         * File template nằm tại: woocommerce/templates/content-single-product.php
         */
        wc_get_template_part('content', 'single-product');

    endwhile;

    /**
     * Hook: woocommerce_after_main_content
     *
     * Mặc định đóng <div> và sidebar nếu có
     */
    do_action('woocommerce_after_main_content');
    ?>

</main>

<?php get_footer('shop'); ?>