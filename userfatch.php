<?php
include("php/connection.php");
$query = "select * from user";
$result = mysqli_query($con, $query);
				

					
					
					echo "<table>
					<tr>
					<th>user_id</th>
					<th>user_name</th>
					<th>user_email</th>
					<th>user_password</th>
					</tr>";
					while($user_data = mysqli_fetch_assoc($result)) {
  						echo "<tr>";
  						echo "<td>" . $user_data['user_id'] . "</td>";
  						echo "<td>" . $user_data['user_name'] . "</td>";
  						echo "<td>" . $user_data['user_email'] . "</td>";
  						echo "<td>" . $user_data['user_password'] . "</td>";
  						echo "</tr>";
					}
					echo "</table>";
				
?>
