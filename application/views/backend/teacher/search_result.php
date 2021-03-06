<hr />
<div class="row">
    <div class="col-md-12">

      <table class="table table-bordered datatable" id="table_export">
          <thead>
              <tr>
                  <th width="80"><div><?php echo get_phrase('id_no');?></div></th>
                  <th width="80"><div><?php echo get_phrase('photo');?></div></th>
                  <th><div><?php echo get_phrase('name');?></div></th>
                  <th class="span3"><div><?php echo get_phrase('address');?></div></th>
                  <th><div><?php echo get_phrase('email');?></div></th>
                  <th><div><?php echo get_phrase('options');?></div></th>
              </tr>
          </thead>
          <tbody>
              <?php
                      foreach($student_information as $row):
                      $class_id = $this->db->get_where('enroll', array('student_id' => $row['student_id']))->row()->class_id;
                      ?>
              <tr>
                  <td><?php echo $this->db->get_where('student' , array(
                          'student_id' => $row['student_id']
                      ))->row()->student_code;?></td>
                  <td><img src="<?php echo $this->crud_model->get_image_url('student',$row['student_id']);?>" class="img-circle" width="30" /></td>
                  <td>
                      <?php
                          echo $this->db->get_where('student' , array(
                              'student_id' => $row['student_id']
                          ))->row()->name;
                      ?>
                  </td>
                  <td>
                      <?php
                          echo $this->db->get_where('student' , array(
                              'student_id' => $row['student_id']
                          ))->row()->address;
                      ?>
                  </td>
                  <td>
                      <?php
                          echo $this->db->get_where('student' , array(
                              'student_id' => $row['student_id']
                          ))->row()->email;
                      ?>
                  </td>
                  <td>

                      <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                              Action <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                              <!-- STUDENT PROFILE LINK -->
                              <li>
                                  <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/student_profile_on_modal/<?php echo $row['student_id'];?>');">
                                      <i class="entypo-user"></i>
                                          <?php echo get_phrase('profile');?>
                                      </a>
                              </li>
                          </ul>
                      </div>

                  </td>
              </tr>
              <?php endforeach;?>
          </tbody>
      </table>
    </div>
</div>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->
<script type="text/javascript">

	jQuery(document).ready(function($)
	{


		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [

					{
						"sExtends": "xls",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "pdf",
						"mColumns": [0, 2, 3, 4]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(1, false);
							datatable.fnSetColumnVis(5, false);

							this.fnPrint( true, oConfig );

							window.print();

							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(1, true);
									  datatable.fnSetColumnVis(5, true);
								  }
							});
						},

					},
				]
			},

		});

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});

</script>
