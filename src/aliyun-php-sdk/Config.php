<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
$regionIds = array("cn-hangzhou","cn-beijing","cn-qingdao","cn-hongkong","cn-shanghai","us-west-1","cn-shenzhen","ap-southeast-1");
$productDomains =array(
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Mts", "mts.cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("ROS", "ros.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Dm", "dm.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Bss", "bss.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ecs", "ecs.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Oms", "oms.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Rds", "rds.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("BatchCompute", "batchCompute.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Slb", "slb.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Oss", "oss-cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("OssAdmin", "oss-admin.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Sts", "sts.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Push", "cloudpush.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Yundun", "yundun-cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Risk", "risk-cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Drds", "drds.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("M-kvstore", "m-kvstore.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ram", "ram.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Cms", "metrics.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Crm", "crm-cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ocs", "pop-ocs.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ots", "ots-pop.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Dqs", "dqs.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Location", "location.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ubsms", "ubsms.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Drc", "drc.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ons", "ons.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Aas", "aas.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ace", "ace.cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Dts", "dts.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("R-kvstore", "r-kvstore-cn-hangzhou.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("PTS", "pts.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Alert", "alert.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Push", "cloudpush.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Emr", "emr.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Cdn", "cdn.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("COS", "cos.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("CF", "cf.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ess", "ess.aliyuncs.com"),
	new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Ubsms-inner", "ubsms-inner.aliyuncs.com"),
    new \Sanyc\Aliyun\SDK\Regions\ProductDomain("Green", "green.aliyuncs.com")
	);
$endpoint = new \Sanyc\Aliyun\SDK\Regions\Endpoint("cn-hangzhou", $regionIds, $productDomains);
$endpoints = array($endpoint);
\Sanyc\Aliyun\SDK\Regions\EndpointProvider::setEndpoints($endpoints);

define('ENABLE_HTTP_PROXY', FALSE);
define('HTTP_PROXY_IP', '127.0.0.1');
define('HTTP_PROXY_PORT', '8888');