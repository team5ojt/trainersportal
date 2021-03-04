<!DOCTYPE html>
<html>
<head>
<title>TRAINERS PORTAL</title>
<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/index_style.css');?>" media="all"/>

             

 <style>
 
  
body{
background-image: url("../img/11.jpg");
background-size: cover;
background-attachment: fixed;
}


</style>
</head>
  <body class="overhidden">
   
<!-----------------------------start-------------------->
<section>

<div class="container ">
<div class="row">
<div class="container col-5 ms-5">
<h3 class="text-center text-primary mt-5">View Details</h3>
<form  method="post" action="<?php echo base_url()?>main/updatedetails1" class=" ">
<?php
            
    if(isset($user_data))
    { 
        foreach($user_data->result() as $row1)
        {
            ?>

<fieldset>


<label class=>First Name:</label>
<input type="text" name="fname" value="<?php echo $row1->fname;?>" class="form-control">

<label class="">Last Name:</label>
<input type="text" name="lname"  value="<?php echo $row1->lname;?>" class="form-control">

<label class="form-label">Address:</label>
<input type="address" name="address" class="form-control" placeholder="Address"value="<?php echo $row1->address;?>">

<label class="form-label">District:</label>
<input type="district" name="district" value="<?php echo $row1->district;?>" required class="form-control" placeholder="District">

<label class="form-label">Gender:</label>
<input type="gender" name="gender" value="<?php echo $row1->district;?>" required class="form-control" placeholder="gender">




<label class="">Qualification:</label>
<input type="text" name="qualification"  value="<?php echo $row1->qualification;?>" required class="form-control">


<label class="">Phone number:</label>
<input type="text" name="number" value="<?php echo $row1->number;?>" class="form-control">


<label class="">Email:</label>
<input type="Email" name="email" value="<?php echo $row1->email;?>" required class="form-control">

<label class="">subject:</label>
<input type="text" name="subjects"  value="<?php echo $row1->subjects;?>" required class="form-control">

<label class="">Experiences:</label>
<input type="text" name="experience" value="<?php echo $row1->experience;?>"  required   class="form-control">

<label class="">Aadhar Number:</label>
<input type="text" name="adhar" value="<?php echo $row1->adhar;?>"  required   class="form-control">



<div class="container text-center">

<input type="submit" name="update" value="update" class="btn btn-primary w-50 mt-3  mb-3">
</div>

<?php
        }
    }
    ?>

</fieldset>


</form>
</div>

<div class="col-7">
</div>

</div class="">
</div>
</section >

</body>
</html>
