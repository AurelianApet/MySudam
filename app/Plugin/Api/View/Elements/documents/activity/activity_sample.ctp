<div id="activity-plugin" class="resource">
        <h3><?php echo __d('api','Example Activity') ?><a href="#activity-plugin" class="permalink">&para;</a></h3>
        <table>
            <thead>
                <tr>
                    <th><?php echo __d('api','Example Activities')?></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A joined '. Configure::read('core.site_name'))?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/join_moo.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A joined '. Configure::read('core.site_name')) ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"join"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A changed profile picture')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/changed_profile.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A changed profile picture') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"update"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A post a text')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_a_text.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A post a text') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Activity"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
															  <i class="marleft-45"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/users/view/user_id"</span></span>,
															  <i class="marleft-45"></i><span class="hljs-attribute marleft">"width"</span>: <span class="hljs-value"><span class="hljs-string">"250"</span></span>
															  <i class="marleft-45"></i><span class="hljs-attribute marleft">"height"</span>: <span class="hljs-value"><span class="hljs-string">"250"</span></span>
															</span><i class="marleft"></i><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A post a link')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_a_link.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A post a link') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Activity_Link"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"link title"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"description"</span>: <span class="hljs-value">"link description"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">"link image"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"link_url"</span>: <span class="hljs-value">"link url"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A > User B')?><br><?php echo __d('api','(User A post on User B\'s profile)')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_user_wall.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A > User B') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Activity_Post_User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A share User B\'s post')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_post.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A share User B\'s post') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Activity"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
												<i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A is now friend with User B and 2 others ')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/add_friend.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A is now friend with User B and 2 others ') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"add"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"friend"</span>: <span class="hljs-value">[
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userFriendCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','1 friend') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userPhotoCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','1 photo') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userStatus"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Remove') ?>"</span></span>
													<i class="marleft-30"></i>},
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User C') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userFriendCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','1 friend') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userPhotoCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','1 photo') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userStatus"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Remove') ?>"</span></span>
													<i class="marleft-30"></i>},
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User D') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userFriendCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','10 friend') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userPhotoCount"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','1 photo') ?>"</span></span>
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"userStatus"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Remove') ?>"</span></span>
													<i class="marleft-30"></i>}
												<i class="marleft-30"></i>]</span>
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A post photo on feed')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_photo.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A post photo on feed') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activity_id:activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"This is text of feed"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"3"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"2"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"3"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/albums/view/album_id/album_name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"album_id"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A added 2 news photo to album Album Name')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/add_photo_to_album.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A added 2 news photo to album Album Name') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"add"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activity_id:activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"3"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"2"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"3"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/albums/view/album_id/album_name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"album_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"Album Name"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A > Group Name <br> ( post photo in group )')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_photo_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A > Group Name') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activity_id:activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"3"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"2"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"3"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"Group Name"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A > Event Name <br> ( post photo in event )')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/post_photo_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A > Event Name') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activity_id:activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"3"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"2"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"3"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/events/view/event_id/event-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Event"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"event_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"Event Name"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s photo')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_user_photo.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s photo') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Photo"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activity_id:activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s album')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_user_album.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s album') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Album"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"album_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/albums/view/album_id/album-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"3"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"2"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
													<i class="marleft-30"></i><span class="hljs-attribute">"3"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A was tagged in a photo')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/tagged_photo.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A was tagged in a photo') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Photo_Tag"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activty_id:activity_id/"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"1"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A commented on User B photo')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/commented_photo.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A commented on User B photo') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"post"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Photo_Comment"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"activity_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id/activty_id:activity_id/"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"imageCount"</span>: <span class="hljs-value">"1"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"imageArray"</span>: <span class="hljs-value">"{
													<i class="marleft-30"></i><span class="hljs-attribute">"1"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/2016/folder/album_id/prefix_name.png"</span>,
												<i class="marleft-30"></i>}"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A created a new event')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/event.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A created a new event') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Event"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"event_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/events/view/event_id/event-name"</span>,
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s event')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_event.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s event') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Event"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"event_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/events/view/event_id/event-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A is attending Event 1 , Event 2 and 2 others')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/join_event.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A is attending Event 1 , Event 2 and 2 others') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"attend"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Event"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"event"</span>: <span class="hljs-value"> [
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/events/view/event_id/event-name"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event Name') ?>"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"event_id"</span></span> 
													<i class="marleft-30"></i>},
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/events/view/event_id/event-name"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event Name') ?>"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"event_id"</span></span> 
													<i class="marleft-30"></i>}
												<i class="marleft-30"></i>],</span>
											<i class="marleft"></i>},</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared a new video')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/create_video.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared a new video') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Video"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"video_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/videos/view/video_id/video-name"</span>,
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s video')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_video.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s video') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Video"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"video_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/videos/view/video_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A > Group Name <br> ( post video in group )')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/video_in_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A > Group Name') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Video"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"video_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/video_id:video_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"Group Name"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A created a new topic')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/create_topic.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A created a new topic') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Topic"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"topic_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/topics/view/topic_id/topic-name"</span>,
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s topic')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_topic.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s topic') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Topic"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"topic_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/topics/view/topic_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A > Group Name <br> ( post topic in group )')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/topic_in_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A > Group Name') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Topic"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"topic_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/topic_id:topic_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"content"</span>: <span class="hljs-value">"<?php echo __d('api','This is text of feed') ?>"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"Group Name"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A created a new blog entry')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/create_blog.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A created a new blog entry') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Blog"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"blog_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/blogs/view/blog_id/blog-name"</span>,
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s blog')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_blog.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s blog') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Blog"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"blog_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/blogs/view/blog_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A created a new group')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/create_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A created a new group') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"create"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span>,
												
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s group')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s group') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"tagUser"</span>: <span class="hljs-value">{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"User"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"user_id"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
																<i class="marleft-45"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
																<i class="marleft-45"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
																<i class="marleft-45"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
															</span><i class="marleft-45"></i>}
														 <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User B') ?>"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A joined group Group Name and 2 others')?></p>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/join_group.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A joined group Group Name and 2 others') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"join"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Group"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"event"</span>: <span class="hljs-value"> [
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group Name') ?>"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"group_id"</span></span> 
													<i class="marleft-30"></i>},
													<i class="marleft-30"></i>{
														  <i class="marleft-30"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/groups/view/group_id/group-name"</span></span>,
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"name"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group Name') ?>"</span></span>
														  <i class="marleft-30"></i><span class="hljs-attribute marleft">"id"</span>: <span class="hljs-value"><span class="hljs-string">"group_id"</span></span> 
													<i class="marleft-30"></i>}
												<i class="marleft-30"></i>],</span>
											<i class="marleft"></i>},</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="header-title"><?php echo __d('api','User A shared User B\'s object > User C  <br> (Share Friend wall)')?></p>
                        <p><?php echo __d('api',"Object can be Blog | Topic | Video | Group | Event | Photo | Album") ?>
                        <p><img class="activity-demo-img" src="<?php echo  FULL_BASE_URL . $this->request->webroot?>api/img/share_user_object.png"></p>
                        <div class="title activity-title">
                            <strong><?php echo __d('api','A JSON serialized activity')?></strong>
                            <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                        </div>
                        <div class="collapse-content">
                            <pre><code>
                                        {
                                            <span class="hljs-attribute">"id"</span> :  <span class="hljs-value">"post_id"</span>
                                            <span class="hljs-attribute">"published" </span> :  <span class="hljs-value">"2016-07-31 16:16:22"</span>
											<span class="hljs-attribute">"privacy"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"commentCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"likeCount"</span> :  <span class="hljs-value">"1"</span>
                                            <span class="hljs-attribute">"dislikeCount" </span> :  <span class="hljs-value">"0"</span>
											<span class="hljs-attribute">"actor" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"image"</span>: <span class="hljs-value">{
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"600"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"50_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute">"100_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"200_square"</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"type"</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span></span>
														  <i class="marleft"></i><i class="marleft"></i><span class="hljs-attribute marleft">"mediaType"</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span></span>
												</span><i class="marleft"></i><i class="marleft"></i>}
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"<?php echo __d('api','User A') ?>"</span>,
											<i class="marleft"></i>}</span>
											<span class="hljs-attribute">"name"</span> :  <span class="hljs-value">"<?php echo __d('api','User A shared User B\'s object > User C ') ?>"</span>
                                            <span class="hljs-attribute">"type" </span> :  <span class="hljs-value">"share_user"</span>
											<span class="hljs-attribute">"object" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"Object type"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/objects/view/object_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"object_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"user_id"</span>: <span class="hljs-value">"User Id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"user_name"</span>: <span class="hljs-value">"User B"</span>,
											<i class="marleft"></i>},</span>
											<span class="hljs-attribute">"target" </span> :  <span class="hljs-value">{
												<i class="marleft"></i><span class="hljs-attribute">"url"</span>: <span class="hljs-value">"<?php echo FULL_BASE_URL . $this->request->base ?>/users/view/user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"type"</span>: <span class="hljs-value">"User"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"id"</span>: <span class="hljs-value">"user_id"</span>,
												<i class="marleft"></i><span class="hljs-attribute">"name"</span>: <span class="hljs-value">"User C"</span>,
											}</span>
                                        }
                                        </code></pre>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>