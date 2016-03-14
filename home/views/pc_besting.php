<link rel="stylesheet" href="assets/css/contact%20us.css"/>
<div class="container contact">
    <p class="hard-tit"><i class="fa fa-play fa-rotate-180"></i> &nbsp;企业简介&nbsp; <i class="fa fa-play"></i></p>

</div>
<div class="intro-center">
    <div class="container contact">
        <div class="row">
        <?php foreach($posts as $post):?>
            <div class="col-lg-4 col-md-4 col-xs-12 intro-ctt">
                <img class="intro-pic" src="<?=base_url($post['postpic']);?>" alt=""/>
                <div>
                    <h3><?=$post['title'];?></h3>
                    <p><?=$post['postinfo'];?></p>
                </div>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</div>
