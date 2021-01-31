<!--HEADER INCLUDE STARTS-->

<?php

include 'header.php';

?>

<!--HEADER INCLUDE ENDS-->

<?php

if (isset($_POST['submit_btn'])) {

$course_name=$_POST['course_name'];

$course_code=$_POST['course_code'];

$course_ic=$_POST['course_ic'];

$course_tc1=$_POST['course_tc1'];

$course_tc2=$_POST['course_tc2'];

$course_tc3=$_POST['course_tc3'];

$course_lpu=$_POST['course_lpu'];

$course_students=$_POST['course_students'];

$course_description=$_POST['course_description'];

$semester=$_POST['semester'];

$department= $_POST['department'];

$query = mysqli_query($mysqli,"SELECT id FROM users WHERE course_name = '$course_name' or course_code = '$course_code'");

$rows = mysqli_num_rows($query);

if($rows>0)

{

?>

<script>

alert('Course with that name / course code already exists!');

window.location.href='addCourse.php';

</script>

<?php

}

else

{

$sql = mysqli_query($mysqli,"INSERT INTO courses (course_name,course_code,course_ic,course_tc1,course_tc2,course_tc3,course_lpu,course_students,course_description,semester)"."VALUES('$course_name','$course_code','$course_ic','$course_tc1','$course_tc2','$course_tc3','$course_lpu','$course_students','$course_description','$semester')");

?>

<script>

alert('Course Successfully Added');

window.location.href='addCourse.php';

</script>

<?php

}

if ($department == 'common') {

$sql = mysqli_query($mysqli,"UPDATE courses SET common= '1' WHERE  course_name ='$course_name'");

}

else if ($department == 'cse') {

$sql = mysqli_query($mysqli,"UPDATE courses SET cse= '1' WHERE  course_name ='$course_name'");

}

else if ($department == 'ece') {

$sql = mysqli_query($mysqli,"UPDATE courses SET ece= '1' WHERE  course_name ='$course_name'");

}

else if ($department == 'eee') {

$sql = mysqli_query($mysqli,"UPDATE courses SET eee= '1' WHERE  course_name ='$course_name'");

}

else if ($department == 'me') {

$sql = mysqli_query($mysqli,"UPDATE courses SET me= '1' WHERE  course_name ='$course_name'");

}

else if ($department == 'ce') {

$sql = mysqli_query($mysqli,"UPDATE courses SET ce= '1' WHERE  course_name ='$course_name'");

}

}

?>

<br>

<div class="container0">

<hr>

<h2>Add a Course:</h2>

<hr>

<br>

<form method="post" action="addCourse.php">

<div id="page1">

<div class="form-group">

<label for="exampleInput">Course Name:</label>

<input type="text" class="form-control" id="exampleInputText" placeholder="Enter Course Name" name="course_name">

</div>

<div class="form-group">

<label for="exampleInput">Course Code:</label>

<input type="text" class="form-control" id="exampleInputText" placeholder="Enter Course Code" name="course_code">

</div>

<div class="form-group">

<label for="exampleInput">Course Incharge:</label>

<?php

$instructor_query = mysqli_query($mysqli,"SELECT * FROM instructors");

$options = "";

while($row = mysqli_fetch_array($instructor_query))
{

$instructor_name = $row['instructor_name'];

$options = $options."<option >$row[1]</option>";

}

?>

<select id="inputState" class="form-control" name="course_ic">

<option disabled hidden selected>Choose Course IC...</option>

<?php echo $options;?>

</select>

<!-- <input type="text" class="form-control" id="exampleInputText" placeholder="Enter Course Incharge's Name" name="course_ic"> -->

</div>

<div class="form-group ">

<label for="exampleInput">Course Instructor 1:</label>

<select id="inputState" class="form-control instructor_field" name="course_tc1">

<option disabled hidden selected>Choose...</option>

<?php echo $options;?>

</select>

<button type="button" class="add_instructor_field" name="button" onclick="add_instructor_field_2()" id="add_instructor_field2"><i class="fa fa-plus-square fa-lg " aria-hidden="true"></i></button>

</div>

<br>

<div class="form-group" id="instructor_field_2" style="display:none;">

<label for="exampleInput">Course Instructor 2:</label>

<select id="inputState" class="form-control instructor_field"  name="course_tc2d">

<option disabled  hidden selected>Choose...</option>

<?php echo $options;?>

</select>

<button type="button" class="add_instructor_field" name="button" onclick="add_instructor_field_3()" id="add_instructor_field3"><i class="fa fa-plus-square fa-lg" aria-hidden="true"></i></button>

<button type="button" class="add_instructor_field" name="button" onclick="remove_instructor_field_2()" id="remove_instructor_field3"><i class="fa fa-minus-square fa-lg" aria-hidden="true"></i></button>

</div>

<div class="form-group" id="instructor_field_3" style="display:none;">

<label for="exampleInput">Course Instructor 3:</label>

<select id="inputState" class="form-control instructor_field"  name="course_tc3">

<option disabled hidden selected>Choose...</option>

<?php echo $options;?>

</select>

<button type="button" class="add_instructor_field" name="button" onclick="remove_instructor_field_3()"><i class="fa fa-minus-square fa-lg" aria-hidden="true"></i></button>

</div>

<br> <br>

<button type="button" class="btn btn-primary nextpage_btn" name="button" onclick="nextPage()">Next Page <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></button>

</div>

<div id="page2" style="display:none;">

<div class="form-group">

<label for="exampleFormControlTextarea1">Description:</label>

<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write something about the course here.." name="course_description"></textarea>

</div>

<div class="form-row">

<div class="form-group col-md-6">

<label for="inputState">Semester</label>

<select id="inputState" class="form-control" name="semester">

<option disabled hidden selected>Choose Semester...</option>

<option value="2">2</option>

<option value="4">4</option>

<option value="6">6</option>

<option value="8">8</option>

</select>

</div>

<div class="form-group col-md-6">

<label for="inputZip">LPU:</label>

<input type="text" class="form-control" id="inputZip" placeholder="Enter course credits" name="course_lpu">

</div>

</div>

<div class="form-row">

<div class="form-group col-md-6">

<label for="inputCity">Students</label>

<input type="text" class="form-control" id="inputCity" placeholder="Enter no. of enrolled students.." name="course_students">

</div>

<div class="form-group col-md-6">

<label for="inputState">Department:</label>

<select id="inputState" class="form-control" name="department">

<option disabled hidden selected>Choose Department...</option>

<option value="common">Common</option>

<option value="cse">CSE</option>

<option value="ece">ECE</option>

<option value="eee">EEE</option>

<option value="me">ME</option>

<option value="ce">CE</option>

</select>

</div>

</div>

<br>

<button type="button" class="btn btn-primary prevpage_btn" name="button" onclick="prevPage()"><i class="fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>Prev Page</button>

<br> <br>

<button type="submit" name="submit_btn" class="btn btn-primary submit_btn">Submit</button>

</div>

</form>

</div>

<br>


































<!--FOOTER INCLUDE STARTS-->

<?php

include 'footer.php';

?>

<!--FOOTER INCLUDE ENDS-->
