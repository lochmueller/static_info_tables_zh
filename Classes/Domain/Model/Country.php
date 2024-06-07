<?php

namespace SJBR\StaticInfoTables\Domain\Model;

/**
 * Country
 */
class Country extends AbstractEntity
{

    /**
     * The Chinese short name
     *
     * @var string
     */
    protected string $shortNameZh = '';

    /**
     * Sets the Chinese short name.
     */
    public function setShortNameZh(string $shortNameZh):void
    {
        $this->shortNameZh = $shortNameZh;
    }

    /**
     * Gets the Chinese short name.
     */
    public function getShortNameZh():string
    {
        return $this->shortNameZh;
    }
}
