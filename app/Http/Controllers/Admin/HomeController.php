<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:Super Admin']);
    }

    public function index() {
        $expenses = Expense::latest('expense_amount')->first();
        $allExpenses = Expense::orderBy('created_at', 'DESC')->get();
        $totalLoanAmount = LoanApplication::where('approved', true)->sum('amount');
        $totalPaidLoan = LoanApplication::where('approved', true)->where('status', 'Paid')->sum('payment_amount');
        $totalUnPaidLoan = LoanApplication::where('approved', true)->where('status', 'Unpaid')->sum('payment_amount');

        return view('admin.index',
        compact('expenses',  'totalLoanAmount','totalPaidLoan', 'allExpenses','totalUnPaidLoan', 'totalLoanAmount'));
    }

    public function getData(Request $request) {
        $from = Carbon::parse($request->from)->toDateTimeString();
        $to =  Carbon::parse($request->to)->toDateTimeString();

        $results = Expense::whereBetween('created_at',[$from,$to])->get();

        return view('admin.searchResult', compact('results'));

    }

    public function status () {
        $loanApplications = LoanApplication::with('user')->where('status', '=', 'Unpaid')->get();
        $loanApplicationPaid = LoanApplication::with('user')->where('status', '=', 'paid')->get();
        return view('admin.status', compact('loanApplications', 'loanApplicationPaid'));
    }

    public function getRecord(Request $request) {
        $from = Carbon::parse($request->from)->toDateTimeString();
        $to =  Carbon::parse($request->to)->toDateTimeString();

        $results = LoanApplication::whereBetween('created_at',[$from,$to])->get();

        return view('admin.loanRecord', compact('results'));

    }

    public function updatePayment () {
        $loanApplications = LoanApplication::with('user')->where('status', '=', 'Unpaid')->get();
        return view('admin.updatePayment', compact('loanApplications'));
    }

    public function loanDetail(LoanApplication $loanApplication, User $user)
    {
        return  view('admin.loanDetail',compact('loanApplication','user'));
    }


    /**
     * Edit Loan
    */
    public function editloan(LoanApplication $loanApplication, User $user)
    {
        return  view('admin.editLoan',compact('loanApplication','user'));
    }

    /**
     * Update loan status
     */
    public function update(Request $request, LoanApplication $loanApplication, User $user)
    {
        $request->validate([
            'status' => ['required', 'in:Unpaid,Paid'],
        ]);

        $loanApplication->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.updatePayment')
            ->with('success', 'Update Payment Status Successfully');

    }
}
