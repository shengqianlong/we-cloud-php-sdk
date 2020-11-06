<?php
namespace WeClound\Request;
class WeCloundCreateThumbnail extends WeCloudRequest
{

    /**
     *视频文件Id
     * @var
     */
    private $userFileId;
    /**
     *文件名（不带拓展名称）
     * @var
     */
    private $baseName;
    /**
     *文件拓展名（jpg、jpeg、png等图片拓展名）
     * @var
     */
    private $extension;
    /**
     *缩略图生成时间（默认为0）
     * 可为"00:00:00.000"时间格式
     * 也可为"0.000"时间格式
     * @var
     */
    private $startTime;

    /**
     * @return mixed
     */
    public function getUserFileId()
    {
        return $this->userFileId;
    }

    /**
     * @param mixed $userFileId
     * @return WeCloundCreateThumbnail
     */
    public function setUserFileId($userFileId)
    {
        $this->userFileId = $userFileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaseName()
    {
        return $this->baseName;
    }

    /**
     * @param mixed $baseName
     * @return WeCloundCreateThumbnail
     */
    public function setBaseName($baseName)
    {
        $this->baseName = $baseName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param mixed $extension
     * @return WeCloundCreateThumbnail
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     * @return WeCloundCreateThumbnail
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     * @return WeCloundCreateThumbnail
     */
    public function setSize($size)
    {
        $this->size = $size;
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
     * @return WeCloundCreateThumbnail
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return WeCloundCreateThumbnail
     */
    public function setAsyncProcessing($asyncProcessing)
    {
        $this->asyncProcessing = $asyncProcessing;
        return $this;
    }
    /**
     *分辨率大小
     * @var
     */
    private $size;
    /**
     *若asyncProcessing为true时必填
     * 请求消息体为常规上传返回结果，需要以Json响应对象：
     * {"code":0}，否则会每隔6秒循环通知5次
     * @var
     */
    private $notifyUrl;
    /**
     *是否异步生成缩略图
     * @var
     */
    private $asyncProcessing;
}