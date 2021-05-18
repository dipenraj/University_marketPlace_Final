 <?php

                                            $con = mysqli_connect("localhost","root","","university_market_place");
                                            $sel = "SELECT 'product_image' from product";  
                                            $que = mysqli_query($con,$sel);

                                            $output = "";

                                            if (mysqli_num_rows($que) < 1){

                                                $output  .= "No image uploaded ";

                                            }

                                            while ($row = mysqli_fetch_array($que)) {

                                                $output .= "<img src='".$row['product_image']." 'class='my-3'   style='width:400px;height:400px;'>";
                                                # code...
                                            }
                                        ?>
