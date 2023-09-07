<?php
//start session 
 session_start();
//Declaring variable
$page_title = "Template";

//<!-- Calling header page -->

$page_title = "Template";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/carousel.php';
include_once('includes/connection.php');

//Create query
$query = "SELECT * FROM admin_tbl";

//run query in the database using built-in php function 
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);


//Fress result from database
mysqli_free_result($result);

//Close connection. Pass in $conn variable
mysqli_close($conn)

?>

<div>
<!-- Start of content 1 -->
<div class="container">
    <div class="row">


        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2>Admin List</h2>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date Registered</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $admin) : ?>
                    <tr>
                        <!--prints out the data-->
                        <td><?php echo $admin['AdminID']; ?></td>
                        <td><?php echo $admin['Email']; ?></td>
                        <td><?php echo $admin['Password']; ?></td>
                        <td><?php echo $admin['Datereg']; ?></td>
                        <td><a href= "admin_update.php?adminID<?php echo $admin['AdminID']; ?>">Modify</td>
                        <td><a herf= "admin_delete.php?adminID<?php echo $admin['Email']; ?>">Delete</td>
                        </tr>
                        </tbody>
                        <!--close forheadloop -->
                       <?php endforeach; ?>
                        </table>

        </div>
        <div class="col-sm-1">


        </div>
    </div>
</div>
</div>

<!-- Calling footer page -->
<?php
include 'includes/footer.php';
?>