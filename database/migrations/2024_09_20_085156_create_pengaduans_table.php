<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masyarakat_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('kode_pengaduan')->unique(); 
            $table->string('isi_pengaduan');
            $table->enum('status_pengaduan', ['Belum diproses', 'Sedang diproses', 'Selesai'])->default('Belum diproses');;
            $table->string('foto')->nullable();
            $table->text('tanggapan_user')->nullable();
            $table->timestamp('tanggal_tanggapan')->nullable();
            $table->timestamps();

            // Foreign key
            
            $table->foreign('masyarakat_id')->references('id')->on('masyarakats')->onDelete('cascade'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null'); 
        });
    }

    public function down()
    {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropForeign(['masyarakat_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('pengaduans');
    }
};
