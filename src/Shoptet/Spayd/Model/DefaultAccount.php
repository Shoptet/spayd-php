<?php

namespace Shoptet\Spayd\Model;
use Shoptet\Spayd\Model;

abstract class DefaultAccount implements Account {
	
	const DEFAULT_LOCALE = 'CZ';
	
	protected $locale;
	
	protected $localeAlphabet = array(
		10 => 'A',
		11 => 'B',
		12 => 'C',
		13 => 'D',
		14 => 'E',
		15 => 'F',
		16 => 'G',
		17 => 'H',
		18 => 'I',
		19 => 'J',
		20 => 'K',
		21 => 'L',
		22 => 'M',
		23 => 'N',
		24 => 'O',
		25 => 'P',
		26 => 'Q',
		27 => 'R',
		28 => 'S',
		29 => 'T',
		30 => 'U',
		31 => 'V',
		32 => 'W',
		33 => 'X',
		34 => 'Y',
		35 => 'Z',
	);
	
	public function __construct($locale = NULL) {
		if (empty($locale) === TRUE) {
			$this->locale = self::DEFAULT_LOCALE;
		} else {
			$this->locale;
		}
	}
	
	public function getNumericLanguageCode() {
		$numericLanguageCode = '';

		// step over each char from language code
		foreach(str_split($this->locale) as $char) {
			 // use the number for latein alphabet to decode
			 $numericLanguageCode .= array_search($char, $this->localeAlphabet);
		}

		return $numericLanguageCode . '00';
	}
}