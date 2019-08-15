

                                                        <li class="dropdown dropdown-full-color dropdown-quaternary dropdown-mega" id="headerSearchProperties">
														<a class="dropdown-toggle" href="#"> <i class="fa fa-search"></i>
														</a>
														<ul class="dropdown-menu custom-fullwidth-dropdown-menu">
															<li>
																<div class="dropdown-mega-content">
																	<form id="propertiesFormHeader" action="urunara.php" method="POST">
																		<br>
																		<div class="container p-none">
																			<div class="row">
																				<div class="col-md-2">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="urun_dur" data-msg-required="Doldurun.." id="propertiesPropertyType" required="">
																							 <option value="">Emlak Durum</option>
                                                                                             <option value="Satılık">Satılık</option>
                                                                                             <option value="Kiralık">Kiralık</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-md-2">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="urun_nedir" data-msg-required="Doldurun.." id="propertiesLocation" required="">
																							<option value="">Arama Türü</option>
                                                                                             <option value="Müstakil_Ev">Müstakil Ev</option>
                                                    <option value="Apartman_Dairesi">Apartman Dairesi</option>
                                                    <option value="Bahce">Bahçe</option>
                                                    <option value="Arsa">Arsa</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-md-2">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="urun_sehir" data-msg-required="Doldurun.." id="propertiesMinBeds" required="">
																							 <option value="">Şehir Seçimi</option>
                                                      <option value="Elazığ">Elazığ</option>
                                                       <option value="İstanbul">İstanbul</option>
                                                        <option value="Malatya">Malatya</option>                                                   
                                                    <option value="Ankara">Ankara</option>
                                                   
																						</select>
																					</div>
																				</div>
																				<div class="col-md-2">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="urun_fiyataz" data-msg-required="Doldurun..." id="propertiesMinPrice" required="">
																							 <option value="">En az</option>
                                                    <option value="1000">1.000 TL</option>
                                                    <option value="10000">10.000 TL</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-md-2">
																					<div class="form-control-custom">
																						<select class="form-control text-uppercase font-size-sm" name="urun_fiyatcok" data-msg-required="Doldurun.." id="propertiesMaxPrice" required="">
																							   <option value="">En çok</option>
                                                    <option value="1500">1.500 TL</option>
                                                    <option value="15000">15.000 TL</option>
																						</select>
																					</div>
																				</div>
																				<div class="col-md-2">
																					<input type="submit" value="Emlak Ara" name="emlakara" class= " fa fa-comment-o  btn-lg btn-block text-uppercase font-size-sm">
																				</div>
																			</div>
																		</div>
																	</form>
																</div>
															</li>
														</ul>
													</li>
