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
            .black{
                font-weight:700;
            }
        </style>
    </head>
    <body>
        <div class="container p-5">
            <div class="row">
                <div class="col text-center">
                    <h5>Gullas College of Medicine</h5>
                    <h1 class="black">SSC Elections 2020</h1>
                    <div class="alert alert-dark" role="alert">
                        <small>Select the button of the candidate that you wish to vote. Make sure that you have thoroughly reviewed your votes before clicking the submit button below.</small>
                    </div>
                    <hr>
                </div>
            </div>
            <form method="post" action="{{ route('submitvotes') }}">
            @csrf
            <!-- President -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">President</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "President")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="president" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- VP Internal -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Vice President - Internal</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Vice President - Internal")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vpInternal" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- VP External -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Vice President - External</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Vice President - External")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vpExternal" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Secretary -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Secretary</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Secretary")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="secretary" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Treasurer -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Treasurer</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Treasurer")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="treasurer" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Auditor -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Auditor</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Auditor")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="auditor" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- PRO - Internal -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Public Relations Officer - Internal</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Public Relations Officer - Internal")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="proInternal" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- PRO-External -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="black">Public Relations Officer - External</h5>
                            @foreach($candidates as $candidate)
                                @if($candidate->position == "Public Relations Officer - External")
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="proExternal" id="{{ $candidate->id }}" value="{{ $candidate->id }}">
                                    <label class="form-check-label" for="{{ $candidate->id }}">
                                        {{ $candidate->name }} <span class="badge badge-secondary">#{{ $candidate->ballot }}</span> <span class="badge badge-dark">{{ $candidate->party }}</span>
                                    </label>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="votingkey" value={{$votingkey}}>
            <div class="row">
                <div class="col">
                    <hr>
                    <button type="submit" class="btn btn-success btn-block">Submit my votes</button>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
