// bag.js

// Đợi trang tải xong
document.addEventListener("DOMContentLoaded", function () {
    initializeNavbarToggle();
});

function initializeNavbarToggle() {
    const toggle = document.getElementById("toggle");
    const nav = document.querySelector(".nav");

    toggle.addEventListener("click", function () {
        nav.classList.toggle("active");
    });

    document.addEventListener("click", function (event) {
        if (!nav.contains(event.target) && !toggle.contains(event.target)) {
            nav.classList.remove("active");
            toggle.checked = false;
        }
    });
}

async function removeFromBag(productId) {
    if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi túi không?")) {
        try {
            // Gọi API để xóa sản phẩm khỏi túi
            const response = await fetch(`/api/removeFromBag/${productId}`, {
                method: "DELETE",
                headers: {
                    "Content-Type": "application/json",
                },
            });

            // Kiểm tra nếu API trả về thành công
            if (response.ok) {
                // Hiển thị thông báo thành công
                alert("Sản phẩm đã được xóa khỏi túi thành công!");

                // Làm mới trang để cập nhật giỏ hàng
                location.reload();
            } else {
                // Hiển thị thông báo thất bại
                alert("Xảy ra lỗi khi xóa sản phẩm khỏi túi. Vui lòng thử lại!");
            }
        } catch (error) {
            // Hiển thị thông báo lỗi mạng hoặc lỗi khác
            alert("Xảy ra lỗi khi kết nối đến máy chủ. Vui lòng thử lại!");
        }
    }
}
