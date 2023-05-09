<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon" />
    <link href="../Css/bag.scss" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../../../public/js/bag.js" defer></script>
</head>
<body>
<header class="header-1">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="/" class="logo"><img src="../Images/logo2.png" alt="logo" /></a>
    </div>
</header>
<!-- Shopping Bag -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Túi của bạn</h2>
        </div>
    </div>
    <div class="row">
        @if (($products ?? null) !== null && count($products) > 0)
        @foreach ($products as $product)
                <div class="col-md-4 col-sm-6">
                    <div class="card">
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Giá: {{ number_format($product->price) }} ₫</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">Xem chi tiết</a>
                                <button class="btn btn-danger" onclick="removeFromBag('{{ $product->id }}')">Xóa khỏi túi</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 text-center mt-4">
                <p class="lead">Túi của bạn đang trống. Hãy tiếp tục mua sắm!</p>
                <a href="{{ route('customer.index') }}" class="btn btn-primary">Tiếp tục mua sắm</a>
            </div>
        @endif
    </div>
</div>
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Lottery</h3>
                <p>Join the fun and win exciting prizes with our lottery platform.</p>
            </div>
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="{{ route('customer.index') }}" class="text-white">Home</a></li>
                    <li><a href="{{ route('bag') }}" class="text-white">Bag</a></li>
                    <li><a href="{{ route('index') }}" class="text-white">Log out</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Lottery Street, City, Country</p>
                <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                <p><i class="fas fa-envelope"></i> support@lottery.com</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <p>&copy; 2023 Lottery. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggle = document.getElementById('toggle');
        const nav = document.querySelector('.nav');    toggle.addEventListener('click', function() {
            nav.classList.toggle('active');
        });

        document.addEventListener('click', function(event) {
            if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                nav.classList.remove('active');
                toggle.checked = false;
            }
        });
    });

    function removeFromBag(productId) {
        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi túi không?')) {
            fetch('/api/bag/remove', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ product_id: productId }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        alert(data.message);
                        location.reload();
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
                });
        }
    }

    function addToBag(productId) {
        fetch('/api/bag/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify({ product_id: productId }),
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.error) {
                    alert(data.error);
                } else {
                    alert(data.message);
                    location.reload();
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
            });
    }


</script>
</body>
</html>
