<?php
namespace WeClound\Request;
class WeCloundUploadMeidaFile extends WeCloudRequest
{
    /**
     *上传文件
     * @var
     */
    private $file;
    /**
     *用于校验文件完整性
     * @var
     */
    private $fileHash;
    /**
     *自定义视频信息
     * @var
     */
    private $customVideoInfo;
    /**
     *自定义音频信息
     * @var
     */
    private $customAudioInfo;
    /**
     *生成缩略图信息
     * @var
     */
    private $thumbnailInfo;
    /**
     *是否异步处理视频
     * @var
     */
    private $asyncProcessing;
    /**
     *若asyncProcessing为true时必填
     * 请求消息体为常规上传返回结果，需要以Json响应对象：
     * {"code":0}，否则会每隔6秒循环通知5次
     * @var
     */
    private $notifyUrl;
    /**
     *上传凭证
     * @var
     */
    private $uploadToken;
    /**
     *当customId存在时覆盖原有文件
     * @var
     */
    private $cover;

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     * @return WeCloundUploadMeidaFile
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
     * @return WeCloundUploadMeidaFile
     */
    public function setFileHash($fileHash)
    {
        $this->fileHash = $fileHash;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomVideoInfo()
    {
        return $this->customVideoInfo;
    }

    /**
     * @param mixed $customVideoInfo
     * @return WeCloundUploadMeidaFile
     */
    public function setCustomVideoInfo($customVideoInfo)
    {
        $this->customVideoInfo = $customVideoInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomAudioInfo()
    {
        return $this->customAudioInfo;
    }

    /**
     * @param mixed $customAudioInfo
     * @return WeCloundUploadMeidaFile
     */
    public function setCustomAudioInfo($customAudioInfo)
    {
        $this->customAudioInfo = $customAudioInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnailInfo()
    {
        return $this->thumbnailInfo;
    }

    /**
     * @param mixed $thumbnailInfo
     * @return WeCloundUploadMeidaFile
     */
    public function setThumbnailInfo($thumbnailInfo)
    {
        $this->thumbnailInfo = $thumbnailInfo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAsyncProcessing()
    {
        return $this->asyncProcessing;
    }

    /**
     * @param mixed $asyncProcessing
     * @return WeCloundUploadMeidaFile
     */
    public function setAsyncProcessing($asyncProcessing)
    {
        $this->asyncProcessing = $asyncProcessing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * @param mixed $notifyUrl
     * @return WeCloundUploadMeidaFile
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return WeCloundUploadMeidaFile
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
     * @return WeCloundUploadMeidaFile
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
     * @return WeCloundUploadMeidaFile
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
     * @return WeCloundUploadMeidaFile
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }
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