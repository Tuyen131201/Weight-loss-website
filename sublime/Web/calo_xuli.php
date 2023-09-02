<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giamcan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//rang buoc mat khau

//kiem tra mat khau cu
$sql="SELECT  bmi.chiso
          FROM  bmi, thetrang
           WHERE  thetrang.thetrang_id=bmi.bmi_id and thetrang.tv_email= '".$_COOKIE["tv_email"]."'";
	$result = $conn->query($sql);
	// echo "$result->num_rows";
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		
		if($row["chiso"] >= 13.6 && $row["chiso"] <= 18.5 ){
            header('Location: thucdon1.php');
			}
		else if($row["chiso"] > 18.5 && $row["chiso"] <= 24.9){
            header('Location: thucdon2.php');
				}
                else if($row["chiso"] > 25.0 && $row["chiso"] <= 29.9){
                    header('Location: thucdon3.php');
                        }
                        else if($row["chiso"] > 30.0 && $row["chiso"] <= 34.9){
                            header('Location: thucdon4.php');
                                }
				  else {
					echo "";
						}
				}

$conn->close();
?>


                //    $sql="SELECT  bmi.chiso
                //           FROM  bmi, thetrang
                //           WHERE  thetrang.thetrang_id=bmi.bmi_id and thetrang.tv_email= '".$_COOKIE["tv_email"]."'";
                              
  
                //             $result = $conn->query($sql);
                //             if ($result->num_rows > 0) {
                //                 $row = $result->fetch_assoc(); 
                                
                // if(isset($_POST['submit']))

                // {

                //     if ($row['chiso'] >= 13.6 && $row['chiso'] <= 18.5) {
                //         header('location:thucdon.php');?><?php
                //     } elseif ($row['chiso'] > 18.5 && $row['chiso'] < 24.9) {
                //         header('location:thucdon.php');?><?php
                //     } elseif ($row['chiso'] > 25 && $row['chiso'] < 29.9) {
                //         header('location:thucdon.php');?><?php
                //     } elseif ($row['chiso'] > 30 && $row['chiso'] < 34.9) {
                //         header('location:thucdon.php');?><?php
                //     } elseif ($row['chiso'] > 35 && $row['chiso'] < 39.9) {
                //         header('location:thucdon.php');?><?php
                //     } 
                // } else {
                //     echo "";
                // }
                // }


