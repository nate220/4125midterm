
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

    $country_id = $_POST['country_id'];
    if (!isset($country_id)) {
        $country_id = 1;
    }
    $city_id = $_POST['city_id'];
    if (!isset($city_id)) {
        $city_id = 1;
    }

    $city_name = get_city_name($city_id);
    $cities = get_cities();
    $country_name = get_country_name($country_id);
    $countries = get_countries();
    $winners = get_winners_by_country($country_id);
    $winners2 = get_winners_by_year($city_id);

    include('winner_list.php');
}
else if ($action == 'list_countries') {

    if (!isset($country_id)) {
        $country_id = 1;
    }

    $country_name = get_country_name($country_id);
    $countries = get_countries();

    include('country_list.php');
} 
else if ($action == 'list_cities') {

    if (!isset($city_id)) {
        $city_id = 1;
    }

    $city_name = get_city_name($city_id);
    $cities = get_cities();

    include('city_list.php');
} 

else if ($action == 'add_country') {
    $country_name = $_POST['country_name'];

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