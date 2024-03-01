<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BuktiBookingController extends Controller
{
    public function index()
    {
        $forms = Form::latest()->paginate(10);
        return view('beranda.booking.index', compact('forms'));
    }
}
