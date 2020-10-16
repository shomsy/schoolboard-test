<?php

use App\migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('boards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('student_id')->nullable();
            $table->string('boardable_type');

            $table->unsignedDecimal('grade_average_value')->nullable();
            $table->boolean('pass')->default(0);

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
