<?php
namespace App\Controllers;

use App\Models\DealersModel;
class Dealers extends BaseController
{
public function index()
{
$dealers = new DealersModel();
$data['dealers'] = $dealers->findAll();
return view('dealers/second', $data);
}
public function create()
{
return view('dealers/create');
}
public function store()
{
$dealers = new DealersModel();
$data =[
'name' => $this->request->getPost('name'),
'phone' => $this->request->getPost('phone'),
'company' => $this->request->getPost('company'),
];
$dealers->save($data);

return redirect()->to(base_url('dealers/second'))->with('status','Done');
}
}
?>
