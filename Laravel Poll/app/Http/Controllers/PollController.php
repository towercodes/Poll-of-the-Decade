<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poll;
use DB;

class PollController extends Controller
{
public function results () {
//get records from the database. 
$votes['pf'] = DB::table('poll')->where('votes', 'Pfizer')->count();
$votes['md'] = DB::table('poll')->where('votes', 'Moderna')->count();
$votes['az'] = DB::table('poll')->where('votes', 'AstraZeneca')->count();

//get totals
$votes['total'] = DB::table('poll')->count();
$votes['pf%'] = round($votes['pf'] / $votes['total'] * 100, 2);
$votes['md%'] = round($votes['md'] / $votes['total'] * 100, 2);
$votes['az%'] = round($votes['az'] / $votes['total'] * 100, 2);

return view('results', ['output' => $votes]);
}

public function create (Request $request) {
//validate input
$insert = $request->validate([
'choice' => 'required'
]);

//insert into database
DB::table('poll')->insert([
'votes' => $insert['choice']
]);

return redirect('results');
}


}