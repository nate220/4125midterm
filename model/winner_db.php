<?php
function get_winners() {
    global $db;
    $query = "SELECT * FROM Winners
              ORDER BY ID";
    $result = $db->query($query);
    return $result;
}

function get_winners_by_country($country_id) {
    global $db;
    $query = 
        "SELECT Winners.FirstName, Winners.LastName, Olympiads.Year, Countries.Country 
        FROM Winners 
        JOIN Olympiads on Winners.YearID = Olympiads.ID 
        JOIN Countries on Winners.Country = Countries.ID
              WHERE Winners.Country = $country_id";
    $winners = $db->query($query);
    return $winners;
}

function get_winners_by_year($city_id) {
    global $db;
    $query = 
        "SELECT Winners.FirstName, Winners.LastName, Olympiads.Year, Countries.Country 
        FROM Winners 
        JOIN Olympiads on Winners.YearID = Olympiads.ID 
        JOIN Countries on Winners.Country = Countries.ID
              WHERE Winners.YearID = $city_id";
    $winners = $db->query($query);
    return $winners;
}

function get_winners_by_year_and_country($city_id, $country_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE YearID = '$city_id'
              AND Country = $country_id";
    $winners = $db->query($query);
    return $winners;
}

?>