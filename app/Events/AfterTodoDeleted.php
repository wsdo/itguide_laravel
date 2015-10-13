<?php

namespace App\Events;
use App\Events\AfterTodoDeleted;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AfterTodoDeleted extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

    public function destroy($id)
    {
        Todo::destroy($id);
        
        event(new AfterTodoDeleted($id));

        return 'delete';
    }
}
