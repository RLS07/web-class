<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog </title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include("inc_bannermenu.php");?>
        <div class=row>
        
            <?php
            if(isset($_GET['id'])){
                $catid=$_GET['id'];

                $sql="SELECT * from article WHERE category_id=$catid ORDER BY id DESC LIMIT 0,15" ;
                include("connection.php");
                $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $count=mysqli_num_rows($qry);
                if($count>=1){
                   

                    while($row=mysqli_fetch_array($qry)){
                        $aid=$row['id'];
                        $img=$row['featureimg'];
                        $title=$row['title'];
                        $desc=substr($row['description'],0,200);

                        echo "<div class=col-xxl-4>
                        <img src='uploads/article/$img' alt='$title' class='img-fluid'>
                        <h2><a href=details.php?id=$aid>$title<a></h2>
                        <p>$desc</p>
                    
                        </div>";
                    }

                }
                else{
                    echo "Sorry No Result Found";
                }



            }

            ?>

       
         
    </div>

<?php
include("inc_footer.php");
?>
</div>
    
</body>
</html>