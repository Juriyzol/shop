	
	<?php include ROOT.'/views/layouts/header.php'; ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="#">Категория</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-products-->


                            <div class="shipping text-center"><!--shipping-->
                                <img src="../../template/images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->

                        </div>
                    </div>
                    <div class="col-sm-9">
					
					
					
                        <div class="blog-post-area">
                            <h2 class="title text-center">Новость</h2>
                            <div class="single-blog-post">
                                <h3><?php echo $newsItem['h1'];?></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i><?php echo $newsItem['date'];?></li>
                                        <!-- <li><i class="fa fa-clock-o"></i> 13:33</li> -->
                                    </ul>
                                </div>
                                <a href="">
                                    <img src="../../template/images/blog/blog-one.jpg" alt="">
                                </a>
                                <p>
								<?php echo $newsItem['content'];?>
								</p>
                                <div class="pager-area">
                                    <div class="pager pull-right">
                                        <a href="<?php echo '/news';?>">к списку новостей</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--/blog-post-area-->
					
						
						
                    </div>	
                </div>
            </div>
        </section>


	<?php include ROOT.'/views/layouts/footer.php'; ?>