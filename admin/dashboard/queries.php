<?php
        require 'assets/include/connect.php';
        if(!($data['type'] == "Superuser"))
            header("Location:404.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Queries - Emplace</title>
    <link rel="icon" href="assets/images/icon.png" type="image/png"/>

    <?php
        require 'assets/include/link.php';
    ?>
</head>

<body>

    <div class="page-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div></div>
                <div></div>
            </div>
        </div>

        <?php
         require 'assets/include/header_dash.php';
        ?>
        <section class="sptb"> 
            <div class="container"> 
                <div class="row"> 
                <?php
                    require 'assets/include/sidebar.php';
                ?>






<div class='card mb-0' style="width: 55rem"> 

<div class='card-header'> <h3 class='card-title'>Received Queries</h3> 
</div> 

<div class='card-body'>     
   <!--  <div class="row"> -->
                
                     <?php
                        
                        $q=mysqli_query($c,"select name, mob_num, email, subject, message, date from contact order by date desc");
                        $rows_q=mysqli_num_rows($q);
                        if($rows_q>0)
                        {
                            while ($query=mysqli_fetch_assoc($q)) {
                                echo "<div class='card'>
                                        <div class='card-header'>";
                                          
                                              echo "  <h3>From : ".$query['name']."</h3> &emsp; <p class='card-text' style='float:right;'>" . $query["date"] . "</p>
                                        </div>";
                                        echo "<div class='card-body'>
                                                <h4>Subject : ".$query['subject']."</h4>
                                                <p>".$query['message']."</p>
                                                <p> Contact Information : <br>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;Mobile Number : ".$query['mob_num']." <br>
                                                &emsp;&emsp;&emsp;&emsp;&emsp;Email : ".$query['email']."</p>
                                            </div>  
                                    </div>";
                            }
                        }
                        else
                            echo "<div align='center'>No Queries Found</div>";
                    
                    ?>
                    

     
   <!--  </div> -->
</div>
</div>
                <!--End of Payments-->
                </div> 
            </div> 
        </section> 

        <?php
            require 'assets/include/footer_dash.php';
        ?>
    </div>
</body>
</html>