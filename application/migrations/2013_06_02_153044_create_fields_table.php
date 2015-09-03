<?php

class Create_Fields_Table {    

	public function up()
    {
		Schema::create('fields', function($table) {
			$table->increments('id');
			$table->integer('document_id');
			$table->string('label');
			$table->string('type');
			$table->integer('position');
			$table->boolean('required');
			$table->string('unique_id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('fields');

    }

}