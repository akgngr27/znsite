<?php	
interface MigrationInterface
{	
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Version
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $number
	//
	//----------------------------------------------------------------------------------------------------
	public function version($number);
	
	//----------------------------------------------------------------------------------------------------
	// Create
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name -- Migrasyon Adı
	//
	//----------------------------------------------------------------------------------------------------
	public function create($name, $version);
	
	//----------------------------------------------------------------------------------------------------
	// Delete
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name -- Migrasyon Adı
	//
	//----------------------------------------------------------------------------------------------------
	public function delete($name, $version);
	
	//----------------------------------------------------------------------------------------------------
	// Delete All
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function deleteAll();
	
	//----------------------------------------------------------------------------------------------------
	// Create Table
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $data
	//
	//----------------------------------------------------------------------------------------------------
	public function createTable($data);
	
	//----------------------------------------------------------------------------------------------------
	// Drop Table
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function dropTable();
	
	//----------------------------------------------------------------------------------------------------
	// Add Column
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $column
	//
	//----------------------------------------------------------------------------------------------------
	public function addColumn($columns);

	//----------------------------------------------------------------------------------------------------
	// Drop Column
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $column
	//
	//----------------------------------------------------------------------------------------------------
	public function dropColumn($columns);
	
	//----------------------------------------------------------------------------------------------------
	// Modify Column
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $columns
	//
	//----------------------------------------------------------------------------------------------------
	public function modifyColumn($columns);
	
	//----------------------------------------------------------------------------------------------------
	// Truncate
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function truncate();
}