<?php

namespace App\Livewire;

use Livewire\Component;

class Userlist extends Component
{
    public array $users = [];

    public bool $wrapElements = false;

    public function flip()
    {
        $this->wrapElements = ! $this->wrapElements;
    }

    public function mount()
    {
        $user1 = new \stdClass();
        $user2 = new \stdClass();
        $user3 = new \stdClass();

        $user1->id = 1;
        $user1->name = 'Foo Bar 1';

        $user2->id = 2;
        $user2->name = 'Foo Bar 2';

        $user3->id = 3;
        $user3->name = 'Foo Bar 3';

        $this->users[] = $user1;
        $this->users[] = $user2;
        $this->users[] = $user3;
    }

    public function render()
    {
        return view('livewire.userlist', ['users' => $this->users, 'wrapElements' => $this->wrapElements]);
    }
}
