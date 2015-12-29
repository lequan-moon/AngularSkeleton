<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// $siteUrl = $_GET['url'];
// $startDate = $_GET['startDate'];
// $endDate = $_GET['endDate'];
// $rowLimit = $_GET['limit'];
// $dimension = array($_GET['dimension']);

$result = array(array(
						'keys' => 'test1',
						'clicks' => '100',
						'ctr' => '0.1',
						'impressions' => '2.3',
						'position' => '2.1'
						),
				array(
						'keys' => 'test2',
						'clicks' => '100',
						'ctr' => '0.1',
						'impressions' => '2.3',
						'position' => '2.1'
						),
				array(
						'keys' => 'test3',
						'clicks' => '100',
						'ctr' => '0.1',
						'impressions' => '2.3',
						'position' => '2.1'
						),
				);

echo json_encode($result);