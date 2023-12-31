<?php
echo $this->Html->css(array('jquery-ui', 'footable.core.min'), null, array('inline' => false));
echo $this->Html->script(array('jquery-ui', 'footable'), array('inline' => false));

$this->Html->addCrumb(__('Plugins Manager'), '/admin/plugins');
$this->Html->addCrumb(__('mooApp Plugins'), array('controller' => 'moo_app_plugins', 'action' => 'admin_index'));

$this->startIfEmpty('sidebar-menu');
echo $this->element('admin/adminnav', array('cmenu' => 'mooApp'));
$this->end();
?>
<?php
	foreach ($settings as $key=>$setting)
	{
		if ($setting['Setting']['name'] == 'mooapp_logo_popup')
		{
			unset($settings[$key]);
		}
	}
?>
<div class="portlet-body form">
    <div class=" portlet-tabs">
        <div class="tabbable tabbable-custom boxless tabbable-reversed">
            <?php echo $this->Moo->renderMenu('MooApp', 'Settings');?>
            <div class="row" style="padding-top: 10px;">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="portlet_tab1">
                            <?php echo $this->element('admin/setting',array('settings'=>$settings));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>