<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        /* Add any custom styles here */
        .user-answer.correct {
            color: green;
            font-weight: bold;
        }
        .user-answer.incorrect {
            color: red;
            font-weight: bold;
        }
        .correct-answer {
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1>Test Results</h1>
        <p>You answered {{ $correctAnswers }} out of {{ $totalQuestions }} questions correctly.</p>
        <p>Your percentage score is {{ number_format($percentage, 2) }}%.</p>

        <h2 class="mt-5">Question Answers</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userAnswers as $questionId => $userAnswer)
                <tr>
                    <td>{{ $questions->where('question_id', $questionId)->first()->question }}</td>
                    <td>
                        @if ($userAnswer === null)
                        <span class="text-muted">No answer chosen</span>
                        @else
                        <span class="user-answer {{ $userAnswer == $questions->where('question_id', $questionId)->first()->finalanswer ? 'correct' : 'incorrect' }}">{{ $userAnswer }}</span>
                        @endif
                    </td>
                    <td>
                        <span class="correct-answer">{{ $questions->where('question_id', $questionId)->first()->finalanswer }}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <a href="{{ route('welcome') }}" class="btn btn-primary">Back to Questions</a>
        </div>
    </div>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>