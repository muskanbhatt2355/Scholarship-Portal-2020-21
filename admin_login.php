<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <script src="https://gymkhana.iitb.ac.in/profiles/static/widget/js/login.min.js" type="application/javascript"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body  class="container" style="background-image: linear-gradient(rgba(255,255,255,.8),rgba(255,255,255,.8)),url('login_sch.jpg');background-position:center;display:flex;justify-content: center;align-items: center;width: 100%;height: 100vh;overflow:hidden;margin:0px;padding:0px;" >

<div id="sso-root"></div>
</body>
 <script type="application/javascript">
        new SSO_JS({
            config: {
                client_id: 'xtTPUzjWo6VaK443bMyA7oR5fY8wsuUlJWfhk7lt',
                //client_id: '262P0mKNnWQqW1ENnmimezCBV2brMWoVXtvDnBdI',   // Compulsory
                scope: ['basic','ldap','profile'],    // Optional. Default is  ['basic']
                state: '', // Optional. Default None
                response_type: 'code',  // Optional. Default is 'code'
               // redirect_uri: 'https://gymkhana.iitb.ac.in/~ugacademics/courserank/newlogin.php',    //Optional
                sso_root: document.getElementById('sso-root'),
                /* Optional
                 document.getElementById don't work if your element is not in light DOM. In that case you need to
                 provide selector here. In most of the cases this will work.
                 */
            },
            colors: { // All Optional
                button_div_bg_color: '303F9F', // Background color of button
                button_anchor_color: 'FFFFFF', // Font color of Button
                logout_anchor_color: '727272', // Font color of logout mark (The one with 'Login as other user'
            },
        }).init();
    </script>
</html>
