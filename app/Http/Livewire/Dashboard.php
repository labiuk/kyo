<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\UploadImage;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Dashboard extends Component
{   
    public $images = [];
    public $user_images = [];
    public $role;
    public $image;
    public function mount() {
        $this->role = auth()->user()->role;
        $this->user_images = DB::select("SELECT * FROM upload_images WHERE email = ?", [auth()->user()->email]);
        $this->images = DB::select("SELECT * FROM upload_images WHERE email != ?", [auth()->user()->email]);
    }
    public function render()
    {   
        // dd($this->images, $this->user_images, count($this->user_images));
        return view('livewire.dashboard', [
            'mylength' => count($this->user_images),
            'imglength' => count($this->images)
        ]);
    }
    public function remove($index)
    {   
        DB::delete("DELETE FROM upload_images WHERE file_name = ?", [$this->user_images[$index]['file_name']]);
        session()->flash('message', 'Images has been successfully Uploaded.');
        return redirect()->route('dashboard');
    }
}
