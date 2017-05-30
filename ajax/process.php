<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require_once($root.'/models/Layout_Model.php');
require_once($root.'/views/Layout_View.php');
require_once $root.'/backends/general.php';
require_once $root.'/Framework/Tools.php';
$model	= new Layout_Model();
$data 		= $backend->loadBackend();
// var_dump($data);


switch ($_POST['opt'])
{
	case 1:
		if ($experiencesArray= $model->getExperiencesByDestinationId($_POST['destinationId']))
		{
			?>
			<?php
			foreach ($experiencesArray as $experience)
			{
			?>
			<option value="<?php echo $experience['experience_id']; ?>"><?php echo $experience['name']; ?></option>
			<?php
			}
		}
		else 
		{
			?>
			<option value="0">No experiences</option>
			<?php 
		}
	break;
	
	case 2:
		if ($experience= $model->getExperienceById($_POST['currentExperience']))
		{
			$checkIn = '';
			$checkOut = '';
			$diff = 0;
			$hotels = array();
			
			if (isset($_POST['checkIn']) && isset($_POST['checkOut']))
			{
				$checkIn = strtotime($_POST['checkIn']);
				$checkOut = strtotime($_POST['checkOut']);
				
// 				$pCheckIn = new DateTime($checkIn);
// 				$pCheckOut = new DateTime($checkOut);
				
// 				$diff = $pCheckOut->diff($pCheckIn)->format("%a");
				
				$diff = ceil(abs($checkOut - $checkIn) / 86400);
				
				$checkIn = date('d M, y',$checkIn);
				$checkOut = date('d M, y',$checkOut);
				
			}
			
			if (isset($_POST['currentDestination']))
			{
				$hotels = $model->getHotelsByDestinationId($_POST['currentDestination']);
			}
			?>
			<div class="col-md-12 text-center">
				<img class="responsive" width="600" src="<?php echo $data['appInfo']['url']."img-up/experiences/original/".$experience['swiper']; ?>">
				<br>
				<br>
			</div>
							
			<div class="col-md-12 text-justify">
				<p><?php echo $experience['description']; ?></p>
			</div>
							
			<div class="col-md-12 text-center">
				<br>
				<h5>
					From <?php echo $checkIn; ?> to <?php echo $checkOut; ?>, <?php echo $diff; ?> days 
					<a href="#">edit</a>
				</h5>
			</div>
			
			<div class="col-md-12 text-center">
				<h5>
					Total $100.00
				</h5>
				<br>
			</div>    
							      
			<div class="col-md-12 text-justify">
				<h6>Choose your hotel</h6>
				
				<div class="row example " id="chooseHotel">
					<?php 
					if ($hotels)
					{
						$checked = "";
						$i = 0;
						
						foreach ($hotels as $hotel) {
							if ($i == 0)
								$checked = 'checked';
							else 
								$checked = '';
							?>
					<div class="col-md-4">
						<input id="radio_<?php echo $hotel['hotel_id']; ?>" type="radio" name="hotel" class="hotelItem" value="<?php echo $hotel['hotel_id']; ?>" <?php echo $checked;?>>
						<label for="radio_<?php echo $hotel['hotel_id']; ?>">
							<span>
								<span></span>
							</span>
							<?php echo $hotel['name']; ?>
						</label>
					</div>
							<?php
							$i++;
						}
					}
					?>
				</div>
			</div>
			
			<div class="col-md-12 text-center" id="hotelRanges">
				
			</div> 
							
							<div class="col-md-12 text-justify">
								<h6>Add an extra</h6>
								<div class="row">
									<div class="col-md-3">
					                    <div class="postfix-1 ">
					                        <img src="http://love-admin.dev/img-up/extras/original/002ls5-avatar.jpg" width="955" height="700" alt="">
					                    </div>
					                    <input id="radio5" type="radio" name="radio-extra" value="4" checked="checked"><label for="radio5"><span><span></span></span>Option 1</label>
					                </div>
								</div>
							</div>
							                          
							<div class="col-md-12 col-xl-4 z-ind">
								<div class="text-center">
				                    <h2>Contact Us</h2>
				                    <!-- RD Mailform -->
				                    <form class='rd-mailform offset-10 with-borders' method="post" action="/email/email.php">
				                        <!-- RD Mailform Type -->
				                        <input type="hidden" name="form-type" value="contact" />
				                        <!-- END RD Mailform Type -->
				                        <fieldset class="ph-size border-none">
				                            <div class="row">
				                                <div class="col-md-6">
				                                    <label data-add-placeholder data-add-icon>
				                                    <input type="text" name="name" placeholder="Name" data-constraints="@NotEmpty @LettersOnly" /> </label>
				                                </div>
				                                <div class="col-md-6">
				                                    <label data-add-placeholder data-add-icon>
				                                    <input type="text" name="last-name" placeholder="Last Name" data-constraints="@NotEmpty @LettersOnly" /> </label>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="col-md-6">
				                                    <label data-add-placeholder data-add-icon>
				                                    <input type="text" name="email" placeholder="E-mail" data-constraints="@NotEmpty @Email" /> </label>
				                                </div>
				                                <div class="col-md-6">
				                                    <label data-add-placeholder data-add-icon>
				                                    <input type="text" name="phone" placeholder="Phone" data-constraints="@Phone" /> </label>
				                                </div>
				                                
				                                <div class="col-md-12">
				                                    <label data-add-placeholder>
				                                        <textarea name="message" placeholder="Message" data-constraints="@NotEmpty"></textarea>
				                                    </label>
				                                </div>
				                            </div>
				                            <div class="row">
				                                <div class="mfControls offset-10">
				                                    <button class="btn btn-sm btn-primary fl-budicons-launch-right164 fl" type="submit">Book now</button>
				                                </div>
				                            </div>
				                        </fieldset>
				                    </form>
				                </div><!-- END RD Mailform -->
							</div>
							
			<?php
		}
		else 
		{
			?>
			No experience mofo
			<?php 
		}
	break;
	
	// get hotel ranges
	case 3:
		if ($ranges = $model->getAllHotelRangesByHotel($_POST['hotelId']))
		{
			$total = 0;
			
			if (isset($_POST['checkIn']) && isset($_POST['checkOut']))
			{
				$checkIn = strtotime($_POST['checkIn']);
				$checkOut = strtotime($_POST['checkOut']);
			
				$diff = ceil(abs($checkOut - $checkIn) / 86400);
			
				foreach ($ranges as $range)
				{
					$from = strtotime($range['from_date']);
					$to = strtotime($range['to_date']);
// 					echo $from.' - '.$to; 

					if (($checkIn > $from) && ($checkIn < $to))
					{
						if ($checkOut > $from && $checkOut < $to)
						{
							$total = $range['price'] * $diff;
							echo 'Está dentro del rango! <br> Total = '.$total;
						}
					}
					else
					{
						echo "NO GO!";
					}
				}
				
// 				$checkIn = date('d M, y',$checkIn);
// 				$checkOut = date('d M, y',$checkOut);

				
			
			}
			
			echo '<pre>';
// 			print_r($ranges);
			echo '</pre>';
		}
		else 
		{
			echo 0; 
		}
	break;
	
	case 4:
		if ($_POST)
		{
			if ($_POST['productId'])
			{
				// 			echo $productId;
				$currentDay = $_POST['transactionDate'];
				$currentDay = Tools::formatToMYSQL($currentDay);
				
				$time_input = $_POST['transactionTime'];
				$date = DateTime::createFromFormat( 'H:i A', $time_input);
				$formatted = $date->format( 'H:i:s');
				$dateTime = $currentDay.' '.$formatted;
				
				if ($model->addTransaction($_POST, $dateTime))
				{
					echo 1;
				}
				else 
				{
					echo 0;
				}
				
			}
			else
			{
				echo 0;
			}
		}
		else
		{
			echo 0;
		}
	break;
	
	
	
	default:
	break;
}