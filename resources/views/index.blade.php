@extends('layouts.master')
@section('content')
		<!-- ============================ Hero Banner  Start================================== -->
		<div class="image-cover hero-header bg-white" style="background:url(assets/img/home-1.jpg)no-repeat;"
      data-overlay="5">
      <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-between align-items-center g-4">
			
			<!-- Banner Heading -->
			<div class="col-cl-5 col-lg-6 col-md-12">
				<div class="position-relative">
					<h1>Book Your Perfect Escape with BluggleWheels</h1>
					<p class="fs-5 fw-light mb-0">Take a little break from the work sterss of everyday. Discover plan trip and explore beautiful destinations.</p>
					<div class="d-flex align-items-start justify-content-start gap-3 flex-wrap mt-xl-5 mt-4">
						<div class="bannrButton">
							<a href="/services#tour-packages">
								<button type="button" class="btn btn-whites fw-medium px-4 rounded-pill">Discover Place</button>
							</a>
						</div>
						<div class="bannrHelp">
							<!-- <a href="home-8.html#" data-bs-toggle="modal" data-bs-target="#popup-video" class="d-flex align-items-center justify-content-start gap-2">
								<div class=""><div class="square--50 circle bg-white"><i class="fa-solid fa-play text-danger"></i></div></div>
								<div class="videoText fw-medium text-light">Watch Video</div>
							</a> -->
						</div>
					</div>
				</div>
			</div>
			
			<!-- Form -->
			<div class="col-xl-5 col-lg-6 col-md-12">
				<div class="searchableForm bg-white rounded-3">
					<div class="searchableHead">
						<ul class="nav nav-tabs lights medium justify-content-center" id="tour-pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="home-8.html#hotels"><i class="fa-solid fa-hotel me-2"></i>OutStation Trips</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="home-8.html#flights"><i class="fa-solid fa-jet-fighter me-2"></i>Flights</a>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="home-8.html#tours"><i class="fa-solid fa-globe me-2"></i>Local</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="home-8.html#cabs"><i class="fa-solid fa-car me-2"></i>Cab</a>
							</li> -->
						</ul>
					</div>
					<div class="searchableCaps">
						<div class="search-wrap">
							<div class="tab-content p-xl-5 p-4">

								<div class="tab-pane active" id="hotels">
									<div class="row gy-3 gx-md-3 gx-sm-3">

										<div class="form-groupp hdd-arrow mb-0">
											<label for="fname" style="font-weight:bold">PickUp Location</label>
											<input type="text" id="pickup-location" class="name form-control" placeholder="PickUP Location">
										</div>

										<div class="form-groupp hdd-arrow mb-0">
											<label for="fname" style="font-weight:bold">Drop Location</label>
											<input type="text" id="drop-location" class="name form-control" placeholder="Drop Location">
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="row gy-3 gx-lg-2 gx-3">
												
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
												<style>
													::placeholder {
														font-weight:bold;
													}
													input[type=text], select {
														font-weight:bold;
													}
													</style>
													<div class="form-groupp hdd-arrow mb-0">
														<label for="name" style="font-weight:bold">Name</label>
														<input type="name" id="name" class="name form-control" placeholder="Name" style="font-weight:bold">
													</div>

														
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<div class="form-groupp hdd-arrow mb-0">
														<label for="phone" style="font-weight:bold">Phone No</label>
														<input type="number" id="phone" class="phone-no form-control" placeholder="Phone No" style="font-weight:bold">
													</div>
												</div>
											</div>
										</div>



										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group hdd-arrow mb-0">
												<label for="fname" style="font-weight:bold">Email</label>
												<input type="text" class="full-name form-control" placeholder="Email">
											</div>
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="row gy-3 gx-lg-2 gx-3">
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
													<div class="form-group hdd-arrow mb-0">
														<label for="fname" style="font-weight:bold">PickUp Date</label>
														<input class="form-control fw-bold choosedate" type="text" placeholder="PickUp Date">
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<div class="form-groupp hdd-arrow mb-0">
													<label for="fname" style="font-weight:bold">PickUp Time</label>
														<select class="time form-control fw-bold">
															<option value="">Select</option>
															<option>12:00 PM</option>
															<option>12:30 PM</option>
															<option>01:00 PM</option>
															<option>01:30 PM</option>
															<option>02:00 PM</option>
															<option>02:30 PM</option>
															<option>03:00 PM</option>
															<option>03:30 PM</option>
															<option>04:00 PM</option>
															<option>04:30 PM</option>
															<option>05:00 PM</option>
															<option>05:30 PM</option>
															<option>06:00 PM</option>
															<option>06:30 PM</option>
															<option>07:00 PM</option>
															<option>07:30 PM</option>
															<option>08:00 PM</option>
															<option>08:30 PM</option>
															<option>09:00 PM</option>
															<option>09:30 PM</option>
															<option>10:00 PM</option>
															<option>10:30 PM</option>
															<option>11:00 PM</option>
															<option>11:30 PM</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group mb-0">
												<a href="contact">
												<button type="button" class="btn btn-primary full-width fw-medium">Book Now<i class="fa-solid fa-location-arrow ms-2"></i></button>
												</a>
											</div>
										</div>
										
									</div>	
								</div>

								<div class="tab-pane" id="tours">
									<div class="row gy-3 gx-md-3 gx-sm-3">

										<div class="form-groupp hdd-arrow mb-0">
											<label for="fname" style="font-weight:bold">PickUp Location</label>
											<input type="text" id="pickup-location" class="name form-control" placeholder="PickUP Location">
										</div>

										<div class="form-groupp hdd-arrow mb-0">
											<label for="fname" style="font-weight:bold">Drop Location</label>
											<input type="text" id="drop-location" class="name form-control" placeholder="Drop Location">
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="row gy-3 gx-lg-2 gx-3">
												
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
												<style>
													::placeholder {
														font-weight:bold;
													}
													input[type=text], select {
														font-weight:bold;
													}
													</style>
													<div class="form-groupp hdd-arrow mb-0">
														<label for="fname" style="font-weight:bold">Name</label>
														<input type="text" id="name" class="name form-control" placeholder="Name" style="font-weight:bold">
													</div>
														
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<div class="form-groupp hdd-arrow mb-0">
														<label for="phone" style="font-weight:bold">Phone No</label>
														<input type="number" id="phone" class="phone-no form-control" placeholder="Phone No" style="font-weight:bold">
													</div>
												</div>
											</div>
										</div>



										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group hdd-arrow mb-0">
												<label for="fname" style="font-weight:bold">Email</label>
												<input type="text" class="full-name form-control" placeholder="Email">
											</div>
										</div>


										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="row gy-3 gx-lg-2 gx-3">
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
													<div class="form-group hdd-arrow mb-0">
														<label for="fname" style="font-weight:bold">PickUp Date</label>
														<input class="form-control fw-bold choosedate" type="text" placeholder="PickUp Date" readonly="readonly">
													</div>
												</div>
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<div class="form-groupp hdd-arrow mb-0">
													<label for="fname" style="font-weight:bold">PickUp Time</label>
														<select class="time form-control fw-bold">
															<option value="">Select</option>
															<option>12:00 PM</option>
															<option>12:30 PM</option>
															<option>01:00 PM</option>
															<option>01:30 PM</option>
															<option>02:00 PM</option>
															<option>02:30 PM</option>
															<option>03:00 PM</option>
															<option>03:30 PM</option>
															<option>04:00 PM</option>
															<option>04:30 PM</option>
															<option>05:00 PM</option>
															<option>05:30 PM</option>
															<option>06:00 PM</option>
															<option>06:30 PM</option>
															<option>07:00 PM</option>
															<option>07:30 PM</option>
															<option>08:00 PM</option>
															<option>08:30 PM</option>
															<option>09:00 PM</option>
															<option>09:30 PM</option>
															<option>10:00 PM</option>
															<option>10:30 PM</option>
															<option>11:00 PM</option>
															<option>11:30 PM</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="form-group mb-0">
												<a href="contact">
												<button type="button" class="btn btn-primary full-width fw-medium">Book Now<i class="fa-solid fa-location-arrow ms-2"></i></button>
												</a>
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
        <!-- </row> -->

      </div>
    </div>
		
		<!-- ============================ Hero Banner End ================================== -->


		<!-- =========================== Tours Offers Start ====================================== -->
        <section class="pt-4 pb-3 gray-simple position-relative" id="rate-card">
			<div class="container mt-3">

			<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
						<!-- <span class="text-primary">Our</span> -->
							<h2>Rate Card</h2>
							<!-- <p>"Journey Across Tamilnadu with BluggleWheels"</p> -->
						</div>
					</div>
				</div>

				<div class="row align-items-start justify-content-between gx-xl-4">


					<div class="col-lg-6 col-sm-12">

						<!-- Personal Information -->
						<div class="card mb-4">
							<div class="card-header">
								<h4><i class="fa-solid fa-file-invoice-dollar me-2"></i>Rate Card - OutStation Trip </h4>
							</div>
							<div class="card-body table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">CAR TYPE</th>
											<!-- <th scope="col">Seaters</th>
											<th scope="col">4Hrs/40kms</th>
											<th scope="col">8Hrs/80kms</th>
											<th scope="col">Additional Kms</th>
											<th scope="col">Additional Hrs</th> -->
											<th scope="col">Outstation <br>add per km</th>
											<th scope="col">Outstation<br> min.250km</th>
											<th scope="col">Driver<br> batta/day</th>
										</tr>
									</thead>
									<tbody>


									<thead>
										<tr>
											<th scope="col" colspan="4"><u><b>SEDAN</th>

											<!-- <th scope="col"></th>
											<th scope="col"></th>
											<th scope="col"></th> -->


											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
										</tr>
									</thead>
										<tr>
											<th>Maruti Dzire</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>15</td>
											<td>3750</td>
											<td>500</td>
										</tr>
                                        <tr>
											<th>Hyundai Aura</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>15</td>
											<td>3750</td>
											<td>500</td>
										</tr>
                                        <tr>
											<th>Toyota Etios</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>15</td>
											<td>3750</td>
											<td>500</td>
										</tr>


										<thead>
										<tr>
											<th scope="col" colspan="4"><u><b>SUV</th>
											<!-- <th scope="col"></th>
											<th scope="col"></th>
											<th scope="col"></th> -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
										</tr>
									</thead>
                                        <tr>
											<th>Innova</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>20</td>
											<td>5000</td>
											<td>500</td>
										</tr>
                                        <tr>
											<th>Mahindra Xylo</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>18</td>
											<td>4500</td>
											<td>500</td>
										</tr>
                                        <tr>
											<th>Maruti Suzuki(Ertiga)</th>
											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>30</td>
											<td>300</td> -->
											<td>18</td>
											<td>4500</td>
											<td>500</td>
										</tr>
									<!-- <thead> -->
										<!-- <tr> -->
											<!-- <th scope="col">HATCHBACK</th>
											<th scope="col"></th>
											<th scope="col"></th>
											<th scope="col"></th> -->


											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th> -->
											<!-- <th scope="col"></th>  -->
										<!-- </tr> -->
									<!-- </thead> -->
                                        <!-- <tr> -->
											<!-- <th>Maruti Celerio</th> -->

											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>25</td>
											<td>300</td> -->


											<!-- <td>12</td>
											<td>3000</td>
											<td>500</td> -->
										<!-- </tr> -->
                                        <!-- <tr> -->
											<!-- <th>Maruti Wagon</th> -->


											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>25</td>
											<td>300</td> -->


											<!-- <td>12</td>
											<td>3000</td>
											<td>500</td> -->
										<!-- </tr> -->
                                        <!-- <tr> -->
											<!-- <th>Tata Indica</th> -->


											<!-- <td>4+1</td>
											<td>1200</td>
											<td>2400</td>
											<td>25</td>
											<td>300</td> -->


											<!-- <td>12</td>
											<td>3000</td>
											<td>500</td> -->
										<!-- </tr> -->
									</tbody>
								</table>
							</div>
						</div>

					</div>

					<div class="col-lg-6 col-sm-12">

						<!-- Personal Information -->
						<div class="card mb-4">
							<div class="card-header">
								<h4><i class="fa-solid fa-file-invoice-dollar me-2"></i>Rate Card - Local</h4>
							</div>
							<div class="card-body table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">CAR TYPE</th>
											<th scope="col">Seaters</th>
											<th scope="col">4hrs/<br>40kms</th>
											<th scope="col">8hrs/<br>80kms</th>
											<th scope="col">Additional<br> kms</th>
											<th scope="col">Additional<br> hrs</th>
											<!-- <th scope="col">Outstation min.250km</th>
											<th scope="col">Outstation add per km</th>
											<th scope="col">Driver Batta/day</th> -->
										</tr>
									</thead>


									<thead>
											<tr>
												<th scope="col" colspan="6"><u><b>HATCHBACK</th>
												<!-- <th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>  -->
												<!-- <th scope="col"></th> -->
												<!-- <th scope="col"></th> -->
												<!-- <th scope="col"></th>  -->
											</tr>
										</thead>
											<tr>
												<th>Maruti Celerio</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>25</td>
												<td>250</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Maruti Wagon</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>25</td>
												<td>250</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Tata Indica</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>25</td>
												<td>250</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>

										<thead>
											<tr>
												<th scope="col" colspan="6"><u><b>SEDAN</th>
												<!-- <th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>  -->
												<!-- <th scope="col"></th> -->
												<!-- <th scope="col"></th> -->
												<!-- <th scope="col"></th>  -->
											</tr>
										</thead>
									<tbody>
											<tr>
												<th>Maruti Dzire</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>30</td>
												<td>300</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Hyundai Aura</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>30</td>
												<td>300</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Toyota Etios</th>
												<td>4+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>30</td>
												<td>300</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>


										<thead>
											<tr>
												<th scope="col" colspan="6"><u><b>SUV</th>
												<!-- <th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th>
												<th scope="col"></th> 
												<th scope="col"></th> -->
												<!-- <th scope="col"></th> -->
												<!-- <th scope="col"></th>  -->
											</tr>
										</thead>
											<tr>
												<th>Innova</th>
												<td>7+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>45</td>
												<td>450</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Mahindra Xylo</th>
												<td>7+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>40</td>
												<td>400</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>
											<tr>
												<th>Maruti Suzuki(Ertiga)</th>
												<td>7+1</td>
												<td>1200</td>
												<td>2400</td>
												<td>40</td>
												<td>400</td>
												<!-- <td>3000</td>
												<td>12</td>
												<td>500</td> -->
											</tr>


										


									</tbody>
								</table>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>


		<section class="pt-5 pb-0">
			<div class="container">

        		<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>OutStation Trips</h2>
							<!-- <p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p> -->
						</div>
					</div>
				</div>

				<!-- <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3"> -->

				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/ot1.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-0">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Pondicherry</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>Pondicherry</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">RS.2,780</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/vellore.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Vellore</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.2,675</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/ot5.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Coimbatore</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.8,105</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/ooty2.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Ooty</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.8,825</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/thiru.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Tiruvannamalai</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.3,425</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/ot6.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Thanjavur</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.5,585</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/kumb.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Kumbakonam</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.4,910</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/madu.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Madurai</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.9,100</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/kan.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Kanyakumari</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.11,300</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/selam.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Selam</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.5,750</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/erode.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Erode</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.6,605</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/mayil.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Mayiladuthurai</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.4,400</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/pudhu.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Pudukkottai</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.6,200</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/din.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Dindigul</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.6,905</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/karai.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Karaikudi</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.9,515</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/thiruchendur.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Thiruchendur</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.12,155</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/poll.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Pollachi</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.8,675</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/ramna.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Ramanathapuram</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.1,060</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="container">
				<div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4 mb-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/thoo.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Thoothukudi</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>30% Off On Summer Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.11,315</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/thirunelveli.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Tirunelveli</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>20% Off On Domestic Holiday</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.11,270</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						<div class="pop-touritems">
							<a href="" class="card rounded-3 border m-0">
								<div class="offers-container row align-items-center">
									<div class="offers-flex position-relative col-4">
										<div class="offers-pic p-2"><img src="assets/img/city/nagerkovil.jpg" class="img-fluid rounded" alt=""></div>
									</div>
									<div class="offers-captions col-8 ps-2">
									<h4 class="city fs-6 m-0 fw-bold">
											<span>Chennai</span>
											<span class="svg-icon svg-icon-muted svg-icon-2hx px-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path
														d="M17.4 7H4C3.4 7 3 7.4 3 8C3 8.6 3.4 9 4 9H17.4V7ZM6.60001 15H20C20.6 15 21 15.4 21 16C21 16.6 20.6 17 20 17H6.60001V15Z"
														fill="currentColor" />
													<path opacity="0.3"
														d="M17.4 3V13L21.7 8.70001C22.1 8.30001 22.1 7.69999 21.7 7.29999L17.4 3ZM6.6 11V21L2.3 16.7C1.9 16.3 1.9 15.7 2.3 15.3L6.6 11Z"
														fill="currentColor" />
												</svg>
											</span>
											<span>Nagercoil</span>
										</h4>
										<!-- <h4 class="city fs-5 m-0 fw-bold">
											<span>40% Off On Winter Vacation</span>
										</h4> -->
										<div class="booking-wrapes d-flex align-items-center justify-content-between">
											<p class="fs-5 low-price m-0"><span class="tag-span">Rs.11,300</span></p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
	    </section>



	<section class="gray-simple pt-5 pb-5">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Best Attraction In Tamilnadu</h2>
							<p>Discover Tamilnadu's Wonders</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-3">

					

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/kolli-hills.jpg" data-lightbox="roadtrip"><img src="assets/img/city/kolli-hills.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>
									<!-- <div class="destinations-pics"><a href="/"><img src="assets/img/city/ct-7.png" class="img-fluid" alt=""></a>
									</div> -->
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Kolli Hills</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">10 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">5 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/yercaud.jpg" data-lightbox="roadtrip"><img src="assets/img/city/yercaud.jpg" alt="image"
											class="rounded-2 img-fluid"></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Yercaud</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">12 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">4 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/ooty.jpg" data-lightbox="roadtrip"><img src="assets/img/city/ooty.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>	
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Ooty</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">08 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">6 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/kodaikanal.jpg" data-lightbox="roadtrip"><img src="assets/img/city/kodaikanal.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Kodaikanal</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">32 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/hogenakkal.jpg" data-lightbox="roadtrip"><img src="assets/img/city/hogenakkal.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>	
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Hogenakkal</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">16 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/yelagiri.jpg" data-lightbox="roadtrip"><img src="assets/img/city/yelagiri.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Yelagiri</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">25 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">15 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">
								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/courtallam.jpg" data-lightbox="roadtrip"><img src="assets/img/city/courtallam.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>
								</div>
								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Courtallam</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">29 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">14 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
							<div class="destination-card-wraps position-relative">


								<div class="destination-card-thumbs">
									<div class="destinations-pics"><a href="assets/img/city/coonoor.jpg" data-lightbox="roadtrip"><img src="assets/img/city/coonoor.jpg" alt="image"
												class="rounded-2 img-fluid"></a>
									</div>
								</div>

								<!-- <div class="galleryGrid__item relative d-flex">
									<a href="assets/img/hotel/hotel-1.jpg" data-lightbox="roadtrip"><img src="assets/img/hotel/hotel-1.jpg" alt="image"
											class="rounded-2 img-fluid"></a>
								</div> -->


								<div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
									<div class="exploterr-text">
										<h3 class="text-light fw-bold mb-1">Conoor</h3>
										<!-- <p class="detail ellipsis-container text-light">
											<span class="ellipsis-item__normal">22 hotels</span>
											<span class="separate ellipsis-item__normal"></span>
											<span class="ellipsis-item">12 Rental</span>
										</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>



		<section class="pt-5 pb-0">
			<div class="container mt-0">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
						<!-- <span class="text-primary">Our</span> -->
							<h2>Our Services</h2>
							<p>"Journey Across Tamilnadu with BluggleWheels"</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center g-xl-5 g-4">

				<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="career-single-wrap">
							<a href="/services#out-station-trips" class="careerBox">
								<div class="careerBox-flex d-flex align-items-end justify-content-between">
									<div class="careerBoxfl01 d-flex align-items-start">
										<div class="careerBoxflicon flex-shrink-0">
											<i class="fa-solid fa-hotel me-2 fs-3 icons"></i>
										</div>
										<div class="careerBoxflcaps ps-3">
											<h5 class="career-tlt fs-6 mb-1">Out Station Trips</h5>
											<p class="career-jbs text-md">"Experience the Best of Outstation Travel"</p>
											<p class="career-jbs">BluggleWheels offers outstation trips showcasing Tamilnadu's beauty and cultural diversity. Whether you seek scenic landscapes, adventure, or relaxation, our curated journeys cater to all travelers. Visit hill stations, beaches, and countryside, or enjoy trekking, camping, and river rafting with our thrilling adventure escapes.
												<!-- <p>BluggleWheels offers an array of outstation trips designed 
												to provide refreshing escapes from the daily grind, showcasing the beauty and 
												diversity of Tamilnadu. Whether you're looking to explore scenic landscapes,
												 indulge in adventure, or simply unwind, our carefully curated journeys cater 
												 to every traveler's needs. Visit picturesque hill stations, serene beaches,
												  and tranquil countryside with our scenic getaways, or enjoy trekking, camping,
												   and river rafting with our adventure escapes.</p> -->
												   <!-- <p> Immerse yourself in regional 
												   traditions and crafts on cultural journeys to historic sites and ancient 
												   temples, or rejuvenate at wellness resorts and spa retreats with our relaxation 
												   trips. Our outstation packages include comfortable transportation, well-planned 
												   itineraries, and accommodations for a seamless and enjoyable experience. Escape
												    the city and discover Tamilnadu's hidden gems with BluggleWheels, where we make 
													every trip memorable and hassle-free.</p> -->
										</div>
									</div>
									<div class="careerBox-link"><i class="fa-solid fa-arrow-right-long"></i></div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="career-single-wrap">
							<a href="/services#tour-packages" class="careerBox">
								<div class="careerBox-flex d-flex align-items-end justify-content-between">
									<div class="careerBoxfl01 d-flex align-items-start">
										<div class="careerBoxflicon flex-shrink-0">
											<i class="fa-solid fa-globe me-2 fs-3 icons"></i>
										</div>
										<div class="careerBoxflcaps ps-3">
											<h5 class="career-tlt fs-6 mb-1">Tour Packages</h5>
											<p class="career-jbs text-md">"Explore Tamilnadu with Custom Tour Packages"</p>
											<p class="career-jbs">At BluggleWheels, we offer diverse tour packages for unforgettable experiences across Tamilnadu. Whether seeking adventure, relaxation, cultural immersion, or natural beauty, our packages cater to all. Explore Tamilnadu's heritage through landmarks and festivals, embark on treks and safaris, rejuvenate at beach resorts and wellness retreats, or enjoy family activities at theme parks and museums.
											
												<!-- <p>At BluggleWheels, we offer a variety of tour packages designed 
												to provide unforgettable experiences across Tamilnadu. Whether you're seeking
												 adventure, relaxation, cultural immersion, or natural beauty, our thoughtfully
												  crafted packages cater to every traveler's desires. Explore Tamilnadu's rich
												   heritage through visits to landmarks and festivals, embark on thrilling 
												   adventures like trekking and wildlife safaris, rejuvenate at serene beach 
												   resorts and wellness retreats, or enjoy family-friendly activities at theme 
												   parks and interactive museums. </p> -->
													<!-- <p> For couples, we offer romantic honeymoon 
												   destinations with special experiences, and for quick getaways, we have
												    well-planned weekend escapes.Our packages include comfortable accommodations,
													 guided tours, transportation, and curated itineraries for a hassle-free
													  journey. Discover the diverse and vibrant beauty of Tamilnadu with BluggleWheels,
													   where we make your travel dreams come true with packages that suit every
													    budget and preference.</p> -->
										</div>
									</div>
									<div class="careerBox-link"><i class="fa-solid fa-arrow-right-long"></i></div>
								</div>
							</a>
						</div>
					</div>

					
					
				</div>	
			</div>
		</section>
		<!-- =========================== Tours Offers End ====================================== -->
		<section>
		
			<div class="container mt-0">

				<div class="row align-items-center justify-content-center">
						<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
							<div class="secHeading-wrap text-center mb-5">
								<h2>Our Attractive Experience And Services For you!</h2>
								<!-- <h2 class="fw-bold lh-base">Our Attractive Experience And Services For you!</h2>  -->
								<!-- <p>Discover Tamilnadu's Wonders</p> -->
							</div>
						</div>
				</div>


				<div class="row align-items-center justify-content-between">

					<div class="col-xl-5 col-lg-5 col-md-6">
						<div class="position-relative">
							<img src="assets/img/homeab.jpg" class="img-fluid rounded-3 position-relative z-1" alt="">
							<div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-2">
								<div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3 z-2 shadow-wrap">

									<!-- Avatar group -->
									<!-- <div class="me-4">
										<h6 class="fw-normal">Client</h6>
										Avatar group -->
										<!-- <ul class="avatar-group mb-0"> -->
											<!-- <li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-1.jpg" alt="avatar">
											</li> -->
											<!-- <li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-2.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md"> -->
												<!-- <img class="avatar-img circle" src="assets/img/team-3.jpg" alt="avatar">
											</li>
											<li class="avatar avatar-md">
												<img class="avatar-img circle" src="assets/img/team-4.jpg" alt="avatar">
											</li> -->
											<!-- <li class="avatar avatar-md">
												<div class="avatar-img circle bg-primary">
													<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
												</div> -->
											<!-- </li> -->
										<!-- </ul> --> 
									<!-- </div> -->

									<!-- Rating -->
									<!-- <div>
										<h6 class="fw-normal mb-3">Rating</h6>
										<h6 class="m-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i></h6>
									</div> -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-5 col-lg-6 col-md-6">
						<div class="bestExperience-block">
							
							<!-- <p class="fw-medium text-primary text-md text-uppercase mb-0">Memories</p> -->
							<!-- <h2 class="fw-bold lh-base">Our Attractive Experience And Services For you!</h2> -->
							<p class="fw-light fs-6">Welcome to BluggleWheels, where we offer an exceptional travel experience tailored 
								for your journeys to popular destinations across Tamilnadu. As a premier travel agency, we provide top-notch 
								car rental services designed to make your travels comfortable, convenient, and memorable. Our fleet of 
								well-maintained vehicles ranges from economy cars to luxury SUVs, catering to all your travel needs and 
								preferences. Whether you're exploring bustling cities, serene countryside, or historic landmarks, our 
								reliable and comfortable cars ensure a smooth and enjoyable ride. Our services include personalized travel 
								itineraries, 24/7 customer support, and flexible rental options to suit your schedule. At BluggleWheels, 
								we are committed to delivering a seamless travel experience, allowing you to focus on discovering the 
								beauty and diversity of Tamilnadu without any hassle. Join us and experience the freedom of exploring Tamilnadu 
								at your own pace with BluggleWheels, your trusted travel partner.</p>
							<div class="d-inline-flex mt-4">
								<!-- <div -->
									<!-- class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3"> -->
									<a href="/about-us">
										<button class=" nav-link btn btn-md btn-light-primary fw-medium me-2">Know More</button>
								    </a>
									<!-- <a class="nav-link" href="/about-us"><h4 class="fw-bold fs-3 m-0">Know More</h4></a> -->
								<!-- </div> -->

								<!-- <li class="nav-item">
										<a href="/services#tour-packages">
											<button class=" nav-link btn btn-md btn-light-primary fw-medium me-2"><i class="fa-solid fa-globe me-2"></i>Tour Packages</button>
										</a>
									</li> -->
									 
									<!-- <ul>
										<li class="nav-item">
										<a class="nav-link" href="/outstationtrip"><i class="fa-solid me-2"></i>Know More</a>
										</li>
									</ul> -->
									<!-- <li class="nav-item">
									<a class="nav-link" href="/outstationtrip"><i class="fa-solid fa-hotel me-2"></i>Out Station Trips</a>
								    </li> -->


									<!-- <p class="m-0 text-sm text-muted-2">Year Esperience</p> -->
								<!-- <div
									class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3">
									<h6 class="fw-bold fs-3 m-0">78</h6>
									<p class="m-0 text-sm text-muted-2">Destination Collaboration</p>
								</div>
								<div
									class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple">
									<h6 class="fw-bold fs-3 m-0">25K</h6>
									<p class="m-0 text-sm text-muted-2">Happy Customers</p>
								</div> -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>


		<!-- ============================ Popular Attraction Start ================================== -->
		<!-- <section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Best Attraction In USA</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-xl-3 gx-lg-4 gx-4">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-7.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Kansas City</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>260 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-5.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Los Angeles</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>240 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-6.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Antonio</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>312 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-8.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Francisco</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>220 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-9.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Nashville</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>180 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/attr/attr-10.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Philadelphia</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>612 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/tours/tour-11.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Jose</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>145 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<a href="home-2.html#" class="card rounded-3 border br-dashed m-0">
								<div class="flight-thumb-wrapper p-2 pb-0">
									<div class="popFlights-item-overHidden rounded-3">
										<img src="assets/img/tours/tour-10.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="explot">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Diego</span>
											</h4>
											<div class="rates">
												<div class="rat-reviews">
													<span>310 Things To Do</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>

				</div>

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="text-center position-relative mt-5">
							<button type="button" class="btn btn-light-primary fw-medium px-5">Explore More<i
									class="fa-solid fa-arrow-trend-up ms-2"></i></button>
						</div>
					</div>
				</div>

			</div>
		</section> -->
		<!-- ============================ Popular Attraction Start ================================== -->


		<!-- ============================ Locations Design Start ================================== -->
		
		<!-- ============================ Locations Design Start ================================== -->

		<!-- ============================ Popular Venues Start ================================== -->
		<!-- <section>
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Hot & Trending Venues</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>

				<div class="row justify-content-center gy-4 gx-xl-3 gx-3">

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-1.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Long Beach</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.8</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>120 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-2.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Jacksonville</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.7</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>78 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-3.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Kansas City</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.9</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>65 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-4.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Los Angeles</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.6</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>23 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-5.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Antonio</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.7</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>45 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-6.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>Philadelphia</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.8</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>35 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-8.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Jose</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.9</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>48 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="pop-touritem">
							<div class="card rounded-3 border m-0">
								<div class="flight-thumb-wrapper">
									<div class="popFlights-item-overHidden">
										<img src="assets/img/attr/attr-7.jpg" class="img-fluid" alt="">
									</div>
								</div>
								<div class="touritem-middle position-relative p-3">
									<div class="touritem-flexxer">
										<div class="d-flex align-items-center justify-content-between">
											<h4 class="city fs-6 m-0 fw-bold">
												<span>San Diego</span>
											</h4>
											<span class="city-rates"><i class="fa-solid fa-star text-warning me-1"></i><span
													class="fw-bold text-dark">4.7</span></span>
										</div>
										<div class="detail ellipsis-container mt-2">
											<p class="m-0 text-md">Cicero famously orated against his political opponent Lucius Sergius
												Catilina.</p>
										</div>
										<div class="flight-footer">
											<h5 class="fs-5 low-price m-0"><span class="tag-span">From</span> <span class="price">$492 -
													$799</span></h5>
											<div class="rates">
												<div class="rat-reviews">
													<span>85 Rooms</span>
												</div>
											</div>
										</div>
									</div>
									<div class="booking-wrapes d-flex align-items-center mt-3">
										<button class="btn btn-md btn-light-primary fw-medium rounded full-width me-2">Request Book<i
												class="fa-solid fa-arrow-trend-up ms-2"></i></button>
										<button class="btn btn-md btn-light-success fs-5 px-3 rounded ms-1"><i
												class="fa-solid fa-heart"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- ============================ Popular Venues Start ================================== -->


		<!-- ============================ Video Helps End ================================== -->
		<section class="bg-cover" style="background:url(assets/img/bgvid.jpg)no-repeat;" data-overlay="5">
			<div class="ht-150"></div>
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">

						<div class="video-play-wrap text-center">
							<div class="video-play-btn d-flex align-items-center justify-content-center">
								<a href="" data-bs-toggle="modal" data-bs-target="#popup-video" class="square--90 circle bg-white fs-2 text-primary"><i class="fa-solid fa-play"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="ht-150"></div>
		</section>
		<!-- ============================ Video Helps End ================================== -->


		<!-- ============================ Our Reviews Start ================================== -->
		<section class="gray-simple bg-cover" style="background:url(assets/img/reviewbg.png)no-repeat;">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Loving Reviews By Our Customers</h2>
							<p>"Heartfelt Praise from Our Valued Customers"</p>
						</div>
					</div>
				</div>

				<div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-1.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Aman Diwakar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Kunal M. Thakur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-3.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Divya Talwar</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-4.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Karan Maheshwari</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="card border rounded-3">
							<div class="card-body">
								<div class="position-absolute top-0 end-0 mt-3 me-3"><span
										class="square--40 circle text-primary bg-light-primary"><i
											class="fa-solid fa-quote-right"></i></span></div>
								<div class="d-flex align-items-center flex-thumbes">
									<div class="revws-pic"><img src="assets/img/team-5.jpg" class="img-fluid rounded-2" width="80" alt="">
									</div>
									<div class="revws-caps ps-3">
										<h6 class="fw-bold fs-6 m-0">Ritika Mathur</h6>
										<p class="text-muted-2 text-md m-0">United States</p>
										<div class="d-flex align-items-center justify-content-start">
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
											<span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
										</div>
									</div>
								</div>
								<div class="revws-desc mt-3">
									<p class="m-0 text-md">Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
										sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt</p>
								</div>
							</div>
						</div>
					</div> -->

				</div>
			</div>
		</section>
		<!-- ============================ Our Reviews End ================================== -->


		<!-- ============================ Our Experience End ================================== -->
		
		<!-- ============================ Our Experience End ================================== -->


		<!-- ================================ Article Section Start ======================================= -->
		<!-- <section class="pt-0">
			<div class="container">

				<div class="row align-items-center justify-content-center">
					<div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
						<div class="secHeading-wrap text-center mb-5">
							<h2>Trending & Popular Articles</h2>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina.</p>
						</div>
					</div>
				</div>


				<div class="row justify-content-center g-4">

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="home-2.html#" class="d-block"><img src="assets/img/blog-1.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Destination</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="home-2.html#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="home-2.html#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="home-2.html#" class="d-block"><img src="assets/img/blog-2.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Journey</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="home-2.html#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="home-2.html#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="blogGrid-wrap d-flex flex-column h-100">
							<div class="blogGrid-pics">
								<a href="home-2.html#" class="d-block"><img src="assets/img/blog-3.jpg" class="img-fluid rounded" alt="Blog image"></a>
							</div>
							<div class="blogGrid-caps pt-3">
								<div class="d-flex align-items-center mb-1"><span
										class="label text-success bg-light-success">Business</span></div>
								<h4 class="fw-bold fs-6 lh-base"><a href="home-2.html#" class="text-dark">Make Your Next Journey Delhi To Paris in
										Comfirtable And Best Price</a></h4>
								<p class="mb-3">Think of a news blog that's filled with content hourly on the Besides, random text risks
									to be unintendedly humorous or offensive day of going live.</p>
								<a class="text-primary fw-medium" href="home-2.html#">Read More<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section> -->
		<!-- ================================ Article Section Start ======================================= -->


		<!-- ============================ Call To Action Start ================================== -->
		<div class="position-relative bg-cover py-5 bg-primary" style="background:url(assets/img/bgsubmit.jpg)no-repeat;"
			data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-between">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="calltoAction-wraps position-relative py-5 px-4">
							<div class="ht-40"></div>
							<div class="row align-items-center justify-content-center">
								<div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

									<div class="calltoAction-title mb-5">
										<h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Special Discount with GeoTrip.com
										</h4>
									</div>
									<div class="newsletter-forms mt-md-0 mt-4">
										<form>
											<div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

												<div class="col-xl-9 col-lg-8 col-md-8">
													<div class="form-group m-0">
														<input type="text" class="form-control bold ps-1 border-0" placeholder="Enter Your Mail!">
													</div>
												</div>
												<div class="col-xl-3 col-lg-4 col-md-4">
													<div class="form-group m-0">
														<button type="button" class="btn btn-primary fw-medium full-width">Submit<i
																class="fa-solid fa-arrow-trend-up ms-2"></i></button>
													</div>
												</div>

											</div>
										</form>
									</div>

								</div>
							</div>
							<div class="ht-40"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- ============================ Call To Action Start ================================== -->
		@endsection