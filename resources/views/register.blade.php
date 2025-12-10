<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keke Hirepurchase | Register</title>
</head>
<body>
    
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action=""> 
            @csrf
            
            <div class="form-group">
                <label for="name">Full name</label>
                <input type="text" id="name" name="fullname" class="form-control"   required>
                
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control"   required>
               
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
              
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>

            <div class="form-group">
                <p>Already have an account? <a href="/login">Login here</a></p>
            </div>
        </form>
    </div>
</body>
</html>