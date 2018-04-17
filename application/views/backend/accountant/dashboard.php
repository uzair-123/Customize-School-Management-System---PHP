<?php
$unpaid_invoices = $this->db->get_where('invoice', array('year' => $running_year, 'status' => 'unpaid'))->num_rows();

$total_income = 0;
$payments = $this->db->get_where('payment', array('year' => $running_year, 'payment_type' => 'income'))->result_array();
foreach($payments as $row)
	$total_income += $row['amount'];

$total_expense = 0;
$payments = $this->db->get_where('payment', array('year' => $running_year, 'payment_type' => 'expense'))->result_array();
foreach($payments as $row)
	$total_expense += $row['amount'];
?>

<hr />

<div class="row">
    
    <div class="col-md-4">
  

    <div class="col-md-4">
 
        
    </div>

    <div class="col-md-4">
    
     
	
</div>

  












