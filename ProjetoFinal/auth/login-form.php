<?php
require_once ('../partials/header.php');
?>

<div class="container">
    <h1>Login</h1>

    <form method="post" action="login.php">
        <label>E-mail:</label>
        <input type="email" class="form-control" name="email">

        <br>

        <label>Senha:</label>
        <input type="password" class="form-control" name="senha">

        <br>

        <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>

<?php require_once ('../partials/footer.php'); ?>