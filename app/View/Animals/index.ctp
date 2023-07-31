
<script>
    window.onload = function ()
    {
        onDogList();
    }

    function onDogList()
    {
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Animals/getDogData',
            type: "post",
            async: false,
            success: function (data) {
                $("#aniList").html(data);
            },
            error: function (data) {
            }
        });
    }

    function onCatList()
    {
        $.ajax({
            url: '<?php echo $this->Html->url( '/', true ); ?>Animals/getCatData',
            type: "post",
            async: false,
            success: function (data) {
                $("#aniList").html(data);
            },
            error: function (data) {
            }
        });
    }
</script>
<div id = "aniList">
    <table style="width: 395px;">
        <tbody><tr>
            <td>
                <table style="width: 100%;">
                    <tbody><tr>
                        <td style="width:50%">
                            <input type="button" value="강아지" style="width: 100%;" onclick='onDogList()'>
                        </td>
                        <td>
                            <input type="button" value="고양이" style="width: 100%;" onclick='onCatList()'>
                        </td>
                    </tr>
                </tbody></table>
            </td>
        </tr>
        <tr style="height: 300px;">
            <td>
            </td>
        </tr>
    </tbody></table>
</div>

