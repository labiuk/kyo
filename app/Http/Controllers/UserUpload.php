<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Models\UploadImage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class UserUpload extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('upload');
    }  
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'files' => 'required',
            'files.*' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        
        $files = [];
        if ($request->file('files')){
            foreach($request->file('files') as $key => $file)
            {
                $file_name = time().rand(1,99).'.'.$file->extension();  
                $file->move(public_path('uploads'), $file_name);
                $files[]['name'] = $file_name;
            }
        }
    
        // foreach ($files as $key => $file) {
        //     UploadImage::create($file);
        // }
       
        return back()->with('success','File uploaded successfully');
     
    }
}