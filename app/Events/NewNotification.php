<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_ids;
    public $notification_type;
    public $template_id;

    /**
     * Create a new event instance.
     * @return void
     */
    public function __construct($variables)
    {
        $this->user_ids          = $variables['user_ids'];
        $this->notification_type = $variables['notification_type'];
        $this->template_id       = $variables['template_id'];
    }

}
