<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Klaim;
use Auth;
use Illuminate\Http\Request;

class KlaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iduser=Auth::user()->id;
        $klaims = klaim::where('id_user', '=','iduser')->where('status', '=','proses')->paginate(12);
        return view('klaim.index', compact('klaims'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $barang = barang::findOrFail($id);
        if($barang){
            return view('klaim.create', compact('barang'));
        }else{
            return redirect('/temuan');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_barang' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
            'foto_barang' => 'max:6000',
        ]);
        
        $file = $request->file('foto_barang');
		// image upload in public/upload folder.
		$file->move('uploads', $file->getClientOriginalName()); 
        
        
        $iduser=Auth::user()->id;
        $request->merge(['id_user' => $iduser]);
        $result = klaim::create($request->all());
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

          
    public function adminklaim()
    {
        $tampil = klaim::join('users', 'klaims.id_pengklaim', '=','users.id')
        ->join('barangs', 'klaims.id_barang', '=','barangs.id')
        ->select('klaims.*', 'barangs.*','users.*')
        ->where('barangs.status', '=', '1')
        ->get();
        return view('admin.klaim',compact('tampil'));
    }
}
