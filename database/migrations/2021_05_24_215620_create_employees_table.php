<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(' ', function (Blueprint $table) {
            $table->id();
            $table->binary('photo');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->integer('contact');
            $table->mediumText('address');
            $table->date('birthday');
            $table->enum('gender',['Male','Female']);
            $table->string('designation');
            $table->double('rate');

            $table->unsignedBigInteger('department_id')->index();
            $table->unsignedBigInteger('sss_id')->index();
            $table->unsignedBigInteger('ph_id')->index();
            $table->unsignedBigInteger('pi_id')->index();
            $table->unsignedBigInteger('tax_id')->index();


            $table->timestamps();
            $table->softDeletes();

            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('sss_id')->references('id')->on('deductions');
            $table->foreign('ph_id')->references('id')->on('deductions');
            $table->foreign('pi_id')->references('id')->on('deductions');
            $table->foreign('tax_id')->references('id')->on('deductions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
