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
    margin-left: 750px;
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
require_once("connection.php");
  $table_name='form';
  $table_name2='qulification';
  $sql="select * from $table_name";
  $query=mysqli_query($con,$sql);
  $col_count=mysqli_num_fields($query);
  $colname=array();

  for($i=0;$i<$col_count;$i++)
 {
 $temp=mysqli_fetch_field($query);
 $colname[$i]=$temp->name;
 }
// print_r($colname);

for($i=0;$i<count($colname);$i++)
$cnt_array[$i]=Array($colname[$i],"text","");

//print_r($cnt_array[0]);

/*
  $cnt_array1=Array(
  Array("Name","text",""),
    Array("FatherName","text",""),
    Array("Dob","date",""),
    Array("Address","text",""),
    Array("Mobile","phone",""),
    Array("Email Id","email",""),
    Array("Technical Skills","text",""),
    Array("Experience In Months","number",""),
    Array("Experience In Other In Months","number",""),
    Array("Image","file",""),
    Array("Resume","file",""),
    Array("Dis_QualifiedReason","text",""),
    Array("Status","text",""),

);*/
$flag=false;
$col_name_list=implode(",",$colname);
echo "<form action='data.php' method='post'>";
for($i=0;$i<count($cnt_array);$i++)
{
    $cnt_label=$cnt_array[$i][0];
    $cnt_type=$cnt_array[$i][1];
    $cnt_name="cnt_".$i;
    if($i<count($cnt_array)-1)
    if($flag)
    echo "<div class='row'>";

echo "
<label class='col-md-3'>$cnt_label</label> 
<div class='col-md-3'>
<input class='form-control'  name='$cnt_name' type='$cnt_type'/>
</div>
";

if($flag)
{
echo "</div><br/>";
$flag=false;
}else
$flag=true;
}

$count = $i;
echo "<input type='hidden' value='$count' name='cnt_length'/>";
echo "<input type='hidden' value='$col_name_list' name='col_name_list'/>";
echo "<input type='hidden' value='$table_name' name='table_name'/>";
include("qualification.php");
echo "</form>";


?>
</div>




</div>
</body>
</html>
