<?php
namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity {

	/**
	 * The Chinese short name
	 *
	 * @var string
	 */
	protected $shortNameZh = '';

	/**
	 * Sets the Chinese short name.
	 *
	 * @param string $shortNameZh
	 *
	 * @return void
	 */
	public function setShortNameZh($shortNameZh) {
		$this->shortNameZh = $shortNameZh;
	}

	/**
	 * Gets the Chinese short name.
	 *
	 * @return string
	 */
	public function getShortNameZh() {
		return $this->shortNameZh;
	}
}