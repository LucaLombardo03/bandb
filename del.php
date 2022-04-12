<!DOCTYPE html>
<html>
<head>
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<td>Employee Id</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>City</td>
	<td>Email id</td>
	<td>Action</td>
	</tr>>
    
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["CF"]; ?></td>
	<td><?php echo $row["nome"]; ?></td>
	<td><?php echo $row["cognome"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["numeroTelefono"]; ?></td>
    <td><?php echo $row["dataNascita"]; ?></td>
	<td><?php echo $row["CF"]; ?>">Delete</a></td>
	</tr>
</table>
</body>
</html>