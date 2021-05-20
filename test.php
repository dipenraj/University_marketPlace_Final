 <?php

                $con = mysqli_connect("localhost","root","","university_market_place");
                $query = " SELECT * FROM product order by ID ";

                $query_run = mysqli_query($con,$query);

                while($row = mysqli_fetch_array($query_run))

                {

                ?>

                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <body>
                    <table>
                        <tr>
                            <td>
                               
                            </td>

                            <td>
                                <?php

                                
                                echo'<img src="'.$row['product_image'].'" alt="image" style="height:400px;width:400px;">';

                                ?>
                                
                            </td>

                                
                                
                        </tr>
                    </table>
                    </body>
                    </html>

                    

                        <?php

                }

                ?>
