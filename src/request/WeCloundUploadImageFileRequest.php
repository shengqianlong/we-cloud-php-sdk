<?php
namespace WeClound\Request;
class WeCloundUploadImageFileRequest extends WeCloudRequest
{

    /**
     * 用于校验文件完整性
     * @var
     */
    private $fileHash;
    /**
     * 用于校验文件完整性
     * @var
     */
    private $file;
    /**
     * 上传后，自定义图片处理信息json字符串
     * @var
     */
    private $customImageInfo;
    /**
     * 上传凭证
     * @var
     */
    public $uploadToken;

    /**
     * @return mixed
     */
    public function getFileHash()
    {
        return $this->fileHash;
    }

    /**
     * @param mixed $fileHash
     * @return WeCloundUploadImageFileRequest
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @return WeCloundUploadImageFileRequest
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomImageInfo()
    {
        return $this->customImageInfo;
    }

    /**
     * @param mixed $customImageInfo
     * @return WeCloundUploadImageFileRequest
     */
    public function setCustomImageInfo($customImageInfo)
    {
        $this->customImageInfo = $customImageInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUploadToken()
    {
        return $this->uploadToken;
    }

    /**
     * @param mixed $uploadToken
     * @return WeCloundUploadImageFileRequest
     */
    public function setUploadToken($uploadToken)
    {
        $this->uploadToken = $uploadToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param mixed $cover
     * @return WeCloundUploadImageFileRequest
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     * @return WeCloundUploadImageFileRequest
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     * @return WeCloundUploadImageFileRequest
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * 当customId存在时覆盖原有文件
     * @var
     */
    private $cover;
    /**
     *用于记录Aillo或其他项目发送者Id、信息等
     * @var
     */
    private $sender;
    /**
     * 用用于记录Aillo或其他项目接收者Id、信息等
     * @var
     */
    private $receiver;
}