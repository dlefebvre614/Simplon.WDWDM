<?php
 namespace MailPoetVendor\Doctrine\DBAL\Driver; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\ParameterType; interface Statement extends \MailPoetVendor\Doctrine\DBAL\Driver\ResultStatement { public function bindValue($param, $value, $type = \MailPoetVendor\Doctrine\DBAL\ParameterType::STRING); public function bindParam($column, &$variable, $type = \MailPoetVendor\Doctrine\DBAL\ParameterType::STRING, $length = null); public function errorCode(); public function errorInfo(); public function execute($params = null); public function rowCount(); } 