@extends('master')
@section('title', 'Kreasi Hexa Indonesia')
@section('content')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="{{ route('welcome') }}" method="POST">
    @csrf
    <p>First name:</p>
    <input type="text" name="first_name">

    <p>Last name:</p>
    <input type="text" name="last_name">

    <p>Gender:</p>
    <input type="radio" name="gender" value="Male"> Male <br>
    <input type="radio" name="gender" value="Female"> Female <br>
    <input type="radio" name="gender" value="Other"> Other <br>

    <p>Nationality:</p>
    <select name="nationality">
        <option value="Indonesian">Indonesian</option>
        <option value="Malaysian">Malaysian</option>
        <option value="Singaporean">Singaporean</option>
        <option value="Other">Other</option>
    </select><br>

    <p>Language Spoken:</p>
    <input type="checkbox" name="language[]" value="Bahasa Indonesia"> Bahasa Indonesia <br>
    <input type="checkbox" name="language[]" value="English"> English <br>
    <input type="checkbox" name="language[]" value="Other"> Other <br>

    <p>Bio:</p>
    <textarea name="bio" rows="5" cols="30"></textarea><br>

    <button type="submit">Sign Up</button>
</form>
@endsection