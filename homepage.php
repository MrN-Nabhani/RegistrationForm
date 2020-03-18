<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="Styling/homePageStyling.css">
</head>

<body>
    
    <!-- <center> -->
        <div class="container">

                <form  method="post" role="form" action="datapage.php">  <!-- action="datapage.php" -->

                        <h1>Registration</h1>

                        <div class="field">

                            <label for='username'> Username </label>
                            <input name="username"  type='text' placeholder="e.g. najm_nabhani" 
                            pattern="[\da-zA-Z_]+"  required
                            title="username must only contain alphanumeric characters or undersore"/>
                        </div>
                        
                        <div class="field">
                            <label for='email'> Email </label>
                            <input name="email" type='email' placeholder="name@domai.com" required/>
                        </div>

                        <div class="field">
                            <label for='password'> Password </label>
                            <input id='pwd' name="pwd" type='password' placeholder="keep it secret ;)"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required
                            />
                        </div>

                        <div class="field">
                            <label for='confirm password'> re-Password </label>
                            <input id='cpwd' invalid name='pwd-conf' 
                            type='password' placeholder="still remember it ._. ?"
                            required
                            />
                        </div>

                        <!-- <div class="field">
                            <label for='remember user'> Keep me logged in? </label>
                            <input type='checkbox' name="remember" />
                        </div> -->

                        <input name='submit-btn' type='submit' value="Sign Up"/>

                </form>
                
                
        </div>

        
                
        <object type="image/svg+xml" data="rotatingGraphics.svg"> </object>
    <!-- </center> -->
    
    
</body>


<script>

    // confirm password validation.

    var password = document.getElementById("pwd")
    , confirm_password = document.getElementById("cpwd");

    function validatePassword(){
        if(password.value != confirm_password.value) 
            confirm_password.setCustomValidity("Passwords Don't Match");
        else 
            confirm_password.setCustomValidity('');
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
       
</script>
</html>