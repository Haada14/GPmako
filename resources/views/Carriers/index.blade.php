<h1>yess</h1>
<a href="{{route('Carriers.index')}}">lien</a>

@foreach($carriers as $car)
    {{$car->last_name}}
@endforeach