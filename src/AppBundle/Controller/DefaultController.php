<?php

namespace AppBundle\Controller;

use AppBundle\Type\MyCalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $answer = '';

        $form = $this->createForm(MyCalculatorType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $rawSum = $form->getData()['sum'];

            $sums = preg_split("/\D/", $rawSum);
            $signs = preg_split("/\d/", $rawSum);

            $signs = array_filter($signs);
            $answer = empty($sums[0]) === true ? 0 : $sums[0] ;
            foreach($sums as $key => $sum) {
                if( $key === 0){
                    continue;
                }

                foreach ($signs as $sign) {
                    if($sign === '/' && $sum === '0'){
                        $answer = 'Infinity';
                        break 2;
                    }

                    switch ($sign) {
                        case '+':
                            $answer += $sum;
                            break;
                        case '-':
                            $answer -= $sum;
                            break;
                        case '/':
                            $answer /=  $sum;
                            break;
                        case '*':
                            $answer *=$sum;
                            break;
                        default:
                    }
                }
            }

        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'answer' => $answer
        ]);
    }
}
