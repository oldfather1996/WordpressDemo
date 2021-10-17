<?php

class WP_product extends WP_Widget
{

    function __construct()
    {

        parent::__construct(
            'product',  // Base ID
            'WP_product'   // Name
        );

        add_action('widgets_init', function () {
            register_widget('WP_product');
        });
    }
    public function widget($args, $instance)
    {
?>
<?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 8,
            // 'product_cat'    => 'hoodies'
        );
        $loop = new WP_Query($args);
        $product = null;
        $args = array();
        while ($loop->have_posts()) : $loop->the_post();
            global $product;
            echo  '	
            <div class="col-fourth  mobile__row-2">
			<div class="product__item--info">'
                . '<div class="item--img">' . woocommerce_get_product_thumbnail().  '</div>' .
                '<div class="item--text">'
                . '<p class="item--name">' . ' ' . get_the_title() . '</p>' . '<p class="item--price">' . get_woocommerce_currency_symbol()   . wc_get_price_to_display($product, $args). '.00'. '</p></div>' .
                ' <div class="item--icon">
                <a><i class="fas fa-shopping-basket"></i></a>
                <a><i class="fas fa-eye"></i></a>
                <a><i class="fas fa-heart"></i></a>
                <a><i class="fas fa-exchange-alt"></i></a>
            </div></div></div>';
        endwhile;
        wp_reset_query();
    }
}

$WP_banner = new WP_product();

?>
