<?php
declare(strict_types=1);

namespace Chanshige\BearApp\Resource\App;

use BEAR\Resource\Annotation\JsonSchema;
use BEAR\Resource\ResourceObject;

/**
 * Class Sample
 *
 * @package Chanshige\BearApp\Resource\App
 */
class Sample extends ResourceObject
{
    /**
     * @JsonSchema(key="media", params="sample.json")
     * @return $this
     */
    public function onGet()
    {
        $this->body = [
            'media' => []
        ];

        return $this;
    }
}
