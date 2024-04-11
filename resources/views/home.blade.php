@extends('Layouts/app')

@section ('content')


<h1>TRENITALIA</h1>


<div class="container py-5">
    
<h2>Treni in partenza oggi:</h2>
    {{-- @dump($trains) --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Partenza da</th>
            <th scope="col">Arrivo a</th>
            <th scope="col">Orario Partenza</th>
            <th scope="col">Orario Arrivo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->company}}</td>
                <td>{{$train->departures_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td>
                    @php
                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->departure);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
                <td>
                    @php
                    // creare un oggetto datetime
                    $datetime = DateTime::createFromFormat("Y-m-d H:i:s", $train->arrival);
                    echo $datetime->format('H:i');
                        
                    @endphp 
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
</div>
@endsection