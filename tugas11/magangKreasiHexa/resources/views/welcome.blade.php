@extends('master')
@section('title', 'Kreasi Hexa Indonesa')
@section('content')
<h2>Welcome, {{ $firstName }} {{ $lastName }}!</h2>

<p><strong>Gender:</strong> {{ $gender }}</p>
<p><strong>Nationality:</strong> {{ $nationality }}</p>

<p><strong>Languages Spoken:</strong></p>
<ul>
    @foreach($languages as $language)
    <li>{{ $language }}</li>
    @endforeach
</ul>

<p><strong>Bio:</strong></p>
<p>{{ $bio }}</p>
@endsection