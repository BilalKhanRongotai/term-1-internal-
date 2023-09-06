<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Admin List";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php');
//Create Query
$query = "SELECT * FROM admin_tbl";
// Run query in the database using built-in php function 
//Pass 2 Parameters
$result = mysqli_query($conn, $query);
//Fetch Data from database 
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);
//Free result from database 
mysqli_free_result($result);

//Close connection. Pass in $conn Variable
mysqli_close($conn);
?>

<div class="container fluid pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
        <div class="col-sm-6">
        <h2>
            Admin List
        </h2>
        <table>
        <thead>
            <th>ID</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Date registered</th>
        </thead>
        <tbody>
            <?php
            foreach($admins as $admin):?>
            <tr>
              <td><?php echo $admin['AdminID']?></td>
              <td><?php echo $admin['Email']?></td>
              <td><?php echo $admin['Password']?></td>
              <td><?php echo $admin['Datereg']?></td>
              <td></td>
              <td>Modify</td>
              <td>Delte</td>
            </tr>
        </tbody>
        </table>
</div>
        </div>
    </div>
</div>








<?php
include 'includes/footer.php';
?>