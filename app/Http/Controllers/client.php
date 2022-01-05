<?php

namespace App\Http\Controllers;

use App\Models\client as ModelsClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class client extends Controller
{
    public function addclientpage(){
        return view('addclient');
    }
    public function addclient(Request $req){
        ModelsClient::create($req->all());
        return redirect()->back();
    
}
public function download(){
    // $contents = file_get_contents('www.google.com');
    // Storage::disk('local')->put('google.html', $contents);
    // $path = Storage::url('google.html');
    // return response()->download($path);

    $main_url = "https://rr3---sn-hgn7rn7k.googlevideo.com/videoplayback?expire=1640496756&ei=FKrHYa3VC83OW4bzq2A&ip=45.133.173.11&id=o-APjmfR2AixQK7VBXSEisqmoadJzF8Xxc4tgMkL2qhrIe&itag=18&source=youtube&requiressl=yes&vprv=1&mime=video%2Fmp4&ns=6G3ULZwkwTPQPXVj7yMq9UMG&gir=yes&clen=9991762&ratebypass=yes&dur=207.400&lmt=1514107594724712&fexp=24001373,24007246&c=WEB&n=lKlrhxTrDmW2Vg&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRAIgM_ezgJPlSixMjJBYqoghyUEoRd3fEwL15jh99Cr4puACIDydXa4Gggr_I_2WxupYBb1VFcb3P_mMgiHF7gwc_6vt&rm=sn-4g5ez67s&req_id=e8ceab8c52ea3ee&ipbypass=yes&redirect_counter=2&cm2rm=sn-uxaxjvhxbt2u-5atr7k&cms_redirect=yes&mh=3j&mip=197.55.244.123&mm=29&mn=sn-hgn7rn7k&ms=rdu&mt=1640474945&mv=m&mvi=3&pl=27&lsparams=ipbypass,mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRQIhANwU_uLDLb66VyaHRLRMx7afaTryMy5leb9xWBQYF-i6AiA_wtcOgRal9LqfiFT_gItu5-l_wbdy0FzuC3RylZJZGg%3D%3D";
    $file = basename($main_url).'mp4';
    header("Content-Type:mp4; filename=$file");
    readfile($main_url);


    // $filePath = public_path("dummy.pdf");
    // $headers = ['Content-Type: application/pdf'];
    // $fileName = time().'.pdf';

    // return response()->download($filePath, $fileName, $headers);
}
}
