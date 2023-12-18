function submitForm(productId) {
    var form = document.getElementById('form_' + productId);
    form.submit();
}

function addToBasket(productId) {
    // Add your logic for adding to the basket here
    console.log('Adding product with ID ' + productId + ' to the basket');
}

