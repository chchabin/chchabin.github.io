<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="eng">
    <head>
        <title>mon formulaire</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <div class="col-md-10 col-md-offset-2">
            <div class="page-header" >
                <h1>Formulaire</h1>
            </div>
            <form class="form-horizontal" method="GET" action="reponse.php">
                <input type=hidden name ="envoie" value="GET">
                <div class="control-group">
                    <label class="control-label" for="login">Login</label>                
                    <div class="controls">
                        <input type="text" id="log" name ="login" placeholder="login"> 
                    </div>
                </div>
                <div class="control-group">
                    <label for="pass" class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" name="pwd" placeholder="Password - min 8 caractères">
                    </div>
                </div>
                <div class="controls">
                    <button class="btn" type="submit">Identifier</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>
