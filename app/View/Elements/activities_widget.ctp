    <script>
        function onFindSudamFriend()
        {
            document.location = "<?php echo $this->Html->url( '/', true ); ?>Users/getDog";
        }

        function onFindByContact()
        {
            window.app.onFindByContact();
//            document.location = "<?php echo $this->Html->url( '/', true ); ?>Animals/getContactData";
        }

        function onRegProfilePhoto()
        {
            document.location = "<?php echo $this->Html->url( '/', true ); ?>users/avatar";
        }
    </script>

<div style="background-color:white;">
<div class="<?php echo $class_feed?>">
    <ul class="list6 comment_wrapper" id="list-content">
        <div style="padding-top:50px;">
            <div>
                <center>
                    <img src="<?php echo $this->webroot; ?>img/hand.png" width="100px;" />
                </center>
            </div>
            <div style="padding-top:40px;">
                <center>
                    쓰담쓰담에 오신것을 환영합니다.
                </center>
            </div>
            <div style="padding-top:40px;">
                <center>
                     <input type="button" value="쓰담하고싶은 친구찾기" onclick="onFindSudamFriend()">
                 </center>
            </div>
        </div>
        <div style="padding-top:40px;">
            <table style="width:100%; border-style:double;">
                <tr>
                    <td style="width:50%;padding-left:60px;">
                        <table style="width:100px;">
                            <tr style="height:60px;">
                                <td style="padding-left:20px;">
                                    <img src="<?php echo $this->webroot; ?>img/contact.png" width="60px;" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:30px;">
                                    <input type="button" value="연락처에서 찾기" onclick="onFindByContact()">
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td style="padding-left:40px;">
                        <table style="width:100px;">
                            <tr style="height:60px;">
                                <td style="padding-left:20px;">
                                    <img src="<?php echo $this->webroot; ?>img/profile.png" width="60px;" />
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-top:30px;">
                                    <input type="button" value="프로필 사진등록" onclick="onRegProfilePhoto()">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </ul>
</div>
</div>
