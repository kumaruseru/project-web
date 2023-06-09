<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon" />
    <link href="../Css/Site.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="overflow: hidden">
<header class="header-4">
    <div class="edit-product">

        <h2>Add Product</h2>

        <label for="address">Address:</label>

        <select id="address">
            <option value="1">An Giang</option>
            <option value="2">Bà Rịa-Vũng Tàu</option>
            <option value="3">Bạc Liêu</option>
            <option value="4">Bắc Giang</option>
            <option value="5">Bắc Kạn</option>
            <option value="6">Bắc Ninh</option>
            <option value="7">Bến Tre</option>
            <option value="8">Bình Dương</option>
            <option value="9">Bình Định</option>
            <option value="10">Bình Phước</option>
            <option value="11">Bình Thuận</option>
            <option value="12">Cà Mau</option>
            <option value="13">Cao Bằng</option>
            <option value="14">Cần Thơ</option>
            <option value="15">Đà Nẵng</option>
            <option value="16">Đắk Lắk</option>
            <option value="17">Đắk Nông</option>
            <option value="18">Điện Biên</option>
            <option value="19">Đồng Nai</option>
            <option value="20">Đồng Tháp</option>
            <option value="21">Gia Lai</option>
            <option value="22">Hà Giang</option>
            <option value="23">Hà Nam</option>
            <option value="24">Hà Nội</option>
            <option value="25">Hà Tĩnh</option>
            <option value="26">Hải Dương</option>
            <option value="27">Hải Phòng</option>
            <option value="28">Hậu Giang</option>
            <option value="29">Hòa Bình</option>
            <option value="30">Hưng Yên</option>
            <option value="31">Khánh Hòa</option>
            <option value="32">Kiên Giang</option>
            <option value="33">Kon Tum</option>
            <option value="34">Lai Châu</option>
            <option value="35">Lạng Sơn</option>
            <option value="36">Lào Cai</option>
            <option value="37">Lâm Đồng</option>
            <option value="38">Long An</option>
            <option value="39">Nam Định</option>
            <option value="40">Nghệ An</option>
            <option value="41">Ninh Bình</option>
            <option value="42">Ninh Thuận</option>
            <option value="43">Phú Thọ</option>
            <option value="44">Phú Yên</option>
            <option value="45">Quảng Bình</option>
            <option value="46">Quảng Nam</option>
            <option value="47">Quảng Ngãi</option>
            <option value="48">Quảng Ninh</option>
            <option value="49">Quảng Trị</option>
            <option value="50">Sóc Trăng</option>
            <option value="51">Sơn La</option>
            <option value="52">Tây Ninh</option>
            <option value="53">Thái Bình</option>
            <option value="54">Thái Nguyên</option>
            <option value="55">Thanh Hóa</option>
            <option value="56">Thừa Thiên Huế</option>
            <option value="57">Tiền Giang</option>
            <option value="58">TP Hồ Chí Minh</option>
            <option value="59">Trà Vinh</option>
            <option value="60">Tuyên Quang</option>
            <option value="61">Vĩnh Long</option>
            <option value="62 ">Vĩnh Phúc</option>
            <option value="63">Yên Bái</option>
        </select>

        <label for="number">Number:</label>
        <input id="number" type="text" />

        <label for="day">Day:</label>
        <input id="day" type="date" />

        <a href="Product.blade.php" class="button"><input type="submit" value="Save" id="save" /></a>
        <a href="Product.blade.php" class="button"><input type="submit" value="Cance" id="cance" /></a>
    </div>
</header>
</body>
</html>
