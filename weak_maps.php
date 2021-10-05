<?php


 # Weak Maps (key, value) store.
/*
 Weak maps allow creating a map from objects to arbitrary values
 (similar to SplObjectStorage) without preventing the objects that are used
 as keys from being garbage collected. If an object key is garbage collected,
 it will simply be removed from the map.

 Weak maps are effectively key value stores that allow for garbage collection.
 You won't reach for these often, but they're nonetheless an important tool to have in your belt.
 */
interface Event {}

class SomeEvent implements Event {}
class AnotherEvent implements Event {}

class Dispatcher
{
    protected WeakMap $dispatchCount;

    public function __construct()
    {
        $this->dispatchCount = new WeakMap();
    }

    public function dispach(Event $event)
    {
        $this->incrementDispatches($event);

    }

    private function incrementDispatches(Event $event): void
    {
        $this->dispatchCount[$event] ??= 0;

        $this->dispatchCount[$event] ++;
    }
}

$dispatcher = new Dispatcher;

$event = new SomeEvent;
$dispatcher->dispach($event);
$dispatcher->dispach($event);

$anotherEvent = new AnotherEvent;
$dispatcher->dispach($anotherEvent);

var_dump($dispatcher);