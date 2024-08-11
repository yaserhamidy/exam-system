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
							  <a href="add_student" class="btn btn-primary">اضافه کردن شاگردان</a>

							  </div>
								<hr>
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">شماره</th>
											<th scope="col">نام</th>
											<th scope="col">ایمیل آدرس</th>
											{{-- <th scope="col">رمز عبور</th> --}}
											<th scope="col">عملیات</th>
										</tr>
									</thead>
									<tbody>
										
									
									
									<?php

                                   $counter = 0;
                                                                     
									?>
										
										@foreach($students as $stud)
										<tr>
											<th scope="row">{{++$counter}}</th>
											
											<td>{{$stud->name}}</td>
											<td>{{$stud->email}}</td>
											{{-- <td>{{$stud->password}}</td> --}}
											<td>
												<div class="row">
													<a href="studentEdit/{{$stud->id}}" class='btn btn-primary'  style="margin: 0 10px;" >ویرایش</a>
													<a href="studentDelete/{{$stud->id}}" class='btn btn-danger' style="margin: 0 10px;" >حذف</a>
													
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



