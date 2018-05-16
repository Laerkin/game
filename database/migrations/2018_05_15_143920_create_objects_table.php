<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
    public $set_schema_table = 'objects';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('slides_elements_id');
            $table->integer('games_id');

            $table->index(["games_id"], 'fk_objects_games1_idx');

            $table->index(["slides_elements_id"], 'fk_objects_slides_elements1_idx');


            $table->foreign('slides_elements_id', 'fk_objects_slides_elements1_idx')
                ->references('id')->on('slides_elements')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('games_id', 'fk_objects_games1_idx')
                ->references('id')->on('games')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->set_schema_table);
    }
}
