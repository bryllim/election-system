<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <title>GCM Voting System</title>
        <style>
            body{
                background: #ECE9E6;
                font-family: 'Roboto', sans-serif !important;
            }
            input[type="text"]::placeholder {  
                  
                  /* Firefox, Chrome, Opera */ 
                  text-align: center; 
              } 
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col text-center">
                    <img src="images/elections_logo.png" style="height:auto; width:100%" class="mx-auto d-block">
                    <hr>
                    <form method="post" action="{{ route('votingkey') }}">
                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="votingkey" placeholder="Enter your voting key here..." required>
                            <br>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <hr>
                            <small class="text-muted">Gullas College of Medicine Electronic Voting System</small>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                        @endif
                        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
        
    </body>
</html>
