<?php
function get_countries() {
    global $db;
    $query = 'SELECT * FROM Countries
              ORDER BY ID';
    $countries = $db->query($query);
    return $countries;
}

function get_country_name($country_id) {
    global $db;
    $query = "SELECT * FROM Countries
              WHERE ID = $country_id";
    $country = $db->query($query);
    $country = $country->fetch();
    $country_name = $country['Country'];
    return $country_name;
}

function get_city_name($city_id) {
    global $db;
    $query = "SELECT * FROM Olympiads
              WHERE ID = $city_id";
    $city = $db->query($query);
    $city = $city->fetch();
    $city_name = $city['City'];
    return $city_name;
}

function get_cities() {
    global $db;
    $query = 'SELECT * FROM Olympiads
              ORDER BY ID';
    $cities = $db->query($query);
    return $cities;
}

function add_country($country_name) {
    global $db;
    $query = "INSERT INTO Countries
                 (Country)
              VALUES
                 ('$country_name')";
    $db->exec($query);
}

function add_city($city_name, $city_year) {
    global $db;
    $query = "INSERT INTO Olympiads
                 (City, Year)
              VALUES
                 ('$city_name', '$city_year')";
    $db->exec($query);
}
?>