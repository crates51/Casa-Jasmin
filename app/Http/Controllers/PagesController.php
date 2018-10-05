<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
   		$title ="Bun venit la Casa Jasmin!";
   		// return view('pages.index',compact('title'));
   		return view('pages.index')->with('title',$title);
   }

   public function about(){
   		$title ="Despre Noi";
   		return view('pages.about')->with('title',$title);

   }

   public function services(){
   		$data = array(
   			'title' => 'Servicii',
   			'services' => ['Design Web','Proramare','SEO']
   		);
   		return view('pages.services')->with($data);
   }
}
