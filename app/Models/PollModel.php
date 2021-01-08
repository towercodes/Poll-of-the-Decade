<?php namespace App\Models;

use CodeIgniter\Model;

class PollModel extends Model
{
public $table = 'decades';
protected $allowedFields = ['votes'];

public function results() {
//votes for each decade are retrieved as an array of $query so that at the end of the function $query is returned, thereby making it easy to parse the results to the controller and then to the view

$query['dec1'] = $this->where('votes', '2000s');
$query['dec1'] = $this->countAllResults();

$query['dec2'] = $this->where('votes', '2010s');
$query['dec2'] = $this->countAllResults();

$query['dec3'] = $this->where('votes', '2020s');
$query['dec3'] = $this->countAllResults();

//get percentages. In future versions, this can maybe be idealy done in the controller.
//get total number of votes cast
$query['total'] = $this->countAllResults();

//performe calculations to get percentages
$query['dec1p'] = round($query['dec1'] / $query['total'] * 100, 2);
$query['dec2p'] = round($query['dec2'] / $query['total'] * 100, 2);
$query['dec3p'] = round($query['dec3'] / $query['total'] * 100, 2);

return $query;
}


//end of class
}