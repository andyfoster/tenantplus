<?php

class Create_Users_Table {    

	public function up()
    {
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('phone_number');
			$table->string('type');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('users');

    }

}