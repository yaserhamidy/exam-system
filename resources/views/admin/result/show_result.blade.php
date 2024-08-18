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
											<th scope="col">نام شاگرد</th>
											<th scope="col"> نام امتحان </th> 
											<th scope="col">جواب درست</th>
											<th scope="col">جواب غلط</th>
											
											<th scope="col">عملیات</th>
										</tr>
									</thead>
									<tbody>
										
									<?php
                                   $counter = 0;
									?>
									
										
										
										{{-- @foreach($subject as $sub) --}}
										<tr>

											<th scope="row">{{++$counter}}</th>
											
											
											{{-- <td>{{$sub->sub_name}}</td> --}}
											<td>yaser</td>
											<td>yaser</td>
											<td>yaser</td>
											<td>yaser</td>
											<td>yaser</td>
											<td>
												<div class="row" style="gap:10px">
													{{-- <a href="subjectEdit/{{$sub->sub_classesses_id}}" class='btn btn-primary'  style="margin: 0 10px;" >ویرایش</a> --}}
													{{-- <a href="subjectDelete/{{$sub->sub_classesses_id}}" class='btn btn-danger' style="margin: 0 10px;" >حذف</a> --}}
													
												</div>
											</td>
										</tr>
										{{-- @endforeach --}}
									</tbody>
								</table>
								<div class="d-flex justify-content-center">
									{{-- {{$subject->links()}} --}}
								  </div>
							</div>

						</div>
					</div>

				</div>


				





			</div>
		</main>


@endsection


