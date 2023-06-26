<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #FFA500;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            opacity: 0.5;
        }
        p{
          max-width: 400px;
          margin: 0 auto;
        }
        .error-message {
            background-color: red;
            color: white;
            padding: 14px;
            border-radius: 10px;
             max-width: 400px;
             margin-top: 5px;
             margin-bottom: 0;
             margin-right: auto;
             margin-left: auto;
        }
        .success-message {
            background-color: green;
            color: white;
            padding: 14px;
            border-radius: 10px;
             max-width: 400px;
             margin-top: 5px;
             margin-bottom: 0;
             margin-right: auto;
             margin-left: auto;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('errors')
            @if (Session::has('failed'))
                <div class="error-message">
                    {{Session::get('failed')}}
                </div>
            @endif
    @endsection

    @section('success')
            @if (Session::has('success'))
                <div class="success-message">
                    {{Session::get('success')}}
                </div>
            @endif
    @endsection

@section('content')
<h2>Login Form</h2>
<form action="/login" method="POST">
  @csrf
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="login" value="Login">
</form>
<p>Don't have an account? <a href="/signup">Signup</a></p>
@endsection
</body>
</html>
