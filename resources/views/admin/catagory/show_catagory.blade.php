@extends('layout.main')
@section('content')


<main class="bmd-layout-content">
			<div class="container-fluid ">

				<!-- content -->
				<!-- breadcrumb -->

				

				
			


				
				
				
					<div class="col-xs-1 col-sm-1 col-md-12 col-lg-12 p-2">
						<div class="card shade h-100">
							<div class="card-body">
								<!-- <h5 class="card-title">Table Item</h5> -->
                              <div class="row">
							  <a href="add_catagory" class="btn btn-primary">اضافه کردن کتگوری</a>

							  </div>
								<hr>
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">شماره</th>
											<th scope="col">نام</th>
											<th scope="col">معلومات</th>
											<th scope="col">عملیات</th>
										</tr>
									</thead>
									<tbody>
										
									
									
									<?php

                                   $counter = 0;
                                                                     
									?>
										
										@foreach($catagories as $cat)
										<tr>
											<th scope="row">{{++$counter}}</th>
											
											<td>{{$cat->name}}</td>
											<td>{{$cat->description}}</td>
											<td>
												<div class="row">
													<a href="catagoryEdit/{{$cat->cat_id}}" class='btn btn-primary'  style="margin: 0 10px;" >ویرایش</a>
													<a href="catagoryDelete/{{$cat->cat_id}}" class='btn btn-danger' style="margin: 0 10px;" >حذف</a>
													
												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>

						</div>
					</div>

				</div>


				





			</div>
		</main>


@endsection



