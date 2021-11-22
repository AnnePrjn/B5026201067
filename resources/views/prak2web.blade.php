<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function userid_validation(){
            'use strict';
            var userid_name = document.getElementById("userid");
            var userid_value = document.getElementById("userid").value;
            var userid_length = userid_value.length;
            if(userid_length<4 || userid_length>12)
            {
            document.getElementById('uid_err').innerHTML = 'Value must not be less than 5 characters and greater than 12 characters';
            userid_name.focus();
            document.getElementById('uid_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('uid_err').innerHTML = 'Valid user id';
            document.getElementById('uid_err').style.color = "#00AF33";
            }
            }

            function passwd_validation(){
            'use strict';
            var passid_name = document.getElementById("passid");
            var passid_value = document.getElementById("passid").value;
            var passid_length = passid_value.length;
            if(passid_length<7 || passid_length>12)
            {
            document.getElementById('passwd_err').innerHTML = 'Password must be at least 7 to 12 characters long';
            passid_name.focus();
            document.getElementById('passwd_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('passwd_err').innerHTML = 'Valid password';
            document.getElementById('passwd_err').style.color = "#00AF33";
            }
            }

            function username_validation(){
            'use strict';
            var username_name = document.getElementById("username");
            var username_value = document.getElementById("username").value;
            var username_length = username_value.length;
            var letters = /^[a-zA-Z]+$/;
            if(username_length<3 || username_value.match(letters))
            {
            document.getElementById('name_err').innerHTML = 'Username must be at least 3 and Alphabetes only.';
            username_name.focus();
            document.getElementById('name_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('name_err').innerHTML = 'Valid username';
            document.getElementById('name_err').style.color = "#00AF33";
            }
            }

            function country_validation(){
            'use strict';
            var country_name = document.getElementById("country");
            var country_value = document.getElementById("country").value;
            if(country_value === "Default" || country_value === "--")
            {
            document.getElementById('country_err').innerHTML = 'You must select a country';
            country_name.focus();
            document.getElementById('country_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('country_err').innerHTML = 'Country selected.';
            document.getElementById('country_err').style.color = "#00AF33";
            }
            }

            function zip_validation(){
            'use strict';
            var numbers = /^[0-9]+$/;
            var zip_name = document.getElementById("zip");
            var zip_value = document.getElementById("zip").value;
            var zip_length = zip_value.length;
            if(!zip_value.match(numbers) || zip_length !== 5)
            {
            document.getElementById('zip_err').innerHTML = 'You must enter a ZIP code, which must be numeric and must be at least 5 chracters long.';
            zip_name.focus();
            document.getElementById('zip_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('zip_err').innerHTML = 'ZIP code entered';
            document.getElementById('zip_err').style.color = "#00AF33";
            }
            }

            function email_validation(){
            'use strict';
            var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
            var email_name = document.getElementById("email");
            var email_value = document.getElementById("email").value;
            var email_length = email_value.length;
            if(!email_value.match(mailformat) || email_length === 0)
            {
            document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
            email_name.focus();
            document.getElementById('email_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('email_err').innerHTML = 'Valid email format';
            document.getElementById('email_err').style.color = "#00AF33";
            }
            }

            function gender_validation(){
            'use strict';
            if ( (document.getElementById("msex").checked === false) && (document.getElementById("fsex").checked === false)){
            document.getElementById('gender_err').innerHTML = 'Please select a gender.';
            document.getElementById('gender_err').style.color = "#FF0000";
            document.getElementById("msex").checked = true;
            }
            else
            {
            document.getElementById('gender_err').innerHTML = 'Gender selected';
            document.getElementById('gender_err').style.color = "#00AF33";
            }
            }

        </script>

        <style>
            body {
            background-color: #f0f2f5;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            }
          .container {
	        background-color: #fff;
	        border-radius: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
            margin-bottom: 50px;
	        overflow: hidden;
	        width: 500px;
          }

          form li {
              list-style: none;
              margin-bottom: 5px;
          }

          span{
              font-size: 10px;
              font-style: italic;
          }

          h2 {
              color: #1877f2;
              margin-left: 20px;
              font-weight: bold;
          }

        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <h2>Registration Form</h2>
            <br>
            <form name='Registration' action="https://www.facebook.com/">

            <ul>
                <li><label for="userid">User id:</li>
                <li><input type="text" name="userid" id="userid" size="12" onBlur="userid_validation();"/><br><span id="uid_err"></span></li>
                <li><label for="passid">Password:</label></li>
                <li><input type="password" name="passid" id="passid" size="12" onblur="passwd_validation()"/><br><span id="passwd_err"></span></li>
                <li><label for="username">Name:</label></li>
                <li><input type="text" name="username" id="username" size="50" onBlur="username_validation();"/><br><span id="name_err"></span></li>
                <li><label for="address">Address:</label></li>
                <li><input type="text" name="address" id="address" size="50" /><br><span id="add_err"></span></li>
                <li><label for="country">Country:</label></li>
                <li><select name="country" id="country" onblur="country_validation();">
                    <option selected="" value="Default">(Please select a country)</option></li>
                    <option value="BD">Brunei Darussalam</option>
                    <option value="CM">Cambodia</option>
                    <option value="ID">Indonesia</option>
                    <option value="LS">Laos</option>
                    <option value="ML">Malaysia</option>
                    <option value="MY">Myanmar</option>
                    <option value="PH">Philippines</option>
                    <option value="SG">Singapore</option>
                    <option value="TH">Thailand</option>
                    <option value="VT">Vietnam</option>
                </select><br><span id="country_err"></span></li>
                <li><label for="zip">ZIP Code:</label></li>
                <li><input type="text" name="zip" id="zip" onBlur="zip_validation();" /><br><span id="zip_err"></span></li>
                <li><label for="email">Email:</label></li>
                <li><input type="text" name="email" id="email" size="50" onblur="email_validation();"/><br><span id="email_err"></span></li>
                <li><label id="gender">Sex:</label></li>
                <li><input type="radio" name="msex" id="msex" value="Male" onBlur="gender_validation();" /><span>Male</span></li>
                <li><input type="radio" name="fsex" id="fsex" value="Female" /><span>Female</span><span id="gender_err"></span></li>
                <li><label Language></label>Language:</li>
                <li><input type="checkbox" name="en" value="en" checked /><span>English</span></li>
                <li><input type="checkbox" name="nonen" value="noen" /><span>Non English</span></li></li>
                <li><label for="desc">About:</label></li>
                <li><textarea name="desc" id="desc"></textarea></li>
                <br>
                <li><input type="submit" name="submit" value="Submit"></li>
                <br>
            </ul>
            </form>
        </div>
    </body>
</html>
