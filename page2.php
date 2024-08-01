<?php
$country = $_GET['country'];
$phono = $_GET['phono'];
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
                width: 90%;
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
            .content form {
                font-size: 50px;
                width: 80%;
                margin-top: 10%;
                text-align: left;
            }

            .content form input{
                font-size: 50px;
                width: 100%;
                height: 6%;
                /* border: none; */
                border-radius: 20px;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 2%;
            }

            .content form button {
                margin-top: 10%;
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
            .submitButton{
                width: 110%;
                text-align: center;
            }
            .footer {
                width: 100%;
                height: 15%;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 40px;
                /* margin-top:15%; */
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
                    <b style="color:gray;">Registeration</b>
                </label>
                <b><i><p>Please fill up your details</p></i></b>
                <form action="page3.php" style="margin-top:5%" method="GET">
                <input type="hidden" name="country" value="<?php echo $country ?>">
                <input type="hidden" name="phono" value="<?php echo $phono ?>">

                    <b><label style="font-size:40px;
                font-family: Arial, Helvetica, sans-serif;">Name</label></b>
                    <input type="text" placeholder=" Enter Name" name="name">
                    <i><label style="font-size:40px;color:red;
                font-family: Arial, Helvetica, sans-serif;">*Please insert a name.</label></i>
                <br>
                <br>
                <b><label style="font-size:40px;
                font-family: Arial, Helvetica, sans-serif;">Birthday</label></b><br>
                    <input type="number" placeholder="DD" style="width:25%;text-align:center;margin-right:5%" name="DD" maxlength="2" max="31">
                    <input type="number" placeholder="MM" style="width:25%;text-align:center;margin-right:5%" name="MM" maxlength="2" max="12">
                    <input type="number" placeholder="YYYY" style="width:30%;text-align:center" name="YYYY" maxlength="4" max="9999">
                    <br><i><label style="font-size:40px;color:red;
                font-family: Arial, Helvetica, sans-serif;">*Please insert your birthday.</label></i>
                <br>
                
                <br>
                <b><label style="font-size:40px;
                font-family: Arial, Helvetica, sans-serif;">Email</label></b>
                    <input type="email" placeholder=" Email Address" name="email">
                    <i><label style="font-size:40px;color:red;
                font-family: Arial, Helvetica, sans-serif;">*Please insert a valid email address.</label></i>
                <br>
                <input type="checkbox" id="Checkbox" style="width:5%;height:2%;margin:0px;padding:0px"><i style="font-size:40px;font-family: Arial, Helvetica, sans-serif;"> No email address</i></in>
                <script>
                    document.getElementById('Checkbox').addEventListener('change', function() {
                        var checkbox = document.getElementById('checkbox');
                        if (this.checked) {
                            checkbox.value = 'No Email Address';
                        } else {
                            checkbox.value = '';
                        }
                    });
                </script>
                <div class="submitButton">
                    <button type="sumbit"><label>Continue</label></button>
                </div>

                </form>
            </div>
            <div class="footer">
                <p>Powered by <label>MulahRewards.com</label></p>
            </div>
    </body>
</html>