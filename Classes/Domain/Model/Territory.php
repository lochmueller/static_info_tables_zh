<?php

namespace SJBR\StaticInfoTables\Domain\Model;

/**
 * Territory
 */
class Territory extends AbstractEntity
{
    /**
     * Chinese name of the territory
     *
     * @var string
     */
    protected string $nameZh = '';

    /**
     * Sets the Chinese name of the territory
     */
    public function setNameZh(string $nameZh):void
    {
        $this->nameZh = $nameZh;
    }

    /**
     * Returns the Chinese name of the territory
     */
    public function getNameZh():string
    {
        return $this->nameZh;
    }
}
