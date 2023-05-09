<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottery</title>
    <link rel="shortcut icon" href="../Images/logo.png" type="image/x-icon" />
    <link href="../Css/Site.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
                <a href="Admin.blade.php"><i class="fa-solid fa-house"></i> Home</a>
                <a href="Product.html"><i class="fa-solid fa-shop"></i> Product</a>
                <a href="Customer.blade.php"><i class="fa-solid fa-circle-user"></i> Customer</a>
                <a href="Promotion.blade.php"><i class="fa-solid fa-rectangle-ad"></i> Special offer</a>
                <a href="../Home/Login.html"><i class="fa-solid fa-right-to-bracket"></i> Log out</a>
            </nav>
        </div>
    </div>
    <div class="container mt-3">
        <h2>Product</h2>
        <div class="form-table">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Day</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>355643</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>774234</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>An Giang</td>
                    <td>008631</td>
                    <td>2023-04-01</td>
                    <td>
                        <a class="edit_icon" href="Edit_Product.blade.php"
                        title="Edit this product">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a> &nbsp;
                        <a class="delete_icon" title="Delete this product"
                           onclick="return confirm('Are you sure?');">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <a href="Add_Product.blade.php" class="button-add"><input type="submit" value="ADD" id="add" /></a>
    </div>

</header>
</body>
</html>
