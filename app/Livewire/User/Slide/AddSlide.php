<?php

namespace App\Livewire\User\Slide;

use Livewire\Component;
use App\Models\Slide;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AddSlide extends Component
{
    use WithFileUploads;

    public $form = [
        'name' => '',
        'description' => '',
        'buttonName' => '',
        'buttonLink' => '',
        'photo' => null,
    ];

    public function render()
    {
        return view('livewire.user.slide.add');
    }

    public function submit()
    {
        // Validate the form fields
        $this->validate([
            'form.name' => 'required|string',
            'form.description' => 'required|string',
            'form.buttonName' => 'nullable|string',
            'form.buttonLink' => 'nullable|url',
            'form.photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the file size as needed
        ]);

        // Store the photo in a temporary directory
        $photoPath = Storage::disk('local')->putFile('temp/slides', $this->form['photo']);

        // Create a new slide record in the database
        Slide::create([
            'name' => $this->form['name'],
            'description' => $this->form['description'],
            'button_name' => $this->form['buttonName'],
            'button_link' => $this->form['buttonLink'],
            'photo' => $photoPath,
        ]);

        // Reset the form fields after successful submission
        $this->reset('form');

        // Optionally, you can show a success message or redirect the user
        session()->flash('message', 'Slide added successfully!');
    }
}
