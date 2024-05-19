<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

        public function up()
        {
            Schema::create('surat_usaha', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('tempat_lahir');
                $table->date('tanggal_lahir');
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                $table->string('alamat');
                $table->string('pekerjaan');
                $table->string('nik', 16);
                $table->string('kewarganegaraan');
                $table->string('nama_perusahaan');
                $table->string('alamat_perusahaan');
                $table->string('jenis_usaha');
                $table->string('keterangan');
                $table->string('alasan');
                $table->unsignedBigInteger('id_users');
                $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('surat_usaha');
        }
};