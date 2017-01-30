<?php
/**
 * CLiPs - WEBerStudio.net
 *
 * @author    Ked Weber <not@weberstudio.net>
 * @link      https://github.com/kedweber/zend2-skeleton-add-flesh
 * @copyright Copyright (c) 2017
 * @license   All rights reserved
 */

namespace Clips\Service;

use Clips\Entity\Accounts;

/**
 * Class UserService
 * 
 * @package Clips\Service
 * @subpackage UserService
 */
class UserService extends ClipsServices
{
    /**
     * @var \Clips\Entity\Accounts
     */
    protected $currentUser;

    /**
     * Assure User is logged in with an active session
     * 
     * @return bool|\Clips\Entity\Accounts
     */
    public function getCurrentUser() {
        // Return false if session_id not set
        if (!isset($_SESSION["id"])) {
            return false;
        }
        return $this->entityManager->getRepository('Clips\Entity\Accounts')
            ->findById($_SESSION["id"]);
    }

    /**
     * Check login credentials
     *
     * @param string $username
     * @param string $password
     * @return bool|\Clips\Entity\Accounts|null|object
     */
    public function checkLogin($username, $password)
    {
        $account =$this->getCurrentUser();
        if(!empty($account) && $account !== false) {
            return $account;
        }

        $account = $this->entityManager->getRepository('Clips\Entity\Accounts')
            ->findOneBy(array(
                'username' => $username
            ));
        if (!empty($account)) {
            if (crypt($password, $account->getPassword() == $account->getPassword())) {
                $this->currentUser = $account;
                //TODO USE key, secret and timeout in session
                $_SESSION['id'] = $account->getId();
            }
            return $this->currentUser;
        }
        return false;
    }

    /**
     * Destroy the current session which logs the user out
     *
     * @param void
     * @return void
     */
    public function logout() {
        if (isset($_SESSION) || isset($_SESSION["id"])) {
            foreach ($_SESSION as $k => $v) {
                unset($_SESSION[$k]);
            }
            session_destroy();
        }
        // Remove Site cookie (or Not, TODO discuss this with teachers)
        // setcookie("reportEntity", "", time()-3600);
    }
}