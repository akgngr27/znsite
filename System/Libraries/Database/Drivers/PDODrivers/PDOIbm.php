<?php
class PDOIbmDriver
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	/* Config Değişkeni
	 *  
	 * Veritabanı ayarlar bilgisini
	 * tutmak için oluşturulmuştur.
	 *
	 */
	protected $config;

	/******************************************************************************************
	* CONSTRUCT     	                                                                      *
	******************************************************************************************/
	public function __construct()
	{
		$this->config = Config::get('Database');	
	}
	
	/******************************************************************************************
	* DNS       		                                                                      *
	*******************************************************************************************
	| Bu sürücü için dsn bilgisi oluşturuluyor.  							                  |
	******************************************************************************************/
	public function dsn()
	{
		$dsn  = 'DRIVER:{IBM DB2 ODBC DRIVER}';
			
		$dsn .= ( ! empty($this->config['database']) ) 
				? ';DATABASE='.$this->config['database'] 
				: '';
				
		$dsn .= ( ! empty($this->config['host']) ) 
				? ';HOSTNAME='.$this->config['host'] 
				: '';
				
		$dsn .= ( ! empty($this->config['port']) ) 
				? ';PORT='.$this->config['port'] 
				: '';
				
		$dsn .= ( ! empty($this->config['protocol']) ) 
				? ';PROTOCOL='.$this->config['protocol'] 
				: ';PROTOCOL=TCPIP';
		
		return $dsn;
	}	
}