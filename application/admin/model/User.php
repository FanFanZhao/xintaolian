<?php
/**
 * 亚富链商城
 * ============================================================================
 * 版权所有 2015-2027 亚富链，并保留所有权利。
 * 网站地址: 
 * ----------------------------------------------------------------------------
 * 这是一个商业软件，您必须购买授权才能使用.
 * 不允许对程序代码以任何形式任何目的的再发布。
 * 请支持正版, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 亚富链
 * Date: 2015-09-09
 */

namespace app\admin\model;

use think\Model;

/**
 * Class UserModel
 * @package Admin\Model
 */
class User extends Model
{
    protected $name = 'users';

    public function parent()
    {
        return $this->belongsTo('User', 'pid', 'user_id');
    }
}
