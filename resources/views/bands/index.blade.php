@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-white">
      <thead>
        <tr>
            <th scope="col">#</th>
            <th>Name of band</th>
            <th>Location</th>
            <th>Description</th>
<!--             <th scope="col">Photo</th>
 -->            <th>Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bands as $band)
            <tr>
                <th scope="row">{{ $band->id }}</th>
                <td>{{ $band->name }}</td>
                <td>{{ $band->location }}</td>
                <td>{{ $band->description }}</td>
                <td>{{ $band->date }}</td>
            </tr>
        @endforeach
      </tbody>
    </table>
    {{ $bands->links() }}
</div>
@endsection
