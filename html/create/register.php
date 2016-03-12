<html>
<head>
    <link rel="shortcut icon" href="../../styles/W-tab_icon.ico">
    <script src="../../script/cpassword.js"></script>
    <title>Crează-ți propriul cont!</title>
</head>
<body>
    <h4>Crează-ți propriul cont!</h4>
    <form method="post" name="login" action="../create/creation.php">
        <p class="white">Nume:</p>  <input id="name" type="text" name="username" required="required" placeholder="Numele"/>
        <p class="white">Parola:</p> <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Parola" required>
        <p class="white">Parola:</p> <input id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Confirmă parola" required>
        <input type="submit" name="submit" value="submit" />
    </form>
</body>
</html>