<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\karyawan;
use GuzzleHttp\Client as GuzzleHttpClient;





class karyawancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function index()
    {
      $client = new GuzzleHttpClient();
      $response = $client->request('GET', 'http://localhost:8080/pegawai');
      $karyawan = json_decode($response->getBody()->getContents());
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $cari)
    {
      $client = new \GuzzleHttp\Client();
      $input = $cari->all();
      $apirequest = $client->request('POST', 'http://localhost:8080/pegawai',[
        'form_params' => [
          'nama' => $input['Nama'],
          'Nip' => $input['Nip'],
          'alamat' => $input['Alamat'],
          'HP' => $input['HP'],
          'email' => $input['Email'],
        ]
      ]);
      return redirect('karyawan')->with('message', 'Data berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $karyawan = karyawan::find($id);
        // dd($karyawan);
        //
        // return view('karyawan.show', compact('karyawan'));

        $client = new GuzzleHttpClient();
        $response = $client->request('GET', 'http://localhost:8080/pegawai/' . $id);
        $karyawan = json_decode($response->getBody()->getContents());

          return view('karyawan.show', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client();
        $input = $request->all();
        $apirequest = $client->request('PUT', 'http://localhost:8080/pegawai/' . $id ,[
          'form_params' => [
            'nama' => $input['nama'],
            'Nip' => $input['Nip'],
            'alamat' => $input['alamat'],
            'HP' => $input['HP'],
            'email' => $input['Email'],
          ]
        ]);
        return redirect('karyawan')->with('message', 'Data berhasil diupdate!');


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {

      $client = new GuzzleHttpClient();
      $response = $client->request('GET', 'http://localhost:8080/pegawai/' . $id);
      $karyawan = json_decode($response->getBody()->getContents());

        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->request('DELETE', 'http://localhost:8080/pegawai/' . $id);
        return redirect('karyawan')->with('message', 'Data berhasil dihapus!');
    }
}
