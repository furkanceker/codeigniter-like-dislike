<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container">
    <div class="row">
        <h3 class="text-center">Giriş Yap</h3>
        <div class="col-md-6 col-md-offset-3 well">
            <form action="<?= base_url('giris') ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı Adı">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-default">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/jquery-3.6.3.min.js') ?>"></script>
<script src="<?= base_url('assets/custom.js') ?>"></script>
</body>
</html>