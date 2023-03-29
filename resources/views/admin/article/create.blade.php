@extends('layout')
@section('body-content')
    <form enctype="multipart/form-data" action="{{url('admin/article/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">title</label>
            <input type="text" class="form-control" name="title" placeholder="name">
        </div>
        <div class="form-group">
            <label for="name">short description</label>
            <input type="text" class="form-control" name="short_description" placeholder="name">
        </div>
        <div class="form-group">
            <label for="name">content</label>
            <textarea id="summernote" name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="name">cover</label>
            <input type="file" class="form-control" name="cover" placeholder="name">
        </div>
        <div class="form-group">
            <label for="name">user</label>
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">category</label>
            <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
