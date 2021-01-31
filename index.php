  <!--HEADER INCLUDE STARTS-->

  <?php

  include 'header.php';

  ?>

  <!--HEADER INCLUDE ENDS-->

  <br><br>

  <div class="" id="nonprintarea">

  <h3 class="ongoing_sem" id="nonprintarea">Ongoing Semester: Even ( Jan - May )</h3><br>

  </div>

  <div class="container0">  <!--OUTER CONTAINER -->

  <div class="container1">   <!--INNER CONTAINER -->

  <!--ACADAMEIC YEAR SELECT STARTS -->
  <div  id="nonprintarea">

  <h2 >Select an Year:</h2><br>

  <select class="form-select select1" aria-label="Default select example" >

  <option selected>Open this select menu</option>

  <option value="a">1st Year (Sem 2)</option>

  <option value="b">2nd Year (Sem 4)</option>

  <option value="c">3rd Year (Sem 6)</option>

  <option value="d">4th Year (Sem 8)</option>

  </select>

  </div>

  <!--ACADAMEIC YEAR SELECT ENDS -->

  <!--1ST YEAR CONTAINER STARTS -->

  <div class="a container2" id="printarea"><br>

  <h3 class="heading">All 1st Year Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '2'");

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

  <?php } ?>

  </div>

  <!--1ST YEAR CONTAINER ENDS -->

  <!--2ND YEAR CONTAINER STARTS -->

  <div class="b container2" ><br>

  <!--PRINT PURPOSE DIV STARTS-->

  <div class="" id="nonprintarea">

  <h2>Select a Category:</h2><br>

  <select class="form-select select2" name="" aria-label="Default select example">

  <option value="">Select</option>

  <option value="1">Common Subjects</option>

  <option value="2">CSE Subjects</option>

  <option value="3">ECE Subjects</option>

  <option value="4">EEE Subjects</option>

  <option value="5">ME Subjects</option>

  <option value="6">CE Subjects</option>

  <option value="7">All Subjects</option>

  </select><br>

  </div>

  <!--PRINT PURPOSE DIV STARTS-->

  <!--COMMON COURSES CONTAINER STARTS -->

  <div class="1 container3" id="printarea">

  <h3 class="heading">2nd Year Common Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and common= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>


  </div>

  <!--COMMON COURSES CONTAINER ENDS -->

  <!--CSE COURSES CONTAINER STARTS -->

  <div class="2 container3" id="printarea">

  <h3 class="heading">2nd Year CSE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and cse= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CSE COURSES CONTAINER ENDS -->

  <!--ECE COURSES CONTAINER STARTS -->

  <div class="3 container3" id="printarea">

  <h3 class="heading">2nd Year ECE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and ece= '1'");

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

  <section  >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ECE COURSES CONTAINER ENDS -->

  <!--EEE COURSES CONTAINER STARTS -->

  <div class="4 container3" id="printarea">

  <h3 class="heading">2nd Year EEE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and eee= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--EEE COURSES CONTAINER ENDS-->

  <!--ME COURSES CONTAINER STARTS -->

  <div class="5 container3" id="printarea">

  <h3 class="heading">2nd Year ME Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and me= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ME COURSES CONTAINER ENDS -->

  <!--CE COURSES CONTAINER STARTS -->

  <div class="6 container3" id="printarea">

  <h3 class="heading">2nd Year CE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4' and ce= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CE COURSES CONTAINER ENDS-->

  <!--ALL COURSES CONTAINER STARTS -->

  <div class="7 container3" id="printarea">

  <h3 class="heading">2nd Year All Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '4'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ALL COURSES CONTAINER STARTS -->

  </div>

  <!--2ND YEAR CONTAINER ENDS -->

  <!--3RD YEAR CONTAINER STARTS-->

  <div class="c container2"><br>

  <!--PRINT PURPOSE DIV STARTS-->

  <div class="" id="nonprintarea">

  <h2>Select a Category:</h2><br>

  <select class="form-select select2" name="" aria-label="Default select example">

  <option value="">Select</option>

  <option value="8">Common Subjects</option>

  <option value="9">CSE Subjects</option>

  <option value="10">ECE Subjects</option>

  <option value="11">EEE Subjects</option>

  <option value="12">ME Subjects</option>

  <option value="13">CE Subjects</option>

  <option value="14">All Subjects</option>

  </select><br>

  </div>

  <!--PRINT PURPOSE DIV ENDS-->

  <!--COMMON COURSES CONTAINER STARTS -->

  <div class="8 container3" id="printarea">

  <h3 class="heading">3rd Year Common Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and common= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>


  </div>

  <!--COMMON COURSES CONTAINER ENDS -->

  <!--CSE COURSES CONTAINER STARTS -->

  <div class="9 container3" id="printarea">

  <h3 class="heading">3rd Year CSE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and cse= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CSE COURSES CONTAINER ENDS -->

  <!--ECE COURSES CONTAINER STARTS -->

  <div class="10 container3" id="printarea">

  <h3 class="heading">3rd Year ECE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and ece= '1'");

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

  <section  >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ECE COURSES CONTAINER ENDS -->

  <!--EEE COURSES CONTAINER STARTS -->

  <div class="11 container3" id="printarea">

  <h3 class="heading">3rd Year EEE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and eee= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--EEE COURSES CONTAINER ENDS-->

  <!--ME COURSES CONTAINER STARTS -->

  <div class="12 container3" id="printarea">

  <h3 class="heading">3rd Year ME Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and me= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ME COURSES CONTAINER ENDS -->

  <!--CE COURSES CONTAINER STARTS -->

  <div class="13 container3" id="printarea">

  <h3 class="heading">3rd Year CE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6' and ce= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CE COURSES CONTAINER ENDS-->

  <!--ALL COURSES CONTAINER STARTS -->

  <div class="14 container3" id="printarea">

  <h3 class="heading">3rd Year All Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '6'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ALL COURSES CONTAINER STARTS -->

  </div>

  <!--3RD YEAR CONTAINER ENDS-->

  <!--4TH YEAR CONTAINER STARTS-->

  <div class="d container2"><br>

    <!--PRINT PURPOSE DIV STARTS-->

    <div class="" id="nonprintarea">

    <h2>Select a Category:</h2><br>

    <select class="form-select select2" name="" aria-label="Default select example">

    <option value="">Select</option>

    <option value="15">Common Subjects</option>

    <option value="16">CSE Subjects</option>

    <option value="17">ECE Subjects</option>

    <option value="18">EEE Subjects</option>

    <option value="19">ME Subjects</option>

    <option value="20">CE Subjects</option>

    <option value="21">All Subjects</option>

    </select><br>

    </div>

    <!--PRINT PURPOSE DIV ENDS-->

  <!--COMMON COURSES CONTAINER STARTS -->

  <div class="15 container3" id="printarea">

  <h3 class="heading">4th Year Common Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and common= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>


  </div>

  <!--COMMON COURSES CONTAINER ENDS -->

  <!--CSE COURSES CONTAINER STARTS -->

  <div class="16 container3" id="printarea">

  <h3 class="heading">4th Year CSE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and cse= '1'");

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

  <section >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CSE COURSES CONTAINER ENDS -->

  <!--ECE COURSES CONTAINER STARTS -->

  <div class="17 container3" id="printarea">

  <h3 class="heading">4th Year ECE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and ece= '1'");

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

  <section  >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ECE COURSES CONTAINER ENDS -->

  <!--EEE COURSES CONTAINER STARTS -->

  <div class="18 container3" id="printarea">

  <h3 class="heading">4th Year EEE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and eee= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--EEE COURSES CONTAINER ENDS-->

  <!--ME COURSES CONTAINER STARTS -->

  <div class="19 container3" id="printarea">

  <h3 class="heading">4th Year ME Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and me= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ME COURSES CONTAINER ENDS -->

  <!--CE COURSES CONTAINER STARTS -->

  <div class="20 container3" id="printarea">

  <h3 class="heading">4th Year CE Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8' and ce= '1'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--CE COURSES CONTAINER ENDS-->

  <!--ALL COURSES CONTAINER STARTS -->

  <div class="21 container3" id="printarea">

  <h3 class="heading">4th Year All Courses:</h3><br>

  <?php

  if(!$mysqli){

  die("Database Connection Failed" );

  }

  $query= mysqli_query($mysqli, "SELECT * from courses where semester =  '8'");

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

  <section   >

  <a href="http://localhost/moodle/?redirect=0"><h4 class="heading"><b><?php echo $course_name; echo "   <span><strong>("; echo $course_code; echo")</strong></span>"; ?></b></h4></a>

  <strong>LPU:</strong> <?php echo $course_lpu; ?> <br>

  <strong>Instructor In Charge:</strong> <?php echo $course_ic ?><br>

  <strong>Instructors:</strong> <?php echo $course_tc1 ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc2; ?><br>

  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<?php echo $course_tc3 ?><br>

  <strong>Description:</strong> <br> <?php echo $course_description; ?> <br>

  <strong>Students:</strong> <?php echo $course_students; ?> <br>

  </section>

  <?php } ?>

  </div>

  <!--ALL COURSES CONTAINER STARTS -->

  </div>

  <!--4TH YEAR CONTAINER ENDS-->

  </div>

  </div>

  <br><br>

  <!--FOOTER INCLUDE STARTS-->

  <?php

  include 'footer.php';

  ?>

  <!--FOOTER INCLUDE ENDS-->
