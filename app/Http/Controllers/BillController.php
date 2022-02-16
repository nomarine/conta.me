<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //
    public function bill() {
        $bill = Bill::class;

        $records = $bill::join('bill_categories', 'bill_categories.id', '=', 'bills.bill_categories_id')->select('*')->orderBy('registration_number')->get();

/*         $bills = [
            0 => [
                'conta' => 'EDP',
                'valor' => 56.87,
                'tipo' => 0,
                'pagamento' => 0,
            ],
            1 => [
                'conta' => 'Sabesp',
                'valor' => 34.02,
                'tipo' => 0,
                'pagamento' => 0,
            ],
            2 => [
                'conta' => 'Pizza',
                'valor' => 72.83,
                'tipo' => 1,
                'pagamento' => 1,
            ]
        ]; */
        $total = $bill::count();
        
        #o retorno da função irá renderizar a página e o método compact irá enviar as variáveis para a página
        return view('site.bill.index', 
            compact('records', 'total')
        );
    }

    public function bill_registration() {
        $categories = DB::table('bill_categories')->select('*')->get();

        return view('site.bill.registration',
            compact('categories')
        );
    }

    public function save(Request $request) {
        $request->validate([
            'description' => 'required | max:300',
            'bill_categories_id' => 'required',
            'value' => 'required'
        ]);

        Bill::create($request->all());

        return redirect()->back()->with('success');
    }
}
