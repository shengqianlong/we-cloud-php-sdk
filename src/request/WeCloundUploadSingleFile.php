<?php
namespace WeClound\Request;
class WeCloundUploadSingleFile extends WeCloudRequest
{

    /**
     * 上传文件
     * @var
     */
    private $file;
    /**
     * 用于校验文件完整性
     * @var
     */
    private $fileHash;
    /**
     * 上传凭证
     * @var
     */
    private $uploadToken;
    /**
     * 当customId存在时覆盖原有文件
     * @var
     */
    private  $cover;
    /**
     *用于记录Aillo或其他项目发送者Id、信息等
     * @var
     */
    private $sender;
    /**
     *用于记录Aillo或其他项目发送者Id、信息等
     * @var
     */
    private $receiver;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @return WeCloundUploadSingleFile
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileHash()
    {
        return $this->fileHash;
    }

    /**
     * @param mixed $fileHash
     * @return WeCloundUploadSingleFile
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;
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
     * @return WeCloundUploadSingleFile
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
     * @return WeCloundUploadSingleFile
     */
    public function setCover($cover)
    {
        if(!$cover){
            $cover=false;
        }
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
     * @return WeCloundUploadSingleFile
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
     * @return WeCloundUploadSingleFile
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }


}