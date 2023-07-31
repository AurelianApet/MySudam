
<div class="profilePage ">
	<div id="profile-content">
		<?php 
        if ( $canView )
        {
            if($type == 1){
                echo $this->element('ajax/profile_detail');
            }
            else if($type == 2){
                echo $this->element('ajax/profile_detail1');
            }
            else{
                echo $this->element('ajax/profile_detail2');
            }
        }
        else
        {
            printf( __('<div class="privacy_profile full_content p_m_10">%s only shares some information with everyone</div>'), $user['User']['name'] );
        }
		?>
	</div>
</div> 