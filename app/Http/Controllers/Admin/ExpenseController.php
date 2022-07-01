<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Expense;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExpenseController extends Controller
{
    public function create() {
        return view('admin.expenses.create');
    }


    public function store(Request $request) {
        $request->validate([
            'expense_amount' => ['required', 'numeric'],
        ]);

        Expense::create([
            'expense_amount' => $request->expense_amount,
            'expense_date' => Carbon::now(),
        ]);

        return redirect()->route('admin.admindashboard')
            ->with('success', 'Money added successfully');
    }
}
