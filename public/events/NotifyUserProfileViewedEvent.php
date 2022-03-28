<?php
namespace App\Events;
use Symfony\Contracts\EventDispatcher\Event;
use App\System\EventManager;
use App\Plugin\Validation;
use App\Subscribers\PostSubscriber;

class NotifyUserProfileViewedEvent extends EventManager {

    public const NAME = 'profile.viewed';

    private $member_id;
    private $viewed_by;

    public function __construct($app, $data) 
    {
        parent::__construct($app);
        $this->data = $data;
        $this->member_id = $data['member_id'];
        $this->viewed_by = $data['viewed_by_id'];
    }

    public function viewed_me() 
    {
        $member_id = $this->member_id;
        $viewed_by_id = $this->viewed_by;
        
        $sender_name = $this->config->setting['site_name'];

        $get_recipient_name = new \Web\Model\MemberModel($this->app);
        $recipient_name = $get_recipient_name->get_username($member_id);

        $get_viewed_by = new \Web\Model\MemberModel($this->app);
        $viewed_by = $get_viewed_by->get_username($viewed_by_id);

        $subject = "New Profile View";
        $message = "{$recipient_name}, a member just checked you out! Don't be shy, say hi to <a href='member/view/$viewed_by'>{$viewed_by}</a>";
        $update_view_table =  new \Web\Model\MemberModel($this->app);
        $update_view_table->member_view($member_id, $viewed_by_id);
        $notify =  new \Web\Model\MemberModel($this->app);
        $notify->notify_member_view($recipient_name, $sender_name, $subject, $message);
    }

}