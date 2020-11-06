<?php
namespace WeClound\Request;
class WeCloundBatchOperationDelete extends WeCloudRequest
{
    /**
     * 需要删除的文件Id数组
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
     * 管理凭证
     * @var
     */
    private $accessToken;

}