<?php

namespace WeClound\Tests;

use CURLFile;
use PHPUnit\Framework\TestCase;
use WeClound\Client\WeCloundStorageClient;
use WeClound\Http\Config;
use WeClound\Request\WeCloundUploadImageFileRequest;
use WeClound;
use WeClound\Request\WeCloudRequest;
use WeClound\Request\WeCloundBatchOperationDelete;
use WeClound\Request\WeCloundBatchOperationExpired;
use WeClound\Request\WeCloundBatchOperationRecovery;
use WeClound\Request\WeCloundCreateThumbnail;
use WeClound\Request\WeCloundDownload;
use WeClound\Request\WeCloundFastUpload;
use WeClound\Request\WeCloundGetCustomImage;
use WeClound\Request\WeCloundOperationDelete;
use WeClound\Request\WeCloundOperationExpired;
use WeClound\Request\WeCloundOperationRecovery;
use WeClound\Request\WeCloundUploadMeidaFile;
use WeClound\Request\WeCloundUploadSingleFile;

class Test extends TestCase
{

    /**
     * 图片上传
     */
    public function testUploadImageFile()
    {
        $filename = "/data/test.jpg";
        $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $filesize = filesize($filename);
        fclose($handle);
        $originalSign = Config::SECRETKEY . '.' . Config::BUCKETID . '.' . $filename . '.' . $filesize;
        $originalSign = md5($originalSign);
        $request = new WeCloundUploadImageFileRequest();
        $request->setBucketId(Config::BUCKETID);
        $request->setUploadToken(Config::ACCESSKEY . '.' . $originalSign);
        $request->setFile(new CURLFILE($filename));
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 上传单图片
     */
    public function testUploadSingleFile()
    {
        $filename = "/data/test.jpg";
        $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $filesize = filesize($filename);
        fclose($handle);
        $originalSign = md5(Config::SECRETKEY . '.' . Config::BUCKETID . '.' . $filename . '.' . $filesize);
        $request = new WeCloundUploadSingleFile();
        $request->setBucketId(Config::BUCKETID);
        $request->setUploadToken(Config::ACCESSKEY . '.' . $originalSign);
        $request->setFile(new CURLFILE($filename));
        $request->setCover(true);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 音视频暂缓(还不能执行)
     */
    public function testUploadMediaFile()
    {
        $filename = "/data/test.jpg";
        $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $filesize = filesize($filename);
        fclose($handle);
        $originalSign = md5(Config::SECRETKEY . '.' . Config::BUCKETID . '.' . $filename . '.' . $filesize);
        $request = new WeCloundUploadMeidaFile();
        $request->setBucketId(Config::BUCKETID);
        $request->setUploadToken(Config::ACCESSKEY . '.' . $originalSign);
        $request->setFile(new CURLFILE($filename));
        $request->setCover(true);
        $request->setAsyncProcessing(true);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 缩略图生成接口暂缓(还不能执行)
     */
    public function testCreateThumbnail()
    {
        $filename = "/data/test.jpg";
        $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $filesize = filesize($filename);
        fclose($handle);
        $originalSign = md5(Config::SECRETKEY . '.' . Config::BUCKETID . '.' . $filename . '.' . $filesize);
        $request = new WeCloundCreateThumbnail();
        $request->setBucketId(Config::BUCKETID);
        $request->setUserFileId("12312");
        $request->setAsyncProcessing(true);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件秒传
     */
    public function testFastUpload()
    {
        $filename = "/data/test.jpg";
        $handle = fopen($filename, "r");//读取二进制文件时，需要将第二个参数设置成'rb'
        //通过filesize获得文件大小，将整个文件一下子读到一个字符串中
        $filesize = filesize($filename);
        fclose($handle);
        $originalSign = md5(Config::SECRETKEY . '.' . Config::BUCKETID . '.' . $filename . '.' . $filesize . '.' . "image/jpeg" . '.' . sha1_file($filename));
        $request = new WeCloundFastUpload();
        $request->setBucketId(Config::BUCKETID);
        $request->setUploadToken(Config::ACCESSKEY . '.' . $originalSign);
        $request->setFileHash(sha1_file($filename));
        $request->setFileSize($filesize);
        $request->setFileName($filename);
        $request->setMimeType("image/jpeg");
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件下载
     */
    public function testDownload()
    {
        $request = new WeCloundDownload();
        $request->setBucketId(Config::BUCKETID);
        $request->setUserFileId("1324649380376096769");
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 获取自定义图片接口
     */
    public function testGetCustomImage()
    {
        $request = new WeCloundGetCustomImage();
        $request->setBucketId(Config::BUCKETID);
        $request->setUserFileId("1324649380376096769");
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件删除
     */
    public function testOperationDelete()
    {
        $request = new WeCloundOperationDelete();
        $request->setUserFileId("1324559582269419521");
        $originalSign = md5(Config::SECRETKEY . '.' . $request->getUserFileId());

        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件批量删除接口
     */
    public function testBatchOperationDelete()
    {
        $request = new WeCloundBatchOperationDelete();
        $idList = [1324559582269419521];
        $request->setIdList($idList);
        $originalSign = Config::SECRETKEY . "." . json_encode($idList);
        $originalSign = md5($originalSign);
        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件恢复接口
     */
    public function testOperationRecovery()
    {
        $request = new WeCloundOperationRecovery();
        $request->setUserFileId("1324559582269419521");
        $originalSign = md5(Config::SECRETKEY . '.' . $request->getUserFileId());

        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件批量恢复接口
     */
    public function testBatchOperationRecovery()
    {
        $request = new WeCloundBatchOperationRecovery();
        $idList = [1324559582269419521];
        $request->setIdList($idList);
        $originalSign = Config::SECRETKEY . "." . json_encode($idList);
        $originalSign = md5($originalSign);
        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件过期时间设置接口
     */
    public function testOperationExpired()
    {
        $request = new WeCloundOperationExpired();
        $request->setUserFileId("1324559582269419521");

        $request->setBucketId(Config::BUCKETID);
        $request->setExpired(1);
        $originalSign = md5(Config::SECRETKEY . '.' . $request->getUserFileId() . '.' . $request->getExpired());
        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }

    /**
     * 文件批量过期时间设置接口
     */
    public function testBatchOperationExpired()
    {
        $request = new WeCloundBatchOperationExpired();
        $idList = [1324559582269419521];
        $request->setIdList($idList);
        $request->setExpired(1);
        $originalSign = Config::SECRETKEY . "." . json_encode($idList) . '.' . $request->getExpired();
        $originalSign = md5($originalSign);
        $request->setAccessToken(Config::ACCESSKEY . "." . $originalSign);
        $client = new WeCloundStorageClient();
        $response = $client->execute($request);
        echo json_encode($response);
    }


}
