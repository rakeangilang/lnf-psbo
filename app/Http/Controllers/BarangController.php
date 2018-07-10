<?php

namespace App\Http\Controllers;
use App\Barang;
use Auth;
use Session, Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kehilangan()
    {
        $barangs = barang::where('jenis', '=','kehilangan')->where('status', '=','1')->paginate(12);
        return view('lnf.baranghilang', compact('barangs'));

    }

    public function penemuan()
    {
        $barangs = barang::where('jenis', '=','penemuan')->where('status', '=','1')->paginate(12);
        return view('lnf.barangditemukan', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetemuan(Request $request)
    {
      $this->validate($request, [
          'foto_barang' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
          'foto_barang' => 'max:6000',
      ]);

        $nama = barang::max('id') + 1;
        $extension = $request->file('foto_barang')->getClientOriginalExtension();
        $fileName = $nama . '.' . $extension;
        $request->file('foto_barang')->move('uploads', $fileName);


  //     $file = $request->file('foto_barang');
  // // image upload in public/upload folder.
  // $file->move('uploads', $file->getClientOriginalName());


      $iduser=Auth::user()->id;
      $request->merge(['id_user' => $iduser,'jenis' => 'temuan', 'status' => '1']);
      $result = barang::create($request->all());

      return redirect('/');
    }

    public function storekehilangan(Request $request)
    {
        $this->validate($request, [
            'foto_barang' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
            'foto_barang' => 'max:6000',
        ]);

        if ($request->hasFile('foto_barang')) {
          $nama = barang::max('id') + 1;
          $extension = $request->file('foto_barang')->getClientOriginalExtension();
          $fileName = $nama . '.' . $extension;
          $request->file('foto_barang')->move('uploads', $fileName);
        }


    //     $file = $request->file('foto_barang');
		// // image upload in public/upload folder.
		// $file->move('uploads', $file->getClientOriginalName());


        $iduser=Auth::user()->id;
        $request->merge(['id_user' => $iduser,'jenis' => 'kehilangan', 'status' => '1']);
        $result = barang::create($request->all());

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
        $barang = barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
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

    public function dashboard(){
        return view('lnf.index');
    }

    public function formHilang(){
        if(Auth::check()){
          return view('lnf.formhilang');
        }
        else {
          Session::flash('message', 'Anda harus login terlebih dahulu.');
          return Redirect::to('/');
        }
    }

    // public function laporKehilangan(Request $request){
    //      $rules = array(
    //         'nama_barang' => 'required',
    //         'deskripsi'   => 'required',
    //         'tempat'      => 'required',
    //         'waktu'       => 'required',
    //         'kategori'    => 'required'
    //     );
    //
    //     $validator = Validator::make(Input::all(), $rules);
    //
    //     // process the login
    //     if ($validator->fails()) {
    //         return Redirect::to('/lapor_kehilangan')
    //             ->withErrors($validator)
    //             ->withInput(Input::except('password'));
    //        Session::flash('message', 'Laporan gagal diupload.');
    //        return view('/');
    //     } else {
    //         // store
    //
    //         $this->validate($request, [
    //             'foto_barang' => 'mimes:jpeg,bmp,png', //only allow this type extension file.
    //             'foto_barang' => 'max:6000',
    //         ]);
    //
    //         $fileName = '1';
    //         $request->file('foto_barang')->move('uploads', $fileName);
    //
    //         // $file = $request->file('foto_barang');
    //         // // image upload in public/upload folder.
    //         // $file->move('uploads', $file->getClientOriginalName());
    //
    //         $barang = new Barang;
    //         $barang->nama_Barang        = Input::get('nama_barang');
    //         $barang->jenis              = "Kehilangan";
    //         $barang->foto_barang        = $file;
    //         $barang->deskripsi          = Input::get('deskripsi');
    //         $barang->tempat             = Input::get('tempat');
    //         $barang->waktu              = Input::get('waktu');
    //         $barang->kategori           = Input::get('kategori');
    //         $barang->status             = 1;
    //         $barang->save();
    //
    //         // redirect
    //         Session::flash('message', 'Laporan diterima.');
    //         return Redirect::to('/');
    //     //}
    //       }
    // }

  //   public function laporTemuan(){
  //        $rules = array(
  //           'nama_barang' => 'required',
  //           'deskripsi'   => 'required',
  //           'tempat'      => 'required',
  //           'waktu'       => 'required',
  //           'kategori'    => 'required'
  //       );
  //
  //       $validator = Validator::make(Input::all(), $rules);
  //
  //       // process the login
  //       if ($validator->fails()) {
  //           return Redirect::to('/lapor_temuan')
  //               ->withErrors($validator)
  //               ->withInput(Input::except('password'));
  //          Session::flash('message', 'Laporan gagal diupload.');
  //          return view('/');
  //       } else {
  //           // store
  //           $barang = new Barang;
  //           $barang->nama_barang        = Input::get('nama_barang');
  //           $barang->jenis              = "Temuan";
  //           $barang->deskripsi          = Input::get('deskripsi');
  //           $barang->tempat             = Input::get('tempat');
  //           $barang->waktu              = Input::get('waktu');
  //           $barang->kategori           = Input::get('kategori');
  //           $barang->status             = 1;
  //           $barang->save();
  //
  //           // redirect
  //           Session::flash('message', 'Laporan diterima.');
  //           return Redirect::to('/');
  //       //}
  //   }
  // }

    public function formTemuan(){
      if(Auth::check()){
        return view('lnf.formtemuan');
      }
      else {
        Session::flash('message', 'Anda harus login terlebih dahulu.');
        return Redirect::to('/');
      }
    }

    public function pomiPage(){
        return view('lnf.pomi');
      }

      public function gwwPage(){
        return view('lnf.gww');
      }

      public function alhurPage(){
        return view('lnf.alhur');
      }

      public function lsiPage(){
        return view('lnf.lsi');
      }


      public function gadgetPage(){
        return view('lnf.gadget');
      }

      public function dompetPage(){
        return view('lnf.dompet');
      }

      public function tasPage(){
        return view('lnf.tas');
      }

      public function jamtanganPage(){
        return view('lnf.jamtangan');
      }

      public function sepatuPage(){
        return view('lnf.sepatu');
      }

      public function lainPage(){
        return view('lnf.lain');
      }
}
