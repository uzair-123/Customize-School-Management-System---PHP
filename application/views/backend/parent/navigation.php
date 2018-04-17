
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

    <div style=""></div>
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->

        
           <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>



    <!-- TEACHER --> 
     <?php 

         if($rowalo['teacher'] == '1')
         {
            ?>

   <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/teacher_list">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('teacher'); ?></span>
            </a>
        </li>
            <?php
         }

        ?>


   


         <!-- ACADEMIC SYLLABUS -->
        <li class="<?php if ($page_name == 'academic_syllabus') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('academic_syllabus'); ?></span>
            </a>
            <ul>
            <?php
                $children_of_parent = $this->db->get_where('student' , array(
                    'parent_id' => $this->session->userdata('parent_id')
                ))->result_array();
                foreach ($children_of_parent as $row):
            ?>
                <li class="<?php if ($page_name == 'academic_syllabus') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?parents/academic_syllabus/<?php echo $row['student_id'];?>">
                        <span><i class="entypo-dot"></i> <?php echo $row['name'];?></span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </li>




      <?php 

         if($rowalo['class_routine'] == '1')
         {
            ?>
        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('class_routine'); ?></span>
            </a>
            <ul>
            <?php
                $children_of_parent = $this->db->get_where('student' , array(
                    'parent_id' => $this->session->userdata('parent_id')
                ))->result_array();
                foreach ($children_of_parent as $row):
            ?>
                <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?parents/class_routine/<?php echo $row['student_id'];?>">
                        <span><i class="entypo-dot"></i> <?php echo $row['name'];?></span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </li>

            <?php
         }

        ?> 
           




      <?php 

         if($rowalo['daily_atten'] == '1')
         {
            ?>

        <!-- ATTENDANCE VIEW FOR CHILDREN -->
        <li class="<?php if ($page_name == 'attendance_report' || $page_name == 'attendance_report_view') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-chart-area"></i>
                <span><?php echo get_phrase('student_attendance'); ?></span>
            </a>
            <ul>
            <?php
                $children_of_parent = $this->db->get_where('student' , array(
                    'parent_id' => $this->session->userdata('parent_id')
                ))->result_array();
                foreach ($children_of_parent as $row):
            ?>
                <li class="<?php if ($page_name == 'attendance_report') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?parents/attendance_report/<?php echo $row['student_id'];?>">
                        <span><i class="entypo-dot"></i> <?php echo $row['name'];?></span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </li>

            <?php
         }

        ?> 



              <?php 

         if($rowalo['exam'] == '1')
         {
            ?>
    <!-- EXAMS -->
        <li class="<?php
        if ($page_name == 'marks') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo get_phrase('exam_marks'); ?></span>
            </a>
            <ul>
            <?php
                foreach ($children_of_parent as $row):
            ?>
                <li class="<?php if ($page_name == 'marks' && $student_id == $row['student_id']) echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?parents/marks/<?php echo $row['student_id'];?>">
                        <span><i class="entypo-dot"></i> <?php echo $row['name'];?></span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </li>


            <?php
         }

        ?> 



      <?php 

         if($rowalo['accounting'] == '1')
         {
            ?>


        <!-- PAYMENT -->
        <li class="<?php if ($page_name == 'invoice' || $page_name == 'pay_with_payumoney') echo 'opened active';?> ">
            <a href="#">
                <i class="entypo-credit-card"></i>
                <span><?php echo get_phrase('payment'); ?></span>
            </a>
            <ul>
            <?php
                foreach ($children_of_parent as $row):
            ?>
                <li class="<?php if ($page_name == 'invoice') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?parents/invoice/<?php echo $row['student_id'];?>">
                        <span><i class="entypo-dot"></i> <?php echo $row['name'];?></span>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </li>

            <?php
         }

        ?> 



      <?php 

         if($rowalo['library'] == '1')
         {
            ?>

        <!-- LIBRARY -->
        <li class="<?php if ($page_name == 'book') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/book">
                <i class="entypo-book"></i>
                <span><?php echo get_phrase('library'); ?></span>
            </a>
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
            <a href="<?php echo base_url(); ?>index.php?parents/transport">
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
            <a href="<?php echo base_url(); ?>index.php?parents/noticeboard">
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
            <a href="<?php echo base_url(); ?>index.php?parents/message">
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
            <a href="<?php echo base_url(); ?>index.php?parents/manage_profile">
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


