<?php

namespace SJBR\StaticInfoTables\Domain\Model;

/**
 * Territory
 */
class Territory extends AbstractEntity
{
    /**
     * Chinese name of the territory
     * @var string
     */
    protected $nameZh = '';

    /**
     * Sets the Chinese name of the territory
     *
     * @param string $nameZh
     *
     * @return void
     */
    public function setNameZh($nameZh)
    {
        $this->nameZh = $nameZh;
    }

    /**
     * Returns the Chinese name of the territory
     *
     * @return string
     */
    public function getNameZh()
    {
        return $this->nameZh;
    }
}
