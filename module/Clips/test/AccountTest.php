<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */
namespace ClipsTest;


class AccountTest extends \PHP_Unit_Framework_TestCase
{
    public function canCreateAccountObject()
    {
        $account = new Account();
        $this->assert();
    }
}