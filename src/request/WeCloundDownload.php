<?php
namespace WeClound\Request;
class WeCloundDownload extends WeCloudRequest
{

    /**
     *使用userFileId获取文件
     * customId / userFileId二选一
     * @var
     */
    private $userFileId;
    /**
     *内容处理：inline或attachment（用于浏览器）
     * @var
     */
    private $contentDisposition;

    /**
     * @return mixed
     */
    public function getUserFileId()
    {
        return $this->userFileId;
    }

    /**
     * @param mixed $userFileId
     * @return WeCloundDownload
     */
    public function setUserFileId($userFileId)
    {
        $this->userFileId = $userFileId;
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
     * @return WeCloundDownload
     */
    public function setContentDisposition($contentDisposition)
    {
        $this->contentDisposition = $contentDisposition;
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
     * @return WeCloundDownload
     */
    public function setDownloadToken($downloadToken)
    {
        $this->downloadToken = $downloadToken;
        return $this;
    }

    /**
     *空间为私有必填
     * @var
     */
    private $downloadToken;
}