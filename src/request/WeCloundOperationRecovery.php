<?php
namespace WeClound\Request;
class WeCloundOperationRecovery extends WeCloudRequest
{
    /**
     *需要恢复的文件Id
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
     * @return WeCloundBatchOperationRecovery
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
     * @return WeCloundBatchOperationRecovery
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