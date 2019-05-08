<!-- Top Menu -->
            <div id="hornav" class="container no-padding">
                <div class="row">
                    <div class="col-md-12 no-padding">
                        <div class="text-center visible-lg">
                            <ul id="hornavmenu" class="nav navbar-nav">
                                <li>
                                    <a href="home" class="fa-home">Home</a>
                                </li>
                                <li>
									<span class="fa-copy">Rubrique</span>
                                    <ul>
									
									<?php
										foreach( $rubrique as $rub ) {
									?>
                                        <li>
                                            <a href="rubrique-<?php  echo $rub["nom"] ?>"><?php  echo $rub["nom"] ?></a>
                                        </li>
									<?php
										}
									?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html" class="fa-comment">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!-- End Top Menu -->