@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Notes</h1>
                <a href="{{ route('notes.create') }}" class="btn btn-primary">Create New Note</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notes as $note)
                            <tr>
                                <td>{{ $note->title }}</td>
                                <td>{{ $note->description }}</td>
                                <td>
                                    <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
