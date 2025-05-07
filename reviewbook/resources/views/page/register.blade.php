<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <a href="welcome" class="button">Back to welcome page</a>
    <h2>Sign Up Form</h2>
    <form action="/home" method="POST">
        @csrf
        <label for="firststname">First Name:</label> <br>
        <input type="text" name="firststname" id="firststname">
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
        <button>Sign Up</button>
        <br><br>
    </form>
</body>
</html>