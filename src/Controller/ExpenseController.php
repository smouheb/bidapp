<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExpenseController extends AbstractController
{
    /**
     * @Route("/expense", name="expense")
     */
    public function summaryExpense(Request $request)
    {
      dump($request->query);
       if (count($request->query) > 0) {

         $response = new JsonResponse(['data' => 'ok']);

         return $response;

       } else {

         return $this->render('expense/index.html.twig', [
             'controller_name' => 'ExpenseController',
         ]);
       }

    }

    /**
     * @Route("/add-expense", name="add-expense")
     */
    /*public function addExpense()
    {
      //add Expenses
      //indicate whether it is recurrent

    }*/

    /**
     * @Route("/expense", name="expense")
     */
    /*public function removeExpense()
    {

    }*/
}
