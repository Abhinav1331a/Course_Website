<!--HEADER INCLUDE STARTS-->

<?php

include 'header.php';

?>

<!--HEADER INCLUDE ENDS-->

<br>

<div class="container0">

<hr>

<h2 style="float: left">All Courses:</h2>

<div class="search">

<form class="form-inline my-2 my-lg-0" method="post" action="allCourses.php">

<input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">

<button class="btn btn-primary btn-search my-2 my-sm-0" type="submit" name="Search_btn" id="Search_btn" onclick="Search()"><i class="fas fa-search"></i></button>

</form>

</div>

<br>

<hr style="margin">


<br> <br>

<form method="post" action="allCourses.php">

<button class="btn btn-primary btn-search my-2 my-sm-0" id="all_courses_btn" type="submit" name="all_courses_btn">Show All Courses</button>

</form>

<br>

<div id="search_courses" >

<?php

if (isset($_POST['Search_btn'])) {

$search = $_POST['search'];

$query= mysqli_query($mysqli, "SELECT * FROM courses WHERE course_name = '$search' or course_code = '$search' ");

$rows = mysqli_num_rows($query);

if($rows>0)

{

while($row=mysqli_fetch_array($query))

{

$id                   =$row['id'];

$course_name          =$row['course_name'];

$course_code          =$row['course_code'];

$course_ic            =$row['course_ic'];

$course_tc1           =$row['course_tc1'];

$course_tc2           =$row['course_tc2'];

$course_tc3           =$row['course_tc3'];

$course_lpu           =$row['course_lpu'];

$course_students      =$row['course_students'];

$course_description   =$row['course_description'];

?>

<section id="search_section">

<a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

<strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

<strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

<strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

<strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

<strong>Students:</strong> <?php echo $course_students; ?> <br>

</section>

<?php }

}

else {

?>

<script>

alert('Course does not exist with that name! Please try again or type full course name!');

window.location.href='allCourses.php';

</script>

<?php

}



}



?>

<br>

</div>

<div id="all_courses" >

<?php

if(!$mysqli){

die("Database Connection Failed" );

}

if (isset($_POST['all_courses_btn'])) {

$query= mysqli_query($mysqli, "SELECT * from courses");

while($row=mysqli_fetch_array($query))

{

$id                   =$row['id'];

$course_name          =$row['course_name'];

$_SESSION['var']      = $course_name;

$course_code          =$row['course_code'];

$course_ic            =$row['course_ic'];

$course_tc1           =$row['course_tc1'];

$course_tc2           =$row['course_tc2'];

$course_tc3           =$row['course_tc3'];

$course_lpu           =$row['course_lpu'];

$course_students      =$row['course_students'];

$course_description   =$row['course_description'];

?>

<section>

<a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

<strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

<strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

<strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

<strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

<strong>Students:</strong> <?php echo $course_students; ?> <br>

</section>

<?php }

}?>

</div>


</div>

<br>










<!--FOOTER INCLUDE STARTS-->

<?php

include 'footer.php';

?>

<!--FOOTER INCLUDE ENDS-->
