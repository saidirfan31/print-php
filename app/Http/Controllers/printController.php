<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use PDF;

class printController extends Controller
{
    public function index(){
        return view('index');
    }
    public function print(){
        // mengambil data dari dataase
        // $data['member'] = DB::table('table_member')->get();
        $data = array();

        $config = [
        'format' => 'A4-P', // Landscape
            // 'margin_top' => 0
        ];
            
        $pdf = PDF::loadview('print',$data,[],$config);
        // OR :: $pdf = PDF::loadview('pdf_data_member',$data,[],['format' => 'A4-L']);
        return $pdf->stream();
    }
}
