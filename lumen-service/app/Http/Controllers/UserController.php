<?php

namespace App\Http\Controllers;
use App\pegawai;
use Illuminate\Http\Request;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function users(pegawai $pegawai){

     $pegawai = $pegawai->all();
   return response()->json($pegawai, 201);
   }
   public function profileById(pegawai $pegawai, $id){

     $pegawai = $pegawai->find($id);
     return response()->json($pegawai, 201);


       }

       public function store(Request $request){
         $pegawai = pegawai::create($request->all());
         return response()->json($pegawai, 201);
       }

       public function update(Request $request, $id){
         $pegawai = pegawai::find($id);
         $pegawai->update($request->all());

       }

       public function delete($id){
       pegawai::destroy($id);
       return response()->json();
     }
}
