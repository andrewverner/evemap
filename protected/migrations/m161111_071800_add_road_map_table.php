<?php

class m161111_071800_add_road_map_table extends CDbMigration
{
	public function up()
	{
	    $this->createTable('jumpsRoadMap',[
	        'id' => 'pk',
            'fromID' => 'int NOT NULL',
            'toID' => 'int NOT NULL',
            'fromName' => 'varchar(45) NOT NULL',
            'toName' => 'varchar(45) NOT NULL',
            'distance' => 'float NOT NULL'
        ],'charset=utf8');
	}

	public function down()
	{
		echo "m161111_071800_add_road_map_table does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}