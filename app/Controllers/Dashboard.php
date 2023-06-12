<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataDiriModel;
use App\Models\PengirimanModel;
use CodeIgniter\Shield\Models\UserIdentityModel;

class Dashboard extends BaseController
{
    // function setting(){
    //     return view('dashboard/setting');
    // }

    // function updateSetting(){
    //     $passwords = service('passwords');

    //     $req = $this->request->getPost();
    //     if($req['secret2'] != $req['confirm']) return redirect()->back()->with('error',"Konfirmasi password berbeda");
    //     $model = new UserIdentityModel;
    //     $model->where('user_id', $req['user_id'])->set(['secret' => $req['secret'], 'secret2' => $passwords->hash($req['secret2'])])->update();
    //     return redirect("logout");
    // }
}
