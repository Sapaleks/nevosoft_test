<div class="col-md-12 text-center">
    <h1>Страница авторизации</h1>
</div>
<p>
<form action="" method="post" class="login">
    <table class="table">
        <tr>
            <td>Логин</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>Пароль</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">
                <input type="submit" value="Войти" class="btn btn-success" name="btn">
            </td>
        </tr>

    </table>
</form>
</p>

<?php extract($data); ?>
<?php if ($login_status == "access_granted") { ?>
    <p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif ($login_status == "access_denied") { ?>
    <p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
