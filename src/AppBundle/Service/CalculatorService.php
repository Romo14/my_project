<?php
/**
 * Created by PhpStorm.
 * User: Oriol Gasset
 * Date: 10/6/2016
 * Time: 17:59
 */

namespace AppBundle\Service;


class CalculatorService
{
    private $v1;
    private $v2;
    private $result;


    public function sum(){
        $this->setResult($this->getV1()+$this->getV2());
    }

    /**
     * @return mixed
     */
    public function getV2()
    {
        return $this->v2;
    }

    /**
     * @return mixed
     */
    public function getV1()
    {
        return $this->v1;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @param mixed $v1
     */
    public function setV1($v1)
    {
        $this->v1 = $v1;
    }

    /**
     * @param mixed $v2
     */
    public function setV2($v2)
    {
        $this->v2 = $v2;
    }

    public function subs()
    {
        $this->setResult($this->getV1()-$this->getV2());
    }

    public function mult()
    {
        $this->setResult($this->getV1()*$this->getV2());
    }

    public function div()
    {
        $this->setResult($this->getV1()/$this->getV2());
    }
}