<?php
namespace WeClound\Request;
class WeCloundFastUpload extends WeCloudRequest
{
    /**
     * @return mixed
     */
    public function getFileHash()
    {
        return $this->fileHash;
    }

    /**
     * @param mixed $fileHash
     * @return WeCloundFastUpload
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     * @return WeCloundFastUpload
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     * @return WeCloundFastUpload
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param mixed $mimeType
     * @return WeCloundFastUpload
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
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
     * @return WeCloundFastUpload
     */
    public function setUploadToken($uploadToken)
    {
        $this->uploadToken = $uploadToken;
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
     * @return WeCloundFastUpload
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
     * @return WeCloundFastUpload
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     *文件sha256值
     * @var
     */
    private $fileHash;
    /**
     *文件名
     * @var
     */
    private $fileName;
    /**
     *文件大小
     * @var
     */
    private $fileSize;
    /**
     *文件mime类型
     * @var
     */
    private $mimeType;
    /**
     *上传凭证
     * @var
     */
    private $uploadToken;
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
}