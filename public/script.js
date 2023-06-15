const menuBurgerState = document.getElementById('burger-toggle')


menuBurgerState.addEventListener('change', function () {
    if (this.checked) {
        document.body.style.overflow = 'hidden';
    } else document.body.style.overflow = '';
})

const addProduct = (productID) => {
    const product = document.querySelector(`[data-id="${productID}"]`);
    if (product) {
        const button = product.querySelector('button')
        button.textContent = 'Додано'
        button.style.backgroundColor = '#73649b'
    }
}