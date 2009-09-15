<?php /* SVN FILE: $Id: view.ctp 21 2008-03-13 23:32:20Z andy $ */ ?>
<h2>Content Site</h2>
<table>
<?php 
	extract($data); 
	echo $html->tableCells(array('id',$ContentSite['id'])); 
	echo $html->tableCells(array('Customer',$Customer?$html->link($Customer['id'], array('controller' => 'customers', 'action' => 'view', $ContentSite['customer_id'])):'')); 
	echo $html->tableCells(array('title',$ContentSite['title'])); 
	echo $html->tableCells(array('site_type',$ContentSite['site_type'])); 
	echo $html->tableCells(array('auth_key',$ContentSite['auth_key'])); 
	echo $html->tableCells(array('created',$ContentSite['created'])); 
	echo $html->tableCells(array('modified',$ContentSite['modified'])); 
?> 
</table>
