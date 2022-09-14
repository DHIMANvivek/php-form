<?php
require_once("connection.php");
$table_name=$_POST['table_name'];
$cnt_count=$_POST['cnt_length'];
//echo "cnt_count=$cnt_count<br/>";
$col_name_list=$_POST['col_name_list'];
echo $col_name_list;
echo "<hr/>";
$cnt_val= array();
for($i = 0; $i<$cnt_count; $i++){
    $cnt_name = "cnt_".$i;
    $cnt_val[$i] = $_POST[$cnt_name];
    echo "i=".$cnt_val[$i]."<br/>";
}
$value_list =implode("','",$cnt_val);
 $sql="insert into $table_name($col_name_list) values('$value_list')";
echo $sql;

if(mysqli_query($con,$sql))
{
    echo "saved";
}
else
echo "error</br>$sql";




$table_name2=$_POST['table_name2'];
$cnt_count2=$_POST['cnt_length2'];
//echo "cnt_count=$cnt_count<br/>";
$col_name_list2=$_POST['col_name_list2'];
echo $col_name_list2;
echo "<hr/>";
$cnt_val2= array();
for($i = 0; $i<$cnt_count2; $i++){
    $cnt_name2 = "cnt_".$i;
    $cnt_val2[$i] = $_POST[$cnt_name2];
    echo "i=".$cnt_val2[$i]."<br/>";
}
$value_list2 =implode("','",$cnt_val2);
 $sql2="insert into $table_name2($col_name_list2) values('$value_list2')";
echo $sql2;

if(mysqli_query($con,$sql2))
{
    echo "saved";
}
else
echo "error</br>$sql2";

?>