
<?php
require('../model/database.php');
require('../model/country_db.php');
require('../model/winner_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_winners';
}

if ($action == 'list_winners') {
    // Get the current category ID
    if (!isset($country_id)) {
        $country_id = 1;
    } else {
    $country_id = $_GET['country_id'];
    }

    // Get product and category data
    $country_name = get_country_name($country_id);
    $countries = get_countries();
    $winners = get_winners_by_country($country_id);

    // Display the product list
    include('winner_list.php');
} 
else if ($action == 'list_countries') {
    // Get the current category ID
    if (!isset($country_id)) {
        $country_id = 1;
    }

    // Get product and category data
    $country_name = get_country_name($country_id);
    $countries = get_countries();

    // Display the category list
    include('country_list.php');
} 
else if ($action == 'list_cities') {
    // Get the current city ID
    if (!isset($city_id)) {
        $city_id = 1;
    }

    // Get product and category data
    $city_name = get_city_name($city_id);
    $cities = get_cities();

    // Display the category list
    include('city_list.php');
} 
//else if ($action == 'show_add_form') {
//    $categories = get_categories();
//    include('product_add.php');
//} 
//else if ($action == 'show_add_category_form') {
//    $categories = get_categories();
//    include('category_add.php');
//} 
//else if ($action == 'add_product') {
//    $category_id = $_POST['category_id'];
//    $code = $_POST['code'];
//    $name = $_POST['name'];
//    $price = $_POST['price'];
//
//    // Validate the inputs
//    if (empty($code) || empty($name) || empty($price)) {
//        $error = "Invalid product data. Check all fields and try again.";
//        include('../errors/error.php');
//    } else {
//        add_product($category_id, $code, $name, $price);
//
//        // Display the Product List page for the current category
//        header("Location: .?category_id=$category_id");
//    }
//} 
else if ($action == 'add_country') {
    $country_name = $_POST['country_name'];

    // Validate the inputs
    if (empty($country_name)) {
        $error = "Invalid country name.";
        include('../errors/error.php');
    } else {
        add_country($country_name);
        
        header("Location: .?");
    }
}
else if ($action == 'add_city') {
    $city_name = $_POST['city_name'];
    $city_year = $_POST['city_year'];

    // Validate the inputs
    if (empty($city_year)) {
        $error = "Invalid city year.";
        include('../errors/error.php');
    } else if (empty($city_name)) {
        $error = "Invalid city name.";
        include('../errors/error.php');
    } else {
        add_city($city_name, $city_year);
        
        header("Location: .?");
    }
}
?>