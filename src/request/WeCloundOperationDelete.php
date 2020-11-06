<?php
namespace WeClound\Request;
class WeCloundOperationDelete extends WeCloudRequest
{

    /**
     *需要删除的文件Id
     * @var
     */
    private $userFileId;

    /**
     * @return mixed
     */
    public function getUserFileId()
    {
        return $this->userFileId;
    }

    /**
     * @param mixed $userFileId
     * @return WeCloundOperationDelete
     */
    public function setUserFileId($userFileId)
    {
        $this->userFileId = $userFileId;
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
     * @return WeCloundOperationDelete
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    /**
     *管理凭证
     * @var
     */
    private $accessToken;
}