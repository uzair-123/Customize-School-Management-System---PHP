
<?php


if(isset($_POST['subby']))
{

 $license_key = $_POST['license_key'] ;
 $s_date = $_POST['s_date'] ;
 $e_date = $_POST['e_date'] ;


      $data = array(
        'user_status' => '0',
             'l_key' => $license_key,     's_date' => $s_date,     'e_date' => $e_date
      
);

$this->db->where('l_id', '1');
$this->db->update('license_key', $data);

echo '<script language="javascript">';
echo 'alert("Congrats !!! Your Key And Time Period Has Been Updated")';
echo '</script>';

}

?>


<hr />

<div class="row">



<form style="color: black;" action="" method="post"> 
    

<input type="text" name="license_key" placeholder="Set License Key">
<label>Start Date</label>
<input type="date" name="s_date">
<label>End Date</label>
<input type="date" name="e_date">

<input type="submit" name="subby">

</form>












</div>

  












