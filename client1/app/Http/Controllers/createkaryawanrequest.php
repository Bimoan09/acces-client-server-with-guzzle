<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class createkaryawanrequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'Nama'       => 'required',
			'Nip'		 => 'required',
			'Alamat'	 => 'required',
            'HP'      => 'required|email',
            'Email' 	 => 'required|numeric'
		];
	}

	 public function messages()
    {
        return [
            'Nama.required'  => 'Kolom nama harus diisi',
            'Nip.required'	 => 'Kolom umur harus diisi',
            'Alamat.requred' => 'Kolom alamat harus diisi',
            'HP.required' => 'Kolom email belum diisi',
            'Email.email' 	 => 'Email tidak sesuai',
            'level.required' => 'Level pegawai belum dipilih',
            'level.numeric'  => 'Level pegawai tidak sesuai'
        ];
    }

}
