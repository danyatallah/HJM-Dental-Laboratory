
		<div class="callout fixed title-callout" style="background: #f7f9fb;">
			<div class="row expanded">
				<div class="large-8 small-12 columns">
					<div class="row">
							<div class="medium-12 columns">
<<<<<<< HEAD
									<h4 class="app-customer-name"><strong><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></strong></h4>
=======
									<h4 class="app-customer-name"><strong>Dr. Welvin Medina</strong></h4>
>>>>>>> origin/PHP
							</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
<<<<<<< HEAD
							<p class="subheader" id="customer-company-display"><?php echo $dentists->company;?></p>
						</div>
			            <div class="small-12 columns">
			            	  <p class="subheader"><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
=======
							<p class="subheader" id="customer-company-display">Dental Teeth Massage</p>
						</div>
			            <div class="small-12 columns">
			            	  <p class="subheader">#28 Kalantas Street, Western Bicutan</p>
>>>>>>> origin/PHP
						</div>
			        </div>
				</div>
				<div class="large-4 small-12 columns">
				<!--Edit Info-->
					<div class="row">
						<div class="small-6 columns">
							<a data-open="edit-info" class="button secondary">Edit Information</a>
						</div>
						<div class="small-6 columns">
							<a class="button hvr-icon-hang" data-open="transaction-modal">New Transaction</a>
						</div>
						<!--Transaction Modal-->
						<div class="reveal" id="transaction-modal" data-reveal>
							<ul class="menu vertical">
									<h3><strong>New Transaction</strong></h3>
							  <li id="new-case"><a href="#" data-open="new-case-modal"><i class="fa fa-pencil-square-o fa-2x" ></i>New Case</a></li>
							  <hr>
							  <li id="new-invoice"><a href="#"><i class="fa fa-clipboard fa-2x"></i>Make Invoice</a></li>
							  <hr>
							  <li id="new-inactive"><a href="#" data-open="inactive-modal" ><i class="fa fa-ban fa-2x"></i>Make Account Inactive</a></li>
							</ul>
								  <button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								  </button>
						</div>
						<!--Inactive Modal-->
						<div class="reveal" id="inactive-modal" data-reveal>
						 <i class="fa fa-exclamation-triangle fa-3x" style="color: red; margin: 0 auto;"></i><p>Are you sure you want to make Welvin Olamit Medina inactive?</p>
						  <hr>
						  <button data-close class="button float-left hvr-icon-back success" >No</button>
						  <button class="button float-right hvr-icon-forward alert" type="submit">Yes</button>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<!--New Case Modal -->
						<div class="reveal" id="new-case-modal" data-reveal>
						 	
						  <button data-close class="button float-left hvr-icon-back success" >No</button>
						  <button class="button float-right hvr-icon-forward alert" type="submit">Yes</button>
						  <button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
				</div>
			</div>
			<!--Modal-->
			<div class="row">
				<div class="large reveal" id="edit-info" data-reveal data-animation-in="slide-in-down" data-animation-out="slide-out-up">
				  <h3 id="add-modal"><i class="fa fa-user"></i><strong>Dentist Information</strong></h3>
				  <!--Form-->
<<<<<<< HEAD
					<?php echo form_open('Customer/EditDentist'); ?>
					<?php form_hidden('DentistID', $this->uri->segment(3));?>
=======
					<form data-abide novalidate>
>>>>>>> origin/PHP
						<hr>
						<div class="row">
							<div class="large-6 medium-12 columns">
							 <div class="row">
								<div class="large-2 medium-3 small-3 xsmall-2 columns">
								  <label>Title
<<<<<<< HEAD
									<select id="select" name='title' required>
									  <option value="<?php echo $dentists->title.'">'.$dentists->title?></option>
=======
									<select id="select" required>
									  <option value=""></option>
>>>>>>> origin/PHP
									  <option value="Mr.">Mr.</option>
									  <option value="Ms.">Ms.</option>
									  <option value="Mrs.">Mrs.</option>
									  <option value="Dr.">Dr.</option>
									  <option value="Dra.">Dra.</option>
									</select>
								  </label>
								</div>

							<div class="large-3 medium-12 small-12 columns">
							  <label>First Name
<<<<<<< HEAD
								<input type="text" name="firstname" aria-describedby="exampleHelpText" value="<?php echo $dentists->firstname;?>">
=======
								<input type="text" name="cust-fname" aria-describedby="exampleHelpText" required pattern="text">
>>>>>>> origin/PHP
							  </label>
							</div>
							<div class="large-4 medium-12 small-12 columns">
							  <label>Middle Name
<<<<<<< HEAD
								<input type="text" name="middlename" aria-describedby="exampleHelpText" value="<?php echo $dentists->middlename;?>">
=======
								<input type="text" name="cust-mname" aria-describedby="exampleHelpText">
>>>>>>> origin/PHP
							  </label>
							</div>
							<div class="large-3 medium-12 small-12 columns">
							  <label>Last Name
<<<<<<< HEAD
								<input type="text" name="lastname" aria-describedby="exampleHelpText" value="<?php echo $dentists->lastname;?>">
=======
								<input type="text" name="cust-lname" aria-describedby="exampleHelpText" required pattern="text">
>>>>>>> origin/PHP
							  </label>
							</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Company
<<<<<<< HEAD
										<input type="text" name="company" placeholder="i.e. HJM Dental Laboratory" aria-describedby="exampleHelpText" value="<?php echo $dentists->company;?>" required>
=======
										<input type="text" name="cust-company" placeholder="i.e. HJM Dental Laboratory" aria-describedby="exampleHelpText" required>
>>>>>>> origin/PHP
									  </label>
									</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Display Name As
										<input type="text" aria-describedby="exampleHelpText">
									  </label>
									</div>
							 </div>
							</div>
							<div class="large-6 medium-12 columns">
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>E-Mail
<<<<<<< HEAD
										<input type="text" name="email" placeholder="i.e. hjmdentallaboratory@gmail.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->email;?>" required>
=======
										<input type="text" name="cust-email" placeholder="i.e. hjmdentallaboratory@gmail.com" aria-describedby="exampleHelpText" required>
>>>>>>> origin/PHP
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-6 medium-6 small-12 columns">
										 <label>Telephone
<<<<<<< HEAD
										<input type="text" name="telephone" aria-describedby="exampleHelpText" value="<?php echo $dentists->telephone;?>">
=======
										<input type="text" name="cust-telephone" aria-describedby="exampleHelpText">
>>>>>>> origin/PHP
									  </label>
									</div>
									<div class="large-6 medium-6 small-12 columns columns">
											 <label>Mobile
<<<<<<< HEAD
										<input type="text" name="mobile" aria-describedby="exampleHelpText" required value="<?php echo $dentists->mobile;?>">
=======
										<input type="text" name="cust-mobile" aria-describedby="exampleHelpText" required pattern="number">
>>>>>>> origin/PHP
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>Website
<<<<<<< HEAD
										<input type="text" name="website" placeholder="i.e. www.hjmdentallaboratory.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->website;?>">
=======
										<input type="text" name="cust-website" placeholder="i.e. www.hjmdentallaboratory.com" aria-describedby="exampleHelpText" required>
>>>>>>> origin/PHP
									  </label>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="large-12 columns">
								<ul class="tabs" data-tabs id="example-tabs">
								  <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Address</a></li>
								  <li class="tabs-title"><a href="#panel2">Notes</a></li>
								</ul>
								<div class="tabs-content" data-tabs-content="example-tabs">
								  <div class="tabs-panel is-active" id="panel1">
									<div class="row">
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Billing Address</strong>
<<<<<<< HEAD
													 <textarea name="bstreet" rows="2" cols="50" placeholder="Street"><?php echo $dentists->bstreet;?></textarea>
=======
													 <textarea name="b-street-address" rows="2" cols="50" placeholder="Street"></textarea>
>>>>>>> origin/PHP
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
<<<<<<< HEAD
												<input name="bcity" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bcity;?>">
=======
												<input name="b-city" type="text" aria-describedby="exampleHelpText" required>
>>>>>>> origin/PHP
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Baranggay
<<<<<<< HEAD
												<input name="bbrgy" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bbrgy;?>">
=======
												<input name="b-baranggay" type="text" aria-describedby="exampleHelpText" required>
>>>>>>> origin/PHP
												 </label>
												</div>
											</div>
										 </div>
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Shipping Address </strong>
<<<<<<< HEAD
													 <textarea name="shipstreet" rows="2" cols="50" placeholder="Street" id="ship-street"><?php echo $dentists->shipstreet;?></textarea>
=======
													 <textarea name="ship-street" rows="2" cols="50" placeholder="Street" id="ship-street"></textarea>
>>>>>>> origin/PHP
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
<<<<<<< HEAD
												<input type="text" name="shipcity" aria-describedby="exampleHelpText" class="ship-info" id="ship-city" value="<?php echo $dentists->shipcity;?>">
=======
												<input type="text" name="ship-city" aria-describedby="exampleHelpText" class="ship-info" id="ship-city">
>>>>>>> origin/PHP
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Baranggay
<<<<<<< HEAD
												<input type="text" name="shipbrgy" aria-describedby="exampleHelpText" class="ship-info" id="ship-baranggay" value="<?php echo $dentists->shipbrgy;?>">
												 </label>
												</div>
											</div>
											<input id="same-as" type="checkbox" name="same" value="true"><label for="checkbox1">Same as Billing Address
=======
												<input type="text" name="ship-city" aria-describedby="exampleHelpText" class="ship-info" id="ship-baranggay">
												 </label>
												</div>
											</div>
											<input id="same-as" type="checkbox"><label for="checkbox1">Same as Billing Address
>>>>>>> origin/PHP
										</div>
									</div>
								  </div>
								  <div class="tabs-panel" id="panel2">
									<label for="notes"><strong>Notes</strong>
<<<<<<< HEAD
									<textarea name="notes" id="" cols="30" rows="3" ><?php echo $dentists->notes;?></textarea></label>
=======
									<textarea name="notes" id="" cols="30" rows="3"></textarea></label>
>>>>>>> origin/PHP
								  </div>
								</div>
							</div>
						</div>
						<br>
						<hr>
						<div class="row">
							<fieldset class="float-left">
							  <button class="button alert hvr-icon-back" data-close aria-label="Close modal" type="button">Cancel</button>
							</fieldset>
							<fieldset class="float-right">
<<<<<<< HEAD
							    <?php echo form_submit('submit', 'Submit', 'class="button success hvr-icon-forward"', 'type="Submit"');?>
							</fieldset>
						</div>
					<?php form_close();?>
=======
							  <button class="button success hvr-icon-forward" type="Submit" value="Submit">Submit</button>
							</fieldset>
						</div>
					</form>
>>>>>>> origin/PHP
				  <!--End Form-->
					<button class="close-button" data-close aria-label="Close modal" type="button">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
			<!--End Modal-->
		</div>
		<!--Body Content-->
		<div class="app-body-content">
			<ul class="tabs" data-tabs id="customer-info">
			  <li class="tabs-title is-active"><a href="#customer-details" aria-selected="true"><strong>Customer Details</strong></a></li>
			  <li class="tabs-title"><a href="#customer-inCases"><strong>In Cases</strong></a></li>
			</ul>
			 <div class="tabs-content" data-tabs-content="customer-info">
			  <div class="tabs-panel is-active" id="customer-details">
				<div class="row expanded">
					<div class="large-6 columns">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Customer Name :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></p>
=======
								<p>Dr. Welvin Medina</p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Email Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->email;?></p>
=======
								<p>welvs.medina@gmail.com</p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Telephone :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->telephone;?></p>
=======
								<p></p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Mobile :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->mobile;?></p>
=======
								<p>Dr. Welvin Medina</p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Website :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->website;?></p>
=======
								<p>Dr. Welvin Medina</p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Notes:</strong></p></label>
							</div>
							<div class="large-8 columns">
<<<<<<< HEAD
								<textarea name="" id="" cols="30" rows="2" readonly="true"><?php echo $dentists->notes;?></textarea>
=======
								<textarea name="" id="" cols="30" rows="2"></textarea>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
					</div>
					<div class="large-6 columns">
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Billing Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
=======
								<p>Dr. Welvin Medina</p>
>>>>>>> origin/PHP
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Shipping Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
<<<<<<< HEAD
								<p><?php echo $dentists->shipstreet.', '.$dentists->shipbrgy.', '.$dentists->shipcity;?>
=======
								<p>welvs.medina@gmail.com</p>
							</div>
>>>>>>> origin/PHP
							<hr>
						</div>
					</div>
				</div>
			  </div>
			  <div class="tabs-panel" id="customer-inCases">
				<p>Suspendisse dictum feugiat nisl ut dapibus.  Vivamus hendrerit arcu sed erat molestie vehicula. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.  Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor.</p>
			  </div>
			</div>
		</div>
	<!--End Of Body Content -->
	</div>
</div>
</div>

