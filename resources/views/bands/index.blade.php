@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form method="get" class="form-inline" action="{{ route('bands') }}">
            <div class="form-group">
                <input type="date" value="{{ request()->get('date') ?? null }}" name="date" class="form-control" placeholder="Enter Date">
            </div>
            <div class="form-group">
                <select name="nameOrder" class="form-control">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
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
