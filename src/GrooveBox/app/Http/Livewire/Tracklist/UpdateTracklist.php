<?php

namespace App\Http\Livewire\Tracklist;

use App\Models\Tracklist\Tracklist;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateTracklist extends Component
{
    use WithFileUploads;

    public $tracklist, $name, $description, $privacy, $image;

    protected $rules = [
        'name' => 'nullable',
        'description' => 'nullable',
        'privacy' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,gif',
    ];

    /**
     * Render the component's view
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('livewire.tracklist.update-tracklist');
    }

    /**
     * Get the actual tracklist
     * @param $tracklistId
     * @return void
     */
    public function mount($tracklistId) {
        $this->tracklist = Tracklist::find($tracklistId);

        if (!$this->tracklist) {
            redirect('/home');
        }
    }

    /**
     * Stores the new tracklist's data
     * @return never|void
     */
    public function save() {
        $this->validate();
        try {
            $tracklist = Tracklist::find($this->tracklist->id);

            if ($this->image) {
                $newImageName = time() . str_replace(" ", "", $this->image->getClientOriginalName());

                $imagePath = 'mix/'.$newImageName;

                $this->image->storeAs('public/mix', $newImageName);
                $tracklist->image = $imagePath;
            }

            if ($this->name) {
                $tracklist->name = $this->name;
            }

            if ($this->description) {
                $tracklist->description = $this->description;
            }

            if ($this->privacy) {
                $tracklist->privacy = $this->privacy;
            } else {
                $tracklist->privacy = 0;
            }

            $tracklist->user_id = auth()->user()->id;

            $tracklist->save();

            redirect('/tracklist/'.$tracklist->id);

        } catch (Exception $exception) {
            return dd($exception);
        }
    }
}
