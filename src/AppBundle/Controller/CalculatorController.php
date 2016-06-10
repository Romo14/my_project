<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @Route("/", name="app_calculator_index")
     */
    public function indexAction()
    {
        return $this->render(':calculator:index.html.twig',array() );
    }

    /**
     * @Route("/sum", name="app_calculator_sum")
     */
    public function sumAction()
    {
        return $this->render(':calculator:form.html.twig',array('operation'=>'app_calculator_doSum') );
    }

    /**
     * @Route("/doSum", name="app_calculator_doSum")
     */
    public function doSumAction(Request $request)
    {
        $v1 = $request->request->get('v1');
        $v2 = $request->request->get('v2');
        $calculator = $this->get('calculator');
        $calculator->setV1($v1);
        $calculator->setV2($v2);
        $calculator->sum();
        return $this->render(':calculator:result.html.twig',array('result'=>$calculator->getResult()));
    }

    /**
     * @Route("/sub", name="app_calculator_sub")
     */
    public function subAction()
    {
        return $this->render(':calculator:form.html.twig',array('operation'=>'app_calculator_doSub') );
    }

    /**
     * @Route("/doSub", name="app_calculator_doSub")
     */
    public function doSubAction(Request $request)
    {
        $v1 = $request->request->get('v1');
        $v2 = $request->request->get('v2');
        $calculator = $this->get('calculator');
        $calculator->setV1($v1);
        $calculator->setV2($v2);
        $calculator->subs();
        return $this->render(':calculator:result.html.twig',array('result'=>$calculator->getResult()));
    }

    /**
     * @Route("/mult", name="app_calculator_mult")
     */
    public function multAction()
    {
        return $this->render(':calculator:form.html.twig',array('operation'=>'app_calculator_doMult') );
    }

    /**
     * @Route("/doMult", name="app_calculator_doMult")
     */
    public function doMultAction(Request $request)
    {
        $v1 = $request->request->get('v1');
        $v2 = $request->request->get('v2');
        $calculator = $this->get('calculator');
        $calculator->setV1($v1);
        $calculator->setV2($v2);
        $calculator->mult();
        return $this->render(':calculator:result.html.twig',array('result'=>$calculator->getResult()));
    }

    /**
     * @Route("/div", name="app_calculator_div")
     */
    public function divAction()
    {
        return $this->render(':calculator:form.html.twig',array('operation'=>'app_calculator_doDiv') );
    }

    /**
     * @Route("/doDiv", name="app_calculator_doDiv")
     */
    public function doDivAction(Request $request)
    {
        $v1 = $request->request->get('v1');
        $v2 = $request->request->get('v2');
        $calculator = $this->get('calculator');
        $calculator->setV1($v1);
        $calculator->setV2($v2);
        $calculator->div();
        return $this->render(':calculator:result.html.twig',array('result'=>$calculator->getResult()));
    }

    
}
