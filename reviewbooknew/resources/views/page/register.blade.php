@extends('layout.master')

@section('tittle')
    Register
@endsection

@section('content')
    <a href="/home" class="button">Back to home page</a>
    <br>
    <h2>Sign Up Form</h2>
    <br>

    <form action="/welcome" method="POST">
        @csrf
        <label for="firstname">First Name:</label> <br>
        <input type="text" name="firstname" id="firstname">
        <br><br> 
        <label for="lastname">Last Name:</label> <br>
        <input type="text" name="lastname" id="lastname">
        
         <br><br> 
        <label for="gender">Gender:</label> <br>
        <input type="radio" name="gender" value="1"/> Male <br>
        <input type="radio" name="gender" value="2"/> Female <br>
        <input type="radio" name="gender" value="3"/> Others 
        <br><br> 
        <label for="nationality">Nationality</label> <br>
        <select name="nationality" id="nationality">
            <option value="1">Indonesian</option>
            <option value="2">Korea</option>
            <option value="3">Malaysia</option>
            <option value="4">Singapore</option>
            <option value="5">None Above</option>
        </select>
        <br><br> 
        <label for="language">Language Spoken:</label> <br>
        <input type="checkbox" name="language" value="1" /> Indonesia <br>
        <input type="checkbox" name="language" value="2" /> English <br>
        <input type="checkbox" name="language" value="1" /> Mandarin <br>
        <input type="checkbox" name="language" value="3" /> Other <br>
        <br><br>
        <label for="bio">Bio:</label> <br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        
        <br><br>

        <input type="submit" value="Sign Up">
        <br><br>
    </form>
@endsection
