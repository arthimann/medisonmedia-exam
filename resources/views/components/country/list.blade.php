<h2>countries list</h2>
<hr>
<ul>
    @foreach($countries as $country)
        <li>
            {{$country['name']}} - {{$country['iso']}}
            >> <a href="{{url('/country/' . $country['id'])}}">Edit</a> <<
            >> <a href="{{url('/country/destroy/' . $country['id'])}}">Delete</a> <<
        </li>
    @endforeach
</ul>
