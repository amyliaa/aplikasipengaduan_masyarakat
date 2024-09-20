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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masyarakat_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('kode_pengaduan', 10);
            $table->text('isi_pengaduan');
            $table->enum('status_pengaduan', ['pending', 'proses', 'selesai']);
            $table->string('foto', 255)->nullable();
            $table->text('tanggapan_admin')->nullable();
            $table->timestamp('tanggal_tanggapan')->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('masyarakat_id')->references('id')->on('masyarakat')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('pengaduans', function(Blueprint $table) {
            $table->dropForeign(['masyarakat_id']);
        });

        Schema::table('pengaduans', function(Blueprint $table) {
            $table->dropIndex('pengaduans_masyarakat_id_foreign');
        });

        Schema::table('pengaduans', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('pengaduans', function(Blueprint $table) {
            $table->dropIndex('pengaduans_user_id_foreign');
        });

        Schema::dropIfExists('pengaduans');
    }

};
