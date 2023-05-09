function logout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = "{{ route('index') }}";
    }
}

function getCart() {
    const cart = localStorage.getItem("cart");
    return cart ? JSON.parse(cart) : {};
}

function setCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
}

function addToCart(productId, price, quantity = 1) {
    const cart = getCart();
    cart[productId] = cart[productId] || { price, quantity: 0 };
    cart[productId].quantity += quantity;
    setCart(cart);
    updateCartCount();
    sendCartToServer();
}

function updateCartCount() {
    const cart = getCart();
    const count = Object.values(cart).reduce((acc, item) => acc + item.quantity, 0);
    document.getElementById("cart-count").innerText = count;
}

window.onload = function() {
    updateCartCount();
}

async function sendCartToServer() {
    const cart = getCart();
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    for (const [productId, { price, quantity }] of Object.entries(cart)) {
        const apiUrl = `/api/bag/add/${productId}`;

        const response = await fetch(apiUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({ action: 'add', product_id: productId, price, quantity })
        });

        if (!response.ok) {
            alert('An error occurred while updating the bag.');
            return;
        }
    }

    window.location.href = "{{ route('bag') }}";
};


