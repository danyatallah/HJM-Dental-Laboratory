
		<div class="callout fixed title-callout" style="background: #f7f9fb;">
			<div class="row expanded">
				<div class="large-8 small-12 columns">
					<div class="row">
							<div class="medium-12 columns">
									<h4 class="app-customer-name"><strong><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></strong></h4>
							</div>
					</div>
					<div class="row">
						<div class="small-12 columns">
							<p class="subheader" id="customer-company-display"><?php echo $dentists->company;?></p>
						</div>
			            <div class="small-12 columns">
			            	  <p class="subheader"><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
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
					<?php echo form_open('Customer/EditDentist'); ?>
					<?php form_hidden('DentistID', $this->uri->segment(3));?>
						<hr>
						<div class="row">
							<div class="large-6 medium-12 columns">
							 <div class="row">
								<div class="large-2 medium-3 small-3 xsmall-2 columns">
								  <label>Title
									<select id="select" name='title' required>
									  <option value="<?php echo $dentists->title.'">'.$dentists->title?></option>
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
								<input type="text" name="firstname" aria-describedby="exampleHelpText" value="<?php echo $dentists->firstname;?>">
							  </label>
							</div>
							<div class="large-4 medium-12 small-12 columns">
							  <label>Middle Name
								<input type="text" name="middlename" aria-describedby="exampleHelpText" value="<?php echo $dentists->middlename;?>">
							  </label>
							</div>
							<div class="large-3 medium-12 small-12 columns">
							  <label>Last Name
								<input type="text" name="lastname" aria-describedby="exampleHelpText" value="<?php echo $dentists->lastname;?>">
							  </label>
							</div>
							 </div>
							 <div class="row">
								<div class="large-12 medium-12 small-12 columns">
									  <label>Company
										<input type="text" name="company" placeholder="i.e. HJM Dental Laboratory" aria-describedby="exampleHelpText" value="<?php echo $dentists->company;?>" required>
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
										<input type="text" name="email" placeholder="i.e. hjmdentallaboratory@gmail.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->email;?>" required>
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-6 medium-6 small-12 columns">
										 <label>Telephone
										<input type="text" name="telephone" aria-describedby="exampleHelpText" value="<?php echo $dentists->telephone;?>">
									  </label>
									</div>
									<div class="large-6 medium-6 small-12 columns columns">
											 <label>Mobile
										<input type="text" name="mobile" aria-describedby="exampleHelpText" required value="<?php echo $dentists->mobile;?>">
									  </label>
									</div>
								</div>
								<div class="row">
									<div class="large-12 medium-12 small-12 columns">
									  <label>Website
										<input type="text" name="website" placeholder="i.e. www.hjmdentallaboratory.com" aria-describedby="exampleHelpText" value="<?php echo $dentists->website;?>">
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
													 <textarea name="bstreet" rows="2" cols="50" placeholder="Street"><?php echo $dentists->bstreet;?></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input name="bcity" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bcity;?>">
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Baranggay
												<input name="bbrgy" type="text" aria-describedby="exampleHelpText" required value="<?php echo $dentists->bbrgy;?>">
												 </label>
												</div>
											</div>
										 </div>
										<div class="large-6 columns">
											<div class="row">
												<div class="large-12 medium-12 small-12 columns">
												  <label><strong>Shipping Address </strong>
													 <textarea name="shipstreet" rows="2" cols="50" placeholder="Street" id="ship-street"><?php echo $dentists->shipstreet;?></textarea>
												  </label>
											   </div>
											</div>
											<div class="row">
												<div class="large-6 columns">
												 <label>City / Province
												<input type="text" name="shipcity" aria-describedby="exampleHelpText" class="ship-info" id="ship-city" value="<?php echo $dentists->shipcity;?>">
												 </label>

												</div>
												<div class="large-6 columns">
												<label>Baranggay
												<input type="text" name="shipbrgy" aria-describedby="exampleHelpText" class="ship-info" id="ship-baranggay" value="<?php echo $dentists->shipbrgy;?>">
												 </label>
												</div>
											</div>
											<input id="same-as" type="checkbox" name="same" value="true"><label for="checkbox1">Same as Billing Address
										</div>
									</div>
								  </div>
								  <div class="tabs-panel" id="panel2">
									<label for="notes"><strong>Notes</strong>
									<textarea name="notes" id="" cols="30" rows="3" ><?php echo $dentists->notes;?></textarea></label>
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
							    <?php echo form_submit('submit', 'Submit', 'class="button success hvr-icon-forward"', 'type="Submit"');?>
							</fieldset>
						</div>
					<?php form_close();?>
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
								<p><?php echo $dentists->title.' '.$dentists->firstname.' '.$dentists->lastname;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Email Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->email;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Telephone :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->telephone;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Mobile :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->mobile;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Website :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->website;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Notes:</strong></p></label>
							</div>
							<div class="large-8 columns">
								<textarea name="" id="" cols="30" rows="2" readonly="true"><?php echo $dentists->notes;?></textarea>
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
								<p><?php echo $dentists->bstreet.', '.$dentists->bbrgy.', '.$dentists->bcity;?></p>
							</div>
							<hr>
						</div>
						<div class="row">
							<div class="large-4 columns">
								<label for="#" class="float-left cust-details-label"><p><strong>Shipping Address :</strong></p></label>
							</div>
							<div class="large-5 columns end">
								<p><?php echo $dentists->shipstreet.', '.$dentists->shipbrgy.', '.$dentists->shipcity;?>
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

