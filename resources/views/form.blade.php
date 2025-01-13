<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru
    </h1>
    <h3>Sign Up Form</h3>
    <p>First Name : </p>
    <form action="welcome" method="GET">
        <label for="First Name"></label>
        <input type="text" id="First Name">
        <p>Last Name : </p>
        <label for="Last Name"></label>
        <input type="text" id="Last Name">
        <p>Gender</p>
        <input type="radio" id="Laki-Laki" name="Gender">
        <label for="Laki-Laki">Laki-Laki</label><br>
        <input type="radio" id="Perempuan" name="Gender">
        <label for="Perempuan">Perempuan</label>
        <p>Nationality</p>
        <select name="Nationality" id="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Inggris">Inggris</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" id="Bahasa Indonesia" name="Bahasa Indonesia">
        <label for="Bahasa Indonesia">Bahasa Indonesia</label><br> 
        <input type="checkbox" id="English" name="English">
        <label for="English">English</label><br> 
        <input type="checkbox" id="Other" name="Other">
        <label for="Other">Other</label> 
        <p>Bio</p>
        <textarea name="Bio" clos="13"
        rows="10"></textarea><br>
        

                <input type="submit" name="Sign Up" id="Sign" value="Sign Up">
            
        
    </form>

</body>
</html>