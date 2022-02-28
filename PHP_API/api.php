<?php 
$con =mysqli_connect("localhost","root","","api_data");
$response=array();
$yourip='212.4.76.244';
if($con){
    $sql=("select country from data where ip='$yourip'");
    $result=mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['country']=$row['country'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Wrong Formate";
}
?>
