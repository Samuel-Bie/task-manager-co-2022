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
     * @throws Exception
     */
    public function up()
    {
        Schema::create(
            'tasks',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 45)->nullable();
                $table->integer('priority')->nullable();
                $table->unsignedInteger('projects_id')->nullable();

                $table->index(["projects_id"], 'fk_tasks_projects_idx');
                $table->softDeletes();
                $table->timestamps();


                $table->foreign('projects_id', 'fk_tasks_projects_idx')
                    ->references('id')->on('projects')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
