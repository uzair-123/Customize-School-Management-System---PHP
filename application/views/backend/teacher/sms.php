<hr />
<div class="row">

    <form action="" method="post">

        <?php

           if(isset($_POST['sms']))
           {
            $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $_POST['tnum'];///Recepient Mobile Number
$sender = "123456";
$message = $_POST['msg'];


////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/


 echo "<script>javascript: alert('Congratulations !!! Your message has been sent now')></script>";           }
         ?>



<?php 

$query = $this->db->get('teacher');


?> 

<div class="form-group">
    <label>Select Teacher</label>
<select name="tnum">




<?php

foreach ($query->result() as $row)
{
    ?>

 <option value="<?php echo $row->phone  ?>"><?php echo $row->name  ?></option>
    <?php    // echo $row->title;


}




?>

</select>
</div>

<textarea name="msg">Enter text here...</textarea>


<input style="margin-bottom: 100px" type="submit" name="sms" value="SEND SMS TO TEACHER">
		

        </form>












            <form action="" method="post">

        <?php

           if(isset($_POST['sms1']))
           {
            $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $_POST['snum'];///Recepient Mobile Number
$sender = "123456";
$message = $_POST['msg1'];


////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/


 echo "<script>javascript: alert('Congratulations !!! Your message has been sent now')></script>";           }
         ?>



<?php 

$query = $this->db->get('student');


?> 

<div class="form-group">
    <label>Select Student</label>
<select name="snum">




<?php

foreach ($query->result() as $row)
{
    ?>

 <option value="<?php echo $row->phone  ?>"><?php echo $row->name  ?></option>
    <?php    // echo $row->title;


}




?>

</select>
</div>

<textarea name="msg1">Enter text here...</textarea>


<input style="margin-bottom: 100px" type="submit" name="sms1" value="SEND SMS TO STUDENT">
        

        </form>


















            <form action="" method="post">

        <?php

           if(isset($_POST['sms2']))
           {
            $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $_POST['pnum'];///Recepient Mobile Number
$sender = "123456";
$message = $_POST['msg2'];


////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/


 echo "<script>javascript: alert('Congratulations !!! Your message has been sent now')></script>";           }
         ?>



<?php 

$query = $this->db->get('parent');


?> 

<div class="form-group">
    <label>Select Parent</label>
<select name="pnum">




<?php

foreach ($query->result() as $row)
{
    ?>

 <option value="<?php echo $row->phone  ?>"><?php echo $row->name  ?></option>
    <?php    // echo $row->title;


}




?>

</select>
</div>

<textarea name="msg2">Enter text here...</textarea>


<input style="margin-bottom: 100px" type="submit" name="sms2" value="SEND SMS TO PARENT">
        

        </form>







<?php 

if(isset($_POST['sibba']))
{

  $sibby = $_POST['sibby'] ;
   $msg3 = $_POST['msg3'] ;



  

   
                 $classes = $this->db->get_where('section', array('class_id' => $sibby ))->result_array();

   foreach ($classes as $row)
   {

          $cl = $this->db->get_where('teacher', array('teacher_id' => $row['teacher_id'] ))->result_array();


   foreach ($cl as $rowy)
   {

     $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $rowy['phone'] ;///Recepient Mobile Number
$sender = "123456";
$message = $msg3;


////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/


 echo "<script>javascript: alert('Congratulations !!! Your message has been sent now')></script>";
  


   }
   
    

   }
 
}










                

?>





            <form action="" method="post">

   




<?php 

$query = $this->db->get('class');


?> 

<div class="form-group">
    <label>Select Class </label>
<select name="sibby">




<?php

foreach ($query->result() as $row)
{
    ?>

 <option value="<?php echo $row->class_id  ?>"><?php echo $row->name  ?></option>
    <?php    // echo $row->title;


}




?>

</select>
</div>

<textarea name="msg3">Enter text here...</textarea>




<input style="margin-bottom: 100px" type="submit" name="sibba" value="SEND SMS TO ALL PARENTS">

        

        </form>












 <?php 



if(isset($_POST['s_unpaid']))
  {
    $msg = $_POST['msg4'] ;

 

 // $classes = $this->db->get_where('invoice', array('status' => 'unpaid' ))->result_array();
$classes = $this->db->query("select * from invoice where amount - amount_paid != 0 and status = 'unpaid'")->result_array();

  foreach ($classes as $unpaid) {


 $info = $this->db->get_where('student', array('student_id' => $unpaid['student_id'] ))->result_array();




  foreach ($info as $student) {
    # code...
  }



 $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $student['phone'] ;///Recepient Mobile Number
$sender = "123456";






////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($msg)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
 

    # code...
  }


  }



























 // send sms to all unpaid parents 

if(isset($_POST['p_unpaid']))
  {
    $msg = $_POST['msg4'] ;

 

 // $classes = $this->db->get_where('invoice', array('status' => 'unpaid' ))->result_array();
$classes = $this->db->query("select * from invoice where amount - amount_paid != 0 and status = 'unpaid'")->result_array();

  foreach ($classes as $unpaid) {


 $info = $this->db->get_where('student', array('student_id' => $unpaid['student_id'] ))->result_array();




  foreach ($info as $student) {
    # code...
  }


   $infoo = $this->db->get_where('parent', array('parent_id' => $student['parent_id'] ))->result_array();




  foreach ($infoo as $parent) {
    # code...
  }



 $username = "923170502441";///Your Username
$password = "8964";///Your Password
$mobile = $parent['phone'] ;///Recepient Mobile Number
$sender = "123456";





////sending sms

$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($msg)."";
$url = "http://sendpk.com/api/sms.php?username=923170502441&password=8964";
$ch = curl_init();
$timeout = 30; // set to zero for no timeout
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$result = curl_exec($ch); 
/*Print Responce*/
 

    # code...
  }


  }

























 ?>

 





          

            <form action="" method="post">

   






<textarea name="msg4">Enter text here...</textarea>




<input style="margin-bottom: 100px" type="submit" name="s_unpaid" value="SEND SMS TO Unpaid Students">

<input style="margin-bottom: 100px" type="submit" name="p_unpaid" value="SEND SMS TO Unpaid Parents">

        

        </form>






<?php  


if(isset($_POST['turn_on']))
{

 $data['value']  = '1' ;
      $this->db->where('auto_id', '1');
      $this->db->update('auto_check', $data);
}



if(isset($_POST['turn_off']))
{

      $data['value']  = '0' ;
      $this->db->where('auto_id', '1'); 
      $this->db->update('auto_check', $data);

}



?>



<form action="" method="post">
  

<input type="submit" name="turn_on" value="TURN ON AUTO SMS">
<input type="submit" name="turn_off" value="TURN OFF AUTO SMS ">



</form>

    






<?php 

$y = date("d");
echo $y;

?>





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
