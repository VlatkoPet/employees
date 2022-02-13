<?php 
    include 'app.php';
    include_once '../config/database.php';
    include_once '../app/models/class.Employees.php';

    
        // instantiate database and product object
    $database = new Database();
    $db = $database->getConnection();
    
    // initialize models
    $employees = new Employees($db);
    $getAllEmployees = $employees->getAllEmployees();
    $numAll = $getAllEmployees->rowCount();



    
?>

<div class="container mt-5">



<div class="div-table">
    <table>
        <thead style="background-color:#e0dede">
            <tr>
                <th>ID</th>
				<th>Image</th>
				<th>date of birth</th>
				<th>title</th>
				<th>firstname</th>
				<th>lastname</th>
				<th>email</th>
				<th>address</th>
				<th>country</th>
				<th>bio</th>
				<th>rating</th>
                <th>created at</th>
            </tr>
        </thead>
        
        <tbody>
        <?php 



        if($numAll > 0){
        while ($row = $getAllEmployees->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
                <td><?php echo $row['employee_id']; ?></td>
				<td><?php echo $row['image']; ?></td>
				<td><?php echo $row['date_of_birth']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['country']; ?></td>
				<td><?php echo $row['bio']; ?></td>
				<td><?php echo $row['rating']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        <?php } }else{  ?>
            <tr>
                <td>
                   <p style="margin-top:20px;text-align:center;color:blue;width:100%">You don't have employees</p>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>



 
</div>