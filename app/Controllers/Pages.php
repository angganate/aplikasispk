<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | AnggaPratama',
            'tes' => ['wan', 'tu', 'tri']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | AnggaPratama'
        ];
        return view('pages/about', $data);
    }
    //--------------------------------------------------------------------

}
