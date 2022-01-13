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
        DB::table('bill_categories')->insert(
            ['title' => 'Health'],
        );
        DB::table('bill_categories')->insert(
            ['title' => 'Food'],
        );
        DB::table('bill_categories')->insert(
            ['title' => 'Automobile'],
        );
        DB::table('bill_categories')->insert(
            ['title' => 'Leisure'],
        );
        DB::table('bill_categories')->insert(
            ['title' => 'Others'],
        );
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
