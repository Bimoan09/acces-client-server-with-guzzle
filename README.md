# acces-client-server-with-guzzle

 					
					**Client-server akses lumen restAPI with Guzzle**

guzzle adalah salah satu library PHP yang menangani akses HTTP client.. di dalam Guzlle kita bisa mengakases file di restAPI dari website kita 
sendiri...,, .. fungsi-fungsi yang ada di dalam Guzzle yaitu :  * GET   => memanggil data dari restAPI
								* POST	=> membuat data baru 
								* PUT	=> mengedit dan update data yang sudah ada
								* DELETE=> menghapus data 
1. sytems requirments dalam instalasi Guzzle :
	* PHP 5.5.0
	* To use the PHP stream handler, allow_url_fopen must be enabled in your system's php.ini.
	* To use the cURL handler, you must have a recent version of cURL >= 7.19.4 compiled with OpenSSL and zlib.

2. **instalation**
	* jika kamu belum install composer ,, install composer dulu  
		$ curl -sS https://getcomposer.org/installer | php
	*jika sudah.. lanjut install Guzzle .. 
		$ php composer.phar require guzzlehttp/guzzle:~6.0

tahap instalasi selesai.. sekarang dalam Guzzle kita mempunyai beberapa fungsi seperti diatas... nah dalam menerapkan fungsi2 tersebut
ada beberapa method yang harus ditambahkan di dalam **controller** project laravel kita.. berikut syntaxnya:
	
	# GET ( memangil semua data pegawai)

		* public function index()
    {
      $client = new GuzzleHttpClient();
      $response = $client->request('GET', 'http://localhost:8080/pegawai');
      $karyawan = json_decode($response->getBody()->getContents());
        return view('karyawan.index', ['karyawan' => $karyawan]);
    }



	# GET ( memanggil data pegawai berdasarkan ID )

  public function show($id)
    {
        
        $client = new GuzzleHttpClient();
        $response = $client->request('GET', 'http://localhost:8080/pegawai/' . $id);
        $karyawan = json_decode($response->getBody()->getContents());

          return view('karyawan.show', ['karyawan' => $karyawan]);
    }


	# POST ( membuat data baru karyawan)

  public function show($id)
    {
        
        $client = new GuzzleHttpClient();
        $response = $client->request('GET', 'http://localhost:8080/pegawai/' . $id);
        $karyawan = json_decode($response->getBody()->getContents());

          return view('karyawan.show', ['karyawan' => $karyawan]);
    }


	# PUT ( mengedit data karyawan berdasar ID)


public function edit($id)
    {

      $client = new GuzzleHttpClient();
      $response = $client->request('GET', 'http://localhost:8080/pegawai/' . $id);
      $karyawan = json_decode($response->getBody()->getContents());

        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

* lalu setelah di edit kita memerlukan tabel untuk meng update data karyawan agar muncul dihalaman index..

* public function update(Request $request, $id)
   * {
      *  $client = new \GuzzleHttp\Client();
       *  $input = $request->all();
        * $apirequest = $client->request('PUT', 'http://localhost:8080/pegawai/' . $id ,[
         * 'form_params' => [
          *  'nama' => $input['nama'],
           * 'Nip' => $input['Nip'],
           * 'alamat' => $input['alamat'],
            * 'HP' => $input['HP'],
           * 'email' => $input['Email'],
          ]
        ]);
        return redirect('karyawan')->with('message', 'Data berhasil diupdate!');


    }

	# DELETE (untuk menghapus data karyawan berdasarkan ID)

 * public function destroy($id)
    * {
       * $client = new \GuzzleHttp\Client();
         * $request = $client->request('DELETE', 'http://localhost:8080/pegawai/' . $id);
        * return redirect('karyawan')->with('message', 'Data berhasil dihapus!');
    }
}

