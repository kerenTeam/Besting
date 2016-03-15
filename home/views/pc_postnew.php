  <link rel="stylesheet" href="assets/css/news.css"/>
    <p class="hard-tit"><i class="fa fa-play fa-rotate-180"></i> &nbsp;新闻中心&nbsp; <i class="fa fa-play"></i></p>
    <div class="container news">
        <div class="row">
            <div class="col-lg-3 newspage clearfix">
                <div class="news-date clearfix">
                    <div class="news-date-l">
                        <div class="news-years">2016</div>
                        <div class="news-month">MAY</div>
                    </div>
                    <div class="news-day">13</div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="newspage-ctt">
                    <h1><?=$news['title']?></h1>
                    <img src="<?=base_url($news['postpic']);?>" alt="besting media"/>
                    <?=$news['postcontent'];?>
                </div>
            </div>
        </div>
    </div>
