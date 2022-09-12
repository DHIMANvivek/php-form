<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type = "text/css" rel = "stylesheet" href="bootstrap.min.css"/>
    <title>Home</title>
<style>
div.minH{
    min-height: 400px;
}

label.margin
{
    margin-left: 780px;
}

</style>
</head>
<body>
    <br>
   
    <div class='row'>
    
    
    </div>
  <div class="container bg-info minH">
    <br>
  <label class='col-md-12 well'  style='background-color: skyblue'>Personal Details</label>
  <br>
<?php

$cnt_array=Array(

    Array("Name","text",""),
    Array("FatherName","text",""),
    Array("Dob","date",""),
    Array("Address","text",""),
    Array("Mobile","phone",""),
    Array("Email Id","email",""),
    Array("Technical Skills","text",""),
    Array("Experience In Months","number",""),
    Array("Experience In Other In Months","number",""),
    Array("Image","varchar(500)",""),
    Array("Resume","varchar(500)",""),
    Array("Dis_QualifiedReason","text",""),
    Array("Status","text",""),

);
$flag=false;
for($i=0;$i<count($cnt_array);$i++)
{
    $cnt_label=$cnt_array[$i][0];
    $cnt_type=$cnt_array[$i][1];
if($flag)
    echo "<div class='row'>";
    echo "
<label class='col-md-3'>$cnt_label</label>
<div class='col-md-3'>
<input class='form-control' type='$cnt_type'/>
</div>
";
if($flag)
{
echo "</div><br/>";
$flag=false;
}else
$flag=true;
}

echo "<br><br><input class='well' type='submit' style='background-color: skyblue' name=control value='Submit' style='color:black;font-size:20px;border:none' class='submit'>";

?>

</div>
</body>
</html>
