<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add chak Data</title>
</head>
<body>

<h1>  Add Chak Data Here  </h1>



<form method="POST" action="{{ URL::to('result/add/store')}}">
    @csrf



 <h2>Add Result</h2>


<label for="year"> Time/Year </label><br>
<select name="year" id="year">

    <option value="2002">2002</option>
    <option value="2008">2008</option>
    <option value="2013">2013</option>
    <option value="2018">2018</option>
</select>
<br>
<label for="candid">  Select Candidate* </label><br>
<select name="candid" id="candid" required>
    <option value=""></option>
@foreach ($candidates as $cand )
<option value="{{$cand->id}}"> {{$cand->candname}} </option>

@endforeach


</select><br>
<label for="area">  Select Area* </label><br>

<select name="area" id="area">
<option value=""></option>
    @foreach ($ars as $area )
    <option value="{{$area->id}}"> {{$area->area_name}} </option>

    @endforeach

</select>

<br>
<label for="voteget"> Total Vote Get </label><br>
<input type="number" name="voteget" id="voteget">


<input type="submit" value="Save Data">



</form>


</body>
</html>
