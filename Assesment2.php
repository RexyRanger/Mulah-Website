<doctype HTML>

    <head>
        <style>
            .everything {
                width: 640px;
                height: 1136px;
                text-align: center;
            }

            .banner {
                width: 100%;
                height: 15%;
                margin-top: 20%;
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
                width: 100%;
                /* height: 20%; */
                text-align: left;
                margin-left: 10%;
            }

            .content label {
                color: rgb(98 98 98);
                font-size: 130px;
            }

            .content p {
                color: rgb(242 115 33);
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
                width: 70%;
                margin-left: 5%;
                border: none;
                border-bottom: 2px solid darkorange;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 10%;
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
                margin-top:15%;
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
        <!-- <div class="everything"> -->
            <div class="banner">
                <label>
                    <b>MULAH</b>
                </label>
            </div>
            <div class="content">
                <label>
                    <b>Hello,<br>
                        Welcome !
                    </b>
                </label>
                <b>
                    <p style="margin-top:12%">Check Your Loyalty Points & Rewards</p>
                </b>
                <form action="page2.php" style="margin-top:5%" method="GET">
                    <select name="country">
                        <option value="Malaysia">+60</option>
                    </select>
                    <input type="number" placeholder="Enter your mobile number" name="phono">
                    <br>
                    <button type="sumbit"><label>Check Loyalty Points</label></button>
                    </form>
            </div>
            <div class="footer">
                <p>Powered by <label>MulahRewards.com</label></p>
            </div>
        <!-- </div> -->
    </body>