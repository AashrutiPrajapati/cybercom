<?php
    $collection = $this->getCollection();
    $actions = $this->getActions();
    $buttons = $this->getButtons();
    $columns = $this->getColumns();
?>

<form method = "POST" action = "<?php echo $this->getUrl('filter'); ?>">
<h3 class="text-center mt-5"><?= $this->getTitle() ?></h3>
    <div id="container-fluid" style="margin-left:5% ;margin-bottom:20px">
        <?php if($buttons): ?>
            <?php foreach ($buttons as $key => $button): ?>
                <a class="btn btn-primary" href="<?php echo $this->getButtonUrl($button['method']); ?>"><?= $button['label']?></a>
            <?php endforeach; ?>
        <?php endif; ?>

            <input type="submit" value="Apply Filter" class="btn btn-primary m-3" >

            <table class="table table-bordered" style="width:95%">
                <thead>
                    <tr class="bg-dark text-white text-center">
                        <?php if($columns): ?>
                            <?php foreach ($columns as $key => $column): ?>
                                <th><?= $column['label'] ?></th>
                            <?php endforeach; ?>
                            <th colspan="2">Action</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if($columns): ?>
                            <?php foreach($columns as $key => $column): ?>
                                <td>
                                    <input type="text" size=7 name="filter[<?php echo $column['type'];?>][<?php echo $column['field'];?>]">
                                </td>
                            <?php endforeach; ?>
                            <td></td>
                        <?php endif; ?>
                    </tr>
                    <?php if(!$collection): ?>
                        <tr>
                            <td>Data Not Found!!!</td>
                        </tr>
                    <?php else : ?> 
                    <?php foreach ($collection->getData() as $value) { ?>
                        <tr>
                        <?php if($columns): ?>
                            <?php foreach ($columns as $key => $column): ?>
                                <td><?= $this->getFieldValue($value, $column['field']) ?></td>
                            <?php endforeach; ?>
                        <?php endif; ?>
                            <td>
                                <?php if($actions): ?>
                                    <?php foreach ($actions as $key => $action): ?>
                                        <?php if($action['ajax']):?>
                                            <a href="javascript:void(0)" onclick="<?=$this->getMethodUrl($value,$action['method']);?>" class="btn btn-success" style="margin: 7px"><?=$action['label']?></a>
                                        <?php else: ?>
                                            <a href="<?php echo $this->getMethodUrl($value,$action['method'])?>" class="btn btn-success" style="margin: 7px"><?= $action['label']?></a>
                                        <?php endif;?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php } endif; ?>

                </tbody>
            </table>
        <?php \Mage::getModel('Model\Admin\Filter')->clearFilters(); ?>
    </div>
</form>
    

