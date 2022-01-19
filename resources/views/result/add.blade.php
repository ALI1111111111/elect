<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Result Data</title>

<style>

th,td{
    border: 2px solid black
}

</style>

</head>
<body>

<h1>  Add Result Data Here  </h1>

<h2>Add Result</h2>


<form method="POST" action="{{ URL::to('result/add/store')}}">
    @csrf




<table>
    <label for="area">  Select Area* </label>

    <select name="area" id="area">
    <option value=""></option>
        @foreach ($ars as $area )
        <option value="{{$area->id}}"> {{$area->area_name}} </option>

        @endforeach

    </select>

    <br>
<tr>

    <th> Year  </th>
    <th><select name="candid1" id="candid1" required>
        <option value="Riaz Fatyana">Riaz Fatyana</option>
        {{-- @foreach ($candidates as $cand )
        <option value="{{$cand->id}}"> {{$cand->candname}} </option>

        @endforeach --}}


    </select>  </th>
    <th><select name="candid2" id="candid2" required>
    <option value="Asad-UL-Rehman"> Asad-UL-Rehman </option>
    {{-- @foreach ($candidates as $cand )
    <option value="{{$cand->id}}"> {{$cand->candname}} </option>

    @endforeach --}}


</select>  </th>
{{-- <th>  Lead </th> --}}

<th><select name="candid3" id="candid3" required>
    <option value="Nazia-Raheel">Nazia-Raheel</option>
    {{-- @foreach ($candidates as $cand )
    <option value="{{$cand->id}}"> {{$cand->candname}} </option>

    @endforeach --}}


</select>  </th>
<th><select name="candid4" id="candid4" required>
    <option value="Ashfa Riaz">Ashfa Riaz</option>
    {{-- @foreach ($candidates as $cand )
    <option value="{{$cand->id}}"> {{$cand->candname}} </option>

    @endforeach --}}


</select>  </th>
{{-- <th>  Lead </th> --}}

</tr>
<tr>

<td>
    <select name="year" id="year" required>
<option value=""></option>
        <option value="2002">2002</option>
        <option value="2008">2008</option>
        <option value="2013">2013</option>
        <option value="2018">2018</option>
    </select>  </td>
<td>   <input type="number" id="cand1vote" name="cand1vote"  required>  </td>
<td>   <input type="number" id="cand2vote" name="cand2vote" required>  </td>


<td>   <input type="number" id="cand3vote" name="cand3vote" required>  </td>

<td>   <input type="number" id="cand4vote" name="cand4vote" required>  </td>



</tr>
</table>
<br><br><br><br><br>

{{-- <label for="year"> Time/Year </label><br>
<select name="year" id="year">

    <option value="2002">2002</option>
    <option value="2008">2008</option>
    <option value="2013">2013</option>
    <option value="2018">2018</option>
</select>
<br>
<label for="candid">  Select Candidate* </label><br>
<select name="candid" id="candid" required>
    <option value="">Select Candidate</option>
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
<input type="number" name="voteget" id="voteget"> --}}


<input type="submit" value="Save Data">



</form>


</body>
</html>
