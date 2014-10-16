<?php

namespace GrPhpDev\Domain\Serializer;

/**
 * Class SponsorSerializer
 * @package GrPhpDev\Domain\Serializer
 */
class SponsorSerializer
{
    /**
     * @param array $sponsors
     * @return array
     */
    public function serializeCollection(array $sponsors)
    {
        $data = [
            'sponsors' => []
        ];

        foreach ($sponsors as $sponsor) {
            $data['sponsors'][] = [
                'id' => $sponsor->getId(),
                'name' => $sponsor->getName(),
                'description' => $sponsor->getDescription(),
                'image' => $sponsor->getImage(),
                'url' => $sponsor->getUrl()
            ];
        }

        return $data;
    }
}
