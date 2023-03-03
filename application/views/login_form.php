<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <?php $this->load->view('inc/include_style'); ?>
</head>
<body>
<div class="container">
    <div class="row">
        <h3 class="text-center">Giriş Yap</h3>
        <div class="col-md-6 col-md-offset-3 well">
            <?php if($this->session->userdata("error")) { echo '<div class="alert alert-danger">'.$this->session->userdata("error").'</div>'; } ?>
            <form action="<?= base_url('giris') ?>" method="post">
                <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı">
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" class="form-control" name="password" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-default">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>