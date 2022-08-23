<div class="bg-lightblue px-1 py-2">
    <div id="scolldiv-nonaffectes">
        <?php
        $records = [];
        echo '<div class="row tour-side-box-row">
                						<div class="col-lg-12">';

        echo '<div class="tour-box-half">
                				<div class="tour-box-white tour-side-box-full">
                					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
                					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
                					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
                					<span class="text-blue text-block tx-14">1234567894</span>
                				</div>
                			</div>


                            <div class="tour-box-half">
                				<div class="tour-box-white tour-side-box-full">
                					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
                					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
                					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
                					<span class="text-blue text-block tx-14">1234567894</span>
                				</div>
                			</div>


                            <div class="tour-box-half">
                				<div class="tour-box-white tour-side-box-full">
                					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
                					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
                					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
                					<span class="text-blue text-block tx-14">1234567894</span>
                				</div>
                			</div>


                            <div class="tour-box-half">
                				<div class="tour-box-white tour-side-box-full">
                					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
                					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
                					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
                					<span class="text-blue text-block tx-14">1234567894</span>
                				</div>
                			</div>

                            <div class="tour-box-half">
        				<div class="tour-box-white tour-side-box-full">
        					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
        					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
        					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
        					<span class="text-blue text-block tx-14">1234567894</span>
        				</div>
        			</div>

                    <div class="tour-box-half">
        				<div class="tour-box-white tour-side-box-full">
        					<strong class="tour-left-row-text text-black mt-1 tx-16"> DURANT</strong>
        					<strong class="tour-left-row-text text-black tx-14"> 8:30 - 10:00</strong>
        					<span class="text-black text-block mt-1 tx-14">LA ROCHELLE</span>
        					<span class="text-blue text-block tx-14">1234567894</span>
        				</div>
        			</div>

                    ';

        // foreach($non_affectes as $non_affect){
        // 	$client_nonschedules = $non_affect['client_nonschedules'];

        // 	foreach($client_nonschedules as $schedule){

        // 		$hour = date('H',strtotime($schedule));
        // 		$newHour = $hour + 2;

        // 		$startHour = $hour.':00';
        // 		$endHour = $newHour.':00';

        // 		$record = $non_affect['client_nom'].$hour.$newHour;
        // 		if(!in_array($record, $records)){
        // 			$records[] = $record;
        // 		}else{
        // 			continue;
        // 		}

        // 		echo '<div class="tour-box-half mb-4">
        // 					<div class="tour-box-white tour-side-box-full">
        // 						<strong class="tour-left-row-text text-black mt-1"> '.strtoupper($non_affect['client_nom']).'</strong>';

        // 		echo '<strong class="tour-left-row-text text-black"> '.$startHour.' - '.$endHour.'</strong>
        // 						<span class="text-black text-block mt-1">'.$non_affect['client_address'].'</span>
        // 						<span class="text-blue text-block mt-1">'.$non_affect['client_tel'].'</span>
        // 					</div>
        // 				</div>';
        // 	}

        // }

        echo '</div>
                					</div>';
        ?>
    </div>

</div>

<script type="text/javascript">
    $('#scolldiv-nonaffectes').slimscroll({
        color: '#000000',
        size: '5px',
        width: '100%',
        height: '70vh',
        alwaysVisible: true
    });
</script>
