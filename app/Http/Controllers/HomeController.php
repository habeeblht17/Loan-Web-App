<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

       // $user = User::findOrFail(Auth::user()->id);

        $totalLoans = LoanApplication::where('user_id', Auth::user()->id)->count();
        $unPaidLoans = LoanApplication::where('status', '=', 'Unpaid')->where('user_id', Auth::user()->id)->get();
        $unPaidLoansCount = LoanApplication::where('status', '=', 'Unpaid')->where('user_id', Auth::user()->id)->count();
        $paidLoans = LoanApplication::orderBy('created_at', 'DESC')->where('status', '=', 'Paid')->where('user_id', Auth::user()->id)->get()->take(5);
        $paidLoansCount = LoanApplication::orderBy('created_at', 'DESC')->where('status', '=', 'Paid')->where('user_id', Auth::user()->id)->count();
        return view('dashboard', compact( 'totalLoans', 'unPaidLoansCount', 'paidLoansCount','unPaidLoans', 'paidLoans'));

    }


}
