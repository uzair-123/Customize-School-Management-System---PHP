<?php 


                 $query = $this->db->get_where('permissions', array('per_id' =>'1' ));
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
    <header class="logo-env">

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png" style="max-height:60px;"/>
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
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

        <li id="search">
          <form class="" action="<?php echo base_url().'index.php?'.$account_type.'/student_details' ?>" method="post">
            <input type="text" class="search-input" name="student_identifier" placeholder="<?php echo get_phrase('student_name').' / '.get_phrase('code').' ...'; ?>" value="" required style="font-family: 'Poppins', sans-serif !important; background-color: #2C2E3E !important; color: #868AA8; border-bottom: 1px solid #3F3E5F;">
            <button type="submit">
              <i class="entypo-search"></i>
            </button>
          </form>
        </li>

        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/dashboard">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>


        <?php 
           
           if($rowalo['student'] == '1')
           {
            ?>

        <!-- STUDENT -->
        <li class="<?php
        if ($page_name == 'student_add' ||
            $page_name == 'student_information' ||
            $page_name == 'student_marksheet')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="fa fa-group"></i>
                <span><?php echo get_phrase('student'); ?></span>
            </a>
            <ul>

                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information' || $page_name == 'student_marksheet' || $page_name == 'student_profile') echo 'opened active'; ?> ">
                    <a href="#">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('student_information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row):
                            ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/student_information/<?php echo $row['class_id']; ?>">
                                    <span><?php echo get_phrase('class'); ?><?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

            </ul>
        </li>

            <?php
           }
 
        ?>



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
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-docs"></i>
                <span><?php echo get_phrase('subject'); ?></span>
            </a>
            <ul>
                <?php $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/subject/<?php echo $row['class_id']; ?>">
                            <span><?php echo get_phrase('class'); ?><?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>

        

          <?php
      }

          ?>

        
                <?php 
          
              if($rowalo['class_routine'] == '1')
              {
          ?>
           <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine' ||
            $page_name == 'class_routine_print_view')
            echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-target"></i>
                <span><?php echo get_phrase('class_routine'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if ($page_name == 'class_routine' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?teacher/class_routine/<?php echo $row['class_id']; ?>">
                            <span><?php echo get_phrase('class'); ?><?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
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
            <a href="<?php echo base_url(); ?>index.php?teacher/academic_syllabus">
                <i class="entypo-doc"></i>
                <span><?php echo get_phrase('academic_syllabus'); ?></span>
            </a>
        </li>








                 <?php 
          
              if($rowalo['daily_atten'] == '1')
              {
          ?>
  <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance' ||
            $page_name == 'manage_attendance_view')
            echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-chart-area"></i>
                <span><?php echo get_phrase('daily_attendance'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row):
                    ?>
                    <li class="<?php if (($page_name == 'manage_attendance' || $page_name == 'manage_attendance_view') && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?teacher/manage_attendance/<?php echo $row['class_id']; ?>">
                            <span><?php echo get_phrase('class'); ?><?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
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
        <li class="<?php if ($page_name == 'marks_manage' || $page_name == 'marks_manage_view' || $page_name == 'question_paper') echo 'opened active'; ?> ">
            <a href="#">
                <i class="entypo-graduation-cap"></i>
                <span><?php echo get_phrase('exam'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'marks_manage' || $page_name == 'marks_manage_view') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?teacher/marks_manage">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('manage_marks'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'question_paper') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?teacher/question_paper">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('question_paper'); ?></span>
                    </a>
                </li>
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
            <a href="<?php echo base_url(); ?>index.php?<?php echo $account_type; ?>/book">
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




<?php

if($rowalo['send_sms'] == '1')
{
?>


      <!-- SEND SMS -->
     <li class="<?php if ($page_name == 'sms') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?teacher/sms">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('SEND SMS'); ?></span>
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




