<?php
namespace WeClound\Request;
class WeCloundBatchOperationExpired extends WeCloudRequest
{
    /**
     * 需要恢复的文件Id数组
     * @var
     */
    private $idList;

    /**
     * @return mixed
     */
    public function getIdList()
    {
        return $this->idList;
    }

    /**
     * @param mixed $idList
     * @return WeCloundBatchOperationDelete
     */
    public function setIdList($idList)
    {
        $this->idList = $idList;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     * @return WeCloundBatchOperationDelete
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * @param mixed $expired
     * @return WeCloundBatchOperationExpired
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
        return $this;
    }

    /**
     * 管理凭证
     * @var
     */
    private $accessToken;

    /**
     * 文件过期时间：
     * expired < 0 或 expired == null 不过期，
     * expired == 0 次日0点过期，
     * expired > 0 指定天数后0点过期
     * @var
     */
    private $expired;
}