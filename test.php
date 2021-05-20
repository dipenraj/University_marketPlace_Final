<?php

                    $db = mysqli_connect("localhost","root","","university_market_place");
                    $sql = "SELECT * FROM product";
                    $result = mysqli_query($db,$sql);

                    while($row= mysqli_fetch_array($result))

                    {

                       

                        

                        
                        
                        echo "




                        <div class='col-12 col-sm-6 col-md-6 col-lg-3'>
                <div class='single-courses'>
                    <div class='courses_banner_wrapper'>
                        <div class='courses_banner'><a href='#'><img src='uploads/".$row['product_image']."' alt='' class='img-fluid'></a></div>
                        <div class='purchase_price'>
                            <a href='#' class='read_more-btn'> A$".$row['product_price']."</a>
                        </div>
                    </div>
                    <div class='courses_info_wrapper'>
                        <div class='courses_title'>
                            <h3><a href='#'>".$row['product_name']."</a></h3>
                            <div class='teachers_name'>Seller - ".$row['product_seller']." </div>
                        </div>
                        <div class='courses_info'>
                            
                            <a href='#' class='cart_btn'>".$row['product_category']."</a>
                        </div>
                    </div>
                </div><!-- Ends: .single courses -->
            </div><!-- Ends: . -->



                        ";
                       



                    }

                    ?>