<?php

use App\migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('grades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('student_id')->nullable();
            $table->integer('value')->nullable(); // let's assume student can be without any grade

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
        $this->schema->drop('DummyTable');
    }
}
