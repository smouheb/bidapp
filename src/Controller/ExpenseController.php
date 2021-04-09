<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExpenseController extends AbstractController
{
    /**
     * @Route("/expense", name="expense")
     */
    public function summaryExpense(): Response
    {
        return $this->render('expense/index.html.twig', [
            'controller_name' => 'ExpenseController',
        ]);
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
