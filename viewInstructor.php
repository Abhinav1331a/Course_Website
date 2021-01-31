<!--HEADER INCLUDE STARTS-->

<?php

include 'header.php';

?>

<?php

$id=$_REQUEST['id'];

$query=mysqli_query($mysqli, "SELECT * from instructors WHERE id = '$id'");

while($row=mysqli_fetch_array($query)) {

$instructor_name= $row['instructor_name'];

$instructor_email     =$row['instructor_email'];

$instructor_mobile    =$row['instructor_mobile'];

$instructor_gender    = $row['instructor_gender'];

$instructor_dob       =$row['instructor_dob'];

$instructor_doj       =$row['instructor_doj'];

}
?>

<!--HEADER INCLUDE ENDS-->
<br>

<div class="container0 viewInstructor">

<h4><?php echo $instructor_name ?></h4>

<br>

<div class="instructor_details" >

<strong>Instructor Details:</strong>

<hr>

<strong>Gender</strong><br>

<?php echo $instructor_gender; ?>

<br> <br>

<strong>Email:</strong><br>

<?php echo $instructor_email; ?>

<br> <br>

<strong>Mobile:</strong><br>

<?php echo $instructor_mobile; ?>

<br> <br>

<strong>Date of Birth:</strong><br>

<?php echo $instructor_dob; ?>

<br> <br>

<strong>Date of Join:</strong><br>

<?php echo $instructor_doj ?>

</div>



<div class="course_details">

<strong>Course Details:</strong>

<hr>

<strong>Incharge:</strong>

<br>

<?php

$query=mysqli_query($mysqli, "SELECT course_name from courses WHERE course_ic = '$instructor_name'");

while ($row = $query->fetch_assoc()) {

?>

<a href="http://localhost/moodle/?redirect=0"><?php echo $row['course_name']; ?></a>

<br>

<?php

}

?>

<br>

<strong>Instructor:</strong>

<br>

<?php

$query1 = mysqli_query($mysqli, "SELECT course_name from courses WHERE course_tc1 = '$instructor_name' OR course_tc2 = '$instructor_name' OR course_tc3 = '$instructor_name'");

while ($row1 = $query1->fetch_assoc()) {

?>

 <a href="http://localhost/moodle/?redirect=0"><?php echo $row1['course_name']; ?></a>

<br>

<?php

}

?>

</div>

</div>

<br>

<!--FOOTER INCLUDE STARTS-->

<?php

include 'footer.php';

?>

<!--FOOTER INCLUDE ENDS-->
