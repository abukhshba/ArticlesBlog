<ul class="topbar-nav nav">
    @foreach ($categories as $category)
    <li class="nav-item"><a class="nav-link" href="{{url("category/$category->id")}}">{{$category->name}}</a></li>
    @endforeach

</ul>
