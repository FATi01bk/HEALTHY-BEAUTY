<!DOCTYPE html>
<html>
<head>
    <title>Ma Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #0077b6, #52b788);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #ffffff;
            font-size: 2.5em;
            text-shadow: 2px 2px #add8e6;
        }
        .date {
            color: #ffffff;
            font-size: 1.5em;
            margin-bottom: 50px;
            text-shadow: 1px 1px #add8e6;
        }
        .button {
            background-color: #ffffff;
            border: none;
            color: #0077b6;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 10px 2px;
            cursor: pointer;
            padding: 15px 32px;
            transition-duration: 0.4s;
            text-decoration: none;
            overflow: hidden;
            position: relative;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            border-radius: 12px;
            border: 1px solid #0077b6;
        }
        .button:hover {
            background-color: #add8e6;
            color: #ffffff;
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .button:after {
            content: "";
            background: #f1f1f1;
            display: block;
            position: absolute;
            padding-top: 300%;
            padding-left: 350%;
            margin-left: -20px !important;
            margin-top: -120%;
            opacity: 0;
            transition: all 0.8s
        }
        .button:active:after {
            padding: 0;
            margin: 0;
            opacity: 1;
            transition: 0s
        }
    </style>
</head>
<body>
    <h1>Bonjour !</h1>
    <p class="date" id="date"></p>
    <a href="addAdminn.php" class="button">S'inscrire</a>
    <a href="connecterAdminn.php" class="button">Se connecter</a>
    <script>
        document.getElementById('date').textContent = new Date().toLocaleDateString();
    </script>
</body>
</html>
