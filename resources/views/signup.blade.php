<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    /* styling the form */
    h2 {
      text-align: center;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: orange;
      color: black;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      opacity: 0.8;
    }
    p{
      max-width: 400px;
      margin: 0 auto;
    }
    .input-error{
        color: red;
    }

  </style>
</head>
<body>
@extends('layouts.app')

@section('errors')
        @if (session('error'))
            {{session('error')}}
        @endif
    @endsection
@section('content')
  <h2>Signup Form</h2>
  <form action="/process-signup" method="POST">
    @csrf
    <div>
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br>
    <span class="input-error">
                    @error('first_name')
                        {{$message}}
                    @enderror
                </span>
    </div>

    <div>
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br>
    <span class="input-error">
                    @error('last_name')
                        {{$message}}
                    @enderror
                </span>
    </div>

    <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <span class="input-error">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
    </div>

    <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>
    <span class="input-error">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
    </div>

    <div>
    <input type="submit" name="signup" value="Sign Up">
    </div>
    
  </form>
  <p>Already have an account? <a href="/login">Login</a></p>
</body>
</html>
@endsection
</body>
</html>