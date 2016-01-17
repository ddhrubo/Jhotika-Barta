<!DOCTYPE HTML>

<!--
    Tick mark   &#10004
    Cross mark  &#10008
    at the end, put ;
-->

<html>
    <head>
        <title>Welcome to Jhotika!</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
            }

            #section1 {
                height: 500px;
                background-color: rgb(255,154,104);
            }
            
            #pictureLogo {
                margin-top: 310px;
                margin-left: 250px;
            }

            #hugeLogo {
                height: 400px;
                margin-top: 100px;
                margin-left: 180px;
            }
            
            input[type=text]{
                border-radius: 10px;
                border-style: solid;
                border-color: rgb(255,154,104);
                color: rgb(171,171,171);
                font-style: italic;
                padding:8px;
            }
            
            input[type=submit]{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: rgb(255,154,104);
                color: white;
                text-decoration-color: black;
                padding: 5px;
                cursor: pointer;

                /*For grow effect on hover*/
                -webkit-transition:all 0.2s ease-out;
                -moz-transition:all 0.2s ease-out;
                -ms-transition:all 0.2s ease-out;
                -o-transition:all 0.2s ease-out;
                transition:all 0.2s ease-out;
            }

            input[type=submit]:hover{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: rgb(255,154,104);
                color: white;
                text-decoration-color: black;
                padding: 5px;
                cursor: pointer;

                /*for grow effect on hover */
                -webkit-transform:scale(1.2);
                -moz-transform:scale(1.2);
                -ms-transform:scale(1.2);
                -o-transform:scale(1.2);
                transform:scale(1.2);
            }
            
            #loginForm{
                line-height: 40px;
                float: right;
                margin-top: 408px;
                margin-right: 100px;
                width: 400px;
            }

            #footer {
                position: absolute;
                bottom: 30px;
                width: 100%;
                height: 15px;
                text-align: center;
                font-size: 15px;
                font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
            }

            #warning {
                margin: 0;
                padding: 0;
                font-size: 15px;
                font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
                color: red;   
            }
            
        </style>
    </head>
    
    <body>
        <!-- Start of orange section -->
        <div id="section1">

        <!-- Site Logo -->
        <img id="hugeLogo" src="img/site/start/logoHuge.png">

        <!-- Login Form -->
        <form id="loginForm" name="form1" method="POST" action="index.php">
            <input type="text" name="name" placeholder="id"><br>
            <input type="text" name="pass" placeholder="password"><br>
            <input type="submit" name="in" value="SIGN IN">
            <input type="submit" name="up" value="SIGN UP"> <br>

            <!-- Login Script -->
            <?php
                if( isset( $_POST[ 'in' ] ) ) {
                    /*Login Attempt*/
                    header( 'Location: home.php' );
                } else if( isset( $_POST[ 'up' ] ) ) {
                    /*Sign up attempt*/
                    header( 'Location: sign_up.php' );
                }
            ?>

            <!-- warning message <p id="warning" >&#10008; Wrong user id or password!</p> -->

        </form>
        </div>
        
        <div id="footer">
            A project for Software Development Lab IV.
            <br>L-3 T-1, CSE, AUST.
        </div>
        
    </body>

</html>