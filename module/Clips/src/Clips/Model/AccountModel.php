<?php
namespace Clips\Model;
use Clips\Model\AbstractModel;

/**
 * ClipsAdmin User's Account Model, login and session info
 *
 * This is the model of a user
 *
 * @category    Clips
 * @package     Model
 * @subpackage  AccountModel
 */
class AccountModel extends AbstractModel
{
    /**
     * The id of the user
     *
     * @var int
     */
    public $id = null;

    /**
     * The username (login name)
     *
     * @var string
     */
    public $username = null;

    /**
     * The crypted password of the user
     *
     * @var string
     */
    public $password = null;

    /**
     * The API key of the user to connect to the Clips API
     *
     * @var string
     */
    public $key = null;

    /**
     * The API secret of the user to connect to the Clips API
     *
     * @var string
     */
    public $secret = null;

    /**
     * @var bool
     */
    public $active = null;

    /**
     * Checks if an accountModel is valid
     *
     * @return bool
     */
    public function isValid() {
        return ($this->id != null);
    }
}
