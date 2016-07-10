<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action=“ingresar.php” method=“POST”>
            <center>
                <table>
                    <tr>
                        <td>
                            Usuario
                        </td>
                        <td><input type=“text” placeholder=“Usuario” name=“txtUsuario”></td>
                    </tr>                
                    <tr>
                        <td>
                            Password
                        </td>
                        <td><input type=“password” placeholder=“Password” name=“txtPassword”></td>
                    </tr>               
                    <tr>                
                        <td colspan="2" align='center'>                    
                            <input onclick="validar_form" type="button" value="Enviar">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>
