<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:37:"./template/pc/rainbow/user\index.html";i:1522317287;s:61:"I:\project\demo\oscshop2\template\pc\rainbow\user\header.html";i:1522317287;s:59:"I:\project\demo\oscshop2\template\pc\rainbow\user\menu.html";i:1522317287;s:63:"I:\project\demo\oscshop2\template\pc\rainbow\public\footer.html";i:1522317287;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>我的账户-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
		<meta name="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
		<meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css" />
		<script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body class="bg-f5">
		<script src="/public/js/global.js" type="text/javascript"></script>
<link rel="stylesheet" href="/template/pc/rainbow/static/css/location.css" type="text/css"><!-- 收货地址，物流运费 -->
<script src="/public/static/js/layer/layer.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css"/>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo (isset($tpshop_config['shop_info_store_ico']) && ($tpshop_config['shop_info_store_ico'] !== '')?$tpshop_config['shop_info_store_ico']:'/public/static/images/logo/storeico_default.png'); ?>" media="screen"/>
<style>
	.list1 li{float:left;}
</style>
<div class="tpshop-tm-hander home-index-top p">
	<div class="top-hander clearfix">
		<div class="w1224 pr clearfix">
			<div class="fl">
				<div class="sendaddress pr fl">
				  <span>送货至：</span>
				  <!-- <span>深圳<i class="share-a_a1"></i></span>-->
				  <span>
					  <ul class="list1">
						  <li class="summary-stock though-line">
							  <div class="dd" style="border-right:0px;width:200px;">
								  <div class="store-selector add_cj_p">
									  <div class="text"><div></div><b></b></div>
									  <div onclick="$(this).parent().removeClass('hover')" class="close"></div>
								  </div>
							  </div>
						  </li>
					  </ul>
				  </span>
				</div>
				<div class="fl nologin">
					<a class="red" href="<?php echo U('Home/user/login'); ?>">登录</a>
					<a href="<?php echo U('Home/user/reg'); ?>">注册</a>
				</div>
				<div class="fl islogin hide">
					<a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
					<a  href="<?php echo U('Home/user/logout'); ?>"  title="退出" target="_self">安全退出</a>
				</div>
			</div>
			<ul class="top-ri-header fr clearfix">
				<li><a target="_blank" href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/visit_log'); ?>">我的浏览</a></li>
				<li class="spacer"></li>
				<li><a target="_blank" href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
				<li class="spacer"></li>
				<li>客户服务</li>
				<li class="spacer"></li>
				<li class="hover-ba-navdh">
					<div class="nav-dh">
						<span>网站导航</span>
						<i class="share-a_a1"></i>
					</div>
					<ul class="conta-hv-nav clearfix">
						<li>
							<a href="<?php echo U('Home/Activity/promoteList'); ?>">优惠活动</a>
						</li>
						<li>
							<a href="<?php echo U('Home/Activity/pre_sell_list'); ?>">预售活动</a>
						</li>
						<!--<li>
							<a href="<?php echo U('Home/Goods/integralMall'); ?>">拍卖活动</a>
						</li>-->
						<li>
							<a href="<?php echo U('Home/Goods/integralMall'); ?>">兑换中心</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="nav-middan-z p home-index-head">
	<div class="header w1224">
		<div class="ecsc-logo" >
			<a href="/" class="logo">
                <img src="<?php echo (isset($tpshop_config['shop_info_store_user_logo']) && ($tpshop_config['shop_info_store_user_logo'] !== '')?$tpshop_config['shop_info_store_user_logo']:'/public/static/images/logo/pc_home_user_logo_default.png'); ?>" style="width: 159px;height: 58px">
            </a>
		</div>
		<div class="m-index">
			<a href="<?php echo U('Home/User/index'); ?>" class="index">我的商城</a>
			<a href="/" class="home">返回商城首页</a>
		</div>
		<div class="m-navitems">
			<ul class="fixed p">
				<li><a href="<?php echo U('Home/Index/index'); ?>">首页</a></li>
				<li>
					<div class="u-dl">
						<div class="u-dt">
							<span>账户设置</span>
							<i></i>
						</div>
						<div class="u-dd">
							<a href="<?php echo U('Home/User/info'); ?>">个人信息</a>
							<!--<a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a>-->
							<a href="<?php echo U('Home/User/address_list'); ?>">收货地址</a>
						</div>
					</div>
				</li>
				<li class="u-msg"><a class="J-umsg" href="<?php echo U('Home/User/message_notice'); ?>">消息<span><?php if($user_message_count > 0): ?><?php echo $user_message_count; endif; ?></span></a></li>
				<li><a href="<?php echo U('Home/Goods/integralMall'); ?>">积分商城</a></li>
				<li class="search_li">
				   <form id="sourch_form" id="sourch_form" method="post" action="<?php echo U('Home/Goods/search'); ?>">
		           	<input class="search_usercenter_text" name="q" id="q" type="text" value="<?php echo \think\Request::instance()->param('q'); ?>"/>
		           	<a class="search_usercenter_btn" href="javascript:;" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();">搜索</a>
		           </form>
		        </li>
			</ul>
		</div>
		<div class="u-g-cart fr" id="hd-my-cart">
			<a href="<?php echo U('Home/Cart/index'); ?>">
			<div class="c-n fl">
				<i class="share-shopcar-index"></i>
				<span>我的购物车</span>
				<em class="shop-nums" id="cart_quantity"></em>
			</div>
			</a>
			<div class="u-fn-cart" id="show_minicart">
				<div class="minicartContent" id="minicart">
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/template/pc/rainbow/static/js/common.js"></script>
<!--------收货地址，物流运费-开始-------------->
<script src="/public/js/locationJson.js"></script>
<script src="/template/pc/rainbow/static/js/location.js"></script>
<script>doInitRegion();</script>


		<div class="home-index-middle">
			<div class="w1224">
				<div class="g-crumbs">
			       	<a href="<?php echo U('Home/User/index'); ?>">我的商城</a>
			    </div>
			    <div class="home-main">
					<div class="le-menu fl">
	<div class="menu-ul">
		<ul>
			<li class="ma"><i class="account-acc1"></i>交易中心</li>
			<li><a href="<?php echo U('Home/Order/order_list'); ?>">我的订单</a></li>
			<li><a href="<?php echo U('Home/Virtual/virtual_list'); ?>">虚拟订单</a></li>
			<!--<li><a href="">我的预售</a></li>-->
			<li><a href="<?php echo U('Home/Order/comment'); ?>">我的评价</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc2"></i>资产中心</li>
			<li><a href="<?php echo U('Home/User/coupon'); ?>">我的优惠券</a></li>
			<!--<li><a href="">我的购物卡</a></li>-->
			<li><a href="<?php echo U('Home/User/recharge'); ?>">账户余额</a></li>
			<li><a href="<?php echo U('Home/User/account'); ?>">我的积分</a></li>
			<!--<li><a href="">积分换券明细</a></li>-->
		</ul>
		<ul>
			<li class="ma"><i class="account-acc3"></i>关注中心</li>
			<li><a href="<?php echo U('Home/User/goods_collect'); ?>">我的收藏</a></li>
			<!--<li><a href="">曾经购买</a></li>-->
			<li><a href="<?php echo U('Home/User/visit_log'); ?>">我的足迹</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc4"></i>个人中心</li>
			<li><a href="<?php echo U('Home/User/info'); ?>">个人信息</a></li>
			<li><a href="<?php echo U('Home/User/bind_auth'); ?>">账号绑定</a></li>
			<li><a href="<?php echo U('Home/User/address_list'); ?>">地址管理</a></li>
			<li><a href="<?php echo U('Home/User/safety_settings'); ?>">安全设置</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc5"></i>服务中心</li>
			<!--<li><a href="">我的咨询</a></li>-->
			<li><a href="<?php echo U('Home/Order/return_goods_list'); ?>">退货管理</a></li>
			<li><a href="<?php echo U('Home/User/message_notice'); ?>">消息通知</a></li>
		</ul>
		<ul>
			<li class="ma"><i class="account-acc6"></i>分销中心</li>
			<li><a href="<?php echo U('Home/Order/lower_list'); ?>">我的推广</a></li>
			<li><a href="<?php echo U('Home/Order/income'); ?>">我的收益</a></li>
		</ul>
	</div>
</div>
			    	<div class="ri-menu fr">
			    		<div class="menu-ri-t p">
			    			<div class="mu-head fl">
			    				<img width="100" height="100" src="<?php echo (isset($user['head_pic']) && ($user['head_pic'] !== '')?$user['head_pic']:'/template/pc/rainbow/static/images/pers.png'); ?>"/>
			    			</div>
			    			<div class="mu-midd fl">
			    				<a class="mu-m-phone" href="<?php echo U('Home/User/index'); ?>"><?php echo $user['nickname']; ?></a>
			    				<a class="mu-m-vip"><?php echo $level[$user['level']]['level_name']; ?></a>
			    				<p>
			    					<span>账户安全：</span>
			    					<span class="tt-zd">
                                        <?php if(($user['mobile_validated'] == 0) or ($user['email_validated'] == 0)): ?>
                                            <i style="width: 30%;"></i>
                                        <?php endif; if(($user['mobile_validated'] == 1) and ($user['email_validated'] == 1) and ($user[paypwd] == null)): ?>
                                            <i style="width: 60%;"></i>
                                        <?php endif; if(($user['mobile_validated'] == 1) and ($user['email_validated'] == 1) and ($user[paypwd] != null)): ?>
                                            <i style="width: 90%;"></i>
                                        <?php endif; ?>
			    					</span>
                                    <?php if(($user['mobile_validated'] == 0) or ($user['email_validated'] == 0)): ?>
                                        <span class="c_ye">较低</span>
                                    <?php endif; if(($user['mobile_validated'] == 1) and ($user['email_validated'] == 1) and ($user[paypwd] == null)): ?>
                                        <span class="c_ye">一般</span>
                                    <?php endif; if(($user['mobile_validated'] == 1) and ($user['email_validated'] == 1) and ($user[paypwd] != null)): ?>
                                        <span class="c_ye">较高</span>
                                    <?php endif; ?>
			    					<!--<a class="c_bl" href="">提升</a>-->
			    				</p>
			    			</div>
			    			<div class="mu-afte fl">
			    				<ul class="mu-a1">
									<li class="" hidden>
										<a href="">
											<i class="icon-card"></i>
											<span>会员折扣</span>
											<em class="mu-unit">&nbsp;折</em>
											<em class="mu-num"><?php echo $user['discount']*10; ?></em>
											<i class="icon-ar"></i>
										</a>
									</li>
			                        <li class="">
			                            <a href="<?php echo U('Home/User/recharge'); ?>">
			                               <i class="icon-balance"></i>
			                               <span>账户余额</span>
			                               <em class="mu-unit">&nbsp;元</em>
			                               <em class="mu-num"><?php echo $user['user_money']; ?></em>
			                               <i class="icon-ar"></i>
			                            </a>
			                        </li>
									<li>
										<a href="<?php echo U('Home/User/account'); ?>">
											<i class="icon-point"></i>
											<span>可用积分</span>
											<em class="mu-unit">&nbsp;分</em>
											<em class="mu-num"><?php echo $user['pay_points']; ?></em>
											<i class="icon-ar"></i>
										</a>
									</li>
			    				</ul>
			    				<ul class="mu-a2">
			                        <li>
			                            <a href="<?php echo U('Home/User/coupon'); ?>">
			                               <i class="icon-coupon"></i>
			                               <span>优惠券</span>
			                               <em class="mu-unit">&nbsp;张</em>
			                               <em class="mu-num"><?php echo $user['coupon_count']; ?></em>
			                               <i class="icon-ar"></i>
			                            </a>
			                        </li>
									<?php if($tpshop_config['basic_rechargevip_on_off'] == 1): ?>
									<li class="">
										<a href="<?php echo U('Home/User/rechargevip'); ?>">
											<i class="icon-card"></i>
											<span>VIP充值</span>
											<em class="mu-unit"></em>
											<em class="mu-num"></em>
											<i class="icon-ar"></i>
										</a>
									</li>
									<?php endif; ?>
			    				</ul>
			    			</div>
			    		</div>
			    		<div class="order-list p">
			    			<div class="ddlb-ayh">
			    				<div class="ddlb-tit">
			                       <h1>我的订单</h1>
			                       <a class="u-view-all" href="<?php echo U('Home/Order/order_list'); ?>">查看全部订单</a>
			                       <!--<i class="u-sep"></i>-->
			                       <!--<a class="u-view-pre" href="">预售单<span class="hide">(待付款 <em>0</em>)</span></a>-->
			    				</div>
								<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__order` where user_id = $user[user_id] and prom_type < 5 order by order_id desc limit 1");
                                $order_list = $sql_result_item = S("sql_".$md5_key);
                                if(empty($sql_result_item))
                                {                            
                                    $order_list = $sql_result_item = \think\Db::query("select * from `__PREFIX__order` where user_id = $user[user_id] and prom_type < 5 order by order_id desc limit 1"); 
                                    S("sql_".$md5_key,$sql_result_item,1);
                                }    
                              foreach($sql_result_item as $key=>$item): endforeach; if(empty($order_list) || (($order_list instanceof \think\Collection || $order_list instanceof \think\Paginator ) && $order_list->isEmpty())): ?>
									<div class="car-none-pl">
										<i class="account-acco1"></i>您最近没有待处理订单，<a href="/">快去逛逛吧~</a>
									</div>
								<?php else: ?>
									<div class="order-alone-li">
									<?php if(is_array($order_list) || $order_list instanceof \think\Collection || $order_list instanceof \think\Paginator): $i = 0; $__LIST__ = $order_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;
           									$list = set_btn_order_status($list);  // 添加属性  包括按钮显示属性 和 订单状态显示属性
           								?>
										<table width="100%" border="" cellspacing="" cellpadding="">
											<tr class="time_or">
												<td colspan="6">
													<div class="fl_ttmm">
														<span class="time-num">下单时间：<em class="num"><?php echo date('Y-m-d H:i:s',$list['add_time']); ?></em></span>
														<span class="time-num">订单编号：<em class="num"><?php echo $list['order_sn']; ?></em></span>
														<!--<span class="time-num">卖家：<a href="tencent://message/?uin=<?php echo $store_list[$list[store_id]][store_qq]; ?>&Site=TPshop商城&Menu=yes"><em class="num"><?php echo $store_list[$list[store_id]][store_name]; ?><i class="ear"></i></em></a></span>-->
														<div class="paysoon">
														<?php if($list['pay_btn'] == 1): ?>
															<a class="ps_lj" href="<?php echo U('/Home/Cart/cart4',array('order_id'=>$list[order_id])); ?>"  target="_blank">立即支付</a>
														<?php endif; if($list['receive_btn'] == 1): ?>
															<a onclick="order_confirm(<?php echo $list['order_id']; ?>)"  href="javascript:void(0);" class="ps_lj">确认收货</a>
														<?php endif; if($list['cancel_btn'] == 1): if($list[pay_status] == 0): ?>
                                                                    <a class="consoorder" href="javascript:void(0);" onClick="cancel_order(<?php echo $list['order_id']; ?>)" >取消订单</a>
                                                                    <?php else: ?>
                                                                    <a class="consoorder" href="javascript:void(0);" data-url="<?php echo U('Home/Order/refund_order',array('order_id'=>$list[order_id])); ?>" onClick="refund_order(this)" >取消订单</a>
                                                                <?php endif; else: ?>
                                                                <!--<div class="dele" onclick="verConfirm('确认删除该订单?','<?php echo U('Home/Order/del_order',array('order_id'=>$list['order_id'], 'type'=>\think\Request::instance()->param('type'))); ?>')"></div>-->
                                                            <?php endif; ?>
														</div>
														<!--<div class="dele"></div>-->
													</div>
													<div class="fr_ttmm"></div>
												</td>
											</tr>
											<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__order_goods` where order_id = $list[order_id]");
                                $goods_list = $sql_result_goods = S("sql_".$md5_key);
                                if(empty($sql_result_goods))
                                {                            
                                    $goods_list = $sql_result_goods = \think\Db::query("select * from `__PREFIX__order_goods` where order_id = $list[order_id]"); 
                                    S("sql_".$md5_key,$sql_result_goods,1);
                                }    
                              foreach($sql_result_goods as $key=>$goods): ?>
												<tr class="conten_or">
													<td class="sx1">
														<div class="shop-if-dif">
															<div class="shop-difimg">
																<img src="<?php echo goods_thum_images($goods['goods_id'],100,100); ?>"  style="float: left;width: 100px;height: 100px;"/>
															</div>
															<div class="shop_name"><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods[goods_id])); ?>"><?php echo $goods['goods_name']; ?></a></div>
														</div>
													</td>
													<td class="sx2"><span>￥</span><span><?php echo $goods['member_goods_price']; ?></span></td>
													<td class="sx3">x<?php echo $goods['goods_num']; ?></td>
													<?php if($key == 0): ?>
														<td class="sx4" rowspan="<?php echo count($goods_list); ?>">
															<div class="pric_rhz">
																<p class="d_pri"><span>￥</span><span><?php echo $list['total_amount']; ?></span></p>

																<p class="d_yzo">
																	<span>含运费：</span>
																	<span><?php echo $list['shipping_price']; ?></span></p>
																<p class="d_yzo"><a href="javascript:void(0);"><?php echo $list['pay_name']; ?></a></p>
															</div>
														</td>
													<?php endif; ?>
													<td class="sx5">
														<div class="detail_or">
															<p class="d_yzo">
																<?php if($goods[is_comment] == 1): ?>
																	已完成
																	<?php elseif($goods[is_comment] != 1 and $list['shipping_status'] == 2): if($goods[is_send] == 0): ?>
																		待发货
																		<?php else: ?>
																		已发货
																	<?php endif; else: ?>
																	<?php echo $list['order_status_desc']; endif; ?>
                                                            </p>
                                                            <p>
																<?php if($list['prom_type'] == 5): ?>
																	<a href="<?php echo U('Order/virtual_order',array('order_id'=>$list['order_id'])); ?>">查看详情</a>
																<?php else: ?>
																	<a href="<?php echo U('Home/Order/order_detail',array('id'=>$list['order_id'])); ?>">查看详情</a>
																<?php endif; ?>
															</p>
															<!--<p class="inspect"><a href="<?php echo U('Home/User/order_detail',array('id'=>$list['order_id'])); ?>">查看物流</a></p>-->
															<!--<p class="ps_r"><a href="javascript:void(0);">配送</a></p>-->
														</div>
													</td>
													<td class="sx6">
														<div class="rbac">
															<?php if(($list[return_btn] == 1) and ($goods[is_send] < 2)): ?>
																<p><a href="<?php echo U('Home/Order/return_goods',array('rec_id'=>$goods['rec_id'])); ?>">退货/退款</a></p>
															<?php endif; ?>
															<p class=""><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">再次购买</a></p>
															<?php if(($list[comment_btn] == 1) and ($goods[is_comment] == 0)): ?>
																<p class="inspect"><a href="<?php echo U('Home/Order/comment'); ?>">评价</a></p>
															<?php endif; ?>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										</table>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</div>
								<?php endif; ?>
			    			</div>
			    		</div>
			    		<div class="order-list bgno p">
			    			<div class="ddlb-zy">
			    				<div class="coll-coupon fl">
			    					<div class="coll-etl">
										<?php
                                   
                                $md5_key = md5("select c.*,g.shop_price from __PREFIX__goods_collect c INNER JOIN __PREFIX__goods g on c.goods_id = g.goods_id  where c.user_id = $user[user_id] order by collect_id desc limit 3");
                                $collect_result = $sql_result_item = S("sql_".$md5_key);
                                if(empty($sql_result_item))
                                {                            
                                    $collect_result = $sql_result_item = \think\Db::query("select c.*,g.shop_price from __PREFIX__goods_collect c INNER JOIN __PREFIX__goods g on c.goods_id = g.goods_id  where c.user_id = $user[user_id] order by collect_id desc limit 3"); 
                                    S("sql_".$md5_key,$sql_result_item,1);
                                }    
                              foreach($sql_result_item as $key=>$item): endforeach; ?>
										<div class="ddlb-tit">
					                       <h1>我的收藏</h1>
					                       <!--<a class="cx-fk" class="J-childCollect" href="<?php echo U('Home/User/goods_collect'); ?>">促销（<em><?php echo count($collect_result); ?></em>）</a>-->
					                       <a class="u-view-all" href="<?php echo U('Home/User/goods_collect'); ?>">查看更多</a>
					    				</div>
					    				<div class="shop-sc-t">
					    					<ul>
												<?php if(is_array($collect_result) || $collect_result instanceof \think\Collection || $collect_result instanceof \think\Paginator): if( count($collect_result)==0 ) : echo "" ;else: foreach($collect_result as $key=>$v): ?>
													<li>
														<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$v[goods_id])); ?>">
															<img src="<?php echo goods_thum_images($v['goods_id'],80,80); ?>"/>
															<p><em>￥</em><em><?php echo $v['shop_price']; ?></em></p>
														</a>
													</li>
												<?php endforeach; endif; else: echo "" ;endif; ?>
					    					</ul>
					    				</div>
			    					</div>
			    				</div>
			    				<div class="coll-coupon malrh fl">
			    					<div class="coupon-etl">
			    						<div class="ddlb-tit">
					                       <h1>我的优惠券</h1>
					                       <a class="u-view-all" href="<?php echo U('Home/User/coupon'); ?>">查看更多</a>
					    				</div>
					    				<div class="shop-sc-t">
											<?php if(is_array($coupon) || $coupon instanceof \think\Collection || $coupon instanceof \think\Paginator): if( count($coupon)==0 ) : echo "" ;else: foreach($coupon as $key=>$v): ?>
                                                    <div class="coupon-bgimg">
                                                        <a href="/">
                                                            <div class="cp-jal">
                                                                <h1><em class="li-fh">￥</em><em><?php echo ceil($v['money']); ?></em></h1>
                                                                <span>满<?php echo ceil($v['condition']); ?>减<?php echo ceil($v['money']); ?></span>
                                                            </div>
                                                            <div class="cp-jay">
                                                                <span>立即使用</span>
                                                            </div>
                                                        </a>
                                                    </div>
											<?php endforeach; endif; else: echo "" ;endif; ?>
					    				</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			</div>
		</div>
		<div class="tpshop-service">
	<ul class="w1224 clearfix">
		<li>
			<i class="ico ico-day7"></i>
			<p class="service">7天无理由退货</p>
		</li>
		<li>
			<i class="ico ico-day15"></i>
			<p class="service">15天免费换货</p>
		</li>
		<li>
			<i class="ico ico-quality"></i>
			<p class="service">正品行货 品质保障</p>
		</li>
		<li>
			<i class="ico ico-service"></i>
			<p class="service">专业售后服务</p>
		</li>
	</ul>
</div>
<div class="footer">
	<div class="w1224 clearfix" style="padding-bottom: 10px;">
		<div class="left-help-list">
			<div class="help-list-wrap clearfix">
				<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where cat_id < 6  order by sort_order asc");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where cat_id < 6  order by sort_order asc"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
					<dl>
						<dt><?php echo $v[cat_name]; ?></dt>
						<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id]  and is_open=1 limit 5"); 
                                    S("sql_".$md5_key,$sql_result_v2,1);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
						<dd><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>"><?php echo $v2[title]; ?></a></dd>
						<?php endforeach; ?>
					</dl>
				<?php endforeach; ?>
			</div>
			<div class="friendship-links clearfix">
	            <span>友情链接 : </span>
                <div class="links-wrap-h clearfix">
                <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__friend_link` where is_show=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__friend_link` where is_show=1"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
                    <a href="<?php echo $v[link_url]; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?> ><?php echo $v[link_name]; ?></a>
                <?php endforeach; ?>
                </div>
	        </div>	
		</div>
		<div class="right-contact-us">
			<h3 class="title">联系我们</h3>
			<span class="phone"><?php echo $tpshop_config['shop_info_phone']; ?></span>
			<p class="tips">周一至周日8:00-18:00<br />(仅收市话费)</p>
			<!--<div class="qr-code-list clearfix">-->
				<!--<a class="qr-code" href="javascript:;"><img class="w-100" src="/template/pc/rainbow/static/images/qrcode.png" alt="" /></a>-->
				<!--<a class="qr-code qr-code-tpshop" href="javascript:;"><img class="w-100" src="/template/pc/rainbow/static/images/qrcode.png" alt="" /></a>-->
			<!--</div>-->
		</div>
	</div>
    <div class="mod_copyright p">
        <div class="grid-top">
            <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC");
                                $result_name = $sql_result_vv = S("sql_".$md5_key);
                                if(empty($sql_result_vv))
                                {                            
                                    $result_name = $sql_result_vv = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 AND position = 'bottom' ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_vv,1);
                                }    
                              foreach($sql_result_vv as $kk=>$vv): ?>
                <a href="<?php echo $vv[url]; ?>" <?php if($vv[is_new] == 1): ?> target="_blank" <?php endif; ?> ><?php echo $vv[name]; ?></a><span>|</span>
            <?php endforeach; ?>
            <!--<a href="javascript:void (0);">关于我们</a><span>|</span>-->
            <!--<a href="javascript:void (0);">联系我们</a><span>|</span>-->
            <!--<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = 5 and is_open=1");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article` where cat_id = 5 and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v,1);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>-->
                <!--<a href="<?php echo U('Home/Article/detail',array('article_id'=>$v[article_id])); ?>"><?php echo $v[title]; ?></a>-->
                <!--<span>|</span>-->
            <!--<?php endforeach; ?>-->
        </div>
        <p>Copyright © 2016-2025 <?php echo (isset($tpshop_config['shop_info_store_name']) && ($tpshop_config['shop_info_store_name'] !== '')?$tpshop_config['shop_info_store_name']:'TPshop商城'); ?> 版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>
        <p class="mod_copyright_auth">
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_1" href="" target="_blank">经营性网站备案中心</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_2" href="" target="_blank">可信网站信用评估</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_3" href="" target="_blank">网络警察提醒你</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_4" href="" target="_blank">诚信网站</a>
            <a class="mod_copyright_auth_ico mod_copyright_auth_ico_5" href="" target="_blank">中国互联网举报中心</a>
        </p>
    </div>
</div>
<style>
    .mod_copyright {
        border-top: 1px solid #EEEEEE;
    }
    .grid-top {
        margin-top: 20px;
        text-align: center;
    }
    .grid-top span {
        margin: 0 10px;
        color: #ccc;
    }
    .mod_copyright > p {
        margin-top: 10px;
        color: #666;
        text-align: center;
    }
    .mod_copyright_auth_ico {
        overflow: hidden;
        display: inline-block;
        margin: 0 3px;
        width: 103px;
        height: 32px;
        background-image: url(/template/pc/rainbow/static/images/ico_footer.png);
        line-height: 1000px;
    }
    .mod_copyright_auth_ico_1 {
        background-position: 0 -151px;
    }
    .mod_copyright_auth_ico_2 {
        background-position: -104px -151px;
    }
    .mod_copyright_auth_ico_3 {
        background-position: 0 -184px;
    }
    .mod_copyright_auth_ico_4 {
        background-position: -104px -184px;
    }
    .mod_copyright_auth_ico_5 {
        background-position: 0 -217px;
    }
</style>
    <script>
        //取消订单
        function cancel_order(id){
            layer.confirm('确定取消订单?', {
                        btn: ['确定','取消'] //按钮
                    }, function(){
                        // 确定
                        location.href = "/index.php?m=Home&c=Order&a=cancel_order&id="+id;
                    }, function(index){
                        layer.close(index);
                    }
            );
        }
        //确定收货
        function order_confirm(order_id){
            layer.confirm("你确定收到货了吗?",{
                btn:['确定','取消']
            },function(){
                $.ajax({
                    type : 'post',
                    url : '/index.php?m=Home&c=Order&a=order_confirm&order_id='+order_id,
                    dataType : 'json',
                    success : function(data){
                        if(data.status == 1){
                            window.location.href = data.url;
                        }else{
                            layer.open({content:data.msg,time:2});
                            verify();
                        }
                    },
                    error : function(XMLHttpRequest, textStatus, errorThrown) {
                        showErrorMsg('网络失败，请刷新页面后重试');
                    }
                })
            }, function(index){
                layer.close(index);
            });
        }

        function refund_order(obj){
            layer.open({
                type: 2,
                title: '<b>订单取消申请</b>',
                skin: 'layui-layer-rim',
                shadeClose: true,
                shade: 0.5,
                area: ['600px', '500px'],
                content: $(obj).attr('data-url'),
            });
        }
    </script>
	</body>
</html>