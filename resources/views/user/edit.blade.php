@extends('layouts.app')

@section('content')
  <div class="py-5">
    <div class="card">
      <div class="card-header p-3">
        <h2 class="m-0 p-0">Edit User</h2>
      </div>
        
      <div class="card-body">
        <form action="{{ route('user.update', $user->id) }}" method='POST'>
            @csrf
            @method('patch')
            
          <div class="mb-3">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" value="{{ old('nrp') ?? $user->nrp }}" name="nrp">
          </div>
            
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" value="{{ old('name') ?? $user->name }}" name="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" value="{{ old('email') ?? $user->email }}" name="email">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" class="form-control" id="phone" value="{{ old('phone') ?? $user->phone }}" name="phone">
          </div>

          <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>

              <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value='Male' {{ $user->gender == 'Male' ? 'checked="checked"' : '' }}>
                <label class="form-check-label" for="male">Male</label>
              </div>
                
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value='Female' {{ $user->gender == 'Female' ? 'checked="checked"' : '' }}>
                <label class="form-check-label" for="female">Female</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" value="{{ old('birth_date') ?? $user->birth_date }}" name="birth_date">
          </div>

          <button type="submit" class="btn btn-success w-100">Edit</button>
        </form>
      </div>
    </div>
  </div>
@endsection