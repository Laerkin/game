<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnagesTable extends Migration
{

    public $set_schema_table = 'personnages';
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
            $table->string('name', 45);
            $table->string('path');
            $table->string('bio');
            $table->timestamps();
            $table->integer('slides_elements_id');

            $table->integer('users_id');

            $table->index(["users_id"], 'fk_personnages_users1_idx');

            $table->index(["slides_elements_id"], 'fk_personnages_slides_elements1_idx');


            $table->foreign('slides_elements_id', 'fk_personnages_slides_elements1_idx')
                ->references('id')->on('slides_elements')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_personnages_users1_idx')
                ->references('id')->on('users')
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
