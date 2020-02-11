<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Status;
use App\Models\Pekerjaan;
use App\Models\JenisPenggunaanBangunan;
use App\Models\Kondisi;
use App\Models\Konstruksi;
use App\Models\Atap;
use App\Models\Dinding;
use App\Models\Lantai;
use App\Models\Langit;

class PemutakhiranController extends Controller
{
    public function create()
    {
        $statuses                   = Status::get();
        $pekerjaans                 = Pekerjaan::get();
        $jenisPenggunaanBangunans   = JenisPenggunaanBangunan::get();
        $kondisis                   = Kondisi::get();
        $konstruksis                = Konstruksi::get();
        $ataps                      = Atap::get();
        $dindings                   = Dinding::get();
        $lantais                    = Lantai::get();
        $langits                    = Langit::get();

        return view("pemutakhiran.create", compact([
            "statuses",
            "pekerjaans",
            "jenisPenggunaanBangunans",
            "kondisis",
            "konstruksis",
            "ataps",
            "dindings",
            "lantais",
            "langits"
        ]) );
    }

    public function store(Request $request)
    {
        switch ($request->input("action")) {
            case "save":
                die("save");
                // simpan
                // redirect to add new
            break;
            case "tambah":
                // die("tambah");
                // proses simpan
                $nop = $request->nop;

                // session for urutan bangunan
                session(["urutan_bangunan" => 2]);

                // jika nop ngga kosong
                return redirect("/pemutakhiran/".$nop."/bangunan/create");
                // redirect to bangunan new
            break;
            default:
                die("tidak ada action");
        }
    }

    public function createBangunan($nop)
    {
        $nop;
        $value = session('urutan_bangunan');

        $jenisPenggunaanBangunans   = JenisPenggunaanBangunan::get();
        $kondisis                   = Kondisi::get();
        $konstruksis                = Konstruksi::get();
        $ataps                      = Atap::get();
        $dindings                   = Dinding::get();
        $lantais                    = Lantai::get();
        $langits                    = Langit::get();

        return view("pemutakhiran.createBangunan", compact([
            "jenisPenggunaanBangunans",
            "kondisis",
            "konstruksis",
            "ataps",
            "dindings",
            "lantais",
            "langits",
            "nop"
        ]))->with("urutan_bangunan", $value);
    }

    public function storeBangunan(Request $request, $nop)
    {
        
        switch ($request->input("action")) {
            case "save":
                
                // simpan
                // redirect to add new
                session()->forget('urutan_bangunan'); // menghapus session
                return redirect("/pemutakhiran/".$nop)->with("msg", "data berhasil ditambahkan");
            break;
            case "tambah":
                // die("tambah");
                // proses simpan
                $nop;
                $value = session('urutan_bangunan');
                $value++;
                session(["urutan_bangunan" => $value]);
                // jika nop ngga kosong
                return redirect("/pemutakhiran/".$nop."/bangunan/create");
                // redirect to bangunan new
            break;
            default:
                die("tidak ada action");
        }
    }

    public function show($nop)
    {
        $statuses                   = Status::get();
        $pekerjaans                 = Pekerjaan::get();
        $jenisPenggunaanBangunans   = JenisPenggunaanBangunan::get();
        $kondisis                   = Kondisi::get();
        $konstruksis                = Konstruksi::get();
        $ataps                      = Atap::get();
        $dindings                   = Dinding::get();
        $lantais                    = Lantai::get();
        $langits                    = Langit::get();

        return view("pemutakhiran.show", compact([
            "statuses",
            "pekerjaans",
            "nop",
            "jenisPenggunaanBangunans",
            "kondisis",
            "konstruksis",
            "ataps",
            "dindings",
            "lantais",
            "langits"
        ]));
    }
}
