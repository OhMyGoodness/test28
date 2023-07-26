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
            Schema::create('auto_models', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->timestamps();

                $table->foreignId('mark_id')->constrained("auto_marks");
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
        Schema::dropIfExists('auto_models');
    }
};
