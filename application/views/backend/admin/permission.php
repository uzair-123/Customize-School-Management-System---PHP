<hr />
<div class="row">

	<?php 

       if(isset($_POST['perm']))
       {
   
   $data = array(
               'student' => $_POST['a1'],
               'teacher' => $_POST['a2'],
               'parent' => $_POST['a3'],
               'librarian' => $_POST['a4'],
               'accountant' => $_POST['a5'],
               'class' => $_POST['a6'],
               'subject' => $_POST['a7'],
                'class_routine' => $_POST['a8'],
               'daily_atten' => $_POST['a9'],
               'exam' => $_POST['a10'],
               'study_material' => $_POST['a11'],
               'accounting' => $_POST['a12'],
               'library' => $_POST['a13'],
               'transport' => $_POST['a14'],
                  'dormitary' => $_POST['a15'],
               'noticeboard' => $_POST['a16'],
               'message' => $_POST['a17'],
               'settings' => $_POST['a18'],
               'send_sms' => $_POST['a19'],
               'account' => $_POST['a20']
          
           

            );

$this->db->where('per_id', '1');
$this->db->update('permissions', $data);

echo "<script>alert('TEACHER PERMISSIONS UPDATED!');</script>";





       }








       if(isset($_POST['perm1']))
       {
   
   $data = array(
               'student' => $_POST['a1'],
               'teacher' => $_POST['a2'],
               'parent' => $_POST['a3'],
               'librarian' => $_POST['a4'],
               'accountant' => $_POST['a5'],
               'class' => $_POST['a6'],
               'subject' => $_POST['a7'],
                'class_routine' => $_POST['a8'],
               'daily_atten' => $_POST['a9'],
               'exam' => $_POST['a10'],
               'study_material' => $_POST['a11'],
               'accounting' => $_POST['a12'],
               'library' => $_POST['a13'],
               'transport' => $_POST['a14'],
                  'dormitary' => $_POST['a15'],
               'noticeboard' => $_POST['a16'],
               'message' => $_POST['a17'],
               'settings' => $_POST['a18'],
               'send_sms' => $_POST['a19'],
               'account' => $_POST['a20']
          
           

            );

$this->db->where('per_id', '2');
$this->db->update('permissions', $data);

echo "<script>alert('STUDENT PERMISSIONS UPDATED!');</script>";





       }



              if(isset($_POST['perm2']))
       {
   
   $data = array(
               'student' => $_POST['a1'],
               'teacher' => $_POST['a2'],
               'parent' => $_POST['a3'],
               'librarian' => $_POST['a4'],
               'accountant' => $_POST['a5'],
               'class' => $_POST['a6'],
               'subject' => $_POST['a7'],
                'class_routine' => $_POST['a8'],
               'daily_atten' => $_POST['a9'],
               'exam' => $_POST['a10'],
               'study_material' => $_POST['a11'],
               'accounting' => $_POST['a12'],
               'library' => $_POST['a13'],
               'transport' => $_POST['a14'],
                  'dormitary' => $_POST['a15'],
               'noticeboard' => $_POST['a16'],
               'message' => $_POST['a17'],
               'settings' => $_POST['a18'],
               'send_sms' => $_POST['a19'],
               'account' => $_POST['a20']
          
           

            );

$this->db->where('per_id', '3');
$this->db->update('permissions', $data);

echo "<script>alert('PARENT PERMISSIONS UPDATED!');</script>";





       }




	?>
	

<form style=" margin-left: 100px;margin-bottom: 100px" action="" method="post">

  <input type="checkbox" name="a1" value="1"> Student Information<br>
  <input type="checkbox" name="a2" value="1" checked> Teacher Information<br>
   <input type="hidden" name="a3" value="1"> 
  <input type="hidden" name="a4" value="1" checked> 
    <input type="hidden" name="a5" value="1"> 
  <input type="checkbox" name="a6" value="1"> Class Information<br>
  <input type="checkbox" name="a7" value="1" checked> Subject Information <br>
   <input type="checkbox" name="a8" value="1"> Class Routine<br>
  <input type="checkbox" name="a9" value="1" checked> Daily Attendance<br>
      <input type="checkbox" name="a10" value="1" checked>Exam<br>
          <input type="checkbox" name="a11" value="1" checked>Study Material<br>
    <input type="hidden" name="a12" value="1" checked>
   <input type="checkbox" name="a13" value="1"> Library<br>
       <input type="checkbox" name="a14" value="1" checked>Transport<br>
  <input type="hidden" name="a15" value="1" checked> 
      <input type="checkbox" name="a16" value="1" checked> Notice board<br>
   <input type="checkbox" name="a17" value="1"> Message<br>
  <input type="hidden" name="a18" value="1" checked> 
  <input type="checkbox" name="a19" value="1" checked> Send Sms<br>
    <input type="checkbox" name="a20" value="1" checked> Account<br>

   


  <input style="margin-top: 30px" name="perm" type="submit" value="Submit">
</form>











<h2>PERMISSION TO STUDENTS</h2>
<form style=" margin-left: 100px;margin-bottom: 100px" action="" method="post">
  <input type="hidden" name="a1" value="1">
  <input type="checkbox" name="a2" value="1" checked> Teacher Information<br>
   <input type="hidden" name="a3" value="1"> 
  <input type="hidden" name="a4" value="1" checked> 
    <input type="hidden" name="a5" value="1"> 
  <input type="hidden" name="a6" value="1"> 
  <input type="checkbox" name="a7" value="1" checked> Subject Information <br>
   <input type="checkbox" name="a8" value="1"> Class Routine<br>
  <input type="checkbox" name="a9" value="1" checked> Daily Attendance<br>
      <input type="checkbox" name="a10" value="1" checked>Exam<br>
          <input type="checkbox" name="a11" value="1" checked>Study Material<br>
    <input type="hidden" name="a12" value="1" checked>
   <input type="checkbox" name="a13" value="1"> Library<br>
       <input type="checkbox" name="a14" value="1" checked>Transport<br>
  <input type="hidden" name="a15" value="1" checked>
      <input type="checkbox" name="a16" value="1" checked> Notice board<br>
   <input type="checkbox" name="a17" value="1"> Message<br>
  <input type="hidden" name="a18" value="1" checked>
  <input type="hidden" name="a19" value="1" checked> 
    <input type="checkbox" name="a20" value="1" checked> Account<br>

   


  <input style="margin-top: 30px" name="perm1" type="submit" value="Submit">
</form>








 


<h2>PERMISSION TO PARENTS</h2>


<form style=" margin-left: 100px;margin-bottom: 100px" action="" method="post">
  <input type="hidden" name="a1" value="1"> 
  <input type="checkbox" name="a2" value="1" checked> Teacher Information<br>
   <input type="hidden" name="a3" value="1"> 
  <input type="hidden" name="a4" value="1" checked> 
    <input type="hidden" name="a5" value="1"> 
  <input type="hidden" name="a6" value="1">
  <input type="checkbox" name="a7" value="1" checked> Subject Information <br>
   <input type="checkbox" name="a8" value="1"> Class Routine<br>
  <input type="checkbox" name="a9" value="1" checked> Daily Attendance<br>
      <input type="checkbox" name="a10" value="1" checked>Exam<br>
          <input type="checkbox" name="a11" value="1" checked>Study Material<br>
    <input type="hidden" name="a12" value="1" checked>
   <input type="checkbox" name="a13" value="1"> Library<br>
       <input type="checkbox" name="a14" value="1" checked>Transport<br>
  <input type="hidden" name="a15" value="1" checked> 
      <input type="checkbox" name="a16" value="1" checked> Notice board<br>
   <input type="checkbox" name="a17" value="1"> Message<br>
  <input type="hidden" name="a18" value="1" checked> 
  <input type="hidden" name="a19" value="1" checked> 
    <input type="checkbox" name="a20" value="1" checked> Account<br>

   


  <input style="margin-top: 30px" name="perm2" type="submit" value="Submit">
</form>









	

</div>




    <script>
  $(document).ready(function() {

	  var calendar = $('#notice_calendar');

				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},

					//defaultView: 'basicWeek',

					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,

					events: [
						<?php
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)
						},
						<?php
						endforeach
						?>

					]
				});
	});
  </script>
