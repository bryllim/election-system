<?php
use Illuminate\Http\Request; 
use App\Candidate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('votingkey', function (Request $request) {
    if($request->votingkey=="gcmadmin2020"){
        return view('admin', ['candidates' => Candidate::all()]);
    }else{
        $votingkey = App\VotingKey::where('key', $request->votingkey)->first();
        return ($votingkey)?view('vote', ['candidates' => Candidate::all(), 'votingkey' => $votingkey->id]):Redirect::back()->withErrors("Invalid key!");
    }
})->name('votingkey');

Route::post('submitvotes', function (Request $request) {
    if($request->has('president')){
        $candidate = Candidate::find($request->president);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('vpInternal')){
        $candidate = Candidate::find($request->vpInternal);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('vpExternal')){
        $candidate = Candidate::find($request->vpExternal);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('secretary')){
        $candidate = Candidate::find($request->secretary);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('treasurer')){
        $candidate = Candidate::find($request->treasurer);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('auditor')){
        $candidate = Candidate::find($request->auditor);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('proInternal')){
        $candidate = Candidate::find($request->proInternal);
        $candidate->votes++;
        $candidate->save();
    }
    if($request->has('proExternal')){
        $candidate = Candidate::find($request->proExternal);
        $candidate->votes++;
        $candidate->save();
    }
    $deletekey = App\VotingKey::find($request->votingkey);
    $deletekey->delete();

    return redirect('/')->with('status', 'You have successfully cast your vote!');
})->name('submitvotes');

Route::post('newCandidate', function (Request $request) {
    $candidate = new Candidate;
    $candidate->name = $request->candidateName;
    $candidate->position = $request->candidatePosition;
    $candidate->party = $request->candidateParty;
    $candidate->ballot = $request->candidateBallot;
    $candidate->votes = 0;
    $candidate->save();
    return view('admin', ['candidates' => Candidate::all()]);
})->name('newCandidate');