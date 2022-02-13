<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function data(){

    $menu = DB::table('menu')->get();

         foreach ($menu as $item) {
             $menu_trans = DB::table('menu_translatable')->where('subject_id', $item->id)->where('language', 'tr')->first();

            Menu::create([
            'order' => $item->order,
            'status' => $item->status,
            'title' => $menu_trans->title,

            ]);
        }





















    }
}
