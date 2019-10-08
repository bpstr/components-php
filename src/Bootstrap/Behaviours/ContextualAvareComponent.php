<?php

namespace Bpstr\Components\Bootstrap\Behaviours;

use Bpstr\Components\Bootstrap\Component;
use Bpstr\Components\Bootstrap\Contextual;

abstract class ContextualAvareComponent extends Component {

	public static function primary($content) {
		return new static($content, Contextual::primary());
	}

	public static function secondary($content) {
		return new static($content, Contextual::secondary());
	}

	public static function success($content) {
		return new static($content, Contextual::success());
	}

	public static function danger($content) {
		return new static($content, Contextual::danger());
	}

	public static function warning($content) {
		return new static($content, Contextual::warning());
	}

	public static function info($content) {
		return new static($content, Contextual::info());
	}


	public static function light($content) {
		return new static($content, Contextual::light());
	}


	public static function dark($content) {
		return new static($content, Contextual::dark());
	}

	/**
	 * @var \Bpstr\Components\Bootstrap\Contextual
	 */
	protected $contextual;

	/**
	 * ContextualAvareComponent constructor.
	 *
	 * @param $content
	 * @param \Bpstr\Components\Bootstrap\Contextual $contextual
	 */
	public function __construct($content, Contextual $contextual) {
		parent::__construct();
		$this->appendContent($content);
		$this->contextual = $contextual;
	}

}
