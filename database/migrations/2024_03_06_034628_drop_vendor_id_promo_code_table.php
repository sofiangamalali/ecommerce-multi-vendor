<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
       Schema::table("promo_codes", function (Blueprint $table) {

        $table->dropForeign(['vendor_id']);
       });
    }

    public function down(): void
    {

    }
};
