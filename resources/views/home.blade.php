@extends('Layouts.master')

@section('content')
<div class="container">
    <h1 class="uppercase text-center pt-4 fw-bolder">Departing Trains</h1>
    <p class="text-center">Trains departing from today {{ $today->format('d-m-Y') }}</p>

    <!-- Train Section -->
    <section class="mt-5">
        <table class="table table-striped">
            <thead>
                <tr class="table-titles">
                    <th scope="col">Company</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <th scope="row">{{ $train['company'] }}</th>
                    <td>{{ $train['code'] }}</td>
                    <td>{{ $train['departure_station'] }}</td>
                    <td>{{ $train['arrival_station'] }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($train['departure_time'])->format('H:i') }}</td>
                    <td class="text-center">{{ \Carbon\Carbon::parse($train['arrival_time'])->format('H:i') }}</td>
                    @if ($train['is_delayed'])
                    <td class="text-warning fw-bolder">Delayed</td>
                    @elseif ($train['is_canceled'])
                    <td class="text-danger fw-bolder">Cancelled</td>
                    @else
                    <td class="text-success fw-bolder">On Time</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <!-- /Train Section -->
</div>
@endsection