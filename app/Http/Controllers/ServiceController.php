<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('service.index', ['services'=>$services]);
    }

    public function create(){
        return view('service.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'cost' => 'required|numeric',
        ]);
    

    
        $newservice = Service::create($data);
       
        
    
        return redirect(route('service.index'));
    }
    
    
}
