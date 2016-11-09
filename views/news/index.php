
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
                            <h2 class="title text-center">Последние записи в блоге</h2>
                            
							
							<?php foreach ($newsList as $newsItem):?>
								<div class="single-blog-post">
									<h3><?php echo $newsItem['h1'];?></h3>
									<div class="post-meta">
										<ul>
											<li><i class="fa fa-calendar"></i><?php echo $newsItem['date'];?></li>
											<!-- <li><i class="fa fa-clock-o"></i> 13:33</li> -->
										</ul>
									</div>
									<a href="<?php echo 'news/' . $newsItem['id'];?>">
										<img src="../../template/images/blog/blog-one.jpg" alt="">
									</a>
									<p>
									<?php echo $newsItem['short_content'];?>
									</p>
									<a  class="btn btn-primary" 
										href="<?php echo 'news/' . $newsItem['id'];?>">
									Читать полностью </a>
								</div>
								<hr>
                            <?php endforeach;?>

                            
                            <div class="pagination-area">
                                <ul class="pagination">
                                    <li><a href="" class="active">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
	<?php include ROOT.'/views/layouts/footer.php'; ?>