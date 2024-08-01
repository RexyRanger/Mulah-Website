<?php
$country = $_GET['country'];
$phono = $_GET['phono'];
$name = $_GET['name'];
$email = $_GET['email'];
$DD = $_GET['DD'];
$MM = $_GET['MM'];
$YYYY = $_GET['YYYY'];
?>
<html>
<head>
        <style>
            .everything {
                width: 640px;
                height: 1136px;
                text-align: center;
            }

            .banner {
                width: 100%;
                height: 10%;
                margin-top: 10%;
                text-align: center;
            }

            .banner label {
                color: rgb(242 115 33);
                font-size: 100px;
                /* padding-left: 100px; */
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }

            .content {
                width: 80%;
                /* height: 20%; */
                text-align: left;
                margin-left: 10%;
            }

            .content label {
                color: rgb(98 98 98);
                font-size: 100px;
            }

            .content p {
                color: gray;
                font-size: 40px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .content select {
                font-size: 50px;
                width: 120px;
                border: none;
                border-bottom: 2px solid darkorange;
                font-family: Arial, Helvetica, sans-serif;
            }

            .content option {
                font-size: 16px;
            }

            .content input {
                font-size: 50px;
                width: 80%;
                margin-left: 5%;
                border: none;
                border-bottom: 2px solid darkorange;
                font-family: Arial, Helvetica, sans-serif;
            }

            .content button {
                margin-top: 15%;
                background-color: darkorange;
                padding: auto;
                width: 85%;
                height: 7%;
                border-radius: 100px;
            }

            .content button label {
                color: white;
                font-size: 40px;
            }

            .footer {
                width: 100%;
                height: 15%;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 50px;
                margin-top:35%;
                border-top: 2px solid gray;
            }

            .footer p {
                color: gray;
                margin-top:8%;
            }

            .footer label {
                color: rgb(93 112 177);
            }
        </style>
    </head>
    
    <body>
        <div class="banner">
            <label>
                <b>MULAH</b>
            </label>
        </div>
        <div class="content">
                <label>
                    <b>Received Inputs</b>
                </label>
                <p>Phone Number:<br></p>
                <input type="text" value="<?php echo "+60-".$phono?>" disabled>
                
                <p>Name:</p><input type="text" value="<?php echo $name?>" disabled>
                <?php 
                if (!empty($email)){
                   echo "<p>Email:</p><input type=\"text\" value=\"+60-".$email."\" disabled>";
                }else{
                   echo "<p>Email:</p><input type=\"text\" value='No Email Given' disabled>";
                }
                ?>
                <p>Birthday:</p><input type="text" value="<?php echo $DD."-".$MM."-".$YYYY."(DD/MM/YYYY)"?>" disabled>
                <br>
            </div>
            <div class="footer">
                <p>Powered by <label>MulahRewards.com</label></p>
            </div>
    </body>
</html>