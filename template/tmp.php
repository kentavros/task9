<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Task 9</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <!--[endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 9</a>
        </div>
    </div>
</nav>
<?=$msg? '<p class="alert-danger">'.$msg.'</p>' : ''?>

<div class="center-block" style="width: 900px; margin-top: 30px;">
    <?=$tab? $tab : ''?>
    <?=$tab2? $tab2 : ''?>
    <?=$tab3? $tab3 : ''?>
</div>

<div class="center-block text-center" style="width: 900px; margin-top: 30px;">
    <h3 class="alert-info">Drop down - select / multi</h3>
    <div style="margin-bottom: 10px">
    <?=$select? $select : ''?>
    </div>

    <?=$select2? $select2 : ''?>

</div>

<div style="width: 900px; margin-top: 30px;">
    <h3 class="alert-info text-center">List ul or ol</h3>
    <div style="margin-left: 400px"><?=$list? $list : ''?></div>
    <div style="margin-left: 400px"><?=$list2? $list2 : ''?></div>
</div>

<div>
    <h3 class="alert-info text-center">List of definitions - dl, dt, dd</h3>
    <div style="margin-left: 330px;">
    <?=$listDl? $listDl : ''?>
    </div>
</div>
<div style="width: 900px; margin-top: 30px; ">
    <h3 class="alert-info text-center">Input check and radio</h3>
    <div style="width: 500px; margin-left: 200px">
    <div style="float: left; margin-bottom: 100px;" >
        <?=$check ? $check : ''?>
    </div>
    <div style="float: right">
        <?=$rad ? $rad : '' ?>
    </div>
    </div>
</div>


<footer class="modal-footer navbar-inverse navbar-fixed-bottom" style="padding: 3px;">
    <div class="container">
        <a class="navbar-brand" style="float: right" href="#">Task 9 - end</a>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- ðÏÓÌÅÄÎÑÑ ËÏÍÐÉÌÑÃÉÑ É ÓÖÁÔÙÊ JavaScript -->  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
