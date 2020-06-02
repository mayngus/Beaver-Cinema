<?php

$pageTitle = "Update";
include("action.php");
include("header.php");	?>
		<!-- This is the start of CSS Grid style -->
		<div class="container grid">
			<!-- This is the page title -->
			<div class="box title">
				<h2 class="title">Update Customer Database</h2>
				<hr>
				<?php	if(isset($_SESSION['response'])){	?>
				<div class="alert <?php echo $_SESSION['res_type']; ?>">
					<strong><?php echo $_SESSION['response']; ?></strong>
				</div>
				<?php } unset($_SESSION['response']); ?>
			</div>

			<div class="box box-update">
				<!-- This is the POST form section -->
				<div class="edit-customer-form">
					<h3>Add/Edit Customer</h3>
					
					<form action="action.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" name="first_name" class="form-control" placeholder="Enter first name" required>
							</div>
							<div class="form-group">
								<input type="text" name="last_name" class="form-control" placeholder="Enter last name" required>
							</div>
							<div class="form-group">
								<input type="text" name="address" class="form-control" placeholder="Enter street, city, state, zip" required>
							</div>
							<div class="form-group">
								<input type="tel" name="phone" class="form-control" placeholder="Enter phone number" required>
							</div>
							<div class="form-group">
								<input type="text" name="email_address" class="form-control" placeholder="Enter email address" required>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" name="submit" value="Submit"></button>
							</div>
					</form>
				</div>
				<!-- This is the Table section -->
				<div class="box tbl-header table-box">
					<h3>Customers in Database</h3>
					<?php
					$mysqli = OpenCon();
					$result = $mysqli->query("SELECT * FROM customer") or die($mysqli->error);

					?>
					<table class="customer-table">
						<thead>
							<tr class="header-row">
								<th>First</th>
								<th>Last</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php	while ($row = $result->fetch_assoc()): ?>
								<tr>
									<td><a href="#" class="name-button"><?php echo $row['first_name']; ?></a></td>
									<td><?php echo $row['last_name']; ?></td>
									<td><?php echo $row['address']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td>
										<a href="action.php?edit= <?php echo $row['id']; ?>" 
											class="edit-button">EDIT</a>

										<a href="action.php?delete=<?php echo $row['id']; ?>" 
											class="delete-button">DELETE</a>
									</td>
								</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php include("footer.php");	?>