<?php include('header.php'); ?>
<link rel="stylesheet" href="assets/plugins/prettify/prettify.css">
<script src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/prettify/prettify.js"></script>

<div class="row row-sm pt-4 pb-3 header-sticky-container" style="width: 92%;z-index: 10;">

	<div class="col-lg-11 col-md-11 col-sm-12">
		<div class="visits-intervensions-div row">
			<div class="col-lg-6 tour-switch tour-switch-active">
				Visites
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 tour-switch">
				Interventions
			</div>
		</div>

		<div class="circle-icon ml-4 mt-1">
			<a href="employee-tours-map.php" class="map-btn">
				<img src="assets/img/icons/blue-map-white.png" class="map-img-btn"  onmouseover="this.src='assets/img/icons/white-map-blue.png'" onmouseout="this.src='assets/img/icons/blue-map-white.png'"/>
			</a>
		</div>

		<div class="circle-icon ml-3 mt-1">
			<a href="javascript:void(0)" class="calendar-icon">
				<img src="assets/img/icons/blue-calendar-white.png" />
			</a>
			<div class="tour-calendar-div" style="display:none">
				<div id="calendar"></div>
			</div>
		</div>

		<div class="tour-today ">
			<!-- <a href="javascript:void(0)" class="btn-white-blue" style="padding-top: 5px;">Aujourd'hui</a> -->
			<a href="javascript:void(0)" class="btn-white-blue">Aujourd'hui</a>
		</div>

		<div class="circle-icon ml-3 mt-1">
			<a href="javascript:void(0)" id="tour-id">
				<!--<img src="assets/img/icons/blue-plus-white.png" onmouseover="this.src='assets/img/icons/white-plus-blue.png'" onmouseout="this.src='assets/img/icons/blue-plus-white.png'"  />-->
				<img src="assets/img/icons/blue-plus-white.png" />
			</a>
		</div>

		<div class="tour-gray-icons text-center" style="display:none;">
			<div class="row">
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Valider-modal"  class="tour-gray-text border-0"><img src="assets/img/icons/right-sign.png" style="margin-top: -3px;"> Valider</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Figer-modal" class="tour-gray-text border-0"><img src="assets/img/icons/lock_black.png" style="margin-top: -5px;"> Figer</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Echanger-modal" class="tour-gray-text border-0"><img src="assets/img/icons/arrow-change.png" style="margin-top: -1px;"> Enchanger</button>
				</div>
				<div class="mx-2">
					<button data-toggle="modal" data-target="#Admin_Tournées_Optimiser-modal" class="tour-gray-text border-0"><img src="assets/img/icons/settings.png" style="margin-top: -2px;"> Optimiser</button>
				</div>
				<div class="mx-2">
					<button class="tour-gray-text border-0 hide-tour-gray-icons"><img src="assets/img/icons/refresh.png" style="margin-top: -2px;"> Rafraichir</button>
				</div>
				<!--<div class="col-lg-3 col-sm-8" style="min-width: 80px;">
					<span class="tour-gray-text">Afficher les trajets</span>
				</div>-->
			</div>
		</div>

	</div>

	<div class="col-lg-1">
		<div class="row">
			<a class="btn-white-blue float-right">
				Exporter
			</a>
		</div>
	</div>
</div>

<div class="row row-sm" style="float: left;margin-top: 70px;">
	<!-- <div class="col-lg-10" style="margin-right: -60px;"> -->
	<div class="col-lg-9">

		<span class="tour-gray-text-hour tour-gray-text-hour2 text-right">8:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour3 text-right">10:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour4 text-right">12:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour5 text-right">14:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour6 text-right">16:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour7 text-right">18:00</span>
		<span class="tour-gray-text-hour tour-gray-text-hour8 text-right">20:00</span>
		<span class="tour-green text-right">15:15</span>



		<div class="in-between" style="z-index: 9;">
			<span class="tour-gray-text-hour tour-gray-text-hour1 text-right">6:00</span>

			<div class="tour-num-top-div tour-num-top1 d-flex">
				<span class="tour-num-top text-blue">4</span>
				<span class="ml-3 text-blue font-weight-bold tour-label">Prévisionel</span>
			</div>
			<div class="tour-num-top-div tour-num-top1-green1 d-flex">
				<span class="tour-num-top tour-num-top-green text-white">1</span>
				<span class="ml-3 text-green font-weight-bold tour-label">Succès</span>
			</div>
			<div class="tour-num-top-div tour-num-top1-orange1 d-flex">
				<span class="tour-num-top tour-num-top-orange text-white">1</span>
				<span class="ml-3 text-orange font-weight-bold tour-label">Semi KO</span>
			</div>

			<div class="tour-num-top-div tour-num-top1-red1 d-flex">
				<span class="tour-num-top tour-num-top-red text-white">1</span>
				<span class="ml-3 text-red font-weight-bold tour-label">KO</span>
			</div>

			<div class="tour-num-top-div tour-num-top2 d-flex">
				<span class="tour-num-top text-blue">4</span>
				<span class="ml-3 text-blue font-weight-bold tour-label">Prévisionel</span>
			</div>

			<div class="tour-num-top-div tour-num-top2-green2 d-flex">
				<span class="tour-num-top tour-num-top-green text-white">1</span>
				<span class="ml-3 text-green font-weight-bold tour-label">Succès</span>
			</div>
			<div class="tour-num-top-div tour-num-top2-orange2 d-flex">
				<span class="tour-num-top tour-num-top-orange text-white">1</span>
				<span class="ml-3 text-orange font-weight-bold tour-label">Semi KO</span>
			</div>

			<div class="tour-num-top-div tour-num-top2-red2 d-flex">
				<span class="tour-num-top tour-num-top-red text-white">1</span>
				<span class="ml-3 text-red font-weight-bold tour-label">KO</span>
			</div>

			<div class="tour-num-top-div tour-num-top3 d-flex">
				<span class="tour-num-top text-blue">0</span>
				<span class="ml-3 text-blue font-weight-bold tour-label">Prévisionel</span>
			</div>

			<div class="tour-num-top-div tour-num-top3 d-flex previsionel-cust" style="position: absolute;bottom: 0;">
				<span class="tour-num-top text-blue" style="position: absolute;bottom: 70px; left: -5px;height: 30px;width: 30px;padding: 5px;">300</span>
				<span class="ml-3 text-blue font-weight-bold tour-label" style="position: absolute;bottom: 77px;left: 20px;">Prévisionel</span>
			</div>

		</div>

		<div class="col-white1-col">
			<div class="rounded-corner bg-white col-white1">
				<hr class="tour-gray-hr" />

				<div class="tour-row mt-3">
					<input type="checkbox" name="" class="tour-checkbox-userinput" />
					<div class="sub-tour-row-container">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#technicien-modal">
							<strong class="tour-row-text text-black">Panificateur</strong>
							<strong class="tour-row-text text-blue">80%</strong>
							<div class="circle-chart-div">
								<div class="circle-chart-inner-div">
									<svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
									  <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

									  <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
									  <img src="assets/img/media/profile-img.png" class="tour-image" />
									</svg>
								</div>
								<div class="clear"></div>
							</div>

							<strong class="tour-row-text text-gray">John Doe</strong>
							<strong class="tour-row-text text-blue">
								<img src="assets/img/media/smallhouse.png" class="small-house"> Paris 02
							</strong>
						</a>
					</div>
				</div>
				<div class="tour-row mt-3">
					<input type="checkbox" name="" class="tour-checkbox-userinput" checked />
					<div class="sub-tour-row-container">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#technicien-modal">
							<strong class="tour-row-text text-black">Panificateur</strong>
							<strong class="tour-row-text text-blue">80%</strong>
							<div class="circle-chart-div">
								<div class="circle-chart-inner-div">
									<svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
									  <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

									  <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
									  <img src="assets/img/media/locked.png" class="tour-image" />
									</svg>
								</div>
								<div class="clear"></div>
							</div>

							<strong class="tour-row-text text-gray">John Doe</strong>
							<strong class="tour-row-text text-blue">
								<img src="assets/img/media/smallhouse.png" class="small-house"> Rouen
							</strong>
						</a>
					</div>
				</div>
				<div class="tour-row mt-3 tour-disabled-bg-user">
					<input type="checkbox" name="" class="tour-checkbox-userinput" disabled />
					<div class="sub-tour-row-container">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#technicien-modal">
							<strong class="tour-row-text text-black">Panificateur</strong>
							<strong class="tour-row-text text-blue">80%</strong>
							<div class="circle-chart-div">
								<div class="circle-chart-inner-div">
									<svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862" width="50" height="50" xmlns="http://www.w3.org/2000/svg">
									  <circle class="circle-chart__background" stroke="#009cde" stroke-width="2" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />

									  <circle class="circle-chart__circle" stroke="#FFF" stroke-width="2" stroke-dasharray="20,100" stroke-linecap="round" fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
									  <img src="assets/img/media/profile-img.png" class="tour-image" />
									</svg>
								</div>
								<div class="clear"></div>
							</div>

							<strong class="tour-row-text text-gray">John Doe</strong>
							<strong class="tour-row-text text-blue">
								<img src="assets/img/media/smallhouse.png" class="small-house"> Paris 02
							</strong>
						</a>
					</div>
				</div>
			</div>

		</div>

		<div class="col-white7-col">
			<div class="rounded-corner bg-white col-white7">
				<hr class="tour-gray-hr" />

				<div class="tour-right-row-div">
					<div class="green-vl"></div>
					<div class="bg-blue-slanted"></div>

					<div class="tour-right-row  blue-border">
						<img src="assets/img/media/tournees-icon.png" style="position: absolute;bottom: -10px;left: 2.5vw;z-index: 9;">
						<div class="tour-box">
							&nbsp;
						</div>

						<div class="tour-box">
							<div class="tour-box-blue tour-box-half tour-col-1">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-blue">08:00 09:00</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-blue tour-box-half tour-col-1">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-blue">10:00 11:00</p>
									</div>
								</div>
							</div>
						</div>


						<div class="tour-box">
							<div class="tour-box-blue tour-box-full tour-col-1">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-blue">12:00 14:00</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-full">
								&nbsp;
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-full tour-box-gray tour-col-2">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MAREL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #f1f1f1;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show">16:00 18:00</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="tour-right-row">

						<div class="tour-box">
							<div class="tour-box-red tour-box-half tour-col-9">
								<img src="assets/img/icons/bell.png">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-red"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle text-red">G3</span>
									<span class="tour-left-white-circle text-red">P</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-red font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #ed0423 !important;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #ed0423 !important;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #ffe6ea;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-red"><i class="fas fa-minus-circle mb-1"></i>07:48 09:05</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-orange tour-box-half tour-col-9">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-orange"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle text-orange">G3</span>
									<span class="tour-left-white-circle text-orange">P</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-orange">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #ffede1;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-orange"><i class="fas fa-check-circle mb-1"></i>10:10 10:55</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-green tour-box-half tour-col-9">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-green"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle text-green">G3</span>
									<span class="tour-left-white-circle text-green">P</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-green">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #cdf1e5;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-green"><img src="assets/img/circle-check.png" class="mb-1">12:28 13:55</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="tour-right-row  blue-border">
						<img src="assets/img/media/tournees-icon.png" style="position: absolute;bottom: -10px;left: 10.5vw;z-index: 9;">

						<div class="tour-box">
							&nbsp;
						</div>

						<div class="tour-box">
							&nbsp;
						</div>

						<div class="tour-box">
							<div class="tour-box-blue tour-box-half">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-blue">10:00 11:00</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box-blue tour-box-full">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #C9EFFF;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-blue">12:00 14:00</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							<div class="tour-box">
								<div class="tour-box-white-row mt-2">
									<strong class="tour-left-row-text text-black float-left w100"> FORMATION</strong>
									<span class="text-blue text-bold float-left w100">15:00 - 17:00</span>

								</div>
							</div>
						</div>


						<div class="tour-box">
							<div class="tour-box-gray tour-box-half tour-col-11">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-blue"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle">G3</span>
									<span class="tour-left-white-circle">P</span>
									<span class="tour-left-white-circle text-blue">1</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 text-blue font-weight-bold d-inline-block float-left p-2">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #f1f1f1;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show">08:00 09:00</p>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="tour-right-row">

						<div class="tour-box">
							&nbsp;
						</div>

						<div class="tour-box">
							<div class="tour-box-green tour-box-half tour-col-7">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-green"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle text-green">G3</span>
									<span class="tour-left-white-circle text-green">P</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-green">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #2fc495 !important;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #cdf1e5;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-green"><img src="assets/img/circle-check.png" class="mb-1">12:25 13:55</p>
									</div>
								</div>
							</div>
						</div>

						<div class="tour-box">
							&nbsp;
						</div>

						<div class="tour-box">
							<div class="tour-box-orange tour-box-full tour-col-2">
								<strong class="tour-left-row-text text-black"> DURANT</strong>
								<strong class="tour-left-row-text text-orange"> LIEU</strong>
								<div class="tour-circle-icons-div">
									<span class="tour-left-white-circle text-orange">G3</span>
									<span class="tour-left-white-circle text-orange">P</span>
								</div>
							</div>
							<div class="notificationPopUp">
								<div class=" card-body p-0" style="">
									<div class="w-75" style="background: #fff;border-radius: 10px 0 0 10px !important;padding: 10px;">
										<h6>MARCEL DURANT</h6>
										<p class="tx-10 mb-1" style="color: #7F7F7F">PDL 1256458665</p>
										<p style="color:  #7F7F7F">TYPE INTERVENTION</p>
										<p class="tx-12 mb-1 font-weight-bold d-inline-block float-left p-2 text-orange">LIEU</p>
										<div class="d-flex float-right">
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">G3</span>
											</a>
											<a class="nav-link icon" href="">
												<span class="blue-bg" style="border-radius: 50%;padding: 4px 7px;color: #fff;font-weight: 600;background-color: #ffab73 !important;">p</span>
											</a>
										</div>
									</div>
									<div class="w-25" style="background: #ffede1;padding: 10px;border-radius: 0 10px 10px 0;position: relative;">
										<p class="time-show text-orange"><i class="fas fa-check-circle mb-1"></i>10:10 10:55</p>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="tour-right-row tour-disabled-bg">

						<div class="tour-box">
							&nbsp;
						</div>


					</div>
				</div>

                <div class="text-right float-right" style="position:absolute;bottom:20px;right:20px">
                	<span class="bottom-small-text green-text">Succés </span><span class="bottom-circle bottom-green-circle-count">100</span>
                	<span class="bottom-small-text orange-text">Semi KO </span><span class="bottom-circle bottom-orange-circle-count">100</span>
                	<span class="bottom-small-text red-text">KO </span><span class="bottom-circle bottom-green-red-count">100</span>
                </div>

			</div>

		</div>


	</div>

	<!-- <div class="col-lg-2 col-md-2 col-sm-4" style="min-width: 21%;margin-top: 13px;"> -->
	<div class="col-lg-3" style="margin-top: 13px;">

		<div class="col-white12-col">
			<div class="rounded-corner bg-white col-white12">
				<nav>
                    <div class="nav nav-tabs tour-navs" id="nav-tour-details-tab" role="tablist">
                        <a class="nav-item nav-link w-50 active" id="nav-non-affectes-tab" data-toggle="tab" href="#nav-non-affectes" role="tab" aria-controls="nav-tour" aria-selected="true">
                            <span class="tab-icon icon-chead"></span><span class="tab-label">Non affectés</span>
                        </a>
                        <a class="nav-item nav-link w-50" id="nav-collaborateurs-tab" data-toggle="tab" href="#nav-collaborateurs" role="tab" aria-controls="nav-collaborateurs" aria-selected="true">
                            <span class="tab-icon icon-vente"></span><span class="tab-label">Collaborateurs</span>
                        </a>
                    </div>
                </nav>
                <div class="tab-content tour-right-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-non-affectes" role="tabpanel" aria-labelledby="nav-non-affectes-tab">
                        <?php include('employee-tour/non-affectes.php'); ?>
                    </div>
                    <div class="tab-pane fade" id="nav-collaborateurs" role="tabpanel" aria-labelledby="nav-collaborateurs-tab">
                        <?php include('employee-tour/collaborateurs.php'); ?>
                    </div>
                </div>
			</div>
		</div>

	</div>
</div>

<div class="modal fullmodal fade technicien-modal" id="technicien-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal
	" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
						&nbsp;
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 bg-lightgray py-2 px-2 tour-employee-modal-right">
						<div class="tour-employee-modal-arrow">
							<a href="javascript:void(0)"><img src="assets/img/icons/gray-left-arrow.png" class="tour-employee-left-arrow" data-dismiss="modal"></a>
						</div>
						<div class="row">
							<div class="col-lg-11 col-md-11 col-sm-12 p-0">
								<div class="card-body px-0 pt-0 pb-3" >
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="">
												<span class="tour-name-title mr-4">John Doe</span>
												<span class="tour-name-email mt-1">johndoe@gmail.com</span>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 m-auto" style="">
											<div>
												<span class="tour-switch-modal">
													<label class="switch mb-0">
														<input type="checkbox" checked="">
														<span class="cslider round"></span>
													</label>
												</span>
												<span class="tour-modal-button">
													<a href="javascript:void(0)" class="btn-editer" data-toggle="modal" data-target="#add-technician-modal">Editer la fiche</a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-11 col-md-11 col-sm-12 tour-modal-details-row">
								<span class="tour-modal-label mb-2">Addresse</span>
								<span class="tour-modal-normal-text">56 avenue victor wallart 17000 La Rochelle</span>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-lg-11 col-md-11 col-sm-12">
								<div class="row">
									<div class="col-xs-12 col-sm-4 tour-modal-fields-row-div">
										<div class="bg-white rounded-corner tour-modal-fields-row">
											<span class="tour-modal-label mb-2">N° téléphone</span>
											<span class="tour-modal-normal-text">+33 0000000</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4  tour-modal-fields-row-div">
										<div class="bg-white rounded-corner tour-modal-fields-row">
											<span class="tour-modal-label mb-2">NNI</span>
											<span class="tour-modal-normal-text">PCA510AIM</span>
										</div>
									</div>
									<div class="col-xs-12 col-sm-4 tour-modal-fields-row-div " style="margin-right:0 !important">
										<div class="bg-white rounded-corner tour-modal-fields-row mr-0">
											<span class="tour-modal-label mb-2">Planificateur</span>
											<span class="tour-modal-normal-text">Arnaud Durand</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row pt-3">
							<div class="col-lg-12 col-sm-12 p-0 pr-5">
								<div class="tour-modal-tabs">
									<nav>
										<div class="nav nav-tabs tour-navs" id="nav-tour-modal-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-perimetre-tab" data-toggle="tab" href="#nav-perimetre" role="tab" aria-controls="nav-tour" aria-selected="true">
											<span class="tab-label">Pèrimètre de travail</span>
											</a>
											<a class="nav-item nav-link" id="nav-absences-tab" data-toggle="tab" href="#nav-absences" role="tab" aria-controls="nav-absences" aria-selected="true">
											<span class="tab-label">Liste des absences</span>
											</a>
											<a class="nav-item nav-link" id="nav-notifications-tab" data-toggle="tab" href="#nav-notifications" role="tab" aria-controls="nav-notifications" aria-selected="true">
											<span class="tab-label">Notifications</span>
											</a>
										</div>
									</nav>
									<div class="tab-content tour-right-content bg-white" id="nav-tabContent" style="border-radius: 0 10px 10px 10px;">
										<div class="tab-pane fade show active" id="nav-perimetre" role="tabpanel" aria-labelledby="nav-perimetre-tab">
											<?php include('employee-tour/perimetre.php'); ?>
										</div>
										<div class="tab-pane fade" id="nav-absences" role="tabpanel" aria-labelledby="nav-absences-tab">
											<?php include('employee-tour/absences.php'); ?>
										</div>
										<div class="tab-pane fade" id="nav-notifications" role="tabpanel" aria-labelledby="nav-notifications-tab">
											<?php include('employee-tour/notifications.php'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade view-formation-modal" id="view-formation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" style="width: 600px;">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UNE FORMATION</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-absence-modal" style="right: 16%;">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Enregistrer</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row pr-5">
					<div class="col-lg-10 col-sm-10">
						<div class="form-group">
							<label>Nom de la formation</label>
							<p class="lightgray-font-color">LOREMPSUS</p>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 pr-2">
						<div class="form-group">
							<label>Date d'obtention</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
								<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 pl-2">
						<div class="form-group">
							<label>Date de fin d'habilitation</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
								<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<div class="form-group">
							<label>Ajouter des justificatifs</label>
							<div class="row">
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/document-thumbnail.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 3%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%;">
										</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/document-thumbnail.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 3%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%;">
										</p>
									</div>
								</div>
								<div class="col-lg-3 col-sm-3 pr-2">
									<div class="form-group">
										<div class="upload-bx lightgray-upload-bx">
											<i class="fa fa-plus fa-2x"></i>
										</div>
										<input type="file" name="" class="hide-file-input">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<p class="mt-3 text-bold"><a href="javascript:void(0);" class="text-blue"><img src="assets/img/icons/delete.png"> Supprimer la formation</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade absence-modal" id="absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">AJOUTER UNE ABSENCE</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Ajouter</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-absence-modal">Ajouter</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4 pl-3">
						<div class="form-group">
							<label>Motif</label>
							<select class="form-control">
								<option>CONGÉS PAYÉS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Début</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Fin</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" rows="12" placeholder="Texte..."></textarea>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group fill-background-checkbox-container" style="position: relative;">
							<input type="checkbox" class="form-control" style="display: inline-block;" checked>
							<label style="margin-top: 0px; position: absolute; margin-left: 5px;">Répéter</label>
							<select class="form-control">
								<option>PAR SEMAINE</option>
							</select>
						</div>
						<div class="form-group">
							<label>Notifier à:</label>
							<div class="search-container">
								<i class="fa" aria-hidden="true">
									<img src="assets/img/icons/search-blue.png">
								</i>
								<input type="text" name="" class="form-control" placeholder="Recherche collaborateurs...">
							</div>
							<div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
								<div class="min-height-scroll-table-container">
									<div class="card-body p-0 px-2">
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Ajouter des photos</label>
							<div class="min-height-scroll-container pt-2 pb-2 pr-2">
								<div class="min-height-scroll pt-0">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group mb-0">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade ecarts-modal" id="ecarts-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">AJOUTER UN ECART</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue" data-toggle="modal" data-target="#employee-confirmation-ecart-modal">Ajouter</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">
					<img src="assets/img/icons/Exit_1.png">
				</a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0" data-toggle="modal" data-target="#employee-confirmation-ecart-modal">
				Ajouter
				</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4 pl-3">
						<div class="form-group">
							<label>Motif</label>
							<select class="form-control">
								<option>CONGÉS PAYÉS</option>
							</select>
						</div>
						<div class="form-group">
							<label>Début</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Fin</label>
							<div class="row">
								<div class="col-lg-7 col-sm-7">
									<div class="datepicker-container">
										<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
										<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
									</div>
								</div>
								<div class="col-lg-5 col-sm-5">
									<select class="form-control">
										<option>10:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" rows="12" placeholder="Texte..."></textarea>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group" style="position: relative;">
							<input type="checkbox" class="form-control" style="display: inline-block;">
							<label style="margin-top: 0px; position: absolute; margin-left: 5px;">Répéter</label>
							<select class="form-control">
								<option>PAR SEMAINE</option>
							</select>
						</div>
						<div class="form-group">
							<label>Notifier à:</label>
							<div class="search-container">
								<i class="fa" aria-hidden="true">
									<img src="assets/img/icons/search-orange.png">
								</i>
								<input type="text" name="" class="form-control" placeholder="Recherche collaborateurs...">
							</div>
							<div class="pt-2 pb-2 pr-2 mt-1" style="border: 1px solid #e5e5e5;border-radius: 10px;">
								<div class="min-height-scroll-table-container">
									<div class="card-body p-0 px-2">
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
										<label class="ckbox my-2 active"><input type="checkbox" checked><span>Nom Prénom</span></label>
										<label class="ckbox my-2"><input type="checkbox"><span>Nom Prénom</span></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Ajouter des photos</label>
							<div class="min-height-scroll-container pt-2 pb-2 pr-2">
								<div class="min-height-scroll pt-0">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group mb-0">
												<div class="upload-bx lightgray-upload-bx">
													<i class="fa fa-plus fa-3x"></i>
												</div>
												<input type="file" name="" class="hide-file-input">
											</div>
										</div>
										<div class="col-lg-7 col-sm-7">
											<div class="form-group mt-3">
												<label>Nom</label>
												<input type="text" class="form-control" placeholder="NOM PHOTO">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade edit-absence-modal" id="edit-absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UNE ABSENCE</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png"></a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0">Enregistrer</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body pl-0 pr-0">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="another-nav-container">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="absence-informations-tab" data-toggle="tab" href="#absence-informations" role="tab" aria-controls="absence-informations" aria-selected="true">Informations</a>
									<a class="nav-item nav-link" id="absence-piece-joints-tab" data-toggle="tab" href="#absence-piece-joints" role="tab" aria-controls="absence-piece-joints" aria-selected="false">Piéce jointes</a>
								</div>
							</nav>
							<div class="tab-content pt-4 pl-4 pr-4">
								<div class="tab-pane fade show active" id="absence-informations" role="tabpanel" aria-labelledby="absence-informations-tab">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<label>Motif</label>
												<input type="text" name="" class="form-control" value="CONGÉS PAYÉS">
											</div>
											<div class="form-group">
												<label>Début</label>
												<div class="row">
													<div class="col-lg-6 col-sm-6">
														<div class="datepicker-container">
															<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
															<input class="form-control bar-from" type="text" placeholder="01/10/2021" />
														</div>
													</div>
													<div class="col-lg-4 col-sm-4 pl-0">
														<select class="form-control">
															<option>07:00</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Notifier à:</label>
												<div class="autofill-container">
													<input type="text" name="" class="form-control">
													<div class="autofill-span-container">
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Fin</label>
												<div class="row">
													<div class="col-lg-9 col-sm-9">
														<div class="row">
															<div class="col-lg-6 col-sm-6">
																<div class="datepicker-container">
																	<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																	<input class="form-control bar-from" type="text" placeholder="31/10/2021" />
																</div>
															</div>
															<div class="col-lg-4 col-sm-4 pl-0">
																<select class="form-control">
																	<option>18:00</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" rows="7" placeholder="Texte...">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="absence-piece-joints" role="tabpanel" aria-labelledby="absence-piece-joints-tab">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label class="mb-4">Ajouter des justificatifs</label>
												<div class="row">
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -21%;">
																<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -7%; width: 23%; margin-top: 2%;">
																<img src="assets/img/icons/Exit_1.png" style="width: 20%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -21%;">
																<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -7%; width: 23%; margin-top: 2%;">
																<img src="assets/img/icons/Exit_1.png" style="width: 20%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">
															<div class="upload-bx lightgray-upload-bx">
																<i class="fa fa-plus fa-3x"></i>
															</div>
															<input type="file" name="" class="hide-file-input">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade edit-ecart-modal" id="edit-ecart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">EDITER UN ECART</h5>
				<a href="javascript:void(0)" class="btn btn-lightblue">Enregistrer</a>
				<a class="modal-close" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png"></a>
				<!--<a href="javascript:void(0);" class="btn-blue-white float-right mt-0"></a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body pl-0 pr-0">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<div class="another-nav-container">
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="ecart-informations-tab" data-toggle="tab" href="#ecart-informations" role="tab" aria-controls="ecart-informations" aria-selected="true">Informations</a>
									<a class="nav-item nav-link" id="ecart-piece-joints-tab" data-toggle="tab" href="#ecart-piece-joints" role="tab" aria-controls="ecart-piece-joints" aria-selected="false">Piéce jointes</a>
								</div>
							</nav>
							<div class="tab-content pt-4 pl-4 pr-4">
								<div class="tab-pane fade show active" id="ecart-informations" role="tabpanel" aria-labelledby="ecart-informations-tab">
									<div class="row">
										<div class="col-lg-5 col-sm-5">
											<div class="form-group">
												<label>Motif</label>
												<input type="text" name="" class="form-control" value="CONGÉS PAYÉS">
											</div>
											<div class="form-group">
												<label>Début</label>
												<div class="row">
													<div class="col-lg-6 col-sm-6">
														<div class="datepicker-container">
															<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
															<input class="form-control bar-from" type="text" placeholder="01/10/2021" />
														</div>
													</div>
													<div class="col-lg-4 col-sm-4 pl-0">
														<select class="form-control">
															<option>07:00</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Notifier à:</label>
												<div class="autofill-container">
													<input type="text" name="" class="form-control">
													<div class="autofill-span-container">
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
														<span>
														Nom Prénom
														</span>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Fin</label>
												<div class="row">
													<div class="col-lg-9 col-sm-9">
														<div class="row">
															<div class="col-lg-6 col-sm-6">
																<div class="datepicker-container">
																	<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																	<input class="form-control bar-from" type="text" placeholder="31/10/2021" />
																</div>
															</div>
															<div class="col-lg-4 col-sm-4 pl-0">
																<select class="form-control">
																	<option>18:00</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" rows="7" placeholder="Texte...">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="ecart-piece-joints" role="tabpanel" aria-labelledby="ecart-piece-joints-tab">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label class="mb-4">Ajouter des justificatifs</label>
												<div class="row">
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -22%;">
																<img src="assets/img/icons/eye-round-orange.png" style="margin-right: -7%; width: 25%; margin-top: 2%;">
																<img src="assets/img/icons/exit-orange.png" style="width: 24%;">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group box-with-icon">
															<div class="upload-bx view-color">
																<i>
																<img src="assets/img/document-thumbnail.png">
																</i>
															</div>
															<p class="text-center view-color" style="bottom: -22%;">
																<img src="assets/img/icons/eye-round-orange.png" style="margin-right: -7%; width: 25%; margin-top: 2%;">
																<img src="assets/img/icons/exit-orange.png" style="width: 24%">
															</p>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" placeholder="NOM PHOTO">
														</div>
													</div>
													<div class="col-lg-3 col-sm-3">
														<div class="form-group">
															<div class="upload-bx lightgray-upload-bx">
																<i class="fa fa-plus fa-3x"></i>
															</div>
															<input type="file" name="" class="hide-file-input">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade view-dotation-modal" id="view-dotation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h5 class="modal-title">VOIR UNE DOTATION</h5>
				<a class="modal-close text-right" style="float:right;margin-top: -6px;" data-dismiss="modal" aria-label="Close" href="javascript:void(0)"><img src="assets/img/icons/Exit_1.png" style="width: 75%;"></a>
				<!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>-->
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4 col-sm-4">
						<div class="form-group">
							<label>Nom de matériel</label>
							<p class="lightgray-font-color">LOREMPSUS</p>
						</div>
					</div>
					<div class="col-lg-5 col-sm-5">
						<div class="form-group">
							<label>Date de fin d'habilitation</label>
							<div class="datepicker-container">
								<i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
								<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
							</div>
						</div>
					</div>
					<div class="col-lg-11 col-sm-11">
						<div class="form-group">
							<label>Photos</label>
							<div class="row">
								<div class="col-lg-4 col-sm-4">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/Dotation_image2.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 1%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%; margin-top: -2px;">
										</p>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="NOM PHOTO">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="form-group box-with-icon">
										<div class="upload-bx view-color">
											<i>
											<img src="assets/img/Dotation_image2.png">
											</i>
										</div>
										<p class="text-center view-color" style="bottom: -32%;">
											<img src="assets/img/icons/eye-round-blue.png" style="margin-right: -10%; width: 35%; margin-top: 1%;">
											<img src="assets/img/icons/Exit_1.png" style="width: 30%; margin-top: -2px;">
										</p>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="NOM PHOTO">
									</div>
								</div>
								<div class="col-lg-4 col-sm-4">
									<div class="form-group">
										<div class="upload-bx lightgray-upload-bx">
											<i class="fa fa-plus fa-3x"></i>
										</div>
										<input type="file" name="" class="hide-file-input">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
						<!--<button class="btn btn-lightblue btn-lightgreen" type="submit">OK</button>-->
						<p class="mt-3 text-bold"><a href="javascript:void(0);" class="text-blue"><img src="assets/img/icons/delete.png"> Supprimer la formation</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade employee-confirmation-absence-modal" id="employee-confirmation-absence-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="assets/img/employee-confirmation-profile.png">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold">Absence ajoutée !</p>
						<p>Les informations de John Doe ont bien été enregistrées.</p>
						<button class="btn btn-lightblue" type="submit">OK</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade employee-confirmation-ecart-modal" id="employee-confirmation-ecart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<p class="employee-confirmation-profile-container">
							<img src="assets/img/employee-confirmation-profile.png">
							<i class="fa fa-check fa-3x" aria-hidden="true"></i>
						</p>
						<p class="tx-16 black-text font-weight-bold">Ecart ajouté !</p>
						<p>Ecart du 00/00/00 au 00/00/00 a bien été ajouté</p>
						<button class="btn btn-lightblue" type="submit">OK</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade add-technician-modal" id="add-technician-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<ul class="nav nav-tabs text-center" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">Général</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="personal-date-tab" data-toggle="tab" href="#personal-data" role="tab" aria-controls="personal-data" aria-selected="false">Données personelles</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Formations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="endowment-tab" data-toggle="tab" href="#endowment" role="tab" aria-controls="endowment" aria-selected="true">Dotation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="statistics-tab" data-toggle="tab" href="#statistics" role="tab" aria-controls="statistics" aria-selected="false">Statistiques</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="absences-and-deviations-tab" data-toggle="tab" href="#absences-and-deviations" role="tab" aria-controls="absences-and-deviations" aria-selected="true">Absences &amp; Ecarts</a>
					</li>
					<li class="nav-item mr-0" style="width: 184px;">
						<a class="nav-link" id="contract-tab" data-toggle="tab" href="#contract" role="tab" aria-controls="contract" aria-selected="false">Contrat</a>
					</li>
				</ul>
			</div>
			<div class="modal-body">
				<div class="tab-content">
					<div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
						<div class="row min-height-scroll">
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<div class="row general-tab-profile-image-container">
										<div class="col-lg-8 col-sm-8">
											<div class="form-group box-with-icon">
												<img src="assets/img/employee-confirmation-profile.png">
												<p class="text-center view-color" style="bottom: -21%">
													<a href="javascript:void(0);"><img src="assets/img/icons/edit-pen.png" style="width: 59px; margin-right: -5%; margin-top: 4px;height: 59px;"></a>
													<a href="javascript:void(0);"><img src="assets/img/icons/Exit_1.png" style="width: 50px; height: 50px;"></a>
												</p>
											</div>
										</div>
									</div>
									<div class="upload-bx view-color">
										<p>Télécharger une photo</p>
										<i>
										<img src="assets/img/icons/file-upload.png">
										</i>
									</div>
									<input type="file" name="" class="hide-file-input">
								</div>
								<div class="form-group">
									<label>Nom</label>
									<input type="text" name="" class="form-control" placeholder="LASTNAME">
								</div>
								<div class="form-group">
									<label>Prénom</label>
									<input type="text" name="" class="form-control" placeholder="FIRSTNAME">
								</div>
								<div class="form-group">
									<label>Login</label>
									<input type="text" name="" class="form-control" placeholder="LOGIN">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="" class="form-control" placeholder="xxxxxxxxxxxx@xxxxxxxx.xx">
								</div>
								<div class="form-group">
									<label>Mot de passe</label>
									<input type="password" name="" class="form-control" placeholder="Mot de passe" value="placeholder">
								</div>
								<div class="form-group">
									<label>Confirmer mot de passe</label>
									<input type="password" name="" class="form-control" placeholder="Confirmer mot de passe" value="placeholder">
								</div>
								<div class="form-group">
									<label>Adresse</label>
									<input type="text" name="" class="form-control" placeholder="RUE1">
								</div>
								<div class="form-group">
									<label>Complément d'adresse</label>
									<input type="text" name="" class="form-control" placeholder="LOREM">
								</div>
								<div class="row">
									<div class="col-lg-5 col-sm-5">
										<div class="form-group">
											<label>Code postal</label>
											<input type="text" name="" class="form-control" placeholder="000000">
										</div>
									</div>
									<div class="col-lg-7 col-sm-7">
										<div class="form-group">
											<label>Ville</label>
											<select class="form-control">
												<option>Ville</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="row">
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<label>Téléphone</label>
											<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
										</div>
									</div>
									<div class="col-lg-6 col-sm-6">
										<div class="form-group">
											<label>Portable</label>
											<input type="text" name="" class="form-control" placeholder="00 00 00 00 00">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Numéro de sécurilé sociale</label>
									<input type="text" name="" class="form-control" placeholder="00000000">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 mt-2">
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="personal-data" role="tabpanel" aria-labelledby="personal-date-tab">
						<div class="row min-height-scroll">
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 mt-2">
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="training" role="tabpanel" aria-labelledby="training-tab">
						<div class="row">
							<div class="col-lg-7 col-sm-7">
								<div class="table-responsive box-shadow-border-radius">
									<table class="table table-striped clientDataTable w-100" id="clientDataTable" style="width:100%">
										<thead>
											<tr>
												<th class="wd-10p"></th>
												<th class="wd-15p">Formation</th>
												<th class="wd-15p">Documents</th>
												<th class="wd-25p">Date d'obtention</th>
												<th class="wd-15p">Date de fin</th>
												<th class="wd-15p">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/bell.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/bell.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="javascript:void(0);"><img src="assets/img/icons/right-green.png"></a>
												</td>
												<td>FORMATION</td>
												<td>5</td>
												<td>00/00/0000</td>
												<td class="red-font-color">00/00/0000</td>
												<td>
													<a href="javascript:void(0)" data-toggle="modal" class="viewEditorFormationBtn">
													<span class="view-color">
													<i class="fa fa-eye mr-1"></i>Voir
													</span>
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-lg-5 col-sm-5">
								<strong class="black-text font-weight-bold">Ajouter une formation</strong>
								<br />
								<br />
								<div class="box-shadow-border-radius login-input">
									<div class="row">
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label>Nom de la formation</label>
												<select class="form-control">
													<option>LOREMPSUS</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Date d'obtention</label>
												<div class="datepicker-container">
													<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
													<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<label>Date de fin d'habilitation</label>
												<div class="datepicker-container">
													<i class="date-icon date-icon2 float-left" aria-hidden="true"></i>
													<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-sm-12">
											<div class="form-group">
												<label>Justificatifs</label>
												<div class="min-height-scroll">
													<div class="pr-3">
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4 col-sm-4">
																<div class="form-group mb-0">
																	<div class="upload-bx lightgray-upload-bx">
																		<i class="fa fa-plus fa-2x"></i>
																	</div>
																	<input type="file" name="" class="hide-file-input">
																</div>
															</div>
															<div class="col-lg-8 col-sm-8">
																<div class="form-group mt-4">
																	<label>Nom</label>
																	<input type="text" class="form-control" placeholder="NOM PHOTO">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12" style="margin-top: -40px;">
								<button class="btn btn-lightblue float-right mr-5 enregistrerBtn" type="submit">Enregistrer</button>
								<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la formation</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="endowment" role="tabpanel" aria-labelledby="endowment-tab">
						<div class="row">
							<div class="col-lg-7 col-sm-7">
								<div class="box-shadow-border-radius another-nav-container">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-equipment-tab" data-toggle="tab" href="#nav-equipment" role="tab" aria-controls="nav-equipment" aria-selected="true">Matériel</a>
											<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Informatique</a>
											<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Véhicule</a>
										</div>
										<button class="btn btn-lightblue float-right border-radiu-30" type="submit">Exporter PDF</button>
									</nav>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="nav-equipment" role="tabpanel" aria-labelledby="nav-equipment-tab">
											<div class="table-responsive">
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Date</th>
															<th class="wd-15p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-10p"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<input type="checkbox" checked />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
											<div class="table-responsive">
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Date</th>
															<th class="wd-15p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-10p"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<input type="checkbox" checked />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
											<div class="table-responsive">
												<table class="table table-striped w-100" id="clientDataTable" style="width:100%">
													<thead>
														<tr>
															<th class="wd-10p"></th>
															<th class="wd-15p">Nom</th>
															<th class="wd-15p">Modele</th>
															<th class="wd-15p">Date</th>
															<th class="wd-10p">Photos</th>
															<th class="wd-15p">Actions</th>
															<th class="wd-15p"></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<input type="checkbox" checked />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
														<tr>
															<td>
																<input type="checkbox" />
															</td>
															<td>Modele</td>
															<td>MATRIEL</td>
															<td>00/00/0000</td>
															<td>5</td>
															<td>Supprimer</td>
															<td>
																<a href="javascript:void(0)" data-toggle="modal" data-target="#view-dotation-modal">
																<span class="view-color">
																<i class="fa fa-eye mr-1"></i>Voir
																</span>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-sm-5">
								<strong class="black-text font-weight-bold">Ajouter une dotation</strong>
								<br />
								<br />
								<div class="box-shadow-border-radius login-input pb-4">
									<div class="row">
										<!--<div class="min-height-scroll">-->
										<div class="col-lg-12 col-sm-12 mb-3">
											<div class="form-group">
												<label>Type de dotation</label>
												<div class="row mt-2 pt-2 endowment-type-container">
													<div class="col-lg-4 col-sm-4">
														<label class="radio-inline">
														<input type="radio" name="dotation-type" value="material" checked> Matériel
														</label>
													</div>
													<div class="col-lg-4 col-sm-4">
														<label class="radio-inline">
														<input type="radio" name="dotation-type" value="information"> Informatique
														</label>
													</div>
													<div class="col-lg-4 col-sm-4">
														<label class="radio-inline">
														<input type="radio" name="dotation-type" value="vehicle"> Véhicule
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="material-container">
											<div class="col-lg-12 col-sm-12">
												<div class="row">
													<div class="col-lg-5 col-sm-5">
														<div class="form-group">
															<label>Nom du matériel</label>
															<select class="form-control">
																<option>lorempsus</option>
															</select>
														</div>
														<div class="form-group">
															<label>Date d'obtention</label>
															<div class="datepicker-container">
																<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
															</div>
														</div>
														<div class="form-group">
															<label>Lorempsus</label>
															<input class="form-control" type="text" placeholder="Lorempsus" />
														</div>
														<div class="form-group">
															<label>Lorempsus</label>
															<input class="form-control" type="text" placeholder="Lorempsus" />
														</div>
													</div>
													<div class="col-lg-7 col-sm-7">
														<div class="form-group">
															<label>Ajouter des photos</label>
															<div class="min-height-scroll">
																<div class="pr-3">
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group mb-0">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="information-container" style="display: none;">
											<div class="col-lg-12 col-sm-12">
												<div class="row">
													<div class="col-lg-5 col-sm-5">
														<div class="form-group">
															<label>Nom du matériel informatique</label>
															<select class="form-control">
																<option>lorempsus</option>
															</select>
														</div>
														<div class="form-group">
															<label>Date d'obtention</label>
															<div class="datepicker-container">
																<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
															</div>
														</div>
														<div class="form-group">
															<label>Lorempsus</label>
															<input class="form-control" type="text" placeholder="Lorempsus" />
														</div>
														<div class="form-group">
															<label>Lorempsus</label>
															<input class="form-control" type="text" placeholder="Lorempsus" />
														</div>
													</div>
													<div class="col-lg-7 col-sm-7">
														<div class="form-group">
															<label>Ajouter des photos</label>
															<div class="min-height-scroll">
																<div class="pr-3">
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-sm-4 pr-0">
																			<div class="form-group mb-0">
																				<div class="upload-bx lightgray-upload-bx">
																					<i class="fa fa-plus fa-2x"></i>
																				</div>
																				<input type="file" name="" class="hide-file-input">
																			</div>
																		</div>
																		<div class="col-lg-8 col-sm-8">
																			<div class="form-group">
																				<label>Nom</label>
																				<input type="text" class="form-control" placeholder="NOM PHOTO">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="vehicle-container min-height-scroll" style="display: none;">
											<div class="col-lg-12 col-sm-12">
												<div class="row">
													<div class="col-lg-6 col-sm-6">
														<div class="form-group">
															<label>Type du véhicule</label>
															<select class="form-control">
																<option>Camion</option>
															</select>
														</div>
														<div class="form-group">
															<label>Date d'obtention</label>
															<div class="datepicker-container">
																<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
															</div>
														</div>
														<div class="form-group">
															<label>Plaque d'immatriculation</label>
															<div class="datepicker-container">
																<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
																<input class="form-control bar-to" type="text" placeholder="00/00/0000" />
															</div>
														</div>
														<div class="form-group">
															<label>Médele du véhicule</label>
															<input class="form-control" type="text" placeholder="Médele" />
														</div>
													</div>
													<div class="col-lg-6 col-sm-6">
														<img src="assets/img/vehicle.png">
													</div>
												</div>
											</div>
											<div class="col-lg-12 col-sm-12">
												<div class="form-group">
													<label>Ajouter des photos</label>
													<!--<div class="min-height-scroll">
														<div class="pr-3">-->
													<div class="row">
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
														<div class="col-lg-2 col-sm-2 pr-0">
															<div class="form-group">
																<div class="upload-bx lightgray-upload-bx">
																	<i class="fa fa-plus fa-2x"></i>
																</div>
																<input type="file" name="" class="hide-file-input">
															</div>
														</div>
														<div class="col-lg-4 col-sm-4">
															<div class="form-group">
																<label>Nom</label>
																<input type="text" class="form-control" placeholder="NOM PHOTO">
															</div>
														</div>
													</div>
												</div>
												<!--</div>
													</div>-->
											</div>
										</div>
										<!--</div>-->
										<!--<div class="col-lg-12 col-sm-12 mt-2 text-center">
											<button class="btn btn-lightblue btn-lightgreen" type="submit">Ajouter</button>
											</div>-->
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12" style="margin-top: -25px;">
								<button class="btn btn-lightblue float-right mr-5 enregistrerBtn" type="submit">Enregistrer</button>
								<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius float-right" type="submit">Ajouter la dotation</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
						<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="row mt-3">
									<div class="col-lg-12 col-sm-12">
										<label class="tx-16 black-text font-weight-bold">Satistiques d'échecs et de réussite</label>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-lg-6 col-sm-6">
										<label class="tx-16 font-weight-bold gray-font-color">Pas de chiffres</label>
									</div>
									<div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
										<div class="form-group mb-0" style="margin-top: -10px">
											<select class="form-control round-dropdown">
												<option>Par mois</option>
											</select>
										</div>
									</div>
									<div class="col-lg-3 col-sm-3" style="padding: 0px 10px;">
										<div class="form-group mb-0" style="margin-top: -10px">
											<select class="form-control round-dropdown">
												<option>Catte année</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<canvas id="nombre-agence" class=""></canvas>
								</div>
								<div class="row">
									<div class="col-lg-12 col-sm-12">
										<div class="top10Legend">
											<ul class="1-legend">
												<li class="mb-2">
													<span style="background-color: #93f393;"></span>
													INTERVENTIONS REUSSITES
												</li>
												<li>
													<span style="background-color: #ff8282;"></span>INTERVENTIONS NON REUSSITES
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="row">
									<div class="col-lg-12 col-sm-12">
										<div class="min-height-scroll-container">
											<div class="min-height-scroll">
												<div class="row pl-4 pr-5 pt-1">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-coffee">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-red">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input login-input-green">
														<p class="mb-1"><strong>13 août 2021 à 19:23 | EDO IMC-TELECOM_MISSAMOU</strong></p>
														<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-12 mt-3">
										<div class="box-shadow-border-radius" id="editor">
										</div>
									</div>
									<div class="col-lg-12 col-sm-12 mt-3 text-center">
										<button class="btn btn-lightblue mr-2 btn-lightblue-another box-shadow-border-radius" type="submit">Publier la note</button>
										<button class="btn btn-lightblue enregistrerBtn" type="submit">Enregistrer</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="absences-and-deviations" role="tabpanel" aria-labelledby="absences-and-deviations-tab">
						<div class="row">
							<div class="col-lg-6 col-sm-6 absences-and-deviations-left">
								<div class="row">
									<div class="col-lg-12 col-sm-12 pl-1 pr-2">
										<div class="row mb-3">
											<div class="col-lg-2 col-sm-2 pr-0">
												<div class="datepicker-container">
													<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
													<input class="form-control bar-from" type="text" placeholder="00/00/0000">
												</div>
											</div>
											<div class="col-lg-1 col-sm-1 text-center">
												<p class="mt-2 mb-0">au</p>
											</div>
											<div class="col-lg-2 col-sm-2 pl-0">
												<div class="datepicker-container">
													<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
													<input class="form-control bar-from" type="text" placeholder="00/00/0000">
												</div>
											</div>
											<div class="col-lg-3 col-sm-3 p-0">
												<select class="form-control">
													<option>tous les motifs</option>
												</select>
											</div>
											<div class="col-lg-3 col-sm-3 pr-0">
												<a href="javascript:void(0);" id="novelle-btn" class="btn-blue-white" style="margin-left: unset;" data-toggle="modal" data-target="#absence-modal">
												Novelle absence
												</a>
											</div>
											<div class="col-lg-1 col-sm-1 p-2">
												<a href="javascript:void(0);" class="calender-task-btn">
												<img src="assets/img/icons/calendar_cercle_blue.png" style="margin-top: -5px;">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 absences-and-deviations-right">
								<div class="row">
									<div class="col-lg-12 col-sm-12 pl-2 pr-1">
										<div class="row mb-3">
											<div class="col-lg-4 col-sm-4 pr-0">
											</div>
											<div class="col-lg-2 col-sm-2 pl-0">
												<div class="datepicker-container">
													<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
													<input class="form-control bar-from" type="text" placeholder="00/00/0000">
												</div>
											</div>
											<div class="col-lg-3 col-sm-3 pl-0">
												<select class="form-control">
													<option>tous les motifs</option>
												</select>
											</div>
											<div class="col-lg-3 col-sm-3 pl-0">
												<a href="javascript:void(0);" class="btn-blue-white" style="margin-left: unset;" data-toggle="modal" data-target="#ecarts-modal">
												Nouvel écart
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 pl-1 pr-1 absences-and-deviations-left">
								<div class="calendar-container" style="display: none;">
									<div id='calendar'></div>
									<div style='clear:both'></div>
								</div>
								<div class="task-container">
									<p class="mb-1"><strong class="black-text font-weight-bold">Liste d'absences</strong></p>
									<div class="min-height-scroll-container fill-background">
										<div class="min-height-scroll">
											<div class="row pl-4 pr-4">
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Congés Payés</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Formations</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Arrét De Travail</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Événement Familiale</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Maladie Enfant</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Vacances</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
												<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-absence-modal">
													<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
														<div class="row">
															<div class="col-lg-5 col-sm-5">
																<p class="mb-1 black-text"><strong>Vacances</strong></p>
															</div>
															<div class="col-lg-7 col-sm-7 text-right">
																<p class="mb-1 view-color"><strong>8 Octobre 2021 - 16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
															</div>
														</div>
														<p class="mb-0 black-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 pr-1 absences-and-deviations-right">
								<p class="mb-1"><strong class="black-text font-weight-bold">List des écarts</strong></p>
								<div class="min-height-scroll-container fill-background">
									<div class="min-height-scroll">
										<div class="row pl-4 pr-4">
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1 black-text"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
											<a href="javascript:void(0);" data-toggle="modal" data-target="#edit-ecart-modal">
												<div class="col-lg-12 col-sm-12 pr-5 mb-2 login-input">
													<div class="row">
														<div class="col-lg-5 col-sm-5">
															<p class="mb-1"><strong class="black-text">Ecart</strong></p>
														</div>
														<div class="col-lg-7 col-sm-7 text-right">
															<p class="mb-1 view-color"><strong>16 Octobre 2021 <i class="fa fa-eye mr-1"></i></strong></p>
														</div>
													</div>
													<p class="mb-0 black-text"><strong>Objet:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 mt-3 pr-0">
								<button class="btn btn-lightblue float-right enregistrerBtn" type="submit">Enregistrer</button>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="contract" role="tabpanel" aria-labelledby="contract-tab">
						<div class="row min-height-scroll">
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Poste</label>
									<select class="form-control">
										<option>LOREM</option>
									</select>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<label>Agence</label>
											<select class="form-control">
												<option>AGENCE NAME</option>
											</select>
										</div>
										<div class="col-lg-6 col-sm-6">
											<label>Agence</label>
											<input type="text" name="" class="form-control" placeholder="0000000">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<label>Habilitation</label>
											<select class="form-control">
												<option>HABILITATION</option>
											</select>
										</div>
										<div class="col-lg-6 col-sm-6">
											<label>Date de fin d'habilitation</label>
											<div class="datepicker-container">
												<i class="date-icon date-icon1 float-left" aria-hidden="true"></i>
												<input class="form-control bar-from" type="text" placeholder="00/00/0000" />
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
							<div class="col-lg-4 col-sm-4 px-4">
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
								<div class="form-group">
									<label>Lorem Ipsum</label>
									<input type="text" name="" class="form-control" placeholder="Lorem Ipsum">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-sm-12 mt-2">
								<button class="btn contractEnregistrerBtn btn-lightblue float-right enregistrerBtn" type="submit" >Enregistrer</button>
								<button class="btn btn-lightblue mr-2 float-right btn-lightblue-another box-shadow-border-radius" type="submit">Générer le contrat</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade notifications-modal" id="notifications-modal" tabindex="-1" role="dialog" aria-labelledby="technicien-modal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document" style="min-width: 580px;">
		<div class="modal-content">
			<div class="modal-header pb-0">
				<h6 class="modal-title">AJOUTER UNE NOTIFICATION A JOHN DOE</h6>
				<a href="javascript:void(0);" class="btn-blue-white float-right mt-0 ajouterModal" data-toggle="modal" data-target="#add-technician-modal">Ajouter</a>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" class="close-modal" rel="notifications-modal">
				<span aria-hidden="true">
				<img src="assets/img/icons/Exit_1.png">
				</span>
				</button>
			</div>
			<div class="modal-body pt-3">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 pl-4 pr-5">
						<div class=" row mt-2">
							<div class="col-lg-6 col-md-6 col-sm-6 tour-modal-fields-row-div">
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Nature</label>
									<select class="form-control">
										<option>NATURE</option>
									</select>
								</div>
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Commentaire/Probléme</label>
									<textarea class="form-control" rows="8">
									</textarea>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6  tour-modal-fields-row-div">
								<div class="bg-white rounded-corner tour-modal-fields-row">
									<label>Ajouter des piéces jointes</label>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 mt-4">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 mt-4">
											<div class="tour-upload-box">
												<img src="assets/img/icons/plus-gray.png">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade Admin_Tournées_Valider-modal" id="Admin_Tournées_Valider-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">

	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="validerBtn">Valider</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Figer-modal" id="Admin_Tournées_Figer-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">

	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="figerBtn">Figer</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Echanger-modal" id="Admin_Tournées_Echanger-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">

	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="echangerBtn">Valider</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>

<div class="modal fade Admin_Tournées_Optimiser-modal" id="Admin_Tournées_Optimiser-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  	<div class="modal-dialog modal-dialog-centered modal-md">
	    <div class="modal-content">
	      <div class="modal-header pt-5" style="margin:0 auto;">
	      	<h5 class="modal-title" style="text-align: center">John Doe, John Doe 2</h5>
	      </div>
	      <div class="modal-body">

	        <div class="Panel">
	          <div class="Panel__body text-center text-black">
	            <p class="px-5 m-0" style="color: #1E1D1D;line-height: 2;">
	                Etes-vous sur de valider les tournées pour ces techniciens ?
	            </p>
	          </div>
	        </div>
	      </div>
	      <div class="modal-footer m-auto pb-5">
	          <button class="optimiserBtn">Optimiser</button>
	          <button class="annulerBtn" data-dismiss="modal">Annuler</button>
	      </div>
	    </div>
  	</div>
</div>


<div class="modal RealiseModal" id="RealiseModal" aria-modal="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content modal-content-demo">
			<div class="modal-header text-center">
				<h6 class="modal-title m-auto">CHANGER LE STATUT DE L'INTERVENTION</h6>
				<!-- <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">×</span></button> -->
			</div>
			<div class="modal-body">
				<div class="">
					<div class="card-body">
						<div class="form-group">
							<p class="mg-b-10">Statut</p>
							<select class="form-control">
								<option label="Statut">
								</option>
								<option value="Firefox">
									Firefox
								</option>
								<option value="Chrome">
									Chrome
								</option>
								<option value="Safari">
									Safari
								</option>
								<option value="Opera">
									Opera
								</option>
								<option value="Internet Explorer">
									Internet Explorer
								</option>
							</select>
						</div>
						<div class="form-group">
							<p class="mg-b-10">Commentaire</p>
							<textarea class="form-control" placeholder="Texte..." rows="5"></textarea>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer m-auto">
				<button class="validerbtn btn" type="button">Valider</button>
				<button class="annulerBtn btn" data-dismiss="modal" type="button">Annuler</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade admin-employee-inactive-modal " id="admin-employee-inactive-modal" tabindex="-1" role="dialog" aria-labelledby="admin-details-employee-confirmation-modal" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 35rem;">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <img src="assets/img/icons/agence-ajoute.png">
                        <h2 class="w-full text-center mt-4 mb-4">John Doe</h2>
                        <p class="mb-4">Etes-vous sûr de désactiver ce technicien ?</p>
                    </div>
                </div>
            </div>
			<div class="modal-footer m-auto pb-5">
	          <button class="btn desactiverBtn"  type="button">Desactiver</button>
	          <button class="annulerBtn btn"  type="button" data-dismiss="modal">Annuler</button>
	      	</div>
        </div>
    </div>
</div>

<script type="text/javascript">

	$('.close-modal').click(function(){
		var target = $(this).attr('rel');
		//alert('#'+target);
		$('#'+target).modal('hide');
	});

	$('.tour-switch').click(function(){
		var tourSwitches = $('.tour-switch');

		$.each(tourSwitches,function(){
			$(this).removeClass('tour-switch-active');
		});

		$(this).addClass('tour-switch-active');
	});

	$('#calendar').datepicker({
	    dateFormat: 'dd-M-yy',
	    minDate: 1,
	    todayHighlight: true
	});

	$('.calendar-icon').on('click', function() {
	//$('#calendar').focus();
	if($('.tour-calendar-div').is(':visible'))
		$('.tour-calendar-div').hide();
	else
		$('.tour-calendar-div').show();
	});

	// $(".calendar-icon").mouseenter(function(){
	// 	$('.tour-calendar-div').show();
	// }).mouseleave(function(){
	// 	$('.tour-calendar-div').hide();
	// });

	$('#tour-id,.hide-tour-gray-icons').click(function(){
		var imgSrc = $('#tour-id img').attr('src');

		if(imgSrc == 'assets/img/icons/blue-plus-white.png'){
			imgSrc = 'assets/img/icons/white-plus-blue.png';
			$('.tour-gray-icons').show();
		}else{
			imgSrc = 'assets/img/icons/blue-plus-white.png';
			$('.tour-gray-icons').hide();
		}

		$('#tour-id img').attr('src',imgSrc);
	});

	/*$('.slimscroll-tour-modal').slimscroll({
        color: '#000000',
        size: '5px',
        width: '100%',
        height: '300px',
        alwaysVisible: true
    });


    $('.slimscroll-assigner-a').slimscroll({
        color: '#000000',
        size: '5px',
        width: '100%',
        height: '150px',
        alwaysVisible: true
    });*/

    $(document).ready(function(){
		$(".upload-bx").click(function(){
			$(this).next().trigger("click");
		});
		$('.add-technician-modal table.clientDataTable a.viewEditorFormationBtn').click(function() {
			$('.view-formation-modal').show();
			$('.view-formation-modal').addClass("show");
		});

		$('.view-formation-modal a.modal-close').click(function() {
			$('.view-formation-modal').hide();
			$('.view-formation-modal').removeClass("show");
		});

		


		$('#view-formation-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
			$('#technicien-modal').modal('hide');
		});

		$('#view-dotation-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		//$("#add-technician-modal").modal("show");

		$('#absence-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#edit-absence-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#edit-ecart-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$('#ecarts-modal').on('shown.bs.modal', function () {
			$('#add-technician-modal').modal('hide');
		});

		$("#employee-confirmation-absence-modal .btn-lightblue").click(function(){
			$("#employee-confirmation-absence-modal").modal('hide');
		});

		$("#employee-confirmation-ecart-modal .btn-lightblue").click(function(){
			$("#employee-confirmation-ecart-modal").modal('hide');
		});



		$(".collaborateur-list-container .table.dataTable tbody tr").click(function(){
			$("#technicien-modal").modal('show');
		});

		$("#notifications-modal .ajouterModal").click(function(){
			$("#notifications-modal").modal('hide');
			$("#add-technician-modal").modal('show');
		});

		$(".add-technician-modal .enregistrerBtn").click(function(){
			$(".add-technician-modal").modal('hide');
			$(".employee-confirmation-absence-modal").modal('show');
		});

		$(".add-technician-modal .contractEnregistrerBtn").click(function(){
			$(".add-technician-modal").modal('hide');
			$(".employee-confirmation-absence-modal").modal('show');
		});



		$('.bar-from,.bar-to').datepicker({
			dateFormat: 'dd-M-yy',
			minDate: 1,
			todayHighlight: true
		});

		$('.date-icon1').on('click', function() {
			$(this).next().focus();
		});

		$('.date-icon2').on('click', function() {
			$(this).next().focus();
		});

		$(".calender-task-btn").click(function(){
			if($(".calendar-container:visible").length){
				$(".calendar-container").hide();
				$(".task-container").show();
				$(".calender-task-btn img").attr("src","assets/img/icons/blue-calendar-white.png");
				$("#novelle-btn").show();
				$("#absences-and-deviations .min-height-scroll").height(300);
			}else{
				$(".calendar-container").show();
				$(".task-container").hide();
				$(".calender-task-btn img").attr("src","assets/img/icons/list.png");
				$("#novelle-btn").hide();
				$("#absences-and-deviations .min-height-scroll").height(427);

				$("#calendar").html('');
				var date = new Date();
				var d = date.getDate();
				var m = date.getMonth();
				var y = date.getFullYear();

				/*  className colors

				className: default(transparent), important(red), chill(pink), success(green), info(blue)

				*/


				/* initialize the external events
				-----------------------------------------------------------------*/

				/*$('#external-events div.external-event').each(function() {

					// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
					// it doesn't need to have a start or end
					var eventObject = {
						title: $.trim($(this).text()) // use the element's text as the event title
					};

					// store the Event Object in the DOM element so we can get to it later
					$(this).data('eventObject', eventObject);

					// make the event draggable using jQuery UI
					$(this).draggable({
						zIndex: 999,
						revert: true,      // will cause the event to go back to its
						revertDuration: 0  //  original position after the drag
					});

				});*/


				/* initialize the calendar
				-----------------------------------------------------------------*/

				var calendar =  $('#calendar').fullCalendar({
					header: {
						left: 'title',
						center: 'agendaDay,agendaWeek,month',
						right: 'prev,next today'
					},
					editable: true,
					firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
					selectable: true,
					defaultView: 'month',

					axisFormat: 'h:mm',
					columnFormat: {
			               month: 'ddd',    // Mon
			               week: 'ddd d', // Mon 7
			               day: 'dddd M/d',  // Monday 9/7
			               agendaDay: 'dddd d'
			           },
			           titleFormat: {
			               month: 'MMMM yyyy', // September 2009
			               week: "MMMM yyyy", // September 2009
			               day: 'MMMM yyyy'                  // Tuesday, Sep 8, 2009
			           },
					allDaySlot: false,
					selectHelper: true,
					select: function(start, end, allDay) {
						var title = prompt('Event Title:');
						if (title) {
							calendar.fullCalendar('renderEvent',
								{
									title: title,
									start: start,
									end: end,
									allDay: allDay
								},
								true // make the event "stick"
							);
						}
						calendar.fullCalendar('unselect');
					},
					droppable: true, // this allows things to be dropped onto the calendar !!!
					drop: function(date, allDay) { // this function is called when something is dropped

						// retrieve the dropped element's stored Event Object
						var originalEventObject = $(this).data('eventObject');

						// we need to copy it, so that multiple events don't have a reference to the same object
						var copiedEventObject = $.extend({}, originalEventObject);

						// assign it the date that was reported
						copiedEventObject.start = date;
						copiedEventObject.allDay = allDay;

						// render the event on the calendar
						// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
						$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

						// is the "remove after drop" checkbox checked?
						if ($('#drop-remove').is(':checked')) {
							// if so, remove the element from the "Draggable Events" list
							$(this).remove();
						}

					},

					events: [
						{
							title: 'All Day Event',
							start: new Date(y, m, 1)
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d-3, 16, 0),
							allDay: false,
							className: 'info'
						},
						{
							id: 999,
							title: 'Repeating Event',
							start: new Date(y, m, d+4, 16, 0),
							allDay: false,
							className: 'info'
						},
						{
							title: 'Meeting',
							start: new Date(y, m, d, 10, 30),
							allDay: false,
							className: 'important'
						},
						{
							title: 'Lunch',
							start: new Date(y, m, d, 12, 0),
							end: new Date(y, m, d, 14, 0),
							allDay: false,
							className: 'important'
						},
						{
							title: 'Birthday Party',
							start: new Date(y, m, d+1, 19, 0),
							end: new Date(y, m, d+1, 22, 30),
							allDay: false,
						},
						{
							title: 'Click for Google',
							start: new Date(y, m, 28),
							end: new Date(y, m, 29),
							url: 'https://ccp.cloudaccess.net/aff.php?aff=5188',
							className: 'success'
						}
					],
				});
			}
		});
		$(".btn-editer").click(function(){
			$(".general-tab-profile-image-container").show();
			$(".general-tab-profile-image-container").next().hide();
		});
		$(".open-add-technician-popup-modal").click(function(){
			$(".general-tab-profile-image-container").hide();
			$(".general-tab-profile-image-container").next().show();
		});
		$("input[type='radio'][name='dotation-type']").change(function(){
			$(".material-container").hide();
			$(".information-container").hide();
			$(".vehicle-container").hide();
			if($(this).is(':checked')){
				var dotation_type_value = $(this).val();
				if(dotation_type_value == "material"){
					$(".material-container").show();
				}else if(dotation_type_value == "information"){
					$(".information-container").show();
				}else if(dotation_type_value == "vehicle"){
					$(".vehicle-container").show();
				}
			}
		});
		//$("input[type='radio'][name='dotation-type']").trigger("click");
		$('.modal').on('hidden.bs.modal', function (e) {
			$('body').addClass('modal-open');
		});
		$('.slimscroll-tour-modal').slimscroll({
	        color: '#000000',
	        size: '5px',
	        width: '100%',
	        height: '300px',
	        alwaysVisible: true
	    });
		initSample();
	});

	var ctx10 = document.getElementById("nombre-agence").getContext("2d");

	var data = {
	    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
	    datasets: [
	        {
	            label: "INTERVENTIONS REUSSITES",
	            backgroundColor: "#93f393",
	            data: [7524,3598,1002,2100,6541,2541,3573],
	            borderWidth: 0
	        },
	        {
	            label: "INTERVENTIONS NON REUSSITES",
	            backgroundColor: "#ff8282",
	            data: [1450,1190,1100,1100,1350,1200,1250],
	            borderWidth: 0
	        }
	    ]
	};

	var myBarChart = new Chart(ctx10, {
	    type: 'bar',
	    data: data,
	    options: {
	    	layout: {
		        padding: {
		            left: 20,
		            right: 20,
		            top: 40,
		            bottom: 20
		        }
		    },
	    	plugins: {
	    		legend: false,
		        datalabels: {
		        anchor: 'end',
		        align: 'top',
		        formatter: Math.round,
		        font: {
		          weight: 'bold'
		        }
		      }
		    },
	        scales: {
	            yAxes: [{
	                ticks: {
	                    min: 0
	                }
	            }],
	            xAxes: [{
		            barPercentage: 0.45,
		            gridLines: {
			          display: false
			        },
		        }]
	        }
	    }
	});
	$('.text-tour-collaborateurs input[type=checkbox]').click(function() {
		$(this.parentNode).removeClass("bg-white");
    	$(this.parentNode).addClass("bg-lightdarkerblue");
	});

	$('.tour-switch-modal .switch  input[type=checkbox]').click(function() {
		$('.admin-employee-inactive-modal').show();
    	$('.admin-employee-inactive-modal').addClass("show");
	});

	$('.admin-employee-inactive-modal .modal-footer button.annulerBtn').click(function() {
		$('.admin-employee-inactive-modal').hide();
    	$('.admin-employee-inactive-modal').removeClass("show");
	});

	
	
</script>

<?php include('sidebar-footer.php'); ?>
