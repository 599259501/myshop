 
<style type="text/css"> 
.container, .container *{margin:0; padding:0;}

.container{width:100%; height:419px; overflow:hidden;position:relative;}

.slider{position:absolute; width:100%; height:419px;}
.slider li , .slider li a{list-style:none; float:left;width:100%; height:419px;}
.slider img{width:100%; height:419px; display:block;}

.slider2{width:2000px;}
.slider2 li{float:left;}

.num{position:absolute; right:5px; bottom:5px; width:800px; margin:0 auto;}
.num li{
	float: left;
	color: #fa0;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #8ab700;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #8ab700;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
  <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_91579300_1462457216');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_91579300_1462457216']):
        $this->_foreach['myflash']['iteration']++;
?>
      <li style="background:url(<?php echo $this->_var['flash_0_91579300_1462457216']['img_src']; ?>) center 0 no-repeat; position:relative;<?php if (($this->_foreach['myflash']['iteration'] - 1) == 0): ?>display:black;<?php endif; ?>"><a href="<?php echo $this->_var['flash_0_91579300_1462457216']['link_src']; ?>" target="_blank"></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  </ul>
  <ul class="num" id="idNum">
     <?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_91679300_1462457216');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_91679300_1462457216']):
        $this->_foreach['no']['iteration']++;
?>
     <li <?php if (($this->_foreach['myflash']['iteration'] - 1) == 0): ?>class="on"<?php endif; ?>>
     
    <?php echo $this->_foreach['no']['iteration']; ?>
    </li> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
</div>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.min.js')); ?>
<script type="text/javascript">
 var index=0;
 var count=<?php echo $this->_var['flash_count']; ?>;
 setInterval(changeStyle,2000);
 function changeStyle(){
  index++;
  $("#idSlider li").css('display','none');
  $("#idNum li").removeClass('on');
  $("#idSlider li:eq("+index%count+")").css('display','block');
  $("#idNum li:eq("+index%count+")").attr('class','on');
 }
</script>
 <div class="blank5"></div>
<div class="blank"></div>