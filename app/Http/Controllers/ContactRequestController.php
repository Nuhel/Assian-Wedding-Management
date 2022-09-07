<?php

namespace App\Http\Controllers;

use App\DataTables\ContactRequestDataTable;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function index(ContactRequestDataTable $dataTable){
        return $dataTable->render('components.datatable.index',['heading'=>'Contact Requests']);
    }
}
