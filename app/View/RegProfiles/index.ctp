<script>
    ani_type = <?=$ani_type?>;
    ani_gender = <?=$ani_gender?>;
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

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<table style="width: 100%;">
	<tbody><tr><td style="width: 100%;"><center>
        <input type="file" id="ani_photo" value="photo" onchange="readURL(this);">
        <img id="blah" src="/uploads/users/avatar/<?=$uid?>/<?=$ani_avatar?>" alt="your image" style="width:70px;" />
    </center></td></tr>
    <tr><td>
    <center>
        myemail@mail.com
    </center>
        </td></tr>
	<tr><td>
    <center>
        <input id="ani_name" type="text" placeholder="이름을 입력해 주세요" value="<?=$ani_name?>">
    </center>
        </td></tr>
    <tr>
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
            <input type="button" value="없어요" id="sel_none" onclick="onNone()" style="width: 100%;">
        </td>
            </tr>
        </tbody></table>
    </td>
    </tr>
    <tr>
        <td>
            <select id="ani_style">
                <option>품종을 선택해주세요</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <input onclick="checkCalendar()" id="ani_birthday" style="font-size:10pt; color:#42485a; width:50%;margin-left: 70px;" placeholder="생일을 지정해주세요.">
        </td>
    </tr>
    <tr>
    <td><center>
        <table style="width: 100%;">
            <tbody><tr>
        <td style="width: 50%;">
            <input type="button" id="gender2" value="암" style="width: 45%;" onclick="onSelGender(2)">
        </td>
        <td>
            <input type="button" id="gender1" value="수" style="width: 45%;" onclick="onSelGender(1)">
        </td>
            </tr>
            </tbody></table></center>
    </td>
    </tr>
    <tr>
    <td>
    <input type="button" value="Save" onclick="saveProfile()">
    </td>
    </tr>
</tbody></table>