@extends ('layout')

@section('title', 'Companies create')

@section ('content')
    <form action="/companies" method="post" enctype="multipart/form-data">
    <label for="name">Name</label>
    <div class="form-group">
        <input type="text" name="name" value="{{ old('name')}}" class="form-control">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <label for="email">Email</label>
    <div class="form-group">
        <input type="text" name="email" value="{{ old('email')}}" class="form-control">
        <div>{{ $errors->first('email') }}</div>
    </div>
    <label for="phone">Phone</label>
    <div class="form-group">
        <input type="text" name="phone" value="{{ old('phone')}}" class="form-control">
        <div>{{ $errors->first('phone') }}</div>
    </div>
    <label for="phone">Website</label>
    <div class="form-group">
        <input type="text" name="website" value="{{ old('website')}}" class="form-control">
        <div>{{ $errors->first('website') }}</div>
    </div>
    <label for="phone">Logo</label>
    <div class="form-group">
        <input type="file" name="logo" value="{{ old('logo')}}" class="form-control">
        <div>{{ $errors->first('logo') }}</div>
    </div>
    <button type="submit">Add new company</button>
        @csrf
    </form>
@endsection
