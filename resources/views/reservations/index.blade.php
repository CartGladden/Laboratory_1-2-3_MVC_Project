@extends('reservations.layout')

@section('content')
<div class="container">
    <div class="row">
        <h1>List of Restaurant Reservations</h1>
        <hr>
        <div class="row">
                <div class="pull-left">
                    <a class="btn btn-danger" href="{{ route('layout.index') }}"> Back</a>
                </div>
        </div><br>
    </div>
    
    <div class="row">
        
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if($reservation->isEmpty())
        <p>No table reservations found.</p>
        @else
            <table class="table-table-bordered">
                <thead>
                    <tr>
                        <th>Customer's Name</th>
                        <th>Customer's Email</th>
                        <th>Customer's Phone Number</th>
                        <th>Date of Appointment</th>
                        <th>Time of Appointment</th>
                        <th>Number of Customers</th>
                        <th>Message and Suggestions</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>
                <tbody>
                 
                    @foreach ($reservation as $reservation)
                        <tr>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->date}}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->number_of_people }}</td>
                            <td>{{ $reservation->message }}</td>
                            
                            <td>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        
    @endif
</div>
@endsection