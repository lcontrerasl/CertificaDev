
<!--A Flat Design Login Page by Codelator.com-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login de Usuarios</title>
        <style>
            @charset "UTF-8";
            /*A Flat Design Login Page by Codelator.com*/

            body{
                background-color:#2c3335;
                color:#f5f5f5;
                text-align:center;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
            }

            a{
                color:#fff;
                text-decoration:none;
            }

            #loginform{
                margin-top:150px;
                margin-left:auto;
                margin-right:auto;
                width:270px;
            }

            .input{
                width:270px;
                padding:15px 25px;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
                background: #f5f5f5;
                border:none;
                border-radius: 5px;
                color: #333;
                font-size: 14px;
                margin-top:15px;
            }

            .loginbutton{
                background-color:#ffdd00;
                border-radius:5px/5px;
                -webkit-border-radius:5px/5px;
                -moz-border-radius:5px/5px;
                color:#333;
                display:inline-block;
                font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
                font-size:18px;
                font-weight:bold;
                width:270px;
                text-align:center;
                line-height:50px;
                text-decoration:none;
                height:50px;
                margin-top:20px;
                margin-bottom:20px;
                border:none;
                outline:0;
                cursor: pointer;
            }

            .loginbutton:active {
                position:relative;
                top:1px;
            }

            .loginbutton:hover{
                background-color:#e5bf05;
            }

        </style>
    </head>
    <body>
        <form id="loginform" method="post" action="">
            <input type="text" class="input" placeholder="E-mail" /> 
            <input type="password" class="input" placeholder="Password" />
            <input type="submit" class="loginbutton" value="ENTRAR" />
        </form>
        <p><a href="../CertificaDev/vista/registroUsuario.php">REGISTRO</a></p>
        <p><a href="#">Olvido su contraseña</a></p>

    </body>
</html>