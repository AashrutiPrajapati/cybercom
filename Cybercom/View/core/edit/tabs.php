<?php
$tabs = $this->getTabs();
foreach ($tabs as $key => $tab) {?>

<!-- <a class="btn btn-primary" href = '<?php// echo $this->getUrl(null,null,['tab' => $key]);?>'> <?php //echo $tab['label']; ?></a> -->
<button type="button" onclick="object.setUrl('<?php echo $this->getUrl(null,null,['tab' => $key]);?>').load()" class="btn btn-primary"><?php echo $tab['label']; ?></button>
<br><br>

<?php } ?>
