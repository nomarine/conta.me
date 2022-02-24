<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BillCategoriesInsertValues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $list = [
            '1' => 'Saúde', 
            '2' => 'Alimentação', 
            '3' => 'Transporte', 
            '4' => 'Despesas Pessoais',
            '5' => 'Comunicação',
            '6' => 'Lazer'
        ];

        $ordered_list = asort($list);

        foreach($list as $key => $item){
            DB::table('bill_categories')->insert(
                array('code' => $key,
                      'title' => $item
                )
            );
        }

        DB::table('bill_categories')->insert(
            array('code' => '10',
                  'title' => 'Outros'
            )
        );

        /* DB::table('bill_categories')->insert(array(
            array('title' => 'Outros'),
            array('title' => 'Saúde'),
            array('title' => 'Alimentação'),
            array('title' => 'Transporte'),
            array('title' => 'Despesas Pessoais'),
            array('title' => 'Comunicação'),
            array('title' => 'Lazer')
        )); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('bill_categories')->delete();
    }
}
