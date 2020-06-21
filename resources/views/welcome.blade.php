@extends('layout.app')
@section('content')
<head>
    <meta charset="utf-8">
    <title>Login</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="/quiz/public/css/swiper.min.css">
    <link rel="stylesheet" href="/quiz/public/css/homestyle.css">
    
    
    <style>
        body{
            background-image: url(/quiz/public/Images/pb1.jpg);
            background-size:cover;
        }
    </style>
</head>
        <div class="flex-center position-ref full-height">
           
            <div class="content">
            <div class="jumbotron">
            <h1 class="display-4">Welcome to Quizzify</h1>
  <p class="lead">Take a quiz to test your knowledge!</p>
  <hr class="my-4">
  <p>Login to attempt the Quiz!!!!</p>

</div>
            </div>
        </div>
   @endsection
