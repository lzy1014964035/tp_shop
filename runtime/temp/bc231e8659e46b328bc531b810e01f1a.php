<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./template/pc/rainbow/cart\integral.html";i:1522317287;s:68:"I:\project\demo\oscshop2\template\pc\rainbow\public\sign-header.html";i:1522317287;s:63:"I:\project\demo\oscshop2\template\pc\rainbow\public\footer.html";i:1522317287;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>积分商品结算-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/tpshop.css" />
		<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/myaccount.css" />
        <link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/jh.css" />
		<script src="/template/pc/rainbow/static/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/js/layer/layer.js"></script>
		<script src="/public/js/global.js" type="text/javascript" charset="utf-8"></script>
		<script src="/public/js/md5.min.js"></script>
	</head>
	<body>
		<!--顶部广告-s-->
		<?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1526284800 and end_time > 1526284800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(is_array($ad_position) && !in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存
  \think\Cache::clear();  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
			<div class="topic-banner" style="background: #f37c1e;">
				<div class="w1224">
					<a href="<?php echo $v['ad_link']; ?>">
						<img src="<?php echo $v[ad_code]; ?>"/>
					</a>
					<i onclick="$('.topic-banner').hide();"></i>
				</div>
			</div>
		<?php endforeach; ?>
		<!--顶部广告-e-->
		<!--header-s-->
		<div class="sett_hander p">
			<link rel="stylesheet" type="text/css" href="/template/pc/rainbow/static/css/base.css" />
<div class="top-hander" moduleid="1539923">
    <div class="w1224 clearfix">
      <div class="fl">
          <!--<?php if($user[user_id] > 0): ?>-->
              <!--<li class="fl J_login_status"><a href="<?php echo U('Home/user/index'); ?>" alt="" title="" target="_self"><?php echo $user['nickname']; ?></a>-->
                  <!--<a  href="<?php echo U('Home/user/logout'); ?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>-->
              <!--</li>-->
              <!--<?php else: ?>-->
              <!--<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login'); ?>">-->
                  <!--<span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>-->
          <!--<?php endif; ?>-->
          <div class="ls-dlzc fl nologin">
              <a href="<?php echo U('Home/user/login'); ?>">Hi,请登录</a>
              <a class="red" href="<?php echo U('Home/user/reg'); ?>">免费注册</a>
          </div>
          <div class="ls-dlzc fl islogin">
              <a class="red userinfo" href="<?php echo U('Home/user/index'); ?>"></a>
              <a href="<?php echo U('Home/user/logout'); ?>">退出</a>
          </div>
          <script>
              $(function (){
                      var uname = getCookie('uname');
                      if (uname == '') {
                          $('.islogin').remove();
                          $('.nologin').show();
                      } else {
                          $('.nologin').remove();
                          $('.islogin').show();
                          $('.userinfo').html(decodeURIComponent(uname).substring(0,11));
                      }
              })

          </script>
        <!-- <li class="fl sep"></li> -->
        <!--<li class="fl select-city dropdown">
          <span class="menu-item">
          <span>送货至：</span>
          <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
        </li>-->
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


			<div class="nav-middan-z p">
				<div class="header w1224">
					<div class="ecsc-logo fon_gwcshcar" style="width: 330px">
						<a href="/" class="logo"> <img src=<?php echo (isset($tpshop_config['shop_info_store_logo']) && ($tpshop_config['shop_info_store_logo'] !== '')?$tpshop_config['shop_info_store_logo']:'/public/static/images/logo/pc_home_logo_default.png'); ?>"></a>
						<span>核对订单</span>
					</div>
					<div class="liucsell">
						<div class="line-flowpath">
			    			<span class="green now"><i class="las-flo"></i><em>1、填写核对订单信息</em></span>
			    			<span><i class="las-flo2"></i><em>2、成功提交订单</em></span>
			    		</div>
					</div>
				</div>
			</div>
		</div>
		<!--header-e-->
		<form name="cart2_form" id="cart2_form" method="post" autocomplete="off">
			<input type="hidden" name="goods_id" value="<?php echo \think\Request::instance()->param('goods_id'); ?>">
			<input type="hidden" name="item_id" value="<?php echo \think\Request::instance()->param('item_id'); ?>">
			<input type="hidden" name="goods_num" value="<?php echo \think\Request::instance()->param('goods_num'); ?>">
			<input type="hidden" name="address_id" value="">
			<input type="hidden" name="pay_points" value="">
			<input type="hidden" name="user_money" value="">
			<input type="hidden" id="order_invoice_title" name="invoice_title" value="">
			<input type="hidden" id="order_taxpayer" name="taxpayer" value="">
            <input type="hidden" name="payPwd" value="">
			<input type="hidden" name="user_note" value="">
			<input type="hidden" name="auth_code" value="<?php echo \think\Config::get('AUTH_CODE'); ?>"/>
		</form>
		<div class="fillorder">
			<div class="w1224">
				<p class="tit">填写并核对订单信息</p>
				<div class="spriteform" id="ajax_address"></div>
                <div class="con-y-info">
                    <h3 style="margin-top:30px">自提点</h3>
                    <div id="ajax_pickup"><!--ajax 返回自提点--></div>
                </div>
			</div>
		</div>

		<div class="sendgoodslist">
			<div class="w1224">
				<div class="top_leg p ma-to-20">
					<span class="paragraph fl"><i class="ddd"></i>送货清单</span>
					<a class="newadd fr hover-y">
						<i class="las-warning"></i>价格说明
						<div class="pairgoods">
							<p class="tit">因可能存在系统缓存、页面更新导致价格变动异常等不确定性情况出现，商品售价以本结算页商品价格为准；如有疑问，请您立即联系销售商咨询</p>
						</div>
					</a>
				</div>
					<div class="shopping-listpay ma-to-20">
					<div class="dis-modes-li">
						<div class="modti p">
							<h2>配送方式</h2>
						</div>
						<div class="shipment ma-to-10">
							<div class="fore1 p">
								<span class="mode-label">配送时间：</span>
								<div class="mode-infor hover-y">
									<p><label>工作日、双休日与节假日均可送货</label></p>
									<!--<p><label><input type="checkbox" name="" value="" /> 双休日、假日送</label></p>-->
								</div>
							</div>
						</div>
						<div class="standard_wei buy-remarks">
							<span>备注 :</span> <textarea class="user_note_txt" placeholder="最多输入30个字"></textarea>
						</div>
					</div>
					<div class="goods-list-ri">
						<div class="goodsforma">
							<div class="modti p">
							</div>
							<ul class="buy-shopping-list">
								<li>
									<div class="goods-extra clearfix">
										<div class="p-img">
											<a target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">
												<img src="<?php echo goods_thum_images($goods['goods_id'],102,102); ?>" alt="">
											</a>
                                            <div class="p-img-tips" id="goods_shipping_img_<?php echo $goods[goods_id]; ?>" style="display: none">暂无商品</div>
										</div>
										<div class="goods-msg clearfix">
											<div class="goods-msg-gel">
												<div class="p-name">
													<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>" target="_blank"><?php echo $goods['goods_name']; ?></a>
												</div>
												<div class="p-price">
													<strong class="tp-price" style="width: 130px">￥ <?php echo round($goods_price-$goods['exchange_integral']/$point_rate,2); ?>+<?php echo $goods['exchange_integral']; ?>积分</strong>
													<span class="p-num f-l-noe" style="width: 40px">x<?php echo $goods_num; ?></span>
													<span class="p-state" id="goods_shipping_title_<?php echo $goods[goods_id]; ?>">有货</span>
													<span class="tp-weight tp-price"><?php echo $goods[weight]; ?>g</span>
												</div>
											</div>
										</div>
										<div class="msp_return">
											<p class="guarantee-item">
													<!--<i class="return7"></i><span class="f_blue">支持七天无理由退货</span>-->
													<!--<i class="return7 return7-dark"></i><span class="f_dark">不支持七天无理由退货</span>-->
											</p>
											<!--<p class="btn-check-date"><i class="yb-h-gwc return7"></i><span class="f_blue f-999">选延保</span></p>-->
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="addremark">-->
			<!--<div class="w1224">-->
				<!--<div class="top_leg p ma-to-20">-->
					<!--<span class="paragraph fl"><i class="ddd"></i>发票信息</span>-->
				<!--</div>-->
				<!--<div class="invoice-cont ma-to-20">-->
					<!--<span>普通发票（纸质）</span>-->
					<!--<span id="invoice_title">个人</span>-->
					<!--<span>明细</span>-->
					<!--<a onclick="invoice_dialog();" href="javascript:void(0);">修改</a>-->
				<!--</div>-->
			<!--</div>-->
		<!--</div>-->

		<div class="addremark">
			<div class="w1224">
				<div class="top_leg p ma-to-20">
					<span class="paragraph fl"><i class="ddd"></i>发票信息</span>
				</div>
				<div class="invoice-cont ma-to-20" id="changeinfo">
					<span id="span1">普通发票（纸质）</span>
					<span id="span2">个人</span>
					<span id="span3">明细</span>
					<span id="span4" style="display:none">不开发票</span>
					<a onclick="invoice_dialog();" href="javascript:void(0);">修改</a>
				</div>
			</div>
		</div>

		<div class="usecou-step-tit" id="usecou-step-tit">
			<div class="w1224">
				<div class="top_leg p ma-to-20">
					<span class="paragraph usewhilejs fl"><i class="ddd"></i>使用积分/余额</span>
				</div>
				<div class="coupon-detail">
					<div class="score-list">
						<p class="item">
							<label>
								使用积分余额 :
								<input id="pay_points" value="" type="text" disabled="disabled">
								点（您当前积分<span><?php echo $user['pay_points']; ?></span>点）
							</label>
							<!--<a href="javascript:;">了解什么是积分？</a>-->
						</p>
						<p class="item">
							<label>
								<input id="user_money_checkbox" type="checkbox" <?php if($user['user_money'] == 0): ?>disabled="disabled"<?php endif; ?>>
								使用账户余额 :
								<input id="user_money" type="text" onpaste="this.value=this.value.replace(/[^\d\.]/g,'')"
									   onkeyup="this.value=/^\d+\.?\d{0,2}$/.test(this.value) ? this.value : ''">
								元（您当前余额<span><?php echo $user['user_money']; ?></span>元）
							</label>
						</p>
                        <p class="item">
                            <label>
                                	支付密码:
                                <input type="password" id="payPwd">
                                <?php if(empty($user['paypwd'])): ?>
                                    	请先<a href="<?php echo U('User/paypwd'); ?>" style="color: #e23435;">设置支付密码</a>
                                <?php endif; ?>
                            </label>
                        </p>
					</div>
				</div>
			</div>
		</div>
		<div class="order-summary p">
			<div class="w1224">
				<div class="statistic fr">
					<div class="list">
						<span><em class="ftx-01"><?php echo $goods_num; ?></em> 件商品，总商品金额：</span>
						<em class="price">￥<?php echo $goods_price * $goods_num; ?></em>
					</div>
					<div class="list">
						<span>运费：</span>
						<em class="price" id="postFee">￥0.00</em>
					</div>
					<div class="list">
						<span>余额支付：</span>
						<em class="price" id="balance">-￥0.00</em>
					</div>
					<div class="list">
						<span>积分支付：</span>
						<em class="price" id="pointsFee">-￥0.00</em>
					</div>
				</div>
			</div>
		</div>
		<div class="trade-foot p">
			<div class="w1224">
				<div class="trade-foot-detail-com">
					<div class="fc-price-info">
						<span class="price-tit">应付总额：</span>
						<span class="price-num" id="payables">￥0.00</span>
					</div>
					<div class="fc-consignee-info">
						<span class="mr20">寄送至： <span id="address_info"></span></span>
						<span id="sendMobile">收货人：<span id="address_user"></span></span>
					</div>
				</div>
			</div>
		</div>
		<div class="submitorder_carpay p">
			<div class="w1224">
				<button type="submit" class="checkout-submit" onclick="submit_order();">
					提交订单
				</button>
			</div>
		</div>
		<!--发票信息弹窗-s--->
		<!--发票信息弹窗-s--->
		<div class="ui-dialog infom-dia">
			<div class="ui-dialog-title">
				<span>发票信息</span>
				<a class="ui-dialog-close" title="关闭">
					<span class="ui-icon ui-icon-delete"></span>
				</a>
			</div>
			<div class="ui-dialog-content" style="height: 600px">
				<div class="invoice-dialog">
					<div class="tab-nav p">
						<ul>
							<li>
								<div class="item_select_t curtr">
									<span>普通发票</span>
									<b></b>
								</div>
							</li>
							<!--<li>
                                    <div class="item_select_t">
                                        <span>电子发票</span>
                                        <b></b>
                                    </div>
                                </li>
                                <li>
                                    <div class="item_select_t">
                                        <span>增值税发票</span>
                                        <b></b>
                                    </div>
                                </li>-->
						</ul>
					</div>
					<div class="zinvoice-tips">
						<i>1</i>
						<span class="tip-cont">开票金额不包优惠券和积分支付部分。<!--<a target="_blank" class="newadd" href="">发票信息相关问题&gt;&gt;</a>--></span>
						<i>2</i>
						<span class="tip-cont">开企业抬头发票须填写纳税人识别号，以免影响报销</span>
					</div>
					<div class="ui-switchable-panel">
						<div class="invoice_title p">
							<span class="label">发票抬头：</span>
							<div class="fl">
								<input class="invoice_tt" type="text"  value="个人" onclick="hidediv();" id="personage"  READONLY/>
								<div id="adddiv" class="invoice_tt" style="display:none">
									<div class='fl'  style="margin-left:-5px">
										<input class='invoice_tt' type='text' value="" id='invoice_title'/>
										<a  onclick='save_invoice();'  class='btn-9'  style="margin-left:0px;margin-top: 5px">保存</a>
										<a  onclick='togglediv();'  class='btn-9'  style="margin-left:0px;margin-top: 5px">取消</a>
									</div>
								</div>
								</br>
								<a onclick="togglediv()" href="javascript:void(0);" id="addinvoice">新增单位发票</a>
							</div>
						</div>

						<div class="invoice_title p">


						</div>

						<div id="ratepaying" style="display:none" class="invoice_title p">
							<span class="label">纳税人编号：</span>
							<div class="fl">
								<input class="invoice_tt" type="text" value="" id="taxpayer"/>
							</div>
						</div>
						<div class="invoice_title p">
							<span class="label">发票内容：</span>
							<input type="hidden" name="invoice_desc" id="invoice_desc" value="">

							<div class="fl">
								<div class="tab-nav p" >
									<ul id="invoice_class">
										<li>
											<div class="item_select_t curtr" id="no_invoice">
												<span>不开发票</span>
												<b></b>
											</div>
										</li>
										<li>
											<div class="item_select_t" id="detail_invoice">
												<span>明细</span>
												<b></b>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<script type="text/javascript">
							var invoice_type = $('#invoice_class');
							$("#invoice_desc").val(invoice_type.find('.curtr').find('span').text());
								invoice_type.find('li').click(function() {
								invoice_type.find('div').attr("class", "item_select_t");
								$("#invoice_desc").val($(this).find('span').text());
								$(this).find('div').attr("class", "item_select_t curtr");
							});
						</script>
						<div class="invoice_title p">
							<span class="label">&nbsp;</span>
							<div class="fl">
								<div class="op-btns  invoice_sendwithgift">
									<a id="invoiceBtn" class="btn-1">保存</a>
									<a onclick="$('.ui-dialog-close').trigger('click');" class="btn-9">取消</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--发票信息弹窗-e--->
		<!--发票信息弹窗-e--->
		<div class="ui-mask"></div>
		<!--footer-s-->
		<style>
			.rabbit{position: fixed;left: 50%;right: 50%;top: 50%;bottom:50%;margin-top: -180px;margin-left: -300px;z-index: 9999;display: none;}
			.mask-filter-div {display: none; position: fixed; margin: 0 auto; width: 100%; left: 0; right: 0; top: 0; bottom: 0; z-index: 12; background: rgba(0,0,0,0.4); }
		</style>
		<img class="rabbit" src="/public/images/qw.gif" alt="">
		<div class="mask-filter-div"></div>
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
		<!--footer-e-->
		<script type="text/javascript">
			$(function() {
				$(document).on('click','#invoiceBtn',function(){
					var invoice_desc = $("#invoice_desc").val();
					if (!$('#ratepaying').is(":hidden")){
						var invoice_title = $("#invoice_title").val();
					}else{
						var invoice_title = "个人";
					}
					$('#span2').text(invoice_title);
					$('#span3').text(invoice_desc);
					if (invoice_desc == "不开发票") {
						$("#span1,#span2,#span3").hide();
						$("#span4").show();
					}else{
						$("#span1,#span2,#span3").show();
						$("#span4").hide();
					}
					save_invoice() && $('.ui-dialog-close').trigger('click');
				});
			})
			function hidediv() {
				$("#invoice_title").css({"border": ""});
				$("#personage").css({"border": "2px solid #e4393c"});
				$('#adddiv').hide();
				$("#ratepaying").hide();
				if (!$('#adddiv').is(":hidden")) {
					$("#addinvoice").hide();
				}else{
					$("#addinvoice").show();
				}
			}
			function togglediv() {
				$("#personage").css({"border": ""});
				$("#invoice_title").css({"border": "2px solid #e4393c"});
				$('#adddiv').toggle();
				$("#ratepaying").toggle();
				if (!$('#adddiv').is(":hidden")) {
					$("#addinvoice").hide();
				}else{
					$("#addinvoice").show();
				}
			}

			// 校验组织机构代码
			function orgcodevalidate(value){
				if(value!=""){
					var part1=value.substring(0,8);
					var part2=value.substring(value.length-1,1);
					var ws = [3, 7, 9, 10, 5, 8, 4, 2];
					var str = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
					var reg = /^([0-9A-Z]){8}$/;
					if (!reg.test(part1))
					{
						return true
					}
					var sum = 0;
					for (var i = 0; i< 8; i++)
					{
						sum += str.indexOf(part1.charAt(i)) * ws[i];
					}
					var C9 = 11 - (sum % 11);
					var YC9=part2+'';
					if (C9 == 11) {
						C9 = '0';
					} else if (C9 == 10) {
						C9 = 'X' ;
					} else {
						C9 = C9+'';
					}
					return YC9!=C9;
				}
			}
			// 校验地址码
			function checkAddressCode(addressCode){
				var provinceAndCitys={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",
					31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",
					45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",
					65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};
				var check = /^[1-9]\d{5}$/.test(addressCode);
				if(!check) return false;
				if(provinceAndCitys[parseInt(addressCode.substring(0,2))]){
					return true;
				}else{
					return false;
				}

			}
			//保存发票
			function save_invoice() {
				var invoice_title = $("#personage").val();
				var invoice_desc = $("#invoice_desc").val();
				var data = {invoice_title: "个人", invoice_desc: invoice_desc};
				if (!$('#ratepaying').is(":hidden")&&invoice_desc != "不开发票") {
					invoice_title = $("#invoice_title").val();
					if (invoice_title.length == 0) {
						layer.msg("发票抬头不能为空", {icon: 2});
						return false;
					}
					var taxpayer = $("#taxpayer").val();
//                    if (taxpayer.length > 0) {
					if ((taxpayer.length ==15)||(taxpayer.length ==18)||(taxpayer.length ==20)) {
					}else{
						layer.msg("请输入正确的纳税人识别号！", {icon: 2});
						return;
					}
					var addressCode = taxpayer.substring(0,6);
					// 校验地址码
					var check = checkAddressCode(addressCode);
					if(!check) {
						layer.msg("请输入正确的纳税人识别号(地址码)！", {icon: 2});
						return;
					}
					// 校验组织机构代码
					var orgCode = taxpayer.substring(6,9);
					check = orgcodevalidate(orgCode);
					if(!check) {
						layer.msg("请输入正确的纳税人识别号(组织机构代码) ！", {icon: 2});
						return;
					}
					$('#order_taxpayer').val(taxpayer);
//                    }
					$('#order_invoice_title').val(invoice_title);
					var data = {invoice_title: invoice_title, taxpayer: taxpayer, invoice_desc: invoice_desc};
				}else{
					$('#order_taxpayer').val("");
					$('#order_invoice_title').val("个人");
//                    $("#invoice_title").val("个人");
				}
				if (invoice_desc == "不开发票") {
					$('#order_invoice_title').val("");
					$('#order_taxpayer').val("");
					$("#span1,#span2,#span3").hide();
					$("#span4").show();
				}else{
					$('#span2').text($('#order_invoice_title').val());
					$('#span3').text(invoice_desc);
					$("#span4").hide();
					$("#span1,#span2,#span3").show();
				}
				$.post("<?php echo U('Cart/save_invoice'); ?>", data, function(json) {
					var data = eval("(" + json + ")");
				});
//                 window.location.reload();
				return true;
			}

			$(document).ready(function(){
				ajax_address();
				self_motion_load();
			});
			;(function($){
				$.fn.extend({
					donetyping: function(callback,timeout){
						timeout = timeout || 1e3;
						var timeoutReference,
								doneTyping = function(el){
									if (!timeoutReference) return;
									timeoutReference = null;
									callback.call(el);
								};
						return this.each(function(i,el){
							var $el = $(el);
							$el.is(':input') && $el.on('keyup keypress',function(e){
								if (e.type=='keyup' && e.keyCode!=8) return;
								if (timeoutReference) clearTimeout(timeoutReference);
								timeoutReference = setTimeout(function(){
									doneTyping(el);
								}, timeout);
							}).on('blur',function(){
								doneTyping(el);
							});
						});
					}
				});
			})(jQuery);
			//积分选项框点击事件
			$(function(){
				$(document).on("click", '#user_money_checkbox', function (e) {
					if($(this).is(':checked')){
						var input = $(this).parent().find("input[type='text']");
						input.removeAttr('disabled');
						$("input[name='user_money']").attr('value',input.val());
						if(input.val()!=''){
							ajax_order_price();
						}
					}else{
						$(this).parent().find("input[type='text']").attr('disabled','disabled');
					}
				})
			})
			//积分输入框keyUp事件
			$(function(){
				$('#pay_points').donetyping(function(){
					if($(this).parent().find("input[type='checkbox']").is(':checked')){
						$("input[name='pay_points']").attr('value', $(this).val());
						ajax_order_price();
					}
				},500);
				$('#user_money').donetyping(function(){
					if($(this).parent().find("input[type='checkbox']").is(':checked')){
						$("input[name='user_money']").attr('value', $(this).val());
						ajax_order_price();
					}
				},500);
			})
			//点击收货地址
			$(function(){
				$(document).on("click", '.addressItem .item_select_t', function (e) {
					//如果本来没被选中
					if(!$(this).hasClass('curtr')){
						$('.addressItem').find('.item_select_t').each(function () {
							$(this).removeClass('curtr');
						})
						$(this).addClass('curtr');
						initAddress();
					}
				})
			})
			//支付方式更多
			$(function(){
				$('.lastist').click(function(){
					if($(this).hasClass('addlastist')){
						$(this).removeClass('addlastist');
						$(this).find('span').text('更多');
						$(this).parents('.payment-list').find('.solwpah').removeClass('moreshow');
					}else{
						$(this).addClass('addlastist');
						$(this).find('span').text('收起');
						$(this).parents('.payment-list').find('.solwpah').addClass('moreshow');
					}
				})
			})
			//对应商品
			$(function(){
				$(document).on('click','.hover-y',function(){
					if($(this).find('.pairgoods').is(":hidden")){
						$(this).find('.pairgoods').show();
					}else{
						$(this).find('.pairgoods').hide();
					}

				});
			})


			//使用优惠券导航切换
			$(function(){
				$('.usewhilejs').click(function(){
					$('.step-cont-virtual').toggle();
					$(this).toggleClass('edg180');
					if($(this).hasClass('edg180')){
						$('.hehr').hide();
					}else{
						$('.hehr').show();
					}
				})
				$('.order-virtual-tabs li').click(function(){
					$(this).addClass('curr').siblings().removeClass('curr');
					var le = $('.order-virtual-tabs li').index(this);
					$('.contac-virtuar').eq(le).show().siblings('.contac-virtuar').hide();
				})
			})

			/**
			 * ajax 获取当前用户的收货地址列表
			 */
			function ajax_address() {
				$.ajax({
					url: "<?php echo U('Home/Cart/ajaxAddress'); ?>",//+tab,
					success: function (data) {
						$("#ajax_address").empty().append(data);
						if (data != '') {
							initAddress();
						}
					}
				});
			}
			//设置收货地址
			function initAddress(){
				var address_item = $('.addressItem').find('.curtr').parents('.addressItem');
				var address_id = address_item.attr('data-address-id');
				var address_name = address_item.find('.addr-name').attr('title');
				var address_tel = address_item.find('.addr-tel').attr('title');

				$('#address_info').html(address_item.find('.addr-info').attr('title'));
				$('#address_user').html(address_name + ' '+address_tel);
				$("input[name='address_id']").attr('value',address_id);
				if(address_item.length == 0){
					$('#addNewAddress').trigger('click');
				}else{
					ajax_order_price(); // 计算订单价钱
				}
			}
			/**
			 * 获取订单价格
 			 */
			function ajax_order_price() {
				$.ajax({
					type : "POST",
					url:"<?php echo U('Home/Cart/integral2'); ?>",
					dataType:'json',
					data: $('#cart2_form').serialize(),
					success: function(data){
						if (data.status != 1) {
							layer.msg(data.msg, {
								icon: 2,   // 成功图标
								time: 1000 //2秒关闭（如果不配置，默认是3秒）
							});
							// 登录超时
							if (data.status == -100){
								location.href = "<?php echo U('Home/User/login'); ?>";
							}
							// 显示商品有货无货配送
							for (v in data.result.goods_shipping){
								if(data.result.goods_shipping[v] != '' && data.result.goods_shipping[v] != null){
									if(data.result.goods_shipping[v].status == 1){
										goods_shipping(v,true);
									}else{
										console.log(v);
										goods_shipping(v,false);
									}
								}
							}
							return false;
						}
						// console.log(data);
						$("#postFee").text('￥'+data.result.shipping_price); // 物流费
						$("#balance").text('-￥'+data.result.user_money);// 余额
						$("#pointsFee").text('-￥'+data.result.integral_money);// 积分支付
						$("#pay_points").val(data.result.pay_points);// 积分支付
						$("#payables").text('￥'+data.result.order_amount);// 应付
					}
				});
			}

			// 提交订单
			var ajax_return_status = 1; // 标识ajax 请求是否已经回来 可以进行下一次请求
			function submit_order() {
				$('.user_note_txt').each(function () {
					$("input[name='user_note']").attr('value',$(this).val());
				})
				if (ajax_return_status == 0) {
					return false;
				}
				ajax_return_status = 0;
				$.ajax({
					type: "POST",
					url: "<?php echo U('Home/Cart/integral2'); ?>",//+tab,
					data: $('#cart2_form').serialize() + "&act=submit_order",//
					dataType: "json",
					success: function (data) {

						// 上一次ajax 已经返回, 可以进行下一次 ajax请
						ajax_return_status = 1;

						// 当前人数过多 排队中
						if (data.status == -99) {
							$('.mask-filter-div').show();
							$('.rabbit').show();
							setTimeout("submit_order()", 5000);
							return false;
						} else {
							// 隐藏排队
							$('.mask-filter-div').hide();
							$('.rabbit').hide();
						}

						if (data.status != 1) {
							layer.msg(data.msg, {
								icon: 2,
								time: 1000 //2秒关闭（如果不配置，默认是3秒）
							});
							// 登录超时
							if (data.status == -100){
								location.href = "<?php echo U('Home/User/login'); ?>";
							}
							return false;
						}
						layer.msg('订单提交成功!', {
							icon: 1,   // 成功图标
							time: 2000 //2秒关闭（如果不配置，默认是3秒）
						}, function () { // 关闭后执行的函数
							location.href = "/index.php?m=Home&c=Cart&a=cart4&order_id=" + data.result; // 跳转到结算页
						});
					}
				});
			}
			//发票弹窗
			function invoice_dialog(){
				var dh = $(document).height();
				var dw = $(document).width();
				$('.ui-mask').height(dh).width(dw);
				$('.ui-dialog').show();
				$('.ui-mask').show();
				self_motion_load();
			}
			//关闭弹窗
			$(function(){
				$('.ui-dialog-close').click(function(){
					$('.ui-dialog').hide();
					$('.ui-mask').hide()
				})
			})
            $(document).on('keyup','#payPwd',function(){
				var payPwd = md5($("input[name='auth_code']").val() + this.value);
				$('input[name="payPwd"]').val(payPwd);
            })
            //收货人信息
            $(function() {
                $(document).on("click", '.addr-switch', function(e) {
                    if ($(this).hasClass('switch-on')) {
                        $(this).removeClass('switch-on');
                        $(this).find('span').text('更多地址');
                        $('.consignee-list').css('height', '42px');
                        var addressItem = $('.consignee-list').find('.curtr').parents('.addressItem');
                        $('.consignee-list').find('ul').prepend(addressItem.clone(true));
                        addressItem.remove();
                    } else {
                        $(this).addClass('switch-on');
                        $(this).find('span').text('收起地址');
                        $('.consignee-list').css('height', 'inherit');
                    }
                })
            })
			//设置商品有货无货
			function goods_shipping(goods_id,is_have){
				if(is_have == true){
					$('#goods_shipping_img_'+goods_id).hide();
					$('goods_shipping_title_'+goods_id).removeClass('red').text('有货');
				}else{
					$('#goods_shipping_img_'+goods_id).show();
					$('#goods_shipping_title_'+goods_id).addClass('red').text('无货');
				}
			}

			function self_motion_load() {
				$.get("<?php echo U('Cart/invoice'); ?>", function(json) {
					var data = eval("(" + json + ")");
					if (data.status > 0) {
						if(data.result.invoice_title!="个人"){
							$('#order_invoice_title').val(data.result.invoice_title);
							$('#order_taxpayer').val(data.result.taxpayer);
							$('#invoice_title').val(data.result.invoice_title);
							$("#invoice_desc").val(data.result.invoice_desc);
							$("#taxpayer").val(data.result.taxpayer);
							$('#adddiv').show();
							$("#ratepaying").show();
						}

						if (data.result.invoice_desc == "不开发票") {
							$('#order_invoice_title').val("");
							$('#order_taxpayer').val("");
							$("#span1,#span2,#span3").hide();
							$("#span4").show();
						}else{
							if(data.result.invoice_title!= ""){
								$('#order_invoice_title').val(data.result.invoice_title);
								$('#order_taxpayer').val(data.result.taxpayer);
								$('#invoice_desc').val(data.result.invoice_desc);
								$('#span2').text(data.result.invoice_title);
								$('#span3').text(data.result.invoice_desc);
								$("#span4").hide();
								$("#span1,#span2,#span3").show();
							}
							$("#invoice_title").css({"border": "2px solid #e4393c"});
							$("#personage").css({"border": ""});
							$("#no_invoice").attr("class","item_select_t");
							$("#detail_invoice").attr("class","item_select_t curtr");
						}
						if (!$('#adddiv').is(":hidden")) {
							$("#addinvoice").hide();
						}else{
							$("#addinvoice").show();
						}
					}else{
						$('#order_invoice_title').val("");
						$('#order_taxpayer').val("");
						$("#span1,#span2,#span3").hide();
						$("#span4").show();
					}
				});
			}
			/**
			 * 获取用户自提点和推荐自提点
			 * @param type 1：用户自提点 ，0：用户自提点和推荐自提点
			 * @param province_id 省
			 * @param city_id 市
			 * @param district_id 区
			 */
			function ajax_pickup(province_id, city_id, district_id,show) {
				$.ajax({
					type: 'GET',
					url: "<?php echo U('Home/Cart/ajaxPickup'); ?>",//+tab,
					data: {province_id: province_id, city_id: city_id, district_id: district_id,show:show},
					success: function (data) {
						$("#ajax_pickup").html('').append(data);
					}
				});
			}
            //更换自提点
            function replace_pickup(province_id, city_id, district_id) {
                var url = "/index.php?m=Home&c=Cart&a=replace_pickup&call_back=call_back_pickup&province_id=" + province_id + "&city_id=" + city_id + "&district_id=" + district_id;
                layer.open({
                    type: 2,
                    title: '添加收货地址',
                    shadeClose: true,
                    shade: 0.8,
                    area: ['880px', '580px'],
                    content: url,
                });
            }
            // 添加自提点地址回调函数
            function call_back_pickup(province_id, city_id, district_id) {
                layer.closeAll(); // 关闭窗口
                ajax_pickup(province_id, city_id, district_id, 1);
            }
		</script>
	</body>
</html>