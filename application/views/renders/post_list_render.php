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
                <button class="btn <?= ($post->vote_status == -1) ? "btn-danger" : "btn-default" ?> dislikeBtn" data-id="<?= $post->id ?>">
                    <span class="glyphicon glyphicon-thumbs-down"></span>
                    <span class="dislike_count">(<?= $post->dislike_count ?>)</span>
                </button>
            </div>
        </div>
    <?php } ?>