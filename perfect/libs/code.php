<?php
class code
{
    public $width;
    public $height;
    public $img;
    public $char = '234567890qwertyuioplkjhgfdsamnbvcxzQWERTYUIOPLKJHGFDSAMNBVCXZ';
    public $len = 4;
    public $linenum = 6;
    public $pointnum = 50;
    public $fontfile =FONT_PATH."font.TTF";
    public $result ;
    function __construct($w,$height)
    {
        $this->width = $w;
        $this->height = $height;
    }

    public function createImage(){
      $this->img =  imagecreatetruecolor($this->width,$this->height);
      $arr = $this->getBgColor();
      $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
      imagefill($this->img,0,0,$color);
    }

    public function draw(){
        for($i=0;$i<$this->linenum;$i++){
            $x1 = rand(0,$this->width/2);
            $y1 = rand(0,$this->height/2);
            $x2 = rand($this->width/2,$this->width);
            $y2 = rand($this->height/2,$this->height);
            $arr = $this->getBgColor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            if($i<$this->linenum/2){
                imageline($this->img,$x1,$y1,$x2,$y2,$color);
            }else{
                imageline($this->img,$x2,$y1,$x1,$y2,$color);
            }
        }

        for($i=0;$i<$this->pointnum;$i++){
            $arr = $this->getLineColor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imagesetpixel($this->img,rand(0,$this->width),rand(0,$this->height),$color);
        }

    }

    public function drawText(){
        $str = $this->getText();
        $w = $this->width / $this->len;
        $h = $this->height / 2;
        for($i=0;$i<$this->len;$i++){
            $arr = $this->getLineColor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imagefttext($this->img,rand(20,30),rand(-15,15),rand($w*$i+5,($i+1)*$w-30),rand($h-5,$h+10),$color,$this->fontfile,substr($str,$i,1));
        }
    }

    public function getText(){
        $result = '';
        for($i=0;$i<$this->len;$i++){
            $num = rand(0,strlen($this->char)-1);
           $result .= substr($this->char,$num,1);
        }
        $this->result = strtolower($result);
        return $result;
    }


   public function getLineColor(){
       $arr = [];
       for($i=0;$i<3;$i++){
           array_push($arr,rand(108,255));
       }
       return $arr;
   }
   
   public function getBgColor(){
        $arr = [];
        for($i=0;$i<3;$i++){
            array_push($arr,rand(0,107));
        }
        return $arr;
   }

   public function output(){
        header('Content-type:image/png');
        $this->createImage();
        $this->draw();
        $this->drawText();
        imagepng($this->img);
        imagedestroy($this->img);
   }
}
//$code =  new code(100,30);
//$code->output();
