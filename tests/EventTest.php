<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 */

namespace miBadger\Event;

use PHPUnit\Framework\TestCase;

/**
 * The event test.
 *
 * @since 1.0.0
 */
class EventTest extends TestCase
{
	public function testEvent()
	{
		$this->assertInstanceOf('miBadger\Event\Event', new Event());
	}
}
