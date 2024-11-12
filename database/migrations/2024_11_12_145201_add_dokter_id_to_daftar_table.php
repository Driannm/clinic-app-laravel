<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('daftars', function (Blueprint $table) {
        $table->unsignedBigInteger('dokter_id')->after('poli_id')->nullable();
        
        // Jika ada relasi dengan tabel `dokter`, tambahkan foreign key constraint
        $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('daftars', function (Blueprint $table) {
        $table->dropForeign(['dokter_id']);
        $table->dropColumn('dokter_id');
    });
}
};
