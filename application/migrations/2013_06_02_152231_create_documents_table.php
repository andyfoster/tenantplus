<?php

class Create_Documents_Table {    

	public function up()
    {
		Schema::create('documents', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('user_id');
			$table->text('description');			
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('documents');

    }

}