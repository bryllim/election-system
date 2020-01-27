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
        </style>
    </head>
    <body>
        <div class="container p-5">
            <div class="row">
              <div class="col">
                <h1><strong>GCM Election Results</strong></h1>
                <hr>
              </div>
            </div>
            <div class="row">
                <div class="col">
                @if(!$candidates->isEmpty())
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Number of votes</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($candidates as $candidate)
                            <tr>
                            <th scope="row">{{$candidate->ballot}}</th>
                            <td>{{$candidate->name}}</td>
                            <td>{{$candidate->position}}</td>
                            <td>{{$candidate->votes}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                <div class="alert alert-danger" role="alert">
                    No candidate data found!
                </div>
                @endif
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h3>Add a candidate</h3>
                    <form method="post" action="{{ route('newCandidate') }}">
                    @csrf
                    <div class="form-group">
                        <label for="candidateName">Candidate name</label>
                        <input type="text" class="form-control" id="candidateName" name="candidateName" required>
                    </div>
                    <div class="form-group">
                        <label for="candidatePosition">Position</label>
                        <select class="form-control" id="candidatePosition" name="candidatePosition" required>
                        <option value="President">President</option>
                        <option value="Vice President - Internal">Vice President - Internal</option>
                        <option value="Vice President - External">Vice President - External</option>
                        <option value="Secretary">Secretary</option>
                        <option value="Treasurer">Treasurer</option>
                        <option value="Auditor">Auditor</option>
                        <option value="Public Relations Officer - Internal">Public Relations Officer - Internal</option>
                        <option value="Public Relations Officer - External">Public Relations Officer - External</option>                        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="candidateParty">Candidate party</label>
                        <input type="text" class="form-control" id="candidateParty" name="candidateParty" required>
                    </div>
                    <div class="form-group">
                        <label for="candidateBallot">Candidate ballot number</label>
                        <input type="number" class="form-control" id="candidateBallot" name="candidateBallot" required>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>
