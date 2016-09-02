<?php
/**
 * 		发货单 模型
 *      [HeYi] (C)2013-2099 HeYi Science and technology Yzh.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      http://www.yaozihao.cn
 *      tel:18519188969
 */
class order_parcel_table extends table {
	
	protected $_validate = array(
        // 订单号
		array('order_sn', 'require', '{order/order_require}',0),
        array('sub_sn', 'require', '{order/order_sub_require}',0),
    );
	
	/*查询一条记录*/
	public function fetch_by_id($id,$key){
		if((int)$id  < 1){
			$this->error = lang('_param_error_');
			return false;
		}
		$info = $this->find($id);
		if($key)return $info[$key];
		return $info;
	}
	
}