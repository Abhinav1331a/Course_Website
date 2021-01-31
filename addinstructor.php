<!--HEADER INCLUDE STARTS-->

<?php

include 'header.php';

?>

<!--HEADER INCLUDE ENDS-->

<?php

if (isset($_POST['submit_btn'])) {

$instructor_name      =$_POST['instructor_name'];

$instructor_email     =$_POST['instructor_email'];

$instructor_mobile    =$_POST['instructor_mobile'];

$instructor_gender    =$_POST['instructor_gender'];

$instructor_dob       =$_POST['instructor_dob'];

$instructor_doj       =$_POST['instructor_doj'];

$query = mysqli_query($mysqli,"INSERT INTO instructors (instructor_name,instructor_email,instructor_mobile,instructor_gender,instructor_dob,instructor_doj)"."VALUES('$instructor_name','$instructor_email','$instructor_mobile','$instructor_gender','$instructor_dob','$instructor_doj')");

if ($query) {

?>

<script>

alert('Instructor Successfully Added');

window.location.href='addinstructor.php';

</script>

<?php

}

else if(!$query)

{

?>

<script>

alert('Instructor Not Added!!!');

window.location.href='addinstructor.php';

</script>

<?php

}

}

?>

<br>

<div class="container0">

<hr>

<h2>Add Instructor:</h2>

<hr>

<br>

<form method="post" action="addinstructor.php">

<div class="form-group">

<label for="exampleInput">Name:</label>

<input type="text" class="form-control"  placeholder="Enter Name" name="instructor_name">

</div>

<div class="form-group">

<label for="exampleInput">Email:</label>

<input type="text" class="form-control"  placeholder="Enter Email" name="instructor_email">

</div>

<div class="form-group">

<label for="exampleInput">Mobile:</label>

<input class="form-control" type="tel" placeholder="+91"  name="instructor_mobile">

</div>

<div class="form-group">

<label for="inputState">Gender:</label>

<select  class="form-control" name="instructor_gender">

<option disabled hidden selected>Choose Gender...</option>

<option >Male</option>

<option >Female</option>

</select>

</div>

<div class="form-group">

<label for="exampleInput">Date of Birth:</label>

<input class="form-control" type="date"   name="instructor_dob">

</div>

<div class="form-group">

<label for="exampleInput">Date of Join:</label>

<input class="form-control" type="date"   name="instructor_doj">

</div>

<br>

<button type="submit" name="submit_btn" class="btn btn-primary submit_btn">Submit</button>

</form>

</div>

<br>





















<!--FOOTER INCLUDE STARTS-->

<?php

include 'footer.php';

?>

<!--FOOTER INCLUDE ENDS-->
