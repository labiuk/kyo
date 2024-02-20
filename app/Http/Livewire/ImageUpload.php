<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UploadImage;

class ImageUpload extends Component
{
  use WithFileUploads;

  public $images = [];
    public function render()
    {
        return view('livewire.image-upload');
    }
    public function upload()
    {   
        // dd(public_path());
        $this->validate([
            'images.*' => 'image|max:2048', // 1MB Max
        ]);
        foreach ($this->images as $key => $image) {
           $filename = $this->images[$key] = $image->store('images');
            UploadImage::create(['file_name' => $filename, 'email'=> auth()->user()->email]);
        }
        $this->images = json_encode($this->images);
        session()->flash('message', 'Images has been successfully Uploaded.');
        return redirect()->to('/upload');
    }
}