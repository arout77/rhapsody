<?php
namespace App\Subscribers;
 
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Events\PostEvent;
use App\Events\NotifyUserProfileViewedEvent;
 
class PostSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // This array acts as a registry; a location where
        // we list all Events to be called.
        return array(
            PostEvent::NAME => 'onPostEvent',
            NotifyUserProfileViewedEvent::NAME => 'onProfileViewEvent',
        );
    }
 
    public function onPostEvent(PostEvent $event)
    {
        // fetch event information here
        return $event->getPostData();
    //    $data = $event->getPostData();
    //    foreach($data as $k => $v) {
    //        echo $k . ' => ' . $v . '<br>';
    //    }
    }

    public function onProfileViewEvent(NotifyUserProfileViewedEvent $event)
    {
        // fetch event information here
        return $event->viewed_me();
    }
}