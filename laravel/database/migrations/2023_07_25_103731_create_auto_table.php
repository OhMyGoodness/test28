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
        try {
            Schema::create('auto', function (Blueprint $table) {
                $table->id();
                $table->smallInteger('year')->unsigned()->nullable();
                $table->integer('mileage')->unsigned()->nullable();
                $table->string('color')->nullable();

                $table->foreignId('mark_id')->constrained("auto_marks");
                $table->foreignId('model_id')->constrained("auto_models");
                $table->foreignId('user_id')->nullable()->constrained("users");

                $table->timestamps();
            });
        } catch (Exception $ex){
            $this->down();
            throw new Exception($ex);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto');
    }
};
