@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="card">
        <div class="card-body">
          <form action="{{ route('student.store') }}" method='POST'>
            @csrf
            
            <div class="mb-3">
              <label for="nim" class="form-label">NIM</label>
              <input type="number" class="form-control" id="nim" value="{{ old('nim') }}" name="nim">
            </div>
            
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" value="{{ old('name') }}" name="name">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email">
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="number" class="form-control" id="phone" value="{{ old('phone') }}" name="phone">
            </div>

            <div class="mb-3">
              <label for="gender" class="form-label">Gender</label>

              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                  <label class="form-check-label" for="male">Male</label>
                </div>
                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                  <label class="form-check-label" for="female">Female</label>
                </div>
              </div>

                {{-- <label for="gender" class="form-label">Gender</label> --}}
              {{-- <input type="radio" class="form-control" id="gender" value="{{ old('gender') }}" name="gender"> --}}
            </div>

            <div class="mb-3">
              <label for="birth_date" class="form-label">Birth Date</label>
              <input type="date" class="form-control" id="birth_date" value="{{ old('birth_date') }}" name="birth_date">
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection