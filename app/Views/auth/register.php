<html>
    <head>
        <title>Tutorial Login Dan Register</title>
    </head>
    <body>
        <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <?php if($error){ ?>
            <p style="color:red">Terjadi Kesalahan:
                <ul>
                    <?php foreach($error as $e){ ?>
                    <li><?php echo $e ?></li>
                    <?php } ?>
                </ul>
            </p>
        <?php } ?>
        
        <h5>Register</h5>
        <form method="post" action="/auth/valid_register">
            Username: <br>
            <input type="text" name="username" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            Konfirmasi Password: <br>
            <input type="password" name="confirm" required><br>
            <button type="submit" name="login">Register</button>
        </form>
        <p>
            <a href="/auth/login">Sudah punya akun?</a>
        </p>
    </body>
</html>