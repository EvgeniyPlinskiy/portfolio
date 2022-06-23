<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function get_menu()
  {
    $menu = Menu::all();
    return response()->json([
      'menu' => $menu
    ], 200);
  }
}
