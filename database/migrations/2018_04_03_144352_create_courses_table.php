<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('author_id');
            $table->string('title', 60); // SEO best title length
            $table->string('slug', 80);
            $table->text('description');
            $table->string('thumbnail')->nullable();
            $table->float('rating')->default(0);
            $table->unsignedInteger('student_count')->default(0);
            $table->unsignedDecimal('price')->default(0);
            $table->unsignedTinyInteger('status')->index()->comment('1=Draft, 2=Published')->default('1');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
