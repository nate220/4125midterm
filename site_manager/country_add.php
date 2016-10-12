<?php include '../view/header.php'; ?>
<div id="main">
    <h1>Add Country</h1>
    <form action="index.php" method="post" id="add_country_form">
        <input type="hidden" name="action" value="add_country" />

        <label>Country Name:</label>
        <input type="input" name="country_name" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add Country" action="country_list.php" />
        <br />  <br />
    </form>
    <h1>Add City / Year</h1>
    <form action="index.php" method="post" id="add_city_form">
        <input type="hidden" name="action" value="add_city" />

        <label>City Name:</label>
        <input type="input" name="city_name" />
        <br />
        
        <label>Year:</label>
        <input type="input" name="city_year" />
        <br />

        <label>&nbsp;</label>
        <input type="submit" value="Add City" action="city_list.php" />
        <br />  <br />
    </form>

</div>
<?php include '../view/footer.php'; ?>