<?php

namespace GrPhpDev\Domain\Serializer;

/**
 * Class EventSerializer
 * @package GrPhpDev\Domain\Serializer
 */
class EventSerializer
{
    /**
     * @param array $events
     * @return array
     */
    public function serializeCollection(array $events)
    {
        $data = [
            'events' => [],
            'locations' => [],
            'talks' => []
        ];

        foreach ($events as $event) {
            $data['events'][] = [
                'id' => $event->getId(),
                'title' => $event->getTitle(),
                'description' => $event->getDescription(),
                'eventDate' => $event->getEventDate() ? $event->getEventDate()->format('m/d/Y H:i:s') : null,
                'location' => $event->getLocation() ? $event->getLocation()->getId() : null
            ];

            if ($event->getLocation()) {
                $data['locations'][] = [
                    'id' => $event->getLocation()->getId(),
                    'name' => $event->getLocation()->getName()
                ];
            }
        }

        return $data;
    }
}
