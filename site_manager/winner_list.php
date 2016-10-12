<?php include '../view/header.php'; ?>
<div id="main">
    
    <h1>Winner List</h1>
    
    <div id="sidebar">
        <!-- display a list of categories -->
        <h2>Country</h2>
        <ul class="nav">
            
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
            
        </ul>
        <!-- display a list of categories -->
        <h2>Olympic Year</h2>
        <ul class="nav">
            
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
            
        </ul>
    </div>

    <div id="content">
        <!-- display a table of winners -->
        <h2>Winners</h2>
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
                <td><?php echo $winner['YearID']; ?></td>
                <td><?php echo $winner['Country']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
</div>
<?php include '../view/footer.php'; ?>