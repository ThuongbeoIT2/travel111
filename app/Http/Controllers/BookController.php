<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BookController
{

    public function them_book(Request $request){
        DB::table('hwp_book')->insert([
            'book_name' => $request->name,
            'book_number'=> $request->sdt,
            'id_tour' =>$request->id_tour,
            'book_date' => date('y-m-d h:i:s')
        ]);
        $success = 'Sent success. Thanks for filling out our form!!!';
        return redirect()->back();
    }

    public function indexBook(Request $request){
        //        try {
            
                $index = 1;
                $ds_bai_viet = DB::table('hwp_book')
                ->join('hwp_tour','hwp_tour.id','=','hwp_book.id_tour')
                    ->orderBy('hwp_book.id', 'desc')
                    ->paginate(15);

            
                return view("admin.book.book", compact('ds_bai_viet', 'index'));
        

//        } catch (\Exception $e) {
//            return abort(404);
//        }
    }
}
