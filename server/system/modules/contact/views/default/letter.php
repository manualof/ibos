<!-- private css -->
<link rel="stylesheet" href="<?php echo $assetUrl;?>/css/contactList.css?<?php echo VERHASH;?>">
<div class="mc clearfix">
	<!-- Sidebar -->    
	<?php echo $this->getSidebar();?>
	<div class="mcr cl-mcr">
		<div class="page-list">
			<div class="page-list-header cl-list-header" id="cl_list_header">
				<div class="clearfix cl-funbar" id="cl_funbar">
					<div class="search pull-left span8" id="name_search">
						<input type="text" placeholder="<?php echo $lang["Enter the name check"];?>" id="search_area">
						<a href="javascript:;">search</a>
						<input type="hidden" name="type" id="normal_search">
					</div>
					<div class="pull-right mr">
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<?php echo $lang["Batch operation"];?>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="javascript:;" id="educe_concatcList" data-uids="<?php echo $uids;?>"><?php echo $lang["Export contacts"];?></a></li>
								<li><a href="javascript:;" id="print_concatcList" data-uids="<?php echo $uids;?>"><?php echo $lang["Pring contacts"];?></a></li>
							</ul>
						</div>
						<div class="btn-group mlm cl-btn-group">
							<a title="<?php echo $lang["By organization"];?>" class="btn" href="<?php echo $this->createUrl($this->id . "/index", array("op" => "dept", "deptid" => EnvUtil::getRequest("deptid")));?>"><i class="o-organization-chart"></i></a>
							<a title="<?php echo $lang["By letter"];?>" class="btn active" href="<?php echo $this->createUrl($this->id . "/index", array("op" => "letter", "deptid" => EnvUtil::getRequest("deptid")));?>"><i class="o-cl-letter"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="page-list-mainer">
				<div class="cl-rolling-sidebar" id="cl_rolling_sidebar">
					<div class="personal-info" id="personal_info">
						<div class="cl-pc-top posr">
							<div class="cl-pc-banner">
								<img src="<?php echo $assetUrl;?>/image/nobg_big.jpg" id="card_bg"></div>
							<div class="cl-pc-usi">
								<div class="cl-pc-bg"></div>
								<div class="cl-pc-avatar posr">
									<a href="" target="_blank" class="pc-avatar" id="card_home_url">
										<img src="" alt="" width="96" height="96" id="card_avatar">
									</a>
								</div>
							</div>
							<div class="cl-uic-operate">
								<a target="_blank" href="" title="<?php echo $lang["Email TA"];?>" class="co-temail" id="card_email_url"></a>
								<a title="<?php echo $lang["Send a private letter to TA"];?>" href="" class="co-tpm" id="card_pm"> <i class="o-pm-offline"></i>
								</a>
							</div>
							<a href="javascript:;" class="o-si-nomark" data-id="" id="card_mark"></a>
							<div class="cl-pc-name"> <i class="" id="card_gender"></i> <strong id="card_realname" class="fsst"></strong>
								<span id="card_deptname" class="mlm"></span>
								<strong id="card_connect">·</strong>
								<span id="card_posname"></span>
							</div>
						</div>
						<div class="pc-info-content posr">
							<a href="javascript:;" class="cl-window-ctrl" id="cl_window_ctrl"></a>
							<div class="pc-info-list">
								<div class="mb">
									<span>
										<i class="o-home-phone"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["Phone"];?></span>
									<span class="ml xcm" id="card_telephone"></span>
								</div>
								<div class="mb">
									<span>
										<i class="o-pc-phone"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["Cell phone"];?></span>
									<span class="ml xcm" id="care_mobile"></span>
								</div>
								<div class="mb">
									<span>
										<i class="o-pc-email"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["Email"];?></span>
									<span class="ml xcm" id="card_email"></span>
								</div>
								<div class="mb">
									<span>
										<i class="o-pc-qq"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["QQ"];?></span>
									<span class="ml xcm card-qq" id="card_qq"></span>
								</div>
								<div class="mb">
									<span>
										<i class="o-pc-birthday"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["Birthday"];?></span>
									<span class="ml xcm card-birthday" id="card_birthday"></span>
								</div>
								<div class="mb">
									<span>
										<i class="o-pc-fax"></i>
									</span>
									<span class="mls xwb"><?php echo $lang["Fax"];?></span>
									<span class="ml xcm card-fax" id="card_fax"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="posr ovh clearfix">
					<?php if (0 < count($datas)) : ?>
						<div class="exist-data">
							<div class="pull-left">
								<?php foreach ($datas as $letter => $users ) : ?>
									<div class="group-item">
										<div class="cl-letter-title fsst" id="target_<?php echo $letter;?>"><?php echo $letter;?></div>
										<table class="table table-hover cl-info-table contact-list" id="contact_list">
											<tbody>
												<?php foreach ($users as $k => $user ) : ?>
													<tr id="cl_tr_<?php echo $user["uid"];?>" data-id="<?php echo $user["uid"];?>" class="contact-list-item" data-preg="<?php echo $user["realname"] . ConvertUtil::getPY($user["realname"]) . ConvertUtil::getPY($user["realname"], true);?>">
														<td width="50">
															<div class="avatar-box">
																<span class="avatar-circle">
																	<img src="<?php echo $user["avatar_middle"];?>">
																</span>
															</div>
														</td>
														<td width="90">
															<span class="xcm pc-name"><?php echo $user["realname"];?></span>
														</td>
														<td width="103">
															<span class="fss"><?php echo $user["posname"];?></span>
														</td>
														<td width="120">
															<span class="fss"><?php echo $user["telephone"];?></span>
														</td>
														<td width="133">
															<span class="fss"><?php echo $user["mobile"];?></span>
														</td>
														<td width="133">
															<div class="w120">
																<span class="fss"><?php echo $user["email"];?></span>
															</div>
														</td>                                               
														<td width="20">
															<i class="<?php if (in_array($user["uid"], $cuids)) : ?>o-mark<?php else : ?>o-nomark<?php endif; ?>" data-id="<?php echo $user["uid"];?>"></i>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								<?php endforeach; ?>
							</div>
							<div class="cl-letter-sidebar" id="cl_letter_sidebar">
								<ul class="letter-list">
									<?php $existLetters = array_keys($datas);?>
									<?php foreach ($allLetters as $theLetter ) : ?>
										<li>
											<?php if (!in_array($theLetter, $existLetters)) : ?>
												<a href="javascript:;" class="cl-letter">
													<span class="inexistence-letter"><?php echo $theLetter;?></span>
												</a>
											<?php else : ?>
												<a href="#<?php echo $theLetter;?>" class="cl-letter letter-mark" id="#link_<?php echo $theLetter;?>" data-id="<?php echo $theLetter;?>">
													<span><?php echo $theLetter;?></span>
												</a>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<div class="inexist-data">
							<div class="no-data-tip">	
						</div>
					</div>
				<?php else : ?>
					<div class="no-data-tip"></div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	Ibos.app.setPageParam({
		"deptid": "<?php echo EnvUtil::getRequest("deptid");?>"
	});
</script>
<script src="<?php echo $assetUrl;?>/js/contactList.js?<?php echo VERHASH;?>"></script>