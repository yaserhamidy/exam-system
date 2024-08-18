<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ Asset('userDesign/dashbordUser.css')}}">
    <title>Document</title>
</head>
<body>
    <a href="admin">click it</a>
    <div class="container">
        <h1 class="text-center mb-5">Exam Dashboard</h1>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="exam-card">
                    <div class="card-header">
                        <i class="fas fa-history"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->sub_name }} Exam</h4>
                        <p class="card-text">Time: {{ $post->timer }}</p>
                        <p class="card-text">Score: {{ $post->total_score }}</p>
                        <a href="exam_page" class="btn">View Exam</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>