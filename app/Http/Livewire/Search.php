<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class Search extends Component
{
    public String $query = '';
    public $jobs = [];

    public function updatedQuery()
    {

        $words = '%' . $this->query . '%';

        if (strlen($this->query) >= 2) {
            $this->jobs = Job::where('title', 'like', $words)
                ->orWhere('description', 'like', $words)
                ->get()->toArray();
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
