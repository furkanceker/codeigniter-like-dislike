<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazı Listesi</title>
    <?php $this->load->view('inc/include_style'); ?>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= $user->username ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url('cikis') ?>">Çıkış Yap</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <?php foreach($posts as $post) { ?>
        <div class="col-md-12 well">
            <p>
                <?= $post->title; ?>
            </p>
            <div class="thumbs_container">
                <button class="btn <?= ($post->vote_status == 1) ? "btn-success" : "btn-default" ?> likeBtn" data-id="<?= $post->id ?>">
                    <span class="glyphicon glyphicon-thumbs-up"></span>
                    <span class="like_count">(<?= $post->like_count ?>)</span>
                </button>
                <button class="btn <?= ($post->vote_status == -1) ? "btn-danger" : "btn-default" ?> dislikeBtn" data-id="<?= $post->id ?>>
                    <span class="glyphicon glyphicon-thumbs-down"></span>
                    <span class="dislike_count">(<?= $post->dislike_count ?>)</span>
                </button>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script src="<?= base_url('assets/jquery-3.6.3.min.js') ?>"></script>
<script src="<?= base_url('assets/custom.js') ?>"></script>
</body>
</html>