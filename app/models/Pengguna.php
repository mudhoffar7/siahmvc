<?php

class Pengguna extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=5, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(column="nama", type="string", length=25, nullable=false)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(column="alamat", type="string", length=50, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var string
     * @Column(column="hp", type="string", length=12, nullable=true)
     */
    public $hp;

    /**
     *
     * @var string
     * @Column(column="rule", type="string", length=10, nullable=true)
     */
    public $rule;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("siaframework");
        $this->setSource("pengguna");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pengguna';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengguna[]|Pengguna|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengguna|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
