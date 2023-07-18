<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use Ramsey\Uuid\Type\Integer;

class Search extends Component
{
    public String $query = '';
    public $jobs = [];

    public Int $selectedIndex = 0;

    public function incrementIndex()
    {

    }

    public function updatedQuery()
    {

        $words = '%' . $this->query . '%';

        if (strlen($this->query) >= 2) {
            $this->jobs = Job::where('title', 'like', $words)
                ->orWhere('description', 'like', $words)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}
