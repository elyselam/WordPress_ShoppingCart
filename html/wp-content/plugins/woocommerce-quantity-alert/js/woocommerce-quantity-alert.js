jQuery(document).ready(function($) {
    // Listen for changes in quantity on the cart page
    $('div.woocommerce').on('change', '.qty', function() {
        var productRow = $(this).closest('.woocommerce-cart-form__cart-item');
        var productName = productRow.find('.product-name a').text().trim();
        var productQuantity = $(this).val();
        var message = 'You just changed the quantity of ' + productName + ' to ' + productQuantity;
        
        alert(message);
    });
});
