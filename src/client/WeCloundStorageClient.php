<?php

namespace WeClound\Client;

use WeClound\Http\Client;
use WeClound\Http\Config;
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
use WeClound\Request\WeCloundUploadImageFileRequest;
use WeClound\Request\WeCloundUploadMeidaFile;
use WeClound\Request\WeCloundUploadSingleFile;

class WeCloundStorageClient implements WeCloundClient
{

    function execute(WeCloudRequest $request)
    {
        // TODO: Implement execute() method.
        if ($request instanceof WeCloundUploadImageFileRequest) {
            return $this->uploadFile($request);
        } else if ($request instanceof WeCloundUploadSingleFile) {
            return $this->uploadSingleFile($request);
        } else if ($request instanceof WeCloundUploadMeidaFile) {
            return $this->uploadMediaFile($request);
        } else if ($request instanceof WeCloundCreateThumbnail) {
            return $this->createThumbnail($request);
        } else if ($request instanceof WeCloundFastUpload) {
            return $this->fastUpload($request);
        } else if ($request instanceof WeCloundDownload) {
            return $this->download($request);
        } else if ($request instanceof WeCloundGetCustomImage) {
            return $this->getCustomImage($request);
        } else if ($request instanceof WeCloundOperationDelete) {
            return $this->operationDelete($request);
        } else if ($request instanceof WeCloundBatchOperationDelete) {
            return $this->batchOperationDelete($request);
        } else if ($request instanceof WeCloundOperationRecovery) {
            return $this->operationRecovery($request);
        } else if ($request instanceof WeCloundBatchOperationRecovery) {
            return $this->batchOperationRecovery($request);
        } else if ($request instanceof WeCloundOperationExpired) {
            return $this->operationExpired($request);
        } else if ($request instanceof WeCloundBatchOperationExpired) {
            return $this->batchOperationExpired($request);
        }
    }

    /**
     * 图片上传接口处理
     * @param WeCloundUploadImageFileRequest $request
     * @return \WeClound\Http\Response
     */
    function uploadFile(WeCloundUploadImageFileRequest $request)
    {
        $url = Config::BASE_URL . '/file/uploadImageFile';
        $data['uploadToken'] = $request->getUploadToken();
        $data['bucketId'] = $request->getBucketId();
        $data['file'] = $request->getFile();
        if ($request->getCustomId()) {
            $data['customId'] = $request->getCustomId();
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
        }
        if ($request->getFileHash()) {
            $data['fileHash'] = $request->getFileHash();
        }
        if ($request->getCustomImageInfo()) {
            $data['customImageInfo'] = $request->getCustomImageInfo();
        }
        if ($request->getCover()) {
            $data['cover'] = $request->getCover();
        }
        $data['sender'] = $request->getSender();
        $data['receiver'] = $request->getReceiver();
        $mimeBoundary = md5(microtime());
        $contentType = 'multipart/form-data';
        $headers['Content-Type'] = $contentType;

        $response = Client::post($url, $data, $headers);
        return $response;
    }

    /**
     * 单文件上传接口
     * @param WeCloundUploadSingleFile $request
     * @return \WeClound\Http\Response
     */
    function uploadSingleFile(WeCloundUploadSingleFile $request)
    {
        $url = Config::BASE_URL . '/file/uploadSingleFile';
        $data['uploadToken'] = $request->getUploadToken();
        $data['bucketId'] = $request->getBucketId();
        $data['file'] = $request->getFile();
        if ($request->getCustomId()) {
            $data['customId'] = $request->getCustomId();
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
        }
        if ($request->getFileHash()) {
            $data['fileHash'] = $request->getFileHash();
        }
        if ($request->getCover()) {
            $data['cover'] = $request->getCover();
        }
        $data['sender'] = $request->getSender();
        $data['receiver'] = $request->getReceiver();
        $contentType = 'multipart/form-data';
        $headers['Content-Type'] = $contentType;

        $response = Client::post($url, $data, $headers);
        return $response;
    }

    /**
     * 音视频上传接口（暂缓）
     * @param WeCloundUploadMeidaFile $request
     * @return \WeClound\Http\Response
     */
    function uploadMediaFile(WeCloundUploadMeidaFile $request)
    {
        $url = Config::BASE_URL . '/file/uploadMediaFile';
        $data['uploadToken'] = $request->getUploadToken();
        $data['bucketId'] = $request->getBucketId();
        $data['file'] = $request->getFile();
        $data['customId'] = $request->getCustomId();
        $data['expired'] = $request->getExpired();
        $data['fileHash'] = $request->getFileHash();
        $data['customImageInfo'] = $request->getCustomImageInfo();
        if ($request->getCover()) {
            $data['cover'] = (boolean)$request->getCover();
        }

        $data['sender'] = $request->getSender();
        $data['receiver'] = $request->getReceiver();
        $mimeBoundary = md5(microtime());
        $contentType = 'multipart/form-data';
        $headers['Content-Type'] = $contentType;

        $response = Client::post($url, $data, $headers);
        return $response;
    }

    /**
     *缩略图生成接口（暂缓）
     * @param WeCloundCreateThumbnail $request
     * @return \WeClound\Http\Response
     */
    function createThumbnail(WeCloundCreateThumbnail $request)
    {
        $url = Config::BASE_URL . '/file/createThumbnail';
        $data['uploadToken'] = $request->getUploadToken();
        $data['bucketId'] = $request->getBucketId();
        $data['file'] = $request->getFile();
        $data['customId'] = $request->getCustomId();
        $data['expired'] = $request->getExpired();
        $data['fileHash'] = $request->getFileHash();
        $data['customImageInfo'] = $request->getCustomImageInfo();
        $data['cover'] = $request->getCover();
        $data['sender'] = $request->getSender();
        $data['receiver'] = $request->getReceiver();
        $mimeBoundary = md5(microtime());
        $contentType = 'multipart/form-data';
        $headers['Content-Type'] = $contentType;

        $response = Client::post($url, $data, $headers);
        return $response;
    }


    /**
     * 文件秒传接口
     * @param WeCloundFastUpload $request
     * @return \WeClound\Http\Response
     */
    function fastUpload(WeCloundFastUpload $request)
    {
        $url = Config::BASE_URL . '/file/fastUpload';
        $data['uploadToken'] = $request->getUploadToken();
        $data['bucketId'] = $request->getBucketId();
        if ($request->getCustomId()) {
            $data['customId'] = $request->getCustomId();
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
        }
        if ($request->getFileHash()) {
            $data['fileHash'] = $request->getFileHash();
        }
        if ($request->getMimeType()) {
            $data['mimeType'] = $request->getMimeType();
        }
        if ($request->getFileName()) {
            $data['fileName'] = $request->getFileName();
        }
        if ($request->getFileSize()) {
            $data['fileSize'] = $request->getFileSize();
        }


        $data['sender'] = $request->getSender();
        $data['receiver'] = $request->getReceiver();
        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::post($url, $data, $headers);
        return $response;
    }

    /**
     * 文件下载接口
     * @param WeCloundDownload $request
     * @return \WeClound\Http\Response
     */
    function download(WeCloundDownload $request)
    {
        $url = Config::BASE_URL . '/file/download?bucketId=' . $request->getBucketId();
        if ($request->getCustomId()) {
            $data['customId'] = $request->getCustomId();
            $url .= "&customId=" . $data['customId'];
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
            $url .= "&expired=" . $data['expired'];
        }
        if ($request->getUserFileId()) {
            $data['userFileId'] = $request->getUserFileId();
            $url .= "&userFileId=" . $data['userFileId'];
        }
        if ($request->getContentDisposition()) {
            $data['contentDisposition'] = $request->getContentDisposition();
            $url .= "&contentDisposition=" . $data['contentDisposition'];
        }
        if ($request->getDownloadToken()) {
            $data['downloadToken'] = $request->getDownloadToken();
            $url .= "&downloadToken=" . $data['downloadToken'];
        }
        $contentType = 'multipart/form-data';

        $response = Client::get($url);
        return $response;
    }

    /**
     * 获取自定义图片接口
     * @param WeCloundGetCustomImage $request
     * @return \WeClound\Http\Response
     */
    function getCustomImage(WeCloundGetCustomImage $request)
    {
        $url = Config::BASE_URL . '/file/getCustomImage?bucketId=' . $request->getBucketId();

        if ($request->getCustomId()) {
            $data['customId'] = $request->getCustomId();
            $url .= "&customId=" . $data['customId'];
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
            $url .= "&expired=" . $data['expired'];
        }
        if ($request->getUserFileId()) {
            $data['userFileId'] = $request->getUserFileId();
            $url .= "&userFileId=" . $data['userFileId'];
        }
        if ($request->getContentDisposition()) {
            $data['contentDisposition'] = $request->getContentDisposition();
            $url .= "&contentDisposition=" . $data['contentDisposition'];
        }
        if ($request->getDownloadToken()) {
            $data['downloadToken'] = $request->getDownloadToken();
            $url .= "&downloadToken=" . $data['downloadToken'];
        }
        if ($request->getWidth()) {
            $data['width'] = $request->getWidth();
            $url .= "&width=" . $data['width'];
        }
        if ($request->getHeight()) {
            $data['height'] = $request->getHeight();
            $url .= "&height=" . $data['height'];
        }
        if ($request->getQuality()) {
            $data['quality'] = $request->getQuality();
            $url .= "&quality=" . $data['quality'];
        }
        if ($request->getRotate()) {
            $data['rotate'] = $request->getRotate();
            $url .= "&rotate=" . $data['rotate'];
        }
        if ($request->getScale()) {
            $data['scale'] = $request->getScale();
            $url .= "&scale=" . $data['scale'];
        }
        $contentType = 'multipart/form-data';
        $headers['Content-Type'] = $contentType;

        $response = Client::get($url);
        return $response;
    }


    /**
     * 文件删除接口
     * @param WeCloundOperationDelete $request
     * @return \WeClound\Http\Response
     */
    function operationDelete(WeCloundOperationDelete $request)
    {
        $url = Config::BASE_URL . '/file/operation/delete';
        if ($request->getUserFileId()) {
            $data['userFileId'] = $request->getUserFileId();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }

        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);
        $response = Client::delete($url, $data, $headers);
        return $response;
    }


    /**
     * 文件批量删除接口
     * @param WeCloundBatchOperationDelete $request
     * @return \WeClound\Http\Response
     */
    function batchOperationDelete(WeCloundBatchOperationDelete $request)
    {
        $url = Config::BASE_URL . '/file/batchOperation/delete';
        if ($request->getIdList()) {
            $data['userFileIdList'] = $request->getIdList();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }

        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::delete($url, $data, $headers);
        return $response;
    }

    /**
     * 文件恢复接口
     * @param WeCloundOperationRecovery $request
     * @return \WeClound\Http\Response
     */
    function operationRecovery(WeCloundOperationRecovery $request)
    {
        $url = Config::BASE_URL . '/file/operation/recovery';
        if ($request->getUserFileId()) {
            $data['userFileId'] = $request->getUserFileId();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }

        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::post($url, $data, $headers);
        return $response;
    }

    /**
     * 文件批量恢复接口
     * @param WeCloundBatchOperationRecovery $request
     * @return \WeClound\Http\Response
     */
    function batchOperationRecovery(WeCloundBatchOperationRecovery $request)
    {
        $url = Config::BASE_URL . '/file/batchOperation/recovery';
        if ($request->getIdList()) {
            $data['userFileIdList'] = $request->getIdList();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }

        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::post($url, $data, $headers);
        return $response;
    }


    /**
     * 文件过期时间设置接口
     * @param WeCloundOperationExpred $request
     * @return \WeClound\Http\Response
     */
    function operationExpired(WeCloundOperationExpired $request)
    {
        $url = Config::BASE_URL . '/file/operation/expired';
        if ($request->getUserFileId()) {
            $data['userFileId'] = $request->getUserFileId();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
        }

        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::post($url, $data, $headers);
        return $response;
    }


    /**
     * 文件批量过期时间设置接口
     * @param WeCloundBatchOperationExpired $request
     * @return \WeClound\Http\Response
     */
    function batchOperationExpired(WeCloundBatchOperationExpired $request)
    {
        $url = Config::BASE_URL . '/file/batchOperation/expired';
        if ($request->getIdList()) {
            $data['userFileIdList'] = $request->getIdList();
        }
        if ($request->getAccessToken()) {
            $data['accessToken'] = $request->getAccessToken();
        }
        if ($request->getExpired()) {
            $data['expired'] = $request->getExpired();
        }
        $contentType = 'application/json';
        $headers['Content-Type'] = $contentType;
        $data = json_encode($data);

        $response = Client::post($url, $data, $headers);
        return $response;
    }

}