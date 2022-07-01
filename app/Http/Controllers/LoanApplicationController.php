<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\LoanApplication;
use Illuminate\Support\Facades\Auth;

class LoanApplicationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => ['required', 'numeric'],
            'duration' => ['required'],
            'description' => ['required', 'min:5'],
        ]);

        $expense = Expense::latest('expense_amount')->first();

        if ($expense->expense_amount < $request->amount) {
            return redirect()->back()->with('message', 'Try again later');
        }

        $loanApplication = LoanApplication::where([
            ['user_id', Auth::user()->id],
            ['status', 'Unpaid'],
        ])->first();

        if ($loanApplication) {
            return redirect()->back()->with('message', 'You have an outstanding loan!');
        }

        $payment_amount = $request->amount * 0.07 * $request->duration + $request->amount;

        LoanApplication::create([
            'user_id'=> auth()->user()->id,
            'amount' => $request->amount,
            'duration' => $request->duration,
            'starting_date' => Carbon::now(),
            'payment_date' => Carbon::now()->addMonths($request->duration),
            'payment_amount' => $payment_amount,
            'description' => $request->description,
            'approved' => true,
            'status' => 'Unpaid',
        ]);

        return redirect()->route('dashboard')
            ->with('success', 'You have successfully applied for loan.');

    }


    /**
     * Edit Loan
    */
    public function edit(LoanApplication $loanApplication, User $user)
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
