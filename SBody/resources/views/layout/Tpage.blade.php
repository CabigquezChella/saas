
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StudyBuddy | Log in </title>
@stack('stylesheets')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../back/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../back/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<body class="hold-transition login-page">

@yield('content')
<!-- /.login-box -->

<!-- jQuery -->
@yield('script')
<script src="../../back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../back/dist/js/adminlte.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<script>
$(document).ready(function(){
 // Activate tooltip
 $('[data-toggle="tooltip"]').tooltip();
 // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
             this.checked = true;
    });
         } else{
         checkbox.each(function(){
        this.checked = false; 
 });
     } 
    });
     checkbox.click(function(){
     if(!this.checked){
     $("#selectAll").prop("checked", false);
     }
    });
});
</script>

</body>
</html>
