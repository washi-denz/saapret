<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            $table->string('position');
            $table->string('institution')->nullable();
            $table->string('task')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('published')->default(false);
            $table->unsignedInteger('order')->default(1);

            $table->foreignId('person_id')->constrained()->deleteOnCascade();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
