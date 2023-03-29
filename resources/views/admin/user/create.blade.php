@extends('layout')
@section('body-content')
    <form action="{{url('admin/user/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
            <label for="name">email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="email">
            <label for="name">name</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
