<script src="<?php echo $this->webroot;?>js/calendar.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/calendar.css">
<script>
    function checkCalendar() {
        $("#ani_birthday").attr("readonly", true);
        showCal('ani_birthday');
    }

    var ani_gender = 0;
    function onSelGender(id)
    {
        if(id == 1)
        {
            $("#gender1").attr('style', 'width:45%;color:red');
            $("#gender2").attr('style', 'width:45%;color:black');
        }
        else if(id == 2)
        {
            $("#gender2").attr('style', 'width:45%;color:red');
            $("#gender1").attr('style', 'width:45%;color:black');
        }
        ani_gender = id;
    }

    var ani_type = 0;
    var ani_gender = 0;
    ani_type = <?=$ani_type?>;
    ani_gender = <?=$ani_gender?>;

    setTimeout(function() {
        if( ani_type == 1)
        {
            onDog();
        }
        else if(ani_type == 2){
            onCat();
        }
        else
        {
            onNone();
        }

        if(ani_gender == 1)
        {
            onSelGender(1);
        }
        else
        {
            onSelGender(2);
        }
        $("#ani_style").val("<?=$ani_style?>");

        $("#ani_birthday").val("<?=$ani_birthday?>");

    }, 1000);

    function onDog()
    {
        ani_type = 1;
        $("#sel_dog").attr('style', 'width:100%;color:red');
        $("#sel_cat").attr('style', 'width:100%;color:black');
        $("#sel_none").attr('style', 'width:100%;color:black');
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Animals/getDogDataList/',
            type: "post",
            async: false,
            success: function (data) {
                $("#ani_style").html("");
                $("#ani_style").append("<option>품종을 선택해주세요</option>");
                $("#ani_style").append(data);
            },
            error: function (data) {
            }
        });
    }

    function onCat()
    {
        ani_type = 2;
        $("#sel_cat").attr('style', 'width:100%;color:red');
        $("#sel_dog").attr('style', 'width:100%;color:black');
        $("#sel_none").attr('style', 'width:100%;color:black');
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Animals/getCatDataList/',
            type: "post",
            async: false,
            success: function (data) {
                $("#ani_style").html("");
                $("#ani_style").append("<option>품종을 선택해주세요</option>");
                $("#ani_style").append(data);
            },
            error: function (data) {
            }
        });
    }

    function onNone()
    {
        ani_type = 0;
        $("#sel_none").attr('style', 'width:100%;color:red');
        $("#sel_cat").attr('style', 'width:100%;color:black');
        $("#sel_dog").attr('style', 'width:100%;color:black');
        $("#ani_style").html("");
        $("#ani_style").append("<option>품종을 선택해주세요</option>");
    }

    function saveProfile()
    {
        var data = new FormData();
        data.append("ani_name", $("#ani_name").val());
        data.append("ani_type", ani_type);
        data.append("ani_style", $('#ani_style').val());
        data.append("ani_gender", ani_gender);
        data.append("ani_birthday", $("#ani_birthday").val());
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>users/updateProfile',
            dataType: 'text',
            cache: false,
            data:data,
            type: "post",
            processData: false,
            contentType: false,
            async: false,
            success: function (data) {
                document.location = "<?php echo $this->Html->url( '/', true ); ?>";
            },
            error: function (data) {
            }
        });
    }

</script>

<?php $this->Html->scriptStart(array('inline' => false, 'domReady' => true,'requires'=>array('jquery', 'mooUser'), 'object' => array('$', 'mooUser'))); ?>
    mooUser.initOnProfilePicture();
<?php $this->Html->scriptEnd(); ?>

<div class="bar-content full_content p_m_10">
    <div class="content_center">
        <div class="mo_breadcrumb">
            <h1> <?php echo  __('Profile Picture') ?></h1>
        </div>
        <div class="ava_content">
            <div id="avatar_wrapper" style="vertical-align: top;margin: 0 10px 10px 0">
                <img style="width:250px;height:250px;" src="<?php echo $this->Moo->getImageUrl(array('User' => $cuser), array('prefix' => '600'))?>"  id="av-img2">
            </div>

            <div class="Metronic-alerts alert alert-warning fade in ava-upload" style="margin-bottom: 20px;"><?php echo __("Optimal size 200x200px"); ?></div>

            <div id="select-0" class="ava-upload"></div>

            <div>
            <table style="width: 100%;">
            	<tbody>
            	<!--
            	<tr><td style="width: 100%;"><center>
                    <input type="file" id="ani_photo" value="photo" onchange="readURL(this);">
                    <img id="blah" src="/uploads/users/avatar/<?=$uid?>/<?=$ani_avatar?>" alt="your image" style="width:70px;" />
                </center></td></tr>
                -->
                <tr style="height:35px;"><td>
                <center>
                    <?=$user_email?>
                </center>
                    </td></tr>
            	<tr style="height:35px;"><td>
                <center>
                    <input id="ani_name" type="text" placeholder="이름을 입력해 주세요" value="<?=$ani_name?>">
                </center>
                    </td></tr>
                <tr style="height:35px;">
                <td>
                    <table style="width:100%;">
                        <tbody><tr>
                    <td style="width: 30%;">
                        <input type="button" value="강아지" id="sel_dog" onclick="onDog()" style="width: 100%;">
                    </td>
                    <td style="width: 30%;padding-left: 20px;">
                        <input type="button" value="고양이" id="sel_cat" onclick="onCat()" style="width: 100%;">
                    </td>
                    <td style="width: 30%;padding-left: 20px;">
                        <input type="button" value="기타" id="sel_none" onclick="onNone()" style="width: 100%;">
                    </td>
                        </tr>
                    </tbody></table>
                </td>
                </tr>
                <tr style="height:35px;">
                    <td>
                        <select id="ani_style">
                            <option>품종을 선택해주세요</option>
                        </select>
                    </td>
                </tr>
                <tr style="height:35px;">
                    <td>
                        <input onclick="checkCalendar()" id="ani_birthday" style="font-size:10pt; color:#42485a; width:44%;margin-left: 2px;" placeholder="생일을 지정해주세요.">
                    </td>
                </tr>
                <tr style="height:35px;">
                <td><center>
                    <table style="width: 100%;">
                        <tbody><tr>
                    <td style="width: 250px;padding-left:48px;">
                        <input type="button" id="gender2" value="암" style="width: 45%;" onclick="onSelGender(2)">
                    </td>
                    <td style="width: 250px;padding-left:60px;">
                        <input type="button" id="gender1" value="수" style="width: 45%;" onclick="onSelGender(1)">
                    </td>
                        </tr>
                        </tbody></table></center>
                </td>
                </tr>
            </tbody></table>

            </div>
            <div class="">
<!--
                <button id="save-avatar" data-url="<?php echo $this->Moo->getProfileUrl( $cuser )?>" type="button" class="btn btn-action save-avatar">
                    <span aria-hidden="true"><?php echo  __('Save') ?></span>
                </button>
                <a id="submit-avatar" href="<?php echo $this->request->base; ?>/users/view/<?php echo $cuser['id']; ?>"; type="button" class="btn btn-action submit-avatar hide">
                    <span aria-hidden="true"><?php echo  __('Submit') ?></span>
                </a>
-->
                <input type="button" class="btn btn-action save-avatar" value="저장" style="height:35px; width:100px;" onclick="saveProfile()">
                <div id="information"></div>
            </div>
        </div>

    </div>
</div>
