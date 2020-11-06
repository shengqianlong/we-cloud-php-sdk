<?php
namespace WeClound\Request;
class WeCloundGetCustomImage extends WeCloudRequest
{

    /**
     *使用userFileId获取文件
     * @var
     */
    private $userFileId;
    /**
     *空间为私有必填
     * @var
     */
    private $downloadToken;
    /**
     *图片宽度（高度与宽度必须同时有值或为空）
     * @var
     */
    private $width;
    /**
     *图片高度（高度与宽度必须同时有值或为空）
     * @var
     */
    private $height;

    /**
     * @return mixed
     */
    public function getUserFileId()
    {
        return $this->userFileId;
    }

    /**
     * @param mixed $userFileId
     * @return WeCloundGetCustomImage
     */
    public function setUserFileId($userFileId)
    {
        $this->userFileId = $userFileId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDownloadToken()
    {
        return $this->downloadToken;
    }

    /**
     * @param mixed $downloadToken
     * @return WeCloundGetCustomImage
     */
    public function setDownloadToken($downloadToken)
    {
        $this->downloadToken = $downloadToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     * @return WeCloundGetCustomImage
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return WeCloundGetCustomImage
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $quality
     * @return WeCloundGetCustomImage
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRotate()
    {
        return $this->rotate;
    }

    /**
     * @param mixed $rotate
     * @return WeCloundGetCustomImage
     */
    public function setRotate($rotate)
    {
        $this->rotate = $rotate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @param mixed $scale
     * @return WeCloundGetCustomImage
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentDisposition()
    {
        return $this->contentDisposition;
    }

    /**
     * @param mixed $contentDisposition
     * @return WeCloundGetCustomImage
     */
    public function setContentDisposition($contentDisposition)
    {
        $this->contentDisposition = $contentDisposition;
        return $this;
    }
    /**
     *图片质量（0<quality<=1）
     * @var
     */
    private $quality;
    /**
     *旋转角度
     * @var
     */
    private $rotate;
    /**
     *图片缩放大小
     * @var
     */
    private $scale;
    /**
     *内容处理：inline或attachment（用于浏览器）
     * @var
     */
    private $contentDisposition;
}