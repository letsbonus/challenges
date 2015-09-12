<?php
echo $this->Html->script(array(
    'jquery-ui-1.10.3.custom.min',
    'bootbox.min',
    'tablesort',
    'sorts/tablesort.date',
    'sorts/tablesort.dotsep',
    'sorts/tablesort.filesize',
    'sorts/tablesort.numeric.js',
//    'jquery.chosen.min',
//    'pages/form-elements',
), array('inline' => false));

echo $this->Html->css(array(
    'table'
), array('inline' => true));

echo $this->element('users_admin');?>
<br />
<table id='sort' class="sort">
    <tr>
        
    </tr>
<?php
if (!empty($products)) { ?>
<?php
	foreach ($products as $product): ?>
		<tr><td><strong><?php echo $product['Merchant']['name']?>&nbsp;</strong></td></tr>
		<tr>
	        <th>Title</th>
	        <th>Description</th>
	        <th>Price</th>
	        <th>Init Date</th>
	        <th>Expiry Date</th>
    	</tr>
		<?php
		foreach ($product['Product'] as $prod) :?>
	    <tr>
	        <td><?php echo h($prod['title']); ?>&nbsp;</td>
	        <td><?php echo h(strip_tags($prod['description'])); ?>&nbsp;</td>
	        <td><?php echo h($prod['price']); ?> €&nbsp;</td>
	        <td><?php echo h($prod['init_date']); ?> &nbsp;</td>
	        <td><?php echo h($prod['expiry_date']); ?> &nbsp;</td>
	    </tr>
	    <?php endforeach;  ?>
	<?php endforeach;  ?>
	</table>
	<div class="col-md-3 pull-right col-md-offset-9">
	    <ul class="pagination">
	        <li class="prev disabled">
	            <?php echo $this->Paginator->prev('← '.__('Back'), array(), null, array('class'=>'disabled'));?>
	        </li>
	        <?php
	        if ($this->Paginator->numbers()) {
	            $links = explode('|',$this->Paginator->numbers());
	            foreach ($links as $k => $num) {
	                $num = str_replace('<span>','',$num);
	                $active = (strpos($num,'current') > 1) ? 'active' : '';
	                $num = str_replace('<span class="current">','',$num);
	                $num = str_replace('</span','',$num);
	                $num = str_replace('> ','',$num);
	                $num = str_replace('>>','>',$num);
	                if (strlen($num) < 6) {
	                    $num = str_replace('>','',$num);
	                }
	                if ($active == 'active') { ?>
	                    <li class="active"><a href="#"><?php echo $num?></a></li>
	                <?php
	                } else {
	                ?>
	                <li><?php echo $num?></li>
	            <?php }}
	        } else { ?>
	            <li class="active"><a href="#">1</a></li>
	        <?php }
	        ?>

	        <li class="next disabled">
	            <?php echo $this->Paginator->next(__('Next') . ' →', array(), null, array('class' => 'disabled'));?>
	        </li>
	    </ul>
	</div>
<?php 
} else { ?>
	<tr><td>No products added</a></td></tr>
	</table>
<?php }?>	


