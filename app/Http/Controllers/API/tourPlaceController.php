<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tour_place;
use Illuminate\Support\Facades\Validator;

class tourPlaceController extends Controller
{
    public function create( Request $request ) {
        $tour_place = new tour_place();

        $tour_place -> nama_tempat = $request -> input('nama_tempat');
        $tour_place -> tipe = $request -> input('tipe');
        $tour_place -> deskripsi = $request -> input('deskripsi');
        $tour_place -> stok_tiket = $request -> input('stok_tiket');
        $tour_place -> harga = $request -> input('harga');
        $tour_place -> jam_buka = $request -> input('jam_buka');
        $tour_place -> alamat = $request -> input('alamat');        
        $tour_place -> img_tempat = $request -> input('img_tempat'); 
        
        $tour_place -> save();
        return response()->json($tour_place);
    }

    // public function store( Request $request) {
    //     $validator = Validator::make($request->all(), [
    //         'nama_tempat'=>'required|max:255',
    //         'tipe'=>'required|max:255',
    //         'deskripsi'=>'required|max:255',
    //         'stok_tiket'=>'required|max:255',
    //         'harga'=>'required|max:255',
    //         'jam_buka'=>'required|max:255',
    //         'alamat'=>'required|max:255',
    //         'img_tempat'=>'required|image|mimes:jpeg,png,jpg|max:1024',
    //     ]);

    //     if( $validator->fails() ) {
    //         return response()->json([
    //             'status'=>422,
    //             'errors'=>$validator->message(),    
    //         ]);
    //     } else {
    //         $tour_place = new tour_place;
    //         $tour_place -> nama_tempat = $request -> input('nama_tempat');
    //         $tour_place -> tipe = $request -> input('tipe');
    //         $tour_place -> deskripsi = $request -> input('deskripsi');
    //         $tour_place -> stok_tiket = $request -> input('stok_tiket');
    //         $tour_place -> harga = $request -> input('harga');
    //         $tour_place -> jam_buka = $request -> input('jam_buka');
    //         $tour_place -> alamat = $request -> input('alamat');

    //         if( $request->hasFile('img_tempat') ) {
    //             $file = $request -> file('image');
    //             $extension = $file -> getClientOriginalExtension();
    //             $filename = time() .'.'. $extension;
    //             $file -> move('uploads/tourPlace', $filename);
    //             $tour_place -> image = 'uploads/tourPlace'. $filename;
    //         }

    //         return response()->json([
    //             'status'=>200,
    //             'message'=>'Tour Place addes successfull!'
    //         ]);
    //     }
    // }
}
