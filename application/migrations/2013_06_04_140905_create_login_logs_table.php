<?php

class Create_Login_logs_Table {    

	public function up()
    {
		Schema::create('login_logs', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('ip');
			$table->timestamp('time');
			$table->string('agent');
	});

    }    

	public function down()
    {
		Schema::drop('login_logs');

    }

}