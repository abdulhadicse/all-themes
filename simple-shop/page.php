<?php 

if( is_shop() ) {
    get_template_part( 'shop' );
}

if( is_cart() ) {
    get_template_part( 'cart' );
}

if( is_checkout() ) {
    get_template_part( 'checkout' );
}

if( is_account_page() ) {
    get_template_part( 'account' );
}
    
if( is_product_category() ) {
    get_template_part( 'product-category' );
}
?>