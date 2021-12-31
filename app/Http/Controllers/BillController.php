<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    //
    public function bill() {
        $bills = [
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
        ];
        
        #o retorno da função irá renderizar a página e o método compact irá enviar as variáveis para a página
        return view('bill.index', compact('bills'));
    }
}
