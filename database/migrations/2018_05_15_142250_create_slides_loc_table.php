<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesLocTable extends Migration
{
    public $set_schema_table = 'slides_loc';
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
            $table->integer('type');
            $table->integer('loc_id');
            $table->integer('slides_id');

            $table->index(["loc_id"], 'fk_slides_loc_loc1_idx');

            $table->index(["slides_id"], 'fk_slides_loc_slides1_idx');


            $table->foreign('loc_id', 'fk_slides_loc_loc1_idx')
                ->references('id')->on('loc')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('slides_id', 'fk_slides_loc_slides1_idx')
                ->references('id')->on('slides')
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
