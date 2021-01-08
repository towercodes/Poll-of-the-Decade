<?php namespace App\Controllers;

use App\Models\PollModel;
use CodeIgniter\Controller;

class Poll extends Controller
{
//show the home page
public function index() {
		echo view('index');
echo view('footer');
}

//handle form fields
public function votes()
	{
$model = new PollModel();

if ($this->request->getMethod() === 'post' && $this->validate([
'dec' => 'required'
]))
{
$model->save([
'votes' => $this->request->getPost('dec'),
]);

//while it is possible to directly send users from the voting page to results, pressing the reload button seems to inadvertently recast the vote. Therefore we need this bridging page. In future versions, a redirect function or whatever is the codeigniter version of a header function will make this bridge unnecessary
echo view('votecast');
echo view('footer');
}
}

//election results
public function results() {
$model = new PollModel();

$output =[
'votes' => $model->results()
];

echo view('electionresults', $output);
echo view('footer', $output);
}

//end of class
}
