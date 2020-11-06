<?php
namespace WeClound\Request;
class WeCloudRequest
{
    /**
     * 空间Id
     * @var
     */
    private $bucketId;

    /**
     * @return mixed
     */
    public function getCustomId()
    {
        return $this->customId;
    }

    /**
     * @param mixed $customId
     * @return WeCloudRequest
     */
    public function setCustomId($customId)
    {
        $this->customId = $customId;
        return $this;
    }

    /**
     *用户自定义文件获取Key，
     * 获取文件可直接通过该key获取，
     * 且该字段必须用户ID下唯一，
     * 若为空服务端自动生成
     * @var
     */
    private $customId;

    /**
     * @return mixed
     */
    public function getBucketId()
    {
        return $this->bucketId;
    }

    /**
     * @param mixed $bucketId
     */
    public function setBucketId($bucketId)
    {
        $this->bucketId = $bucketId;
    }

    /**
     * 文件过期时间：
     * expired < 0 或 expired == null 不过期，
     * expired == 0 次日0点过期，
     * expired > 0 指定天数后0点过期
     * @var
     */
    private $expired;

    /**
     * @return mixed
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * @param mixed $expired
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
    }


}