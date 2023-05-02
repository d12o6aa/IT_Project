<?php

ob_start(); // Output Buffering Start

	session_start();

	$pageTitle = 'Members';
	include 'header1.php';
	if (!(isset($_SESSION['Username']))) {

		include 'init.php';

		$do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

		// Start Manage Page

		if ($do == 'Manage') { // Manage Members Page

			$query = '';

			if (isset($_GET['page']) && $_GET['page'] == 'Pending') {

				$query = 'AND RegStatus = 0';

			}

			// Select All Users Except Admin  WHERE IDGroub != 1 $query ORDER BY id DESC

			$stmt = $conn->prepare("SELECT * FROM users WHERE IDGroub != 1 $query ORDER BY id DESC");

			// Execute The Statement

			$stmt->execute();

			// Assign To Variable 
			//$rows = array($stmt)
			//$rows = $stmt-> fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP, "users");
			//var_dump($stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP));
			//$rows = $stmt-> fetchAll(); mysqli_stmt::fetchAll()

			$resultSet = $stmt->get_result();
			$rows = $resultSet->fetch_all(MYSQLI_ASSOC);

			//var_dump($rows);
			if (! empty($rows)) {

			?>

			<h1 class="text-center">Manage Members</h1>
			<div class="container">
				<div class="table-responsive">
					<table class="main-table manage-members text-center table table-bordered">
						<tr>
							<td>#ID</td>
							<td>Avatar</td>
							<td>Username</td>
							<td>Email</td>
							<td>Full Name</td>
							<td>Registered Date</td>
							<td>Control</td>
						</tr>
						<?php
							foreach($rows as $row) {
								echo "<tr>";
									echo "<td>" . $row['id'] . "</td>";
									// echo "<td>";

									// if (!empty($row['fristname'])) {
									// 	echo 'No Image';
									// } else {
									// 	echo "<img src='uploads/avatars/" . $row['avatar'] . "' alt='' />";
									// }
									// echo "</td>";
									echo "<td>" . $row['fristname'] . "</td>";
									echo "<td>" . $row['lastname'] . "</td>";
									echo "<td>" . $row['email'] . "</td>";
									echo "<td>" . $row['phone'] . "</td>";
									echo "<td>" . $row['time stamp'] ."</td>";
									echo "<td>
										<a href='profile.php?do=Edit&id=" . $row['id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
										<a href='Delete.php?do=Delete&id=" . $row['id'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";
										// if ($row['RegStatus'] == 0) {
										// 	echo "<a 
										// 			href='members.php?do=Activate&id=" . $row['id'] . "' 
										// 			class='btn btn-info activate'>
										// 			<i class='fa fa-check'></i> Activate</a>";
										// }
									echo "</td>";
								echo "</tr>";
							}
						?>
						<tr>
					</table>
				<!-- </div>
				<a href="members.php?do=Add" class="btn btn-primary">
					<i class="fa fa-plus"></i> New Member
				</a> -->
			</div>

			<?php } else {

				echo '<div class="container">';
					echo '<div class="nice-message">There\'s No Members To Show</div>';
					echo '<a href="members.php?do=Add" class="btn btn-primary">
							<i class="fa fa-plus"></i> New Member
						</a>';
				echo '</div>';

			}  

		

		}
		
    } elseif($do == 'Edit'){

		header('location:profile.php');

    }  elseif ($do == 'Delete') {


		header('location:Delete.php');
		
	
	} else {

		header('Location: index.php');

		exit();
}
ob_end_flush(); // Release The Output

?>

