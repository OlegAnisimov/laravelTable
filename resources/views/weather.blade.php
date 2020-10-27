@extends('layouts.app')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <h2 class="h3">Погода. Брянск <?php
                date_default_timezone_set('Europe/Moscow');
                echo "Сейчас : " . date("Y-m-d H:i:s"); ?> </h2>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Облачность</td>
            <td>{{ $weather->weather[0]->description}}</td>
        </tr>
        <tr>
            <td>Температура</td>
          <td> {{ $weather->main->temp}} </td>
        </tr>
        <tr>
            <td>Мин. температура </td>
          <td> {{ $weather->main->temp_min}}</td>
        </tr>
        <tr><td>Макс. температура </td>
            <td>{{ $weather->main->temp_max}}</td>
        </tr>
        <tr> <td>Давление </td>
            <td>{{ $weather->main->pressure}}</td>
        </tr>

        <tr> <td>Источник</td>
            <td>openweathermap.org</td>
        </tr>


        </tbody>
    </table>

@endsection
