<?php 
extract($_POST);
if(isset($save))
{
	if($e=="" || $p=="")
	$err="<font color='red'>fill all the fields first</font>";	

	else
	{
        $sql=mysqli_query($conn,"select email from faculty where facid='$e' and password='$p'");
        $r=mysqli_num_rows($sql);

        if($r==true)
        {
        $r1=mysqli_fetch_row($sql);
        $_SESSION['faculty_login']=$r1[0];
        header('location:faculty');
        }

        else
        $err="<font color='red'>Invalid login details</font>";
    }
}

?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><h2>Faculty Login Form</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Faculty ID</div>
		<div class="col-sm-5">
		<input type="text" name="e" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your Password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-info"/>
		
		</div>
	</div>
</form>	
</div>
</div>