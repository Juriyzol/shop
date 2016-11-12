
	<?php include ROOT.'/views/layouts/header.php'; ?>
	
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Каталог</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                
								<?php foreach ($categories as $categoriesList):?>							  
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a href="<?php echo '/catalog/' . $categoriesList['id'];?>"
												class="<?php if ($categoryID == $categoriesList['id']) echo 'active'; ?>"
												> <!-- если аргумент $categoryID передаваемый в контроллер равен идентификатору записи выводить имя класса -->
													<?php echo $categoriesList['name'];?>
												</a>
											</h4>
										</div>
									</div>
								<?php endforeach;?>										

                            </div><!--/category-products-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
					
					
                        <div class="product-details"><!--product-details-->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="../../template/images/product-details/1.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <img src="<?php echo ($product['is_new']) ? "../../template/images/product-details/new.jpg" : ""; ?>" class="newarrival" alt="" />
										
										
										
                                        <h2><?php echo $product['name'];?></h2>
                                        <p><?php echo $product['code'];?></p>
                                        <span>
                                            <span><?php echo $product['price'];?> $</span>
                                            <label>Количество:</label>
                                            <input type="text" value="1" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
										
										<p><b>Наличие:</b> 										
											<?php											 
											  if ($product['availability'] == 0) {
												echo 'Товар закончился';
											  }
											  else {
												if ($product['availability'] == 1) {
												  echo 'На складе ' . $product['availability'] . ' товар';
												}
												else { 
												  if ($product['availability'] > 1 && $product['availability'] < 5) {
													echo 'На складе ' . $product['availability'] . ' товара';
												  }
												  else {
													echo ('На складе более 5 товаров');
												  }
												}
											  }											 
											?>																						
										</p>	
										
										<p><b>Состояние:</b> <?php echo ($product['is_new']) ? "Новое" : "Обноски"; ?></p>
                                        <p><b>Производитель:</b> <?php echo $product['brand'];?></p>
																			
										
                                    </div><!--/product-information-->
                                </div>
                            </div>
                            <div class="row">                                
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <p><?php echo $product['description'];?></p>
                                </div>
                            </div>
                        </div><!--/product-details-->	
						
						
                    </div>
                </div>
            </div>
        </section>
        

	<?php include ROOT.'/views/layouts/footer.php'; ?>