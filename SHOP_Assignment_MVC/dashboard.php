<!DOCTYPE html>
<html >
<head>

    
    <title></title>

    <style>
        .btn {
            border: 0;
            background-color: rgb(0, 89, 255);
            width: 100px;
            height: 40px;
            color: #fff;
            cursor: pointer;
        }

        .search-box {
            height: 37px;
            border-radius: 3px;
            border: 1px solid rgb(0, 89, 255);
            width: 300px;
        }

        .product-list-wrapper {
            background-color: rgb(92, 157, 255);
            padding: 24px;
            width: 260px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <a href="Home.php"><< Logout</a>
    <h1>Dashboard</h1>
    <ul>
        <li><a href="Add_category.php">Add Category</a></li>
        <li><a href="Edit_category.php">Edit Category</a></li>
        <li><a href="All_categories.php">All Categories</a></li>
    </ul>

    <input type="text" class="search-box" onkeyup="searchProduct(this)"> <button class="btn">Search</button>

    <ul id="product-list" class="product-list-wrapper">
        
    </ul>
    <script src="js/search.js" ></script>
</body>
</html>