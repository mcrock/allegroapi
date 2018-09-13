<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 10:42
 */

namespace mcrock\AllegroApi\Rest\Model\Collection;


class StringCollection extends AbstractCollection
{
    public function add($value, $offset = null)
    {
        if (!is_string($value)) {
            throw new WrongElementTypeException('string');
        }

        parent::add($value, $offset);
    }

}
