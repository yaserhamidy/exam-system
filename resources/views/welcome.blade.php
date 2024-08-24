

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ Asset('AdminDesign/Asset/css/fontawsome/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ Asset('main-page-style.css')}}">
    
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css"> 
    <title>Document</title>
    
  </head>
  <body>
    <nav>
    <div>
      <img src="Capture3-removebg-preview.png" class="m-3" alt="">
    </div>
    
    <form action="{{ route('show_catagory') }}" method="GET" class="d-flex align-items-center m-3">
      <div class="input-group">
        <input type="text" name="query" class="form-control search1" placeholder="جوستجو امتحان" value="{{ request()->get('query') }}">
        
          <button class="btn btn-primary " type="submit">جوستجو</button>
        
      </div>
    </form>
      
      <i class="fa-solid fa-bars mune" onclick=" openSideBar() "></i>
    
    </nav>
    <div class="mainContainer">
      <div class="content">

        <h3 class="m-4 heading">همه موارد</h3>
        <div class="row">
        @foreach ($posts as $post)
        <div class="card-container col-md-3">
          
          <div class="card">
            <img class="card-img-top" 
        src="exam.png" alt="Title" />
        <div class="card-body">
          <h4 class="card-title ">امتحان {{ $post->sub_name }} </h4>
          <p class="card-text time">زمان امتحان: {{ $post->timer }}</p>
          <p class="card-text score">نمره امتحان: {{ $post->total_score }}</p>
          
          <a href="{{ route('exam_page', ['sub_classesses_id' => $post->sub_classesses_id]) }}" class="btn btn-primary">شروع امتحان</a>
        </div>
      </div>
    </div>
      @endforeach
    </div>
    
    <div class="links">
      {{$posts->links()}}
  </div>

  </div>
  <div class="sideBar" id=" sideBar">
    
    <a href="admin">click it</a>
            <div class="btn1">
              <button
              type="button   "
              class="btn 
  
              "
            >
              همه موارد
            </button>
            </div>
        
          <div class="btn1">
            <button
            type="button"
            class="btn btnDevider"
            >
            تست خودکار
          </button>
          </div>
        
      </div>
    </div>
    <script src="JS page/main-page-js.js"></script>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

