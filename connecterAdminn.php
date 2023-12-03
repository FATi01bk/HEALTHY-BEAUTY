<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminn</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="" method="POST" class="form-signin">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="cin">CIN</label>
                            <input type="text" id="cin" name="cin" class="form-control" autofocus>
                            <span id="erreurCin" style="color: red"></span>
                        </div>
                                             <div class="form-group">
                            <label for="motdepasse">Mot de passe</label>
                            <input type="password" id="motdepasse" name="motdepasse" class="form-control">
                            <span id="erreurMotdepasse" style="color: red"></span>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" value="Se connecter" class="btn btn-primary account-btn">
                            <input type="reset" value="Annuler" class="btn btn-primary account-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
