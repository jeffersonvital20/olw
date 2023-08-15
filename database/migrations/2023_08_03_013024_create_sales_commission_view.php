<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $query = DB::table('sales as s')
        ->join('sellers as sl','sl.id','=','s.seller_id')
        ->join('clients as cl','cl.id','=','s.clint_id')
        ->join('clients as cl','cl.id','=','s.cl_id');

        DB::statement("CREATE VIEW sales_commission_view AS");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_commission_view');
    }
};
