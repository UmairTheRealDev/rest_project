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
            <th>compnay</th>
            <th>image</th>
            <th>Created_at</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
{{--        
    @foreach($data as $emdata)
    <tr>
        <td>{{ $emdata->id }}</td>
        <td>{{ $emdata->name }}</td>
        <td>{{ $emdata->email }}</td>
        <td>{{ $emdata->company }}</td>   
        <td><img src="./images/{{  $emdata->image }}" alt="" height="100px" width="120px"></td>    
        <td>{{ $emdata->created_at }}</td>  
        <td>
            <a href="{{ route('emp.delete',['id' => $emdata->id]) }}" class="btn btn-danger">Delete</a>
            <a href="{{ route('emp.edit',['id' => $emdata->id]) }}" class="btn btn-info">Edit</a>
        </td>
    </tr>    
    @endforeach --}}
    </tbody>
</table>






@endsection