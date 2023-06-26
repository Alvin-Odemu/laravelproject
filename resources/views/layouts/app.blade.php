<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .top-nav {
      background-color: #FFA500;
      padding: 10px;
      display: flex;
      justify-content: center;
    }

    .top-nav nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    .top-nav nav ul li {
      margin-right: 10px;
    }

    .top-nav nav ul li:last-child {
      margin-right: 0;
    }

    .top-nav nav ul li a {
      text-decoration: none;
      color: white;
      padding: 5px 10px;
      font-weight: bold;
    }

    .top-nav nav ul li a:hover {
      background-color: #333;
      color: #fff;
    }
  </style>
</head>
<body>
<div class = "top-nav">
  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/services">Services</a></li>
      <li><a href="/contact">contact</a></li>
      <li><a href="/login">login</a></li>
      <li><a href="/signup">signup</a></li>
    </ul>
  </nav>
</div>
    @yield('errors')
    @yield('success')
    @yield('content')
    
</body>
</html>