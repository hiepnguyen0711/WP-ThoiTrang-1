<?php
get_header(); // Load header.php
?>

<main class="shop-container">
    <h1>Shop Thời Trang</h1>

    <?php if (woocommerce_product_loop()) : ?>

        <ul class="products">
            <?php while (have_posts()) : the_post();
            global $product;
            ?>
                <li <?php wc_product_class('', $product); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <?php woocommerce_show_product_loop_sale_flash(); ?>
                        <?php woocommerce_template_loop_product_thumbnail(); ?>
                        <h2 class="product-title"><?php the_title(); ?></h2>
                        <?php woocommerce_template_loop_price(); 
                        $product_id = $product->get_id();
                       echo wc_price($product->get_regular_price());

                        ?>
                    </a>
                    <?php woocommerce_template_loop_add_to_cart(); ?>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php woocommerce_pagination(); ?>

    <?php else : ?>
        <p>Không có sản phẩm nào được tìm thấy.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
