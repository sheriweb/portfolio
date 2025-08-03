<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class ShowTeamPage extends Component
{
    public function render()
    {
        $teams = Team::all();

        return view('livewire.show-team-page', [
            'teams' => $teams
        ]);
    }
}
