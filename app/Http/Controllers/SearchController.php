<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function search(Request $request){
        if(isset($_GET['query'])){
            
          $search_text = $_GET['query'];
          $Books = DB::table('books')->where ('tittle','LIKE','%'.$search_text.'%') ->paginate(2);
          return view('search',['Books'=>$Books]);



        }else   
        {
            return view ('search');
        }

    }
}
