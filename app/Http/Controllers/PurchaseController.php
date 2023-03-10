<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store(Request $request){


        $PurchaseController->add_message( $_POST['breed'], 'Pet Breed');
        $PurchaseController->add_message( $_POST['kinds'], 'Kind of Pet');
        $PurchaseController->add_message( $_POST['name'], 'Product Name');
        $PurchaseController->add_message( $_POST['bought'], 'Product Kls Bought');
        $PurchaseController->add_message( $_POST['date'], 'Date of Purchase');
        $PurchaseController->add_message( $_POST['total'], 'Total');
        $PurchaseController->add_message( $_POST['message'], 'Message');
    
        echo PurchaseController->send();
        }
}
