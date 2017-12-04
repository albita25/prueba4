<?php 
  include'../sesiones/verificar_sesion.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Departamentos</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="../dist/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../dist/css/animate.css" rel="stylesheet" type="text/css" />
<link href="../dist/css/admin.css" rel="stylesheet" type="text/css" />
<link href="../plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkboxz/minimal/green.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
<link href="../plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
<link href="../plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="../plugins/dropzone/dropzone.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="../plugins/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="../plugins/bootstrap-colorpicker/css/colorpicker.css" />


</head>
<body class="dark_theme  fixed_header left_nav_fixed">

<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <!-- Header -->
  <?php
    include '../plantilla/header.php';
  ?>
  <!-- Header -->



  <!-- Menú -->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
      <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
          <div class="left_nav_slidebar">
              <?php
                   include 'menu.php';
              ?>
          </div>
      </div>
    <!-- Menú -->

    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->

      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

      <div class="row">
        <div class="">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Departamentos</h3>
            </div>


            <div class="panel-body" >
                <form action="guardar.php" method="POST">

                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="control-label">Nombre del departamento:</label>
                          <input type="text" required="" placeholder="Escribe el nombre del departamento..." name="nombre_departamento" class="form-control" >
                      </div>                  
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <div class="bottom form-group">
                          <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                          <button type="button" class="btn btn-default ">Cancelar</button>
                        </div>
                      </div>
                  </div>

                </form>
              </div>

            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->





<script src="../dist/js/jquery-2.1.0.js"></script>
<script src="../dist/js/bootstrap.min.js"></script>
<script src="../dist/js/common-script.js"></script>
<script src="../dist/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript"  src="plugins/toggle-switch/toggles.min.js"></script> 
<script src="../dist/plugins/checkbox/zepto.js"></script>
<script src="../dist/plugins/checkbox/icheck.js"></script>
<script src="../dist/js/icheck-init.js"></script>
<script src="../dist/js/jquery.slimscroll.min.js"></script>
<script src="../dist/js/icheck.js"></script>
<script type="text/javascript" src="../dist/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> 
<script type="text/javascript" src="../dist/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
<script type="text/javascript" src="../dist/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> 
<script type="text/javascript" src="../dist/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script> 
<script type="text/javascript" src="../dist/js/form-components.js"></script> 
<script type="text/javascript"  src="../dist/plugins/input-mask/jquery.inputmask.min.js"></script> 
<script type="text/javascript"  src="../dist/plugins/input-mask/demo-mask.js"></script> 
<script type="text/javascript"  src="../dist/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script> 
<script type="text/javascript"  src="../dist/plugins/dropzone/dropzone.min.js"></script> 
<script type="text/javascript" src="../dist/plugins/ckeditor/ckeditor.js"></script>

<script>
/*==Porlets Actions==*/
    $('.minimize').click(function(e){
      var h = $(this).parents(".header");
      var c = h.next('.porlets-content');
      var p = h.parent();
      
      c.slideToggle();
      
      p.toggleClass('closed');
      
      e.preventDefault();
    });
    
    $('.refresh').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      var loading = $('&lt;div class="loading"&gt;&lt;i class="fa fa-refresh fa-spin"&gt;&lt;/i&gt;&lt;/div&gt;');
      
      loading.appendTo(p);
      loading.fadeIn();
      setTimeout(function() {
        loading.fadeOut();
      }, 1000);
      
      e.preventDefault();
    });
    
    $('.close-down').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      
      p.fadeOut(function(){
        $(this).remove();
      });
      e.preventDefault();
    });

</script>


<script src="../dist/js/jPushMenu.js"></script> 
<script src="../dist/js/side-chats.js"></script>


</body>
</html>
