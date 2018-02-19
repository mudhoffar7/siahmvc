<?php

namespace Siaframework\Models\Entities;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="iduser", type="integer", length=11, nullable=false)
     */
    public $iduser;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=200, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(column="username", type="string", length=45, nullable=false)
     */
    public $username;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=100, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(column="password", type="string", length=200, nullable=false)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(column="datetime", type="string", nullable=false)
     */
    public $datetime;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("siaframework");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
