<?php
namespace app\admin\model;

use think\Model;

class AdminActivity extends Model
{
    // 指定表名,不含前缀
    protected $name = 'admin_activity';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
}
