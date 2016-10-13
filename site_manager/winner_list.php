<?php include '../view/header.php'; ?>
<div id="main">
    
    <h1>Winner List</h1>
    
    <div id="sidebar">

        <h2>Country</h2>
        <ul class="nav">
            <div>
            <form method="POST" action="index.php" id="list_winners">
                
            <select name="country_id" onchange=this.form.submit()>
            <?php $example = $_POST['country_id'] ?>
            <?php foreach ($countries as $country) : ?>
                
                <option <?php if (isset($example) && $example== $country['ID']) { ?>selected="true" <?php }; ?> value="<?php echo $country['ID']; ?>">
                    <?php echo $country['Country']; ?>
                </option>
                
            <?php endforeach; ?>
            </select>
                
            </form>
            <br/>
            </div>
        </ul>
        
        <h2>Olympic Year</h2>
        <ul class="nav">
            <div>
            <form method="POST" action="index.php" id="list_winners">
                
            <select name="city_id" onchange=this.form.submit()>
            <?php $example = $_POST['city_id'] ?>
            <?php foreach ($cities as $city) : ?>
                
                <option <?php if (isset($example) && $example== $city['ID']) { ?>selected="true" <?php }; ?> value="<?php echo $city['ID']; ?>">
                    <?php echo $city['Year']; ?>
                </option>
                
            <?php endforeach; ?>
            </select>
                
            </form>
            <br/>
            </div>
        </ul>

    </div>

    <div id="content">

        <h2>Winners by Country</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Year</th>
                <th>Country</th>
            </tr>
            <?php foreach ($winners as $winner) : ?>
            <tr>
                <td><?php echo $winner['FirstName']; ?></td>
                <td><?php echo $winner['LastName']; ?></td>
                <td><?php echo $winner['Year']; ?></td>
                <td><?php echo $winner['Country']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <div id="content">

        <h2>Winners by Year</h2>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Year</th>
                <th>Country</th>
            </tr>
            <?php foreach ($winners2 as $winner2) : ?>
            <tr>
                <td><?php echo $winner2['FirstName']; ?></td>
                <td><?php echo $winner2['LastName']; ?></td>
                <td><?php echo $winner2['Year']; ?></td>
                <td><?php echo $winner2['Country']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
<!--
    <div id="content">

        <h2>Countries by ID</h2>
        <table>
            <tr>
                <th>Country ID</th>
                <th>Country Name</th>
            </tr>
            <?php foreach ($countries as $country) : ?>
            <tr>
                <td><?php echo $country['ID']; ?></td>
                <td><?php echo $country['Country']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    <div id="content">

        <h2>Years by ID</h2>
        <table>
            <tr>
                <th>Year ID</th>
                <th>Year</th>
            </tr>
            <?php foreach ($cities as $city) : ?>
            <tr>
                <td><?php echo $city['ID']; ?></td>
                <td><?php echo $city['Year']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
-->
    
</div>
<?php include '../view/footer.php'; ?>