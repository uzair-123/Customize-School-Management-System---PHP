

<?php 


                 $query = $this->db->get_where('permissions', array('per_id' =>'3' ));
                $t = $query->result_array() ;

            foreach ($t as $rowalo) {
                # code...
            }
               

         


$mike = date("Y/m/d") ;


$la = $this->db->query("select * from guardian where '$mike' between s_date and e_date");
    
$c = $la->num_rows() ;


if($c == '1')
{


    ?>


<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style="border-top:1px solid rgba(69, 74, 84, 0.7);"></div>
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>



<?php

if($rowalo['teacher'] == '1')
{
?>

   <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/teacher_list">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('teacher'); ?></span>
            </a>
        </li>


<?php 
}
?>

     

<?php

if($rowalo['subject'] == '1')
{
?>

  <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo ' active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/subject">
                <i class="entypo-docs"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
        </li>

<?php 
}
?>



<?php

if($rowalo['class_routine'] == '1')
{
?>

    <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/class_routine">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('class_routine'); ?></span>
            </a>
        </li>


<?php 
}
?>





<?php

if($rowalo['study_material'] == '1')
{
?>

        <!-- STUDY MATERIAL -->
        <li class="<?php if ($page_name == 'study_material') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/study_material">
                <i class="entypo-book-open"></i>
                <span><?php echo get_phrase('study_material'); ?></span>
            </a>
        </li>



<?php 
}
?>


      


    



        <!-- ACADEMIC SYLLABUS -->
        <li class="<?php if ($page_name == 'academic_syllabus') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?student/academic_syllabus/<?php echo $this->session->userdata('login_user_id');?>">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('academic_syllabus'); ?></span>
            </a>
        </li>




<?php

if($rowalo['exam'] == '1')
{
?>

    <!-- Exam marks -->
        <li class="<?php if ($page_name == 'student_marksheet') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_marksheet/<?php echo $this->session->userdata('login_user_id');?>">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo get_phrase('exam_marks'); ?></span>
            </a>
        </li>

<?php 
}
?>
    


    <?php

if($rowalo['accounting'] == '1')
{
?>

 <!-- PAYMENT -->
        <li class="<?php if ($page_name == 'invoice' || $page_name == 'pay_with_payumoney') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/invoice">
                <i class="entypo-credit-card"></i>
                <span><?php echo get_phrase('payment'); ?></span>
            </a>
        </li>

<?php 
}
?>



<?php

if($rowalo['library'] == '1')
{
?>

   

        <!-- LIBRARY -->
        <li class="<?php if ($page_name == 'book' || $page_name == 'book_request') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('library'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?student/book">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('book_list'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'book_request') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?student/book_request">
                        <i class="entypo-dot"></i>
                        <span><?php echo get_phrase('my_book_requests'); ?></span>
                    </a>
                </li>
            </ul>
        </li>


<?php 
}
?>



<?php

if($rowalo['transport'] == '1')
{
?>
   <!-- TRANSPORT -->
        <li class="<?php if ($page_name == 'transport') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/transport">
                <i class="entypo-location"></i>
                <span><?php echo get_phrase('transport'); ?></span>
            </a>
        </li>



<?php 
}
?>



<?php

if($rowalo['noticeboard'] == '1')
{
?>
   
        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/noticeboard">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>


<?php 
}
?>


    
  

  <?php

if($rowalo['message'] == '1')
{
?>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message' || $page_name == 'group_message') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/message">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>



<?php 
}
?>


<?php

if($rowalo['account'] == '1')
{
?>



        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/manage_profile">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>

<?php 
}
?>


   





    </ul>

</div>








    <?php
}

?>

