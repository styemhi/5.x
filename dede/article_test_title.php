<?php
/**
 * 检测重复文档
 *
 * @version        $Id: article_test_same.php 1 14:31 2010年7月12日 $
 * @package        DedeCMS.Administrator
 * @copyright      Copyright (c) 2007 - 2020, 上海卓卓网络科技有限公司.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require_once(dirname(__FILE__)."/config.php");
AjaxHead();
if(empty($t) || $cfg_check_title=='N') exit;

$row = $dsql->GetOne("SELECT id FROM `#@__archives` WHERE title LIKE '$t' ");
if(is_array($row))
{
    echo "提示：系统已经存在标题为 '<a href='../plus/view.php?aid={$row['id']}' style='color:red' target='_blank'><u>$t</u></a>' 的文档。[<a href='#' onclick='javascript:HideObj(\"mytitle\")'>关闭</a>]";
}