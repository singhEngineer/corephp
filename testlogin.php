<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.scss" />
    <meta name="viewport" content="width=device-width">
  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
</head>
<h1>Login Form</h1>
<body>
<!-- <link rel="stylesheet" href="style.css" /> -->
<div class="flex-wrap">
    <fieldset>
        <form action novalidate>
            <input type="radio" name="rg" id="sign-in" checked/>
            <input type="radio" name="rg" id="sign-up" />
            <input type="radio" name="rg" id="reset" />        

            <label for="sign-in">Sign in</label>
            <label for="sign-up">Sign up</label>
            <label for="reset">Reset</label> 

            <input class="sign-up sign-in reset" type="email" placeholder="Email" />
            <input class="sign-up sign-in" type="password" placeholder ="Password" />
            <input class="sign-up" type="password" placeholder ="Repeat Password" />
            <button>Submit</button>
            
            <!-- <p>In response to <a href="https://codepen.io/IanHazelton/details/bgwEPa/" target="_blank">this pen</a></p> -->
        </form>
    </fieldset>
</div>
</body>
</html>