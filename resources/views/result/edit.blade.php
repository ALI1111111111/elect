<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Result </title>

<style>

th,td{
    border: 2px solid black
}

</style>

</head>
<body>

<h1>  Edit Result  </h1>



<form method="POST" action="{{ URL::to('result/update')}}">
    @csrf




<table>
    <label for="area">  Select Area* </label>

    <select name="area" id="area">
        {{-- <option value=""></option> --}}

@foreach ($ars as $ar )

<option value="{{$ar->area_id}}">{{$ar->area_name}}</option>

@endforeach
        @foreach ($ares as $area )
        <option value="{{$area->id}}"> {{$area->area_name}} </option>

        @endforeach

    </select>

    <br>

    <tr>

        <th> Year  </th>
        <th><select name="candid1" id="candid1" required>
            <option value="Riaz Fatyana">Riaz Fatyana</option>



        </select>  </th>
        <th><select name="candid2" id="candid2" required>
            <option value="Asad-UL-Rehman"> Asad-UL-Rehman </option>



        </select>  </th>


        <th><select name="candid3" id="candid3" required>
            <option value="Nazia-Raheel">Nazia-Raheel</option>



        </select>  </th>
        <th><select name="candid4" id="candid4" required>
            <option value="Ashfa Riaz">Ashfa Riaz</option>



</select>  </th>

</tr>
@foreach ($results as $result )
<input type="hidden" name="uid" value="{{$result->id}}">

<tr>

    <td>
        <select name="year" id="year" required>
            <option value="{{$result->year}}">{{$result->year}}</option>
            <option value="2002">2002</option>
            <option value="2008">2008</option>
            <option value="2013">2013</option>
            <option value="2018">2018</option>
        </select>  </td>
        <td>   <input type="number" id="cand1vote" name="cand1vote" value="{{$result->cand1vote}}" required>  </td>
        <td>   <input type="number"  value="{{$result->cand2vote}}" id="cand2vote" name="cand2vote" required>  </td>


        <td>   <input type="number" id="cand3vote" name="cand3vote"  value="{{$result->cand3vote}}" required>   </td>

        <td>   <input type="number" id="cand4vote" value="{{$result->cand4vote}}" name="cand4vote" required>  </td>



    </tr>
    @endforeach
</table>
<br><br><br><br><br>


<input type="submit" value="Save Data">



</form>


</body>
</html>
