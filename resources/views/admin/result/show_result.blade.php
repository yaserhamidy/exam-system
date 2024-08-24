@extends('layout.main')
@section('content')

<main class="bmd-layout-content">
    <div class="container-fluid">
        <div class="col-xs-1 col-sm-1 col-md-12 col-lg-12 p-2">
            <div class="card shade h-100">
                <div class="card-body">
                    <div class="row">
                        <a href="{{ route('add_sub') }}" class="btn btn-primary">اضافه کردن امتحان</a>
                    </div>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">شماره</th>
                                <th scope="col">نام شاگرد</th>
                                <th scope="col">نام امتحان</th>
                                <th scope="col">جواب درست</th>
                                <th scope="col">جواب غلط</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
						<tbody>
							@foreach ($results as $result)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td>{{ $result->student->name }}</td>
								<td>{{ $result->exam->name }}</td>
								<td>{{ $result->correct_answers }}</td>
								<td>{{ $result->incorrect_answers }}</td>
								<td>
									<div class="row" style="gap:10px">
										<a href="" class='btn btn-primary' style="margin: 0 10px;">Edit</a>
										<a href="" class='btn btn-danger' style="margin: 0 10px;">Delete</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{-- {{ $results->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection