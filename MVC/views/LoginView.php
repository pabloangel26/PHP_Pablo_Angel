
<?php include __DIR__ . '/../views/header.php'; ?>     
<body>
    <div class="loginclass">
        <div class="loginform">
            <h2>Inicio de sesión</h2>
            <form method="post" action="loginAuth.php">
                <div class="col-12">
                    <input type="text" class="login-sec-01-input" name="email" placeholder="INGRESA TU EMAIL">
                </div>
                <div class="col-12">
                    <input type="password" class="login-sec-01-input" name="password" placeholder="INGRESA TU CONTRASEÑA*">
                </div>
                <div class="col-12">
                    <button type="submit" class="global-02-bnt">INICIAR SESION →</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php include __DIR__ . '/../views/footer.php'; ?>







