<!--
/**
* Registration No:IT17069564
 * Name: M.S.D.S Mannage
 * Date: 17/05/2019
 */
 -->
<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Cross Site Request Forgery Protection</title>
</head>

<body>
    <div class="container h-80">
        <div class="row align-items-center h-100">
            <div class="col-3 mx-auto">
                <div class="text-center">
                    <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
                    <p id="profile-name" class="profile-name-card"></p>



                    <?php
                    if (isset($_COOKIE['session_cookie']))
                        session_start();
                    ?>

                    <form class='form-signin' action='control.php' method='post' onsubmit='updateForm(this);>
                        <label for=' username' class='text-white'>
                        <h4>Write Something<h4>
                                </label><br>
                                <input type='text' name='write' id='write' class='form-control form-group' placeholder='No One' required autofocus>
                                <div id='div1'>
                                    <input type='hidden' name='CSRF_Token' value='' id='CSRF_Token' />
                                </div>
                                <button class='btn btn-lg btn-primary btn-block btn-signin' type='submit'>enter</button>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <script>
        //To retrieve CSRF token from the cookie
        $(document).ready(function() {

            var cookie_value = "";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            var csrf = decodedCookie.split(';')[2]

            if (csrf.split('=')[0] = "csrf_token") {

                cookie_value = csrf.split('csrf_token=')[1];
                document.getElementById("CSRF_Token").setAttribute('value', cookie_value);
            }
        });
    </script>

</body>

</html>