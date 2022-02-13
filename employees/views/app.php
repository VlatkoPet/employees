<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employees Test</title>
<link href="../public/assets/css/bootstrap-3.3.7.min.css" rel="stylesheet" >
<link href="../public/css/main.css" rel="stylesheet">
<script src=" ../public/assets/js/jquery-3.2.1.min.js"></script>
<script src="../public/assets/js/bootstrap-3.3.7.min.js"></script>
<script src="../public/js/main.js"></script>


</head>
<body>


<div class="topnav">
  <a href="http://employees.local/views/employees.php" style="margin-left:20px">View Employees</a>
  <a href="http://employees.local/views/update_employees.php">Update Employees</a>
</div>



<script>
$(function(){
    $('a').click(function() {
        $('a').removeClass('active');
        $(this).addClass('active');
    });
});
</script>