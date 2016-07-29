<?php 
require('../model/database.php');
require('../model/functions.php');

$employees = get_employees();
include '../view/header.php';
include '../nav/otherNav.html';
?>
<h1>About Us</h1>
    <table>
    	<tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Title</th>
            <th>Employee Photo</th>
        </tr>
        <tr>
        <?php foreach ($employees as $emp) : ?>				
            <td><?php echo $emp['employeeID']; ?></td>
            <td><?php echo $emp['employeeName']; ?></td>
            <td><?php echo $emp['employeeTitle']; ?></td>
            <td><img src="<?php echo $emp['employeeIMG']; ?>" 
                     alt="<?php echo $emp['employeeName']; ?>" /></td>
        <?php endforeach; ?>
        </tr>
    </table>
 <?php include '../footer.php';?>

	
	


