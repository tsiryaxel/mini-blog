				<div class="container background-gray-lighter">
                    <div class="row padding-vert-20">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-10">
                            <!-- Portfolio -->
                            <ul class="portfolio-group" style="position: relative; width: 826.666px; height: 1234.85px;">
								
								
								
								<?php
									//Tableau rubrique
									$rubrique = readtab("rubrique");
									foreach( $rubrique as $rub ) {
								?>							
                                <!-- Portfolio Item -->
                                <li class="portfolio-item col-sm-6 col-xs-6 padding-20" style="position: absolute; left: 0px; top: 0px;">
                                   <a href="rubrique-<?php  echo $rub["nom"] ?>">
                                        <figure class="animate fadeInLeft animated">
                                            <img alt="image1" src="front/assets/img/<?php echo $rub["image"] ?>">
                                            <figcaption>
                                                <h3> <?php echo $rub["nom"] ?> </h3>
                                                <span> <?php echo $rub["detail"] ?> </span>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                                <!-- //Portfolio Item// -->
								<?php
									}
								?>

                            </ul>
                            <!-- End Portfolio -->
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                </div>