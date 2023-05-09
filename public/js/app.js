// Khởi tạo JavaScript chung cho ứng dụng

// Hàm chung để hiển thị thông báo cho người dùng
function showAlert(message, type) {
    const alert = document.createElement('div');
    alert.classList.add('alert', `alert-${type}`, 'mt-3', 'animated', 'fadeIn');
    alert.textContent = message;
    const container = document.querySelector('.container');
    container.prepend(alert);
    setTimeout(() => {
        alert.classList.remove('fadeIn');
        alert.classList.add('fadeOut');
        setTimeout(() => {
            alert.remove();
        }, 500);
    }, 3000);
}

function addToBag(productId) {
    showAlert('Sản phẩm đã được thêm vào túi', 'success');
}

function onAddToBagButtonClick(event) {
    const productId = event.target.getAttribute('data-product-id');
    addToBag(productId);
}

const addToBagButtons = document.querySelectorAll('.add-to-bag-button');
addToBagButtons.forEach(button => {
    button.addEventListener('click', onAddToBagButtonClick);
});

function onRemoveFromBagButtonClick(event) {
    const productId = event.target.getAttribute('data-product-id');
    removeFromBag(productId);
}

const removeFromBagButtons = document.querySelectorAll('.remove-from-bag-button');
removeFromBagButtons.forEach(button => {
    button.addEventListener('click', onRemoveFromBagButtonClick);
});

function removeFromBag(productId) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi túi không?')) {
        showAlert('Sản phẩm đã được xóa khỏi túi', 'success');
        setTimeout(() => {
            location.reload();
        }, 1000);
    }
}
