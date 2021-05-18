<?php
echo "<!DOCTYPE html>
<html>
<head>
    <title>test</title>
</head>
<body>
<form action='checktest.php' method='post' class='register'>
                                    <div class='row'>
                                        <div class='col-12 col-lg-12 col-md-12 col-lg-12'>
                                            <div class='form-group'>
                                                <label  class='control-label'>Name</label>
                                                <input type='text' name='name' placeholder='Username'>
                                            </div>
                                        </div>                                        
                                        
                                        <div class='col-12 col-lg-12 col-md-12 col-lg-12 d-flex justify-content-between login_option'>
                                            <button type='submit' name='submit' value='submit' 
                                        class='btn btn-default login_btn'>Register</button>
                                        </div> 
                                    </div>
                                </form>
</body>
</html>
"

?>