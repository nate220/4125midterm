<?php include '../view/header.php'; ?>
<div id="main">
    
    <h1>City List</h1>

    <div id="content">
        
        <h2>Cities</h2>
        <table>
            <tr>
                <th>City Name</th>
                <th>Olympic Year</th>
            </tr>
            <?php foreach ($cities as $city) : ?>
            <tr>
                <td><?php echo $city['City']; ?></td>
                <td><?php echo $city['Year']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</div>
<?php include '../view/footer.php'; ?>