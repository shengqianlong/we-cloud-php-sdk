<?php

namespace WeClound\Client;

use WeClound\Request\WeCloudRequest;

interface WeCloundClient
{

    function execute(WeCloudRequest $request);

}

