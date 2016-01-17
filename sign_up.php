<html>

<head>
	<title>Sign Up!</title>
	
	<style>
		body {
			background-image: url("img/site/common/tile.jpg");
			margin: 0;
			padding: 0;
		}

		#sign_up_form {
			margin: 0 auto; /*to float in center*/
			margin-top: 60px;
      margin-bottom: 60px;
			padding: 30px;
			
			border-radius: 10px;
            border-style: solid;
            border-color: rgb(255,154,104);

            width: 650px;
            /*height: 500px;*/

            background-color: white;

            color: rgb(255,154,104);
			font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		}

		h1 {
			color: rgb(255,154,104);
			font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		}

		h3 {
			color: rgb(255,154,104);
			font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
		}

		input[type=text]{
                border-radius: 10px;
                border-style: solid;
                border-color: rgb(255,154,104);
                color: rgb(171,171,171);
                font-style: italic;
                padding:8px;

                width: 200px;
         }

    input[type=password]{
                border-radius: 10px;
                border-style: solid;
                border-color: rgb(255,154,104);
                color: rgb(171,171,171);
                font-style: italic;
                padding:8px;

                width: 200px;
         }

         input[type=submit]{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: rgb(255,154,104);
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
            }

            input[type=submit]:hover{
                width: 84px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: rgb(255,154,104);
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
            } 
    
    /* Pulse effect */
    @-webkit-keyframes pulse {
  	 25% {
      -webkit-transform: scale(1.2);
      transform: scale(1.2);
      }
      75% {
      -webkit-transform: scale(0.8);
      transform: scale(0.8);
      }
    }
    @keyframes pulse {
      25% {
     -webkit-transform: scale(1.2);
     -ms-transform: scale(1.2);
     transform: scale(1.2);
     }
    75% {
    -webkit-transform: scale(0.8);
    -ms-transform: scale(0.8);
    transform: scale(0.8);
    }
  }
.pulse {
  display: inline-block;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}
.pulse:hover {
  -webkit-animation-name: pulse;
  animation-name: pulse;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
}             

	</style>
</head>

<body>
	<!-- Sign up form -->
	<div id="sign_up_form" >

		<h1>Sign up @ Jhotika Barta</h1>
		<h3>&#10004; It's free and always will be!</h3>
		<br><br><br>
		
		Your name: <br>
		<input type="text" name="first_name" placeholder="first name">
		<input type="text" name="last_name" placeholder="last name"> <br>

		<br>

		Choose your user id: <br>
		<input type="text" name="user_id" placeholder="example" > @ jhotika.com <br>

		<br>

    Enter your password: <br>
    <input type="password" name="password" placeholder="password" ><br>
    <input style="margin-top:5px;" type="password" name="confirm_password" placeholder="confirm password" ><br>

    <br>

		<input type="checkbox" name="accept_terms"> I accept all the terms and agreements.<br>

		<!-- Submit button at the center of the page -->
		<div style="text-align:center" >
			<input class="pulse" type="submit" name="sign_up_button" value="SIGN UP" >
		</div>

	</div>
</body>

</html>