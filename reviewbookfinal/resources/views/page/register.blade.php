@extends('layout.formtemp')

@section('pagetittle')
    Daftar
@endsection

@section('form')
    <div class="col-lg-7">
        <form action="/welcome" method="post" class="php-email-form" data-aos="fade-up">
            @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                    <label for="firstname" class="pb-2">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required="">
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="pb-2">First Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required="">
                </div>

                <div class="col-md-6">
                    <label for="gender" class="pb-2">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="nationality" class="pb-2">Nationality</label>
                    <select name="nationality" id="nationality" class="form-select">
                        <option value="1">Indonesian</option>
                        <option value="2">Korea</option>
                        <option value="3">Malaysia</option>
                        <option value="4">Singapore</option>
                        <option value="5">None Above</option>
                    </select>
                </div>
                <input type="submit" value="Daftar" class="col-md-12 text-center">
                <button type="submit" class="col-md-12 text-center">Daftar</button>

              </div>
        </form>
    </div>
@endsection
