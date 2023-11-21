@extends('admin\main')
@section('content-section')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>

@endif
<table class="table table-hover my-0">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Contact</th>
            <th>Guests</th> 
            <th>Resrvation Time</th> 
            <th>Reserved By</th>
            <th>Message</th>
            <th>Created_at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>    
    @foreach($data as $reservationdata)
    <tr>
        <td>{{ $reservationdata->id }}</td>
        <td>{{ $reservationdata->name }}</td>
        <td>{{ $reservationdata->email }}</td>
        <td>{{ $reservationdata->number }}</td>            
        <td>{{ $reservationdata->num_of_guests }}</td>            
        <td>{{ $reservationdata->reservation_time }}</td>            
        <td>{{ $reservationdata->reserved_by }}</td>            
        <td>{{ $reservationdata->message }}</td>            
        <td>{{ $reservationdata->created_at }}</td>  
    </tr>
    @endforeach
    </tbody>
</table>






@endsection