<?php
namespace Weixin\Model;

/**
 * 自定义会员信息类
 */
class CustomField extends Base
{

    /**
     * name
     * 否
     * string(24)
     * 会员信息类目自定义名称，当开发者变更这类类目信息的value值时 不会触发系统模板消息通知用户
     */
    public $name = NULL;

    /**
     * name_type
     * 会员信息类目名称,支持填入类型为：
     * FIELD_NAME_TYPE_LEVE 等级
     * FIELD_NAME_TYPE_COUPON 优惠券
     * FIELD_NAME_TYPE_MILEAGE 里程
     * FIELD_NAME_TYPE_STAMP 印花
     * FIELD_NAME_TYPE_ACHIEVEMENT 成就
     * FIELD_NAME_TYPE_DISCOUNT 折扣
     * 是
     */
    public $name_type = NULL;

    /**
     * url
     * 自定义跳转url
     * 是
     */
    public $url = NULL;

    public function __construct($name_type, $url)
    {
        $this->name_type = $name_type;
        $this->url = $url;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function getParams()
    {
        $params = array();
        if ($this->isNotNull($this->name_type)) {
            $params['name_type'] = $this->name_type;
        }
        if ($this->isNotNull($this->url)) {
            $params['url'] = $this->url;
        }
        if ($this->isNotNull($this->name)) {
            $params['name'] = $this->name;
        }
        return $params;
    }
}
