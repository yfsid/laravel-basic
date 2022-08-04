@extends('layouts.app', ['title' => 'Contact'])

@section('content')
    <div>
        <form method="POST" action="{{ route('contact.create') }}">
            @csrf

            <input type="text" name="name" id="name">

            <input type="button" value="Create">
        </form>
    </div>
@endsection
