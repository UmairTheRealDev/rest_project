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
            <th>Usertype</th>
            <th>Created_at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       
    @foreach($data as $usrdata)
    <tr>
        <td>{{ $usrdata->id }}</td>
        <td>{{ $usrdata->name }}</td>
        <td>{{ $usrdata->email }}</td>
        <td>{{ $usrdata->usertype }}</td>            
        <td>{{ $usrdata->created_at }}</td>  
        {{-- <td>
            <a href="{{ route('emp.delete',['id' => $emdata->id]) }}" class="btn btn-danger">Delete</a>
            <a href="{{ route('emp.edit',['id' => $emdata->id]) }}" class="btn btn-info">Edit</a>
        </td> --}}
        <td>
            <a href="" class="btn btn-danger">Delete</a>
            <a href="" class="btn btn-info">Edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>






@endsection