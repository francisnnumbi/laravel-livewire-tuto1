<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /*
     * @var \Livewire\TemporaryUploadedFile
     * */
    public $photo = [];
    public $koko;

    public function save(){

        $this->validate([
            'photo.*' => 'image|max:1024', // 1MB Max
        ]);


        foreach ($this->photo as $im){
            $im->store('public');// the image will be stored with temporary name
        }

        // if you want to keep original name
       // $this->image->storeAs('public', $this->image->getClientOriginalName());

    }

    public function render()
    {
        return view('livewire.image-upload', [
            'images'=> collect(Storage::files('public'))
            ->filter(fn($file) => in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']))
                ->map(fn($file) => Storage::url($file)),
        ]);
    }
}
