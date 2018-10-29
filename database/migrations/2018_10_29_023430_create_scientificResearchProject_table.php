<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScientificResearchProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scientificResearchProject', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author',20);
            $table->string('title',200);
            $table->string('department',20);
            $table->longText('content');
            $table->string('pic');
            $table->string('pdf');
            $table->timestamps();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
