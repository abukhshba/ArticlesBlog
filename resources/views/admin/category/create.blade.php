@extends('layout')
@section('body-content')
    <form action="{{url('admin/category/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
