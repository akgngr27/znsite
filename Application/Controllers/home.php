<?php
class Home extends Controller
{	
    //--------------------------------------------------------------------------------------------------------
    // Çalıştırılacak url: http://example.com/index.php/home/main
    //--------------------------------------------------------------------------------------------------------
    public function main($params = '')
    {	
        //----------------------------------------------------------------------------------------------------
        // Gönderilen veriler: font, style, title
        //----------------------------------------------------------------------------------------------------
        $data['font']  = Import::font('font', true);
        $data['style'] = Import::style('style', true);	
        $data['title'] = 'ZERONEED PHP WEB FRAMEWORK';
		
        //----------------------------------------------------------------------------------------------------
        // Dahil edilen sayfa: Application/Views/welcome.php
        //----------------------------------------------------------------------------------------------------
        Import::view('welcome', $data);
    }	
	
    //--------------------------------------------------------------------------------------------------------
    // Çalıştırılacak url: http://example.com/index.php/home/test
    //--------------------------------------------------------------------------------------------------------
    public function test()
    {
        // Kodlarınız...
	}
}