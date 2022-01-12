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

    <h1> Select Area </h1>
    <form method="GET" action="/chak/add/show">
        @csrf


    <select name="area" id="area">

        @foreach ($ars as $data)
            <option value="{{ $data->id }}">{{ $data->area }}</option>

        @endforeach


    </select>

    <input type="submit" value="Get Data">

    </form>
    {{-- Area Data --}}
    <a href="/cand/add"> Add Candidate </a>
    <a href="/chak/add"> Add Chak Data </a>

    <table>
        <tr>
            <th> Total Vote </th>

            <td>
                @foreach ($chaks as $chk )
                {{$chk->totalvote}}
                @endforeach
            </td>
            <th> Total Population </th>

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
        <br><br> <br>

        {{-- election data HEadings --}}
        <tr>

            <th> Result </th>
            <th> <select name="candid" id="candid">
                    <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select> </th>
            <th><select name="candid" id="candid">
                    <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)

                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select></th>
            <th>Lead</th>
            <th> <select name="candid" id="candid">
                    <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select> </th>
            <th><select name="candid" id="candid">
                    <option value=""> Select Candidate </option>

                    @foreach ($candidates as $cand)
                        <option value="{{ $cand->id }}"> {{ $cand->candname }} </option>

                    @endforeach

                </select></th>
            <th>Lead</th>

        </tr>

        {{-- election data --}}


    </table>
</body>

</html>
