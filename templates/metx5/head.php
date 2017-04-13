<!--<?php
$methtml_head  = metlabel_html5();//基于Html5
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表）
echo <<<EOT
-->
{$methtml_head}
<body>
    <header data-waypointsok="{$lang_waypointsok}">
		<div class="tem_inner tem_head">
<!--
EOT;
$h=$classnow==10001?'1':'2';
$navnow = $classnow==10001?'class="navdown"':'';
if($met_logo){
echo <<<EOT
-->
			<h{$h}>
				<a href="{$index_url}" title="{$met_webname}">
					<img src="{$met_logo}" alt="{$met_webname}" style="margin:{$lang_LogoTop}px 0px 0px {$lang_LogoLeft}px;" title="{$met_webname}" />
				</a>
			</h{$h}>
<!--
EOT;
}
echo <<<EOT
-->
			<nav>
<ul>
	<li><a href="{$index_url}" title="{$lang_home}" {$navnow}>{$lang_home}</a></li>
<!--
EOT;
$none = '';
foreach($nav_list as $key=>$val){
$navnow = $val[id]==$navdown?'class="navdown"':'';
echo <<<EOT
-->
	<li>
		<a href="{$val[url]}" {$val[new_windows]} title="{$val[name]}" {$navnow}>{$val[name]}</a>
<!--
EOT;
if(count($nav_list2[$val[id]])&&$lang_nav_select_open){
$dtok = 1;
echo <<<EOT
-->
		<dl>
			<dd>
<!--
EOT;
foreach($nav_list2[$val[id]] as $key=>$val2){
if($val[module]==3&&$lang_nav_select_pai){
$dtok = 0;
echo <<<EOT
-->	
			<div>
				<h3><a href="{$val2[url]}" {$val2[new_windows]} title="{$val2[name]}">{$val2[name]}</a></h3>
<!--
EOT;
foreach($nav_list3[$val2[id]] as $key=>$val3){
echo <<<EOT
-->
				<p><a href="{$val3[url]}" {$val3[new_windows]} title="{$val3[name]}">{$val3[name]}</a></p>
<!--
EOT;
}
echo <<<EOT
-->
			</div>
<!--
EOT;
}else{
echo <<<EOT
-->
			<a href="{$val2[url]}" {$val2[new_windows]} title="{$val2[name]}">{$val2[name]}</a>
<!--
EOT;
}
}
$dian = $classnow==10001?'../':'';
$val[columnimg]="{$thumb_src}dir={$dian}{$val[columnimg]}&x=380&y=200";
echo <<<EOT
-->
			<div class="met_clear"></div>
			<i class="fa fa-caret-up"></i>
			</dd>
<!--
EOT;
if($dtok&&$lang_nav_select_img){
echo <<<EOT
-->
			<dt>
				<img src="{$val[columnimg]}" alt="{$val[name]}" />
			</dt>
<!--
EOT;
}
echo <<<EOT
-->
		</dl>
<!--
EOT;
}
echo <<<EOT
-->
	</li>
<!--
EOT;
}
echo <<<EOT
-->
</ul>
			</nav>
		</div>

	</header>
	<div class="tem_banner">
<!--
EOT;
if($met_flasharray[$classnow][type]==1){
echo <<<EOT
-->
		<ul class="slides" style="height:{$met_flasharray[$classnow][y]}px;"">
<!--
EOT;
foreach($met_flashimg as $key=>$val){
$val[html] = $val[img_link]?"<a href=\"{$val[img_link]}\" title=\"{$val[img_title]}\"></a>":'';
echo <<<EOT
-->
			<li style="background:url({$val[img_path]}) no-repeat center center; height:{$met_flasharray[$classnow][y]}px;">{$val[html]}</li>
<!--
EOT;
}
echo <<<EOT
-->
		</ul>
<!--
EOT;
}else{
$methtml_flash=metlabel_flash();
echo <<<EOT
-->	
		{$methtml_flash}
<!--
EOT;
}
echo <<<EOT
-->
	</div>
<!--
EOT;
?>