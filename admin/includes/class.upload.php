<?php
include_once DIR_FS_INCLUDES.'class.thumbnail.php';
class Upload extends Thumbnail
{

    /*
    * @access private
    * @type string
    */
    protected $_destDirectory = DIR_FS_USER_IMAGES;

    /*
    * @access public
    * @type string
    */
    private $sizeOriginalFilepath;

    /*
    * @access public
    * @type string
    */
    public $sizeOriginalFileName;

    /*
    * @access public
    * @type string
    */
    public $size100FileName;

    /*
    * @access public
    * @type string
    */
    public $size500FileName;

    /*
    * @access private
    * @type integer
    */
    private $_maxSize = 2000;

    /*
    * @access private
    * @type string
    */
    private $_allowedTypes = array('image/pjpeg', 'image/png', 'image/jpeg');

    /*
    * @access public
    * @type string
    */
    public $fileName;
    /*
    * @access public
    * @type string
    */
    public $message;

    /*
    * @access public
    * @type bool
    */
    public $token = false;

    /**
     * Constructor of the class
     *
     * Accepts the File array and start processing.
     *
     * @access  public
     * @param   $_FILE array.
     */
    public function __construct($fileArray)
    {

        if (gettype($fileArray) != 'array') {
            $this->message = "Input received is not a File Array";
        }
        if ($fileArray['name'] == '' || $fileArray['tmp_name'] == '' ||
            $fileArray['error'] != 0 ) {
            $this->message = "Some error has ocurred while upoading.";
        }
        if (!in_array($fileArray['type'], $this->_allowedTypes) ) {
            $this->message = "Only JPG and PNG images are allowed.";
        }
        if ($fileArray['size'] >= 5000000) {
            $this->message = "File size cannot be greater than 5MB.";
        }
        /* if (!is_writable($this->_destDirectory)) {
            $this->message = "$this->_destDirectory is not writable.";
        }*/
        if ($this->message == "") {
            $this->uploadFile($fileArray['tmp_name']);
        }
    }


    /**
     * uploadFile - function uploads the image file to the destination directory.
     *
     * This function upload the uploaded image file to the destination directory and
     * set the message appropriately. It also set the token variable as true if the
     * file is uploaded successfully.
     *
     * @access  private
     * @param   array.
     */
    private function uploadFile($tmpName)
    {
        $filename = "original/".$_SESSION['sess_user_id']."_".md5(time()).".jpg";
        $this->sizeOriginalFilepath = $this->_destDirectory.$filename;
        if (move_uploaded_file($tmpName, $this->sizeOriginalFilepath)) {
            $this->message = "File Uploaded Successfully";
            $this->token = true;
            $this->sizeOriginalFileName = $filename;
            $this->size100FileName = $this->createThumb(100);
            $this->size500FileName = $this->createThumb(500);
        } else {
            $this->message = "Some error has ocurred while upoading.85";
        }
    }


    /**
     * createThumb - Function to create Thumbnail
     *
     * This functions uses the member methods of Thumbnail class to create thumbnail.
     * Function is used only for creating thumbnails of size 100 and 300.
     *
     * @access  private
     * @param   string size - size of the thumbnail and also uses as the foldername.
     * @return     filename of the new thumbnail.
     */
    private function createThumb($size)
    {
        $this->Thumbnail($this->sizeOriginalFilepath);
        $this->quality = 95;
        $this->size_auto($size);                        // set the biggest width or height for thumbnail
        $this->quality=75;                        //default 75 , only for JPG format
        $this->output_format='jpg';               // JPG | PNG
        $this->txt_watermark='Humraahi.Com';        // [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
        $this->txt_watermark_color='000000';        // [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
        $this->txt_watermark_font=3;                // [OPTIONAL] set watermark text font: 1,2,3,4,5
        $this->txt_watermark_Valing='CENTER';           // [OPTIONAL] set watermark text vertical position, TOP | CENTER | BOTTOM
        $this->txt_watermark_Haling='CENTER';       // [OPTIONAL] set watermark text horizonatal position, LEFT | CENTER | RIGHT
        $this->txt_watermark_Hmargin=10;          // [OPTIONAL] set watermark text horizonatal margin in pixels
        $this->txt_watermark_Vmargin=10;
        $this->process();                           // generate image
        $fileName = $size."/".$_SESSION['sess_user_id']."_".md5(time()).".jpg";
        $this->save($this->_destDirectory.$fileName);
        return $fileName;
    }


}
?>