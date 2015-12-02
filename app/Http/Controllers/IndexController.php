<?php
/**
 * Created by PhpStorm.
 * User: alemonteiro
 * Date: 02/12/2015
 * Time: 11:48
 */

namespace LumenAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }
}