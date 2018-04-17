<hr />

<?php 

if(isset($_POST['subby']))
{



$license_key = $_POST['license_key'] ;

$hashi = md5($license_key) ;

$query = $this->db->query("select * from employee where employee_secret = '$hashi'");

$count = $query->num_rows() ;



if($count == 1 )
{




$this->db->where('employee_secret', $hashi);
$this->db->delete('employee');



$date = new DateTime(); 
$shate = $date ;
$game = $date->add(new DateInterval('P30D'));
echo $game->format('Y-m-d') . "\n";


$mag = new DateTime() ;




?>

<h1></h1>

<?php





  $data = array(
        's_date' => $mag->format('Y-m-d'),
            'e_date' => $game->format('Y-m-d')     

);

$this->db->where('l_id', '1');
$this->db->update('guardian', $data);














redirect('../index.php?admin/dashboard');


}

else
{
  echo '<script language="javascript">';
echo 'alert("INVALID LICENSE KEY")';
echo '</script>';
}
}

?>

<div class="row">



  

  <form action="" method="post">
    

<input type="text" name="license_key" placeholder="Enter license key">


<input type="submit" name="subby">

  </form>




<?php 


echo date('Y-m-d', strtotime("+30 days"));
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
