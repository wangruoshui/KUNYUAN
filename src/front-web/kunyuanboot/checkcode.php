<?php
/*定义图片验证码类，要求
1、图片宽度、高度可定制
2、图片字符范围可定制
*/
header('content-type:image/png');
class Checkcode{
	private $width;//验证码图片高度
	private $height;//验证码图片宽度
	private $validatorCode;//验证码图片字符集
	private $InterferenceNum;//干扰纹数量
	private $codeNum; //验证码字符数量
	private $img; //图片资源符
	private $space;//验证码图片上字符间距


	public function __construct($width,$height,$validatorCode,$InterferenceNum,$codeNum,$space=20){
		//改进验证码类-1
		session_start();

		$this->width = $width;
		$this->height=$height;
		$this->validatorCode = $validatorCode;
		$this->InterferenceNum = $InterferenceNum;
		$this->codeNum = $codeNum;

		//1、创建画布
		$this->img = imagecreate($this->width, $this->height);

		//2、生成干扰纹
		for ($i = 0; $i < $this->InterferenceNum; $i++) {
    		imagesetpixel($this->img, rand() % $this->width, rand() % $this->height, imagecolorallocate($this->img, rand(0, 255), rand(0, 255), rand(0, 255)));
		}

		//3、随机产生验证码
		//改进验证码类-2
		$_SESSION['checkCode'] = '';
		for($i=0; $i<(int)$this->codeNum;$i++){
			$num = rand(0,strlen($this->validatorCode)-1);

			$char = $this->validatorCode[$num];
			$_SESSION['checkCode'] .= $char;
			imagestring($this->img, '5', 10+$space*$i, 3, $char,imagecolorallocate($this->img, 0, rand(0, 255), rand(0, 255)));
			
		}

		////4、设置图片填充色为灰色
		imagefill($this->img, 0, 0, imagecolorallocate($this->img, 200, 200, 200));

		//5、生成图片
		imagepng($this->img);
	}

	public function __destruct(){
		//释放内存
		imagedestroy($this->img);
	}
}
$checkCode=new Checkcode(100,36,'abcdefghijklmnopqrstuvwxyz0123456789',100,4,20);
  

?>