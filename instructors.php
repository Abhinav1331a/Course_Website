<!--HEADER INCLUDE STARTS-->

<?php

include 'header.php';

?>

<!--HEADER INCLUDE ENDS-->
<br>

<div class="container0 instructors_table">

<table class="table table-bordered table-striped table-condensed">

<thead>

<tr class="info">

<th class="text-center">Name</th>

<th class="text-center">Email</th>

<th class="text-center">Mobile</th>

<th class="text-center">Account</th>

</tr>

</thead>

<tbody>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'lms');

if (!$conn)

{

die("Database Connection Failed" );

}

$query=mysqli_query($conn, "SELECT * from instructors ORDER BY id asc");

while($row=mysqli_fetch_array($query))

{

$id                   =$row['id'];

$instructor_name      =$row['instructor_name'];

$instructor_email     =$row['instructor_email'];

$instructor_mobile    =$row['instructor_mobile'];

?>

<tr>

<td align="center"><?php echo $instructor_name ?></td>

<td align="center"><?php echo $instructor_email ?></td>

<td align="center"><?php echo $instructor_mobile ?></td>

<td align="center">

<a class="btn btn-primary" href="viewInstructor.php?id=<?php echo $row["id"]; ?>">Details</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<br>




























<!--FOOTER INCLUDE STARTS-->

<?php

include 'footer.php';

?>
