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
    min-height: 5px;
    /* padding: 0px; */
}
</style>
</head>
<body>
    <br>
   
    <div class='row'>
   
    
   
  <div class="container bg-info minH">
    <br>
  <label class='col-md-12 well'  style='background-color: skyblue'>Qualification</label>
  <br>

<?php
require_once("connection.php");
$table_name2='qualification';
$sql2="select * from $table_name2";
$query2=mysqli_query($con,$sql2);
$col_count=mysqli_num_fields($query2);
$colname2=array();

for($i = 0 ; $i < $col_count ; $i++){
    $temp=mysqli_fetch_field($query2);
    $colname2[$i]=$temp->name;
}

for($i=0;$i<count($colname2);$i++)
$cnt_array2[$i]=Array($colname2[$i],"text","");

$flag=false;
$col_name_list2=implode(",",$colname2);


for($i = 0 ; $i < count($cnt_array2); $i++){
    $label=$cnt_array2[$i][0];
    $type=$cnt_array2[0][1];
    $cnt_name2="cnt_".$i;
    if($i<count($cnt_array2)-1)
    if($flag)
    echo "<div class='row'>";

echo "
<label class='col-md-3'>$label</label> 
<div class='col-md-3'>
<input class='form-control'  name='$cnt_name2' type='$type'/>
</div>
";

if($flag)
{
echo "</div><br/>";

$flag=false;
}else
$flag=true;
}




$count2 = $i;
echo "<input type='hidden' value='$count2' name='cnt_length2'/>";
echo "<input type='hidden' value='$col_name_list2' name='col_name_list2'/>";
echo "<input type='hidden' value='$table_name2' name='table_name2'/>";
// echo "<br><br><input class='well' type='submit' style='margin-left:50em; background-color: skyblue' name=control value='Submit' style='color:black;font-size:20px;border:none' class='submit'>";
echo "<label><button type='submit' style='margin-left: 17px;  background-color: lightgreen' name=control value='Submit' style='color:black;font-size:20px;border:none' class='submit well' >Submit</button></label>";


?>

</div>

</div>
</body>
</html>