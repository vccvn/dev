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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->nullable();
            $table->bigInteger('ref_id')->unsigned()->default(0);
            $table->string('type')->nullable()->default('transfer');
            $table->bigInteger('customer_id')->unsigned()->nullable()->default(0);
            $table->string('code')->nullable();
            $table->decimal('amount', 12, 2)->unsigned()->default(0);
            $table->text('note')->nullable();
            $table->dateTime('time')->nullable();
            $table->integer('status')->default(0);
            $table->integer('trashed_status')->default(0);
            $table->bigInteger('created_id')->unsigned()->nullable()->default(0);
            $table->bigInteger('approved_id')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('transactions');
    }
};
