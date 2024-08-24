<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>yaser</title>
  <style>
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('yaser.jpg');
      background-size: cover;
      
      background-position: center;
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="{{ route('welcome') }}" class="button">Go to Exam Page</a>
  </div>
  <script>
    document.querySelector('.button').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default link behavior
      window.location.href = '{{ route("welcome") }}'; // Redirect to the exam page
    });
  </script>
</body>
</html>