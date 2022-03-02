<h1> working </h1>
@foreach ($values as $val )

<h2> Now Led Light is  {{$val->time}} </h2>
@endforeach
<form action="{{ URL::to('/ard/btn')}}" method="POST">
    @csrf


<input type="number" name="On" max="1" min="0">
{{-- <input name="off" type="button" value="0"> --}}

<button type="submit">Power The Led</button>


</form>

