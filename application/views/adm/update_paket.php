<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Forms</title>
        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/assets/styles.css');?>" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?php echo base_url('assets2/vendors/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <!--/span-->
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                     <!-- wizard -->
                    <div class="row-fluid section">
                         <!-- block -->
                        
                                
                                   
                                        
                                        
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab1">
                                               <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Name</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Email</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Phone</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Address</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">City</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">State</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <form class="form-horizontal">
                                                  <fieldset>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Company Name</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Contact Name</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                    <div class="control-group">
                                                      <label class="control-label" for="focusedInput">Contact Phone</label>
                                                      <div class="controls">
                                                        <input class="input-xlarge focused" id="focusedInput" type="text" value="">
                                                      </div>
                                                    </div>
                                                  </fieldset>
                                                </form>
                                            </div>
                                            
                                        </div>  
                                    
                        
                        <!-- /block -->
                    </div>
	            <!-- /wizard -->

                     <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Tambahkan Paket</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="<?php echo base_url().'index.php/admControl/tambah_paket';?>" id="form_sample_1" class="form-horizontal" method="post">
					
							
  							<div class="control-group">
  								<label class="control-label">Kode Paket<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="id_pkt" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Nama Paket<span class="required">*</span></label>
  								<div class="controls">
  									<input name="nama_pkt" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Kategori Paket<span class="required">*</span></label>
  								<div class="controls">
                                    <select class="span6 m-wrap" name="kategori_pkt">
                                        <option value="konven">Konvensional</option>
                                        <option value="elektro">Elektrostatis</option>
                                        
                                    </select>
                                </div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Deskripsi<span class="required">*</span></label>
  								<div class="controls">
  									<input name="deskripsi_pkt" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Harga<span class="required">*</span></label>
  								<div class="controls">
  									<input name="harga_pkt" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
  							<div class="control-group">
  								<label class="control-label">Gambar<span class="required">*</span></label>
  								<div class="controls">
  									<input name="gambar_pkt" type="file" class="span6 m-wrap"/>
  								</div>
  							</div>
  							
  							
  							<div class="form-actions">
                   <input type="submit" value="Simpan" class="btn btn-primary">
  								
  							</div>
						
					</form>


<form action="<?php echo base_url().'index.php/admControl/update_data';?>" id="form_sample_1" class="form-horizontal" method="post">
          
              
                  <input type="text" name="id_pkt" data-required="1" class="span6 m-wrap" value="<?php echo $id_pkt;?>" />
                 
                  <input name="nama_pkt" type="text" class="span6 m-wrap" value="<?php echo $nama_pkt;?>" />
                 
                  <select class="span6 m-wrap" name="kategori_pkt">
                      <option value="Konvensional"><?php echo $kategori_pkt;?></option>
                     <option value="Elektrostatis"><?php echo $kategori_pkt;?></option>
                  </select>
                                        
                  <input name="deskripsi_pkt" type="text" class="span6 m-wrap" value="<?php echo $deskripsi_pkt;?>" />
                  <input name="harga_pkt" type="text" class="span6 m-wrap" value="<?php echo $harga_pkt;?>" />
                  
                  <input name="gambar_pkt" type="file" class="span6 m-wrap"/>
                  
                  <input type="submit" value="Simpan" class="btn btn-primary">
                  
             
            
          </form>



					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->


                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <link href="<?php echo base_url('assets2/vendors/datepicker.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/vendors/uniform.default.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo base_url('assets2/vendors/chosen.min.css');?>" rel="stylesheet" media="screen">

        <link href="<?php echo base_url('assets2/vendors/wysiwyg/bootstrap-wysihtml5.css');?>" rel="stylesheet" media="screen">

        <script src="<?php echo base_url('assets2/vendors/jquery-1.9.1.js');?>"></script>
        <script src="<?php echo base_url('assets2/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets2/vendors/vendors/jquery.uniform.min.js');?>"></script>
        <script src="<?php echo base_url('assets2/vendors/vendors/chosen.jquery.min.js');?>"></script>
        <script src="<?php echo base_url('assets2/vendors/bootstrap-datepicker.js');?>"></script>

        <script src="<?php echo base_url('assets2/vendors/wysiwyg/wysihtml5-0.3.0.js');?>"></script>
        <script src="<?php echo base_url('vendors/wysiwyg/bootstrap-wysihtml5.js');?>"></script>

        <script src="<?php echo base_url('assets2/vendors/wizard/jquery.bootstrap.wizard.min.js');?>"></script>

	<script type="text/javascript" src="<?php echo base_url('assets2/vendors/jquery-validation/dist/jquery.validate.min.js');?>"></script>
	<script src="<?php echo base_url('assets2/assets/form-validation.js');?>"></script>
        
	<script src="<?php echo base_url('assets2/assets/scripts.js');?>"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>