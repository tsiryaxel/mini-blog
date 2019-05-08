<?php
$rubrique = readtab("rubrique");
$col = array( "id" , "nom" , "image" , "detail" );
?>

							<div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Table
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                                <tr> 
													<?php for($i = 0 ; $i <count($col) ; $i++) { ?>
														<th><?php echo ucfirst(strtolower($col[$i]))?></th>
													<?php } ?>
													<th>Updata</th>
													<th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php foreach( $rubrique as $rub ) { ?>
													<tr>
														<form action="" method="post">
															<?php for($i = 0 ; $i <count($col) ; $i++) { ?>
																<td><input name="<?php echo $col[$i] ;?>" type="text" value="<?php echo $rub[ $col[$i] ] ;?>"/></td>
															<?php };?>
															<td><input type="submit" value="Modifier" class="button alt"/></td>
														</form>	
														<td><a href="del-rubrique-<?php echo $rub[$col[0]] ;?>" ><input type="submit" value="Supp" class="button alt"/></a></td>
													</tr>
												<?php };?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>