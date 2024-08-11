@extends('layout.main')
@section('content')


<main class="bmd-layout-content">
			<div class="container-fluid ">

				<!-- content -->
				<!-- breadcrumb -->

				
             
				<form action="{{route('addQuestion')}}" method="post">
				@csrf
				<div class="card" style="margin-top:40px;">
				<div class="card-header">اضافه کردن سوال</div>
				<div class="row m-1 mb-2">
                   
					<div class="col-md-12">
						<label for="" style="margin-top:20px;">سوال</label>
                        <input type="text" name="question" class="form-control">
                    </div>
						
                    <div class="row col-md-12">
                        <div class="col-md-6 mt-4">
                            <label for="">  جواب اول  </label>
                            <input type="text" name="answerone" class="form-control">
                        </div>
                        
                    <div class="col-md-6 mt-4">
                        <label for=""> جواب دوم  </label>
                        <input type="text" name="answertow" class="form-control">
                  </div>
                    <div class="col-md-6 mt-4">
                        <label for=""> جواب سوم </label>
                        <input type="text" name="answerthree" class="form-control">
                    </div>
                    <div class="col-md-6 mt-4 ">
                        <label for=""> جواب چهارم  </label>
                        <input type="text" name="answerfour" class="form-control">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for=""> جواب درست </label>
                        <input type="text" name="finalanswer" class="form-control">
                    </div>
                    

                    
                    <div class="col-md-6 mt-4">
                    <label >نام امتحان </label>
        <div class="col-md-12">
         <select name="sub_classesses_id" class="form-control" id="">
              @foreach($subject as $sub)
            <option value="{{$sub->sub_classesses_id}}"> {{$sub->sub_name}} </option>
                @endforeach
         </select>
        </div>
                    </div>
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



