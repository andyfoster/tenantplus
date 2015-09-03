<?php

class Create_Answers_Table {    

	public function up()
    {
		Schema::create('answers', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('field_id');
			$table->string('answer');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('answers');

    }

}