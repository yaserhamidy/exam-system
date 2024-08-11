@extends('layout.main')
@section('content')


<main class="bmd-layout-content">
			<div class="container-fluid ">

				<!-- content -->
				<!-- breadcrumb -->

				
             
				<form action="addSubject" method="post">
				@csrf
				<div class="card" style="margin-top:40px;">
				<div class="card-header">اضافه کردن امتحان</div>
				<div class="row m-1 mb-2">
					<div class="col-md-12">
						<label for="" style="margin-top:20px;">نام امتحان</label>
                        <input type="text" name="sub_name" class="form-control">
                    </div>
						
                    <div class="col-md-12 mt-4">
						<label for=""> فعال </label>
                        <input type="text" name="status" class="form-control">
                    </div>
                    <div class="row col-md-12">
                        <div class="col-md-4 mt-4">
                            <label for="">  زمان  </label>
                            <input type="number" name="timer" class="form-control">
                        </div>
                        
                    <div class="col-md-4 mt-4">
                        <label for=""> تعداد سوالات </label>
                        <input type="number" name="question_count" class="form-control">
                  </div>
                    <div class="col-md-4 mt-4">
                        <label for=""> مجموعه نمرات </label>
                        <input type="number" name="total_score" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
            <label >نام کتگوری</label>
<div class="col-md-12">
 <select name="cat_id" class="form-control" id="">
      @foreach($catagory as $cat)
    <option value="{{$cat->cat_id}}"> {{$cat->name}} </option>
        @endforeach
 </select>
</div>
            </div>

                
				 
               <div class="col-md-2">
			   <input type="submit" class="btn btn-primary" value='اضافه کردن'  style="margin:20px;">

			   </div>				 
				</div>
				</form>


                






				
				
				
				

				</div>


				





			</div>
		</main>


@endsection



