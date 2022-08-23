						</div>
					</div>
				</div>
				<div class="sidebar sidebar-right sidebar-animate">
					<div class="sidebar-icon sidebar-icon-right">
						<a href="#" class="text-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right">
							<img src="assets/img/media/arrow-left-circle-fill.png">
						</a>
					</div>
					<div class="sidebar-body ">
						<div class="d-flex p-3">
							<ul class="right-sidebar navigation">
								<li class="active"><a href="#">ENEDIS LINKY</a><hr></li>
								<li><a href="#">ENEDIS BRT</a><hr></li>
								<li><a href="#">ENEDIS IP-TLR</a><hr></li>
								<li><a href="#">ENEDIS COLONNES MONT.</a><hr></li>
								<li><a href="#">IRVE</a><hr></li>
								<li><a href="#">PARTICULIERS</a><hr></li>
								<li><a href="#">PROFESSIONNELS</a><hr></li>
							</ul>
						</div>
					</div>
					<div class="sidebar-footer">
						<a href="index.php" class="" data-toggle="sidebar-right" data-target=".sidebar-right">
							<img src="assets/img/media/ic_logout.png" class="mr-2"> SE DECONNECTER
						</a>
					</div>
				</div>
			</div>
		</div>
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".datepicker table thead tr:nth-child(2) th.prev").html('<i class="fa fa-angle-left"></i>');
				$(".datepicker table thead tr:nth-child(2) th.next").html('<i class="fa fa-angle-right"></i>');
			});
			$('.with-sub').click(function(){
				var navItems = $('.nav-item');
				$.each(navItems,function(){
					$(this).removeClass('active');
				});
				$(this).parent().addClass('active');
			});
			$(".custom-card .ckbox input[type='checkbox'],.min-height-scroll-table-container .ckbox input[type='checkbox']").change(function(){
				if($(this).prop("checked") == true){
					$(this).parent().addClass("active");
				}else{
					$(this).parent().removeClass("active");
				}
			});
			/*$(".min-height-scroll-table-container input[type='checkbox']").change(function(){
				if($(this).prop("checked") == true){
					$(this).parents("tr").addClass("active");
				}else{
					$(this).parents("tr").removeClass("active");
				}
			});*/
			$(".circle-icon a").mouseenter(function(){
		    	if($(this).children("img").attr("src") == "assets/img/icons/blue-map-white.png"){
		    		$(this).children("img").attr("src","assets/img/icons/white-map-blue.png");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/menu2.png"){
		    		$(this).children("img").attr("src","assets/img/icons/menu-blue2.png");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/blue-calendar-white.png"){
		    		$(this).children("img").attr("src","assets/img/icons/white-calendar-blue.png");
		    	}
			}).mouseleave(function(){
				if($(this).children("img").attr("src") == "assets/img/icons/white-map-blue.png"){
					$(this).children("img").attr("src","assets/img/icons/blue-map-white.png");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/menu-blue2.png"){
					$(this).children("img").attr("src","assets/img/icons/menu2.png");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/white-calendar-blue.png"){
					$(this).children("img").attr("src","assets/img/icons/blue-calendar-white.png");
		    	}
			});

			$(".main-sidebar .nav-sub .nav-sub-item a").mouseenter(function(){
		    	if($(this).children("img").attr("src") == "assets/img/icons/nav-client.png"){
		    		$(this).children("img").attr("src","assets/img/icons/blue-nav-client.png");
		    		$(this).children("img").css("width", "14%");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/nav-collaborateurs.png"){
		    		$(this).children("img").attr("src","assets/img/icons/blue-nav-collaborateurs.png");
		    		$(this).children("img").css("width", "14%");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/nav-agence.png"){
		    		$(this).children("img").attr("src","assets/img/icons/blue-nav-agence.png");
		    		$(this).children("img").css("width", "14%");
		    	}
			}).mouseleave(function(){
				if($(this).children("img").attr("src") == "assets/img/icons/blue-nav-client.png"){
					$(this).children("img").attr("src","assets/img/icons/nav-client.png");
					$(this).children("img").css("width", "unset");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/blue-nav-collaborateurs.png"){
					$(this).children("img").attr("src","assets/img/icons/nav-collaborateurs.png");
					$(this).children("img").css("width", "unset");
		    	}else if($(this).children("img").attr("src") == "assets/img/icons/blue-nav-agence.png"){
					$(this).children("img").attr("src","assets/img/icons/nav-agence.png");
					$(this).children("img").css("width", "unset");
		    	}
			});

			$(".modal-close, .modal-header button.close").mouseenter(function(){
		    	if($(this).find("img").attr("src") == "assets/img/icons/Exit_2.png"){
		    		$(this).find("img").attr("src","assets/img/icons/Exit_blue_2.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/Exit_1.png"){
		    		$(this).find("img").attr("src","assets/img/icons/Exit_blue_1.png");
		    	}
			}).mouseleave(function(){
				if($(this).find("img").attr("src") == "assets/img/icons/Exit_blue_2.png"){
					$(this).find("img").attr("src","assets/img/icons/Exit_2.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/Exit_blue_1.png"){
					$(this).find("img").attr("src","assets/img/icons/Exit_1.png");
		    	}
			});

			$(".tour-gray-text").mouseenter(function(){
		    	if($(this).find("img").attr("src") == "assets/img/icons/right-sign.png"){
		    		$(this).find("img").attr("src","assets/img/icons/right-sign-blue.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/lock_black.png"){
		    		$(this).find("img").attr("src","assets/img/icons/lock_blue.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/arrow-change.png"){
		    		$(this).find("img").attr("src","assets/img/icons/arrow-change-blue.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/settings.png"){
		    		$(this).find("img").attr("src","assets/img/icons/settings-blue.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/refresh.png"){
		    		$(this).find("img").attr("src","assets/img/icons/refresh-blue.png");
		    	}
			}).mouseleave(function(){
				if($(this).find("img").attr("src") == "assets/img/icons/right-sign-blue.png"){
					$(this).find("img").attr("src","assets/img/icons/right-sign.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/lock_blue.png"){
					$(this).find("img").attr("src","assets/img/icons/lock_black.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/arrow-change-blue.png"){
					$(this).find("img").attr("src","assets/img/icons/arrow-change.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/settings-blue.png"){
					$(this).find("img").attr("src","assets/img/icons/settings.png");
		    	}else if($(this).find("img").attr("src") == "assets/img/icons/refresh-blue.png"){
					$(this).find("img").attr("src","assets/img/icons/refresh.png");
		    	}
			});
		</script>
	</body>
</html>