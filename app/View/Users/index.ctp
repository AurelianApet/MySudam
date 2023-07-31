
<script>
    window.onload = function ()
    {
       //onCatData();
    }

    function onDogData()
    {
        <?php
        if ( !empty( $values ) || !empty($online_filter) ):
        ?>
            var data = 'Loading...';
        <?php
        else:
            $val = json_encode($this->element( 'lists/users_list1', array( 'more_url' => '/users/ajax_browse/dog/2' ) ));
        ?>
            var data = <?=$val?>;
        <?php
        endif;
        ?>

        $("#list-content").html(data);
    }

    function onCatData()
    {
        <?php
        if ( !empty( $values ) || !empty($online_filter) ):
        ?>
            var data = 'Loading...';
        <?php
        else:
            $val = json_encode($this->element( 'lists/users_list2', array( 'more_url' => '/users/ajax_browse/cat/2' ) ));
        ?>
            var data = <?=$val?>;
        <?php
        endif;
        ?>

        $("#list-content").html(data);
    }
</script>
<?php if($this->request->is('ajax')): ?>
<script type="text/javascript">
    require(["jquery","mooUser"], function($,mooUser) {
        mooUser.initOnUserIndex();
        <?php if ( !empty( $values ) || !empty($online_filter) ): ?>
        $('#searchPeople').trigger('click');
        <?php endif; ?>
    });
</script>
<?php else: ?>
<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true, 'requires'=>array('jquery','mooUser'), 'object' => array('$', 'mooUser'))); ?>
mooUser.initOnUserIndex();
<?php if ( !empty( $values ) || !empty($online_filter) ): ?>
$('#searchPeople').trigger('click');
<?php endif; ?>
<?php $this->Html->scriptEnd(); ?>
<?php endif; ?>

<?php $this->setNotEmpty('west');?>
    <div class="bar-content">
        <div class="content_center full_content p_m_10">
            <div class="mo_breadcrumb">
                <h1><?php echo __('People')?></h1>
                <div>
                    <table style="width: 395px;">
                        <tbody><tr>
                            <td>
                                <table style="width: 100%;">
                                    <tbody><tr>
                                        <td style="width:50%">
                                            <input type="button" value="강아지" style="width: 100%;" onclick="onDogData();">
                                        </td>
                                        <td>
                                            <input type="button" value="고양이" style="width: 100%;" onclick="onCatData();">
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        </tbody>
                     </table>
                </div>
            </div>


            <ul class="users_list" id="list-content">
                <?php
                    if ( !empty( $values ) || !empty($online_filter) )
                            echo __('Loading...');
                    else
                            echo $this->element( 'lists/users_list1', array( 'more_url' => '/users/ajax_browse/dog/2' ) );
                ?>
            </ul>
            <div class="clear"></div>

        </div>
    </div>

