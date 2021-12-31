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
