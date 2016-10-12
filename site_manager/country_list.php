<?php include '../view/header.php'; ?>
<div id="main">
    
    <h1>Country List</h1>

    <div id="content">
        <!-- display a table of winners -->
        <h2>Countries</h2>
        <table>
            <tr>
                <th>Country Name</th>
            </tr>
            <?php foreach ($countries as $country) : ?>
            <tr>
                <td><?php echo $country['Country']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    
    
    
</div>
<?php include '../view/footer.php'; ?>