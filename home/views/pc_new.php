    <link rel="stylesheet" href="assets/css/news.css"/>
    <p class="hard-tit"><i class="fa fa-play fa-rotate-180"></i> &nbsp;新闻中心&nbsp; <i class="fa fa-play"></i></p>
    <div class="container news">
        <?php foreach($posts as $post):?>
            <div class="row rela">
                <div class="col-lg-6 col-md-6">
                    <div class="news-left clearfix">
                        <div class="news-date clearfix">
                            <div class="news-date-l">
                                <div class="news-years">2016</div>
                                <div class="news-month">MAY</div>
                            </div>
                            <div class="news-day">13</div>
                        </div>
                        <div class="news-pic">
                            <img src="<?=base_url($post['postpic']);?>" alt="besting media"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 abo">
                    <div class="news-right">
                        <h1><?=$post['title']?></h1>
                           <?=$post['postinfo']?>
                        <div>
                            <a href="newspage.html">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    
    </div>
