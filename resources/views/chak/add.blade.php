<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add chak Data</title>
    @livewireStyles
</head>
<body>
    @include('chak.header')
    <br><br><br><br>

<h1>  Add Chak Data Here  </h1>

<div class="container">

    @livewire('counter')

    <form method="POST" action="{{ URL::to('/chak/add/store')}}">
        @csrf
        <label class="form-label" for="area">  Add Area name  </label>
        <input type="text" class="form-control" name="area" id="area">



        <label class="form-label" for="tvote"> Total Vote </label>
        <input type="number" class="form-control" name="tvote" id="tvote">
        <label class="form-label" for="tpop"> Total Population </label>
        <input type="number" class="form-control" name="tpop" id="tpop">

        <label class="form-label" for="UC"> Union council (UC)</label>
        <input type="text" class="form-control" name="UC" id="UC">
<br>

        {{-- <h2>Add Result</h2>


            <label for="year"> Time/Year </label><br>
            <select name="year" id="year">

                <option value="2002">2002</option>
                <option value="2008">2008</option>
                <option value="2013">2013</option>
                <option value="2018">2018</option>
            </select>
            <br>
            <label for="candid">  Select Candidate* </label><br>
            <select name="candid" id="candid" >
                @foreach ($candidates as $cand )
                <option value="{{$cand->id}}"> {{$cand->candname}} </option>

                @endforeach

            </select>

            <br>
            <label for="totalvote"> Total Vote Get </label><br>
            <input type="number" name="totalvote" id="totalvote"> --}}


            <input class="btn btn-primary" type="submit" value="Save Data">



        </form>
    </div>

    @livewireScripts
</body>
</html>
