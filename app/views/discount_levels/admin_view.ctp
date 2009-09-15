<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Discount Level</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$DiscountLevel['id'])); 
	echo $html->tableCells(array('user_type',$DiscountLevel['user_type'])); 
	echo $html->tableCells(array('max_articles',$DiscountLevel['max_articles'])); 
	echo $html->tableCells(array('discount',$DiscountLevel['discount'])); 
?> 
</table>
