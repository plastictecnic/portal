<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('computer_name')->nullable();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->string('sn')->nullable();
            $table->string('mac_1')->nullable();
            $table->string('mac_2')->nullable();
            $table->string('os_version')->nullable();
            $table->string('os_key')->nullable();
            $table->dateTime('purchase_at')->nullable();
            $table->string('warranty_status')->nullable();
            $table->dateTime('warranty_expiry_at')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('computers');
    }
}
