@extends('layout.main')
@section('content')

<main class="bmd-layout-content">
    <div class="container-fluid ">
        <form action="addCatagory" method="post" id="catagoryForm">
            @csrf
            <div class="card" style="margin-top:40px;">
                <div class="card-header">اضافه کردن کتگوری</div>
                <div class="row m-1 mb-2">
                    <div class="col-md-12">
                        <label for="" style="margin-top:20px;">نام کتگوری</label>
                        <input type="text" name="name" class="form-control" id="nameInput">
                        <span class="text-danger d-none" id="nameError">لطفا یک نام وارد کنید</span>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="">معلومات </label>
                        <input type="text" name="description" class="form-control" id="descriptionInput">
                        <span class="text-danger d-none" id="descriptionError">لطفا معلومات وارد کنید</span>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="btn btn-primary" value='اضافه کردن' style="margin:20px;" onclick="validateForm(event)">
                </div>
            </div>
        </form>
    </div>
</main>

<script>
    function validateForm(event) {
        event.preventDefault();

        let nameInput = document.getElementById('nameInput');
        let descriptionInput = document.getElementById('descriptionInput');
        let nameError = document.getElementById('nameError');
        let descriptionError = document.getElementById('descriptionError');

        let isValid = true;

        if (nameInput.value.trim() === '') {
            nameError.classList.remove('d-none');
            nameInput.classList.add('is-invalid');
            isValid = false;
        } else {
            nameError.classList.add('d-none');
            nameInput.classList.remove('is-invalid');
        }

        if (descriptionInput.value.trim() === '') {
            descriptionError.classList.remove('d-none');
            descriptionInput.classList.add('is-invalid');
            isValid = false;
        } else {
            descriptionError.classList.add('d-none');
            descriptionInput.classList.remove('is-invalid');
        }

        if (isValid) {
            document.getElementById('catagoryForm').submit();
        }
    }
</script>

@endsection