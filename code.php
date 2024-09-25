<?php
function wikiplus_redirect_to_checkout()
{
    return wc_get_checkout_url();
}
add_filter('woocommerce_add_to_cart_redirect', 'wikiplus_redirect_to_checkout');
add_filter('wc_add_to_cart_message_html', '__return_null');
