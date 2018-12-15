<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use anil\pack\TestFile;
class Test extends Controller
{
    //
    public function index()
    {
        
        return TestFile::testFunction();
    }
}
