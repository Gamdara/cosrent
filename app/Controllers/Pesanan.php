<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataDiriModel;
use App\Models\PengirimanModel;

use mysqli;

class Pesanan extends BaseController
{

    public function success()
    {
        return view('success');
    }

    public function create()
    {
        
        $req = $this->request->getPost();
        
        $img = $this->request->getFile('ktp')->getTempName();
        
        $handler = service('image')->withFile($img);
        $handler->resize(intval($handler->getWidth()/4),intval($handler->getHeight()/4), true);
        $handler->save();

        $req['ktp'] = base64_encode(file_get_contents($img));
        
        $img =  $this->request->getFile('ktp_selfie')->getTempName();
        
        $handler = service('image')->withFile($img);
        $handler->resize(intval($handler->getWidth()/4),intval($handler->getHeight()/4), true);
        $handler->save();
        
        $req['ktp_selfie'] = base64_encode(file_get_contents($img));
        
        $model = new DataDiriModel();
        $model->insert($req);
        $req['datadiri_id'] = $model->getInsertID();
        
        $model = new PengirimanModel();
        $model->insert($req);

        
        return redirect("success");
    }

}
