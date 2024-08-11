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
							  <a href="{{route('add_sub')}}" class="btn btn-primary">اضافه کردن امتحان</a>

							  </div>
								<hr>
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">شماره</th>
											<th scope="col">نام</th>
											<th scope="col">فعال</th>
											<th scope="col">زمان</th>
											<th scope="col">تعداد سوالات</th>
											<th scope="col">مجموعه نمرات</th>
											<th scope="col">نام کتگوری</th>
											<th scope="col">عملیات</th>
										</tr>
									</thead>
									<tbody>
										
									<?php
                                   $counter = 0;
									?>
									
										
										
										@foreach($subject as $sub)
										<tr>

											<th scope="row">{{++$counter}}</th>
											
											<td>{{$sub->sub_name}}</td>
											<td>{{$sub->status}}</td>				
											<td>{{$sub->timer}}</td>
											<td>{{$sub->question_count}}</td>
											<td>{{$sub->total_score}}</td>
											<td>{{$sub->name}}</td>
											<td>
												<div class="row">
													<a href="subjectEdit/{{$sub->sub_classesses_id}}" class='btn btn-primary'  style="margin: 0 10px;" >ویرایش</a>
													<a href="subjectDelete/{{$sub->sub_classesses_id}}" class='btn btn-danger' style="margin: 0 10px;" >حذف</a>
													
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


