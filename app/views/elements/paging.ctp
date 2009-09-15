<?php /* SVN FILE: $Id: paging.ctp 18 2008-03-07 12:56:09Z andy $ */ ?>
<div id='navigation'>
<?php 
echo $paginator->prev('Previous', array(), null);
echo $paginator->numbers(array('separator' => ', '));
echo $paginator->next('Next', array(), null); 
?>
</div>
