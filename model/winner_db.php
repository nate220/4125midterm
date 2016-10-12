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
    $query = "SELECT * FROM Winners
              WHERE Country = $country_id";
    $winners = $db->query($query);
    //$winners = $category->fetch();
    //$winner_name = $winner['FirstName'];
    return $winners;
}

function get_winners_by_year($winner_year) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE YearID = $winner_year";
    $winners = $db->query($query);
    //$winners = $category->fetch();
    //$winner_name = $winner['FirstName'];
    return $winners;
}

function get_winners_by_year_and_country($winner_year, $country_id) {
    global $db;
    $query = "SELECT * FROM Winners
              WHERE YearID = $winner_year
              AND Country = $country_id";
    $winners = $db->query($query);
    //$winners = $category->fetch();
    //$winner_name = $winner['FirstName'];
    return $winners;
}


//function add_category($category_id, $category_name) {
//    global $db;
//    $query = 'INSERT INTO categories
//                 (categoryID, categoryName)
//              VALUES
//                 (:category_id, :category_name)';
//    try {
//        $statement = $db->prepare($query);
//        $statement->bindValue(':category_id', $category_id);
//        $statement->bindValue(':category_name', $category_name);
//        $statement->execute();
//        $statement->closeCursor();
//
//        return $category_id;
//    } catch (PDOException $e) {
//        $error_message = $e->getMessage();
//        display_db_error($error_message);
//    }
//}

?>