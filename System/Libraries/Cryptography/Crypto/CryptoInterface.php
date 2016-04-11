<?php	
interface CryptoInterface
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
	// Encrypt
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	// @param array  $settings
	//
	//----------------------------------------------------------------------------------------------------
	public function encrypt($data, $settings);
	
	//----------------------------------------------------------------------------------------------------
	// Decrypt
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	// @param array  $settings
	//
	//----------------------------------------------------------------------------------------------------
	public function decrypt($data, $settings);

	//----------------------------------------------------------------------------------------------------
	// Keygen
	//----------------------------------------------------------------------------------------------------
	//
	// @param numeric $length
	//
	//----------------------------------------------------------------------------------------------------
	public function keygen($length);

}