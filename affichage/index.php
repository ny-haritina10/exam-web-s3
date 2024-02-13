<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: #f2f2f2; /* Utilisation d'un fond blanc */
        }
        .main {
            width: 350px;
            height: 500px;
            background: #e6e6e6; /* Utilisation d'un fond gris clair */
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #888888; /* Utilisation d'une ombre plus claire */
        }
        #chk {
            display: none;
        }
        .signup, .login {
            position: relative;
            width: 100%;
            height: 100%;
        }
        label {
            color: #333; /* Texte plus sombre */
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }
        input {
            width: 60%;
            height: 20px;
            background: #fff; /* Fond blanc pour les champs de saisie */
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }
        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #006600; /* Utilisation d'un vert foncé */
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }
        button:hover {
            background: #005500; /* Changement de couleur au survol */
        }
        .login {
            height: 460px;
            background: #fff; /* Fond blanc pour la section de connexion */
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }
        .login label {
            color: #006600; /* Couleur de texte vert foncé pour la section de connexion */
            transform: scale(.6);
        }
        #chk:checked ~ .login {
            transform: translateY(-500px);
        }
        #chk:checked ~ .login label {
            transform: scale(1);
        }
        #chk:checked ~ .signup label {
            transform: scale(.6);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form action="../php/traitement/traitement_login_admin.php" method="post">
            <label for="chk" aria-hidden="true">Admin</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button>Sign up</button>
        </form>
    </div>
    <div class="login">
        <form action="../php/traitement/traitement_login_client.php" method="post">
            <label for="chk" aria-hidden="true">User</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button>Login</button>
        </form>
    </div>
</div>
</body>
</html>