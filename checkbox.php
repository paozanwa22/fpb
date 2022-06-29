<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<= base_url('register'); ?>" method="POST"></form> -->
    <form action="" method="POST">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Fmale
            <input type="radio" name="gender" value="Other"> Other
        </p>
        <p>
            <label for="hobby">Hobby</label>
            <input type="checkbox" name="hobby[]" value="Reading"> Reading
            <input type="checkbox" name="hobby[]" value="Dencing"> Dencing
            <input type="checkbox" name="hobby[]" value="Coding"> Coding
        </p>
        <p>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </p>
    </form>
</body>
</html>