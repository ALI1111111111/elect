<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chak Election Report</title>
    <style>
        td,
        th {
            border: 1px solid black;
        }

    </style>
</head>

<body>

    <h1> Get Area Info </h1>
    <a href="{{ URL::to('/cand/add')}}"> Add Candidate </a><br>
     <a href="{{ URL::to('/chak/add')}}"> Add Chak Data </a>
     <a href="{{ URL::to('result/add')}}"> Add Result Data </a>

    <form method="GET" action="{{ URL::to('/')}}">
        @csrf

        <select name="area" id="area">

            <option > Select Area Name* </option>
            @foreach ($ars as $data)
                <option value="{{ $data->id }}">{{ $data->area_name }}</option>

            @endforeach


        </select>

        <input type="submit" value="Get Data">


    </form>




    <h2>Record For-(
        @foreach ($chaks as $chk )
        {{$chk->area_name}},
        @endforeach)
    </h2>

    <table>
<tr>
<th> Area Name  </th>
<th> Total Vote </th>
<th>Total Population</th>
<th> UC </th>

</tr>
@foreach ($chaks as $data)
<tr>
<td> {{$data->area_name}}   </td>
<td> {{$data->totalvote}}   </td>
<td> {{$data->totpop}}   </td>
<td> {{$data->UC}}    </td>


</tr>
@endforeach
    </table>


<h3> Result table </h3>

<table>
<tr>
<th> result </th>
<th> ARea Name </th>
<th> Candidate Name  </th>
<th> vote Get  </th>
{{-- <th>
    Riaz Fatyana
</th>
<th>  Asad Ul Rehman  </th>
<th>Lead</th> --}}
{{-- <th> Nazia Raheel </th>
<th> Ashfa Riaz </th>
<th> Lead </th> --}}
</tr>
@foreach($cand2s as $cand2)

<tr>


    <td> {{$cand2->year}}    </td>
    <td> {{$cand2->area_name}} </td>

    <td> {{$cand2->cname}} </td>
    <td>  {{$cand2->voteget}} </td>
    
</tr>
@endforeach



</table>



    {{--


    {{-- Area Data --}}
    {{-- <a href="{{ URL::to('/cand/add')}}"> Add Candidate </a>
    <a href="{{ URL::to('/chak/add')}}"> Add Chak Data </a>
@foreach($cand1s as $cand1)
Getting 1st Candidate Data
{{$cand1}}

@endforeach
    <table>
        <tr>
            <th> Total Vote </th>

            <td>
                @foreach ($cand1s as $chk )
                {{$chk->totalvote}}
                @endforeach

 </th>

            <td>
@foreach ($chaks as $chk )
{{$chk->totpop}}
@endforeach

            </td>
            <th>UC</th>
            <td>
                @foreach ($chaks as $chk )
                {{$chk->UC}}
                @endforeach
            </td>

        </tr>
        <br><br> <br> --}}

        {{-- election data HEadings --}}
        {{-- <tr>

            <th> Result </th>
            <th> <select name="candid1" id="candid1">
                   <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select> </th>
            <th><select name="candid2" id="candid2">
                   <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)

                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select></th>
            <th>Lead</th>
            <th> <select name="candid3" id="candid3">
                   <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select> </th>
            <th><select name="candid4" id="candid4">
                    <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select></th>
            <th>Lead</th>

        </tr>
    </form>
<tr>
    Getting 1st Candidate Data <br>
    @foreach($cand1s as $cand1)
    {{$cand1}}
    @endforeach

    Getting 2st Candidate Data <br>
    @foreach($cand2s as $cand2)
    {{$cand2}}
    @endforeach
    Getting 3st Candidate Data <br>
    @foreach($cand3s as $cand3)
    {{$cand3}}
    @endforeach
    Getting 4st Candidate Data <br>

    @foreach($cand4s as $cand4)
    {{$cand4}}
    @endforeach

    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

</tr>


    </table> --}}
</body>

</html>
