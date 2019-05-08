	

				<div class="container background-white">
                    <div class="row margin-vert-30">
					
						
							<?php
								//Tableau rubrique
							$listpost = getRubPost( $_GET["ref"] );
							foreach( $listpost as $ls ) {
							?>		
						
								<!-- Blog Post -->	
								<div class="blog-post padding-bottom-20">
									<!-- Blog Item Header -->
									<div class="blog-item-header">
										<!-- Title -->
										<h2>
											<a href="#"><?php echo $ls["titre"] ?> </a>
										</h2>
										<div class="clearfix"></div>
										<!-- End Title -->
									</div>
									<!-- End Blog Item Header -->
									<!-- Blog Item Details -->
									<div class="blog-post-details">
										<!-- Author Name -->
										<div class="blog-post-details-item blog-post-details-item-left">
											<i class="fa fa-user color-gray-light"></i>
											<a href="#">Admin</a>
										</div>
										<!-- End Author Name -->
										<!-- Date -->
										<div class="blog-post-details-item blog-post-details-item-left">
											<i class="fa fa-calendar color-gray-light"></i>
											<a href="#"><?php echo $ls["datepost"] ?></a>
										</div>
										<!-- End Date -->
										<!-- Tags -->
										<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags">
											<i class="fa fa-tag color-gray-light"></i>
											<?php 
											$tag = explode( "-" , $ls["tag"] ); 
											
											foreach( $tag as $t ){
											?>
												<a href="#"><?php echo $t ?></a>-
											<?php
											}
											?>
										</div>
										<!-- End Tags -->
									</div>
									<!-- End Blog Item Details -->
									
									<!-- Blog Item Body -->
									<div class="blog">
										<div class="clearfix"></div>
										<div class="blog-post-body row margin-top-15">
											<div class="col-md-5">
												<img class="margin-bottom-20" src="front/assets/img/blog/<?php echo $ls["image"] ?>" alt="thumb1">
											</div>
											<div class="col-md-7">
												<p><?php echo $ls["detail"] ?></p>
												<!-- Read More
												<a href="#" class="btn btn-primary">
													Read More
													<i class="icon-chevron-right readmore-icon"></i>
												</a>
												 End Read More -->
											</div>
										</div>
									</div>
									<!-- End Blog Item Body -->
								</div>
								<!-- End Blog Item -->
								
								<?php
									}
								?>

							
							
							<!-- Pagination 
                            <ul class="pagination">
                                <li>
                                    <a href="#">&laquo;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="disabled">
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">&raquo;</a>
                                </li>
                            </ul>
                            End Pagination -->
					
					</div>
				</div>