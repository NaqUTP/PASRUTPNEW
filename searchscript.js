function search_animal(event) {
    if (event.keyCode === 13) {

        event.preventDefault();
        var input = document.getElementById('searchbar');
        var filter = input.value.toLowerCase();
        var items = document.querySelectorAll('.product-info');
        var found = false;

        items.forEach(function(item) {
            var productName = item.querySelector('a').textContent.toLowerCase();
            if (productName.includes(filter)) {
                item.parentElement.style.display = 'block';

                item.parentElement.scrollIntoView({ behavior: 'smooth', block: 'start' });

                found = true;
            } else {
                item.parentElement.style.display = 'none';
            }
        });

        // If no matching product was found, display a message
        if (!found) {
            alert('Product not found Pasar UTP.');
        }
    }
}