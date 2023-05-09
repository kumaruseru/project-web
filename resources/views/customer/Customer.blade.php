<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon" />
    <link href="../Css/Site.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/3.6.6/fetch.min.js"></script>
    <script src="../js/customer.js"></script>
</head>
<body>
<header class="header-1">
    <a href="/" class="logo"><img src="../Images/logo2.png" alt="logo" /></a>

    <input id="toggle" type="checkbox" />
    <label for="toggle" class="hamburger">
        <div class="top-bun"></div>
        <div class="mid-bun"></div>
        <div class="under-bun"></div>
    </label>
    <div class="nav">
        <div class="nav-wrapper">
            <nav>
                <a href="/my-account"><i class="fa-solid fa-user"></i> My Account</a>
                <a href="../Home/Index.html"><i class="fa-solid fa-house"></i> Index</a>
                <a href="{{ route('bag') }}"><i class="fa-solid fa-cart-shopping"></i> Bag <span id="cart-count" class="badge bg-danger"></span></a>
                <a href="{{ route('index') }}" onclick="logout()"><i class="fa-solid fa-right-to-bracket"></i> Log out</a>
            </nav>
        </div>
    </div>

</header>

<div class="menu-container">
    <ul class="menu">
        <li><a href="#">An Giang</a></li>
        <li><a href="#">Bà Rịa-Vũng Tàu</a></li>
        <li><a href="#">Bạc Liêu</a></li>
        <li><a href="#">Bắc Giang</a></li>
        <li><a href="#">Bắc Kạn</a></li>
        <li><a href="#">Bắc Ninh</a></li>
        <li><a href="#">Bến Tre</a></li>
        <li><a href="#">Bình Dương</a></li>
        <li><a href="#">Bình Định</a></li>
        <li><a href="#">Bình Phước</a></li>
        <li><a href="#">Bình Thuận</a></li>
        <li><a href="#">Cà Mau</a></li>
        <li><a href="#">Cao Bằng</a></li>
        <li><a href="#">Cần Thơ</a></li>
        <li><a href="#">Đà Nẵng</a></li>
        <li><a href="#">Đắk Lắk</a></li>
        <li><a href="#">Đắk Nông</a></li>
        <li><a href="#">Điện Biên</a></li>
        <li><a href="#">Đồng Nai</a></li>
        <li><a href="#">Đồng Tháp</a></li>
        <li><a href="#">Gia Lai</a></li>
        <li><a href="#">Hà Giang</a></li>
        <li><a href="#">Hà Nam</a></li>
        <li><a href="#">Hà Nội</a></li>
        <li><a href="#">Hà Tĩnh</a></li>
        <li><a href="#">Hải Dương</a></li>
        <li><a href="#">Hải Phòng</a></li>
        <li><a href="#">Hậu Giang</a></li>
        <li><a href="#">Hòa Bình</a></li>
        <li><a href="#">Hưng Yên</a></li>
        <li><a href="#">Khánh Hòa</a></li>
        <li><a href="#">Kiên Giang</a></li>
        <li><a href="#">Kon Tum</a></li>
        <li><a href="#">Lai Châu</a></li>
        <li><a href="#">Lạng Sơn</a></li>
        <li><a href="#">Lào Cai</a></li>
        <li><a href="#">Lâm Đồng</a></li>
        <li><a href="#">Long An</a></li>
        <li><a href="#">Nam Định</a></li>
        <li><a href="#">Nghệ An</a></li>
        <li><a href="#">Ninh Bình</a></li>
        <li><a href="#">Ninh Thuận</a></li>
        <li><a href="#">Phú Thọ</a></li>
        <li><a href="#">Phú Yên</a></li>
        <li><a href="#">Quảng Bình</a></li>
        <li><a href="#">Quảng Nam</a></li>
        <li><a href="#">Quảng Ngãi</a></li>
        <li><a href="#">Quảng Ninh</a></li>
        <li><a href="#">Quảng Trị</a></li>
        <li><a href="#">Sóc Trăng</a></li>
        <li><a href="#">Sơn La</a></li>
        <li><a href="#">Tây Ninh</a></li>
        <li><a href="#">Thái Bình</a></li>
        <li><a href="#">Thái Nguyên</a></li>
        <li><a href="#">Thanh Hóa</a></li>
        <li><a href="#">Thừa Thiên Huế</a></li>
        <li><a href="#">Tiền Giang</a></li>
        <li><a href="#">TP Hồ Chí Minh</a></li>
        <li><a href="#">Trà Vinh</a></li>
        <li><a href="#">Tuyên Quang</a></li>
        <li><a href="#">Vĩnh Long</a></li>
        <li><a href="#">Vĩnh Phúc</a></li>
        <li><a href="#">Yên Bái</a></li>
    </ul>
</div>
<br />
<body>
<div class="menu_product">
    <div>
        <img src="../Images/an giang.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(1, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/đà lạt.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(2, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/bến tre.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(3, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/châu đốc.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(4, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/kiên giang.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(5, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/tiền giang.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(6, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/Đắk Lắk.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(7, 10000)">10.000</button>
    </div>
    <div>
        <img src="../Images/đồng tháp.png" />
        <span class="number">043286</span>
        <button type="button" onclick="addToCart(8, 10000)">10.000</button>
    </div>
</div>

<footer>
    <p>&copy; {{ date('d/m/Y') }} - My Lottery Application</p>
</footer>
</body>
</body>
</html>

