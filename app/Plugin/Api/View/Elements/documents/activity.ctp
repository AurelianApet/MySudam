<section id="activity-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Activity Feeds') ?><a href="#activity-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','APIs allow to mooSocial members to manage there feed and get paginated list of feeds, post new feed, share on feed and manage feed etc.') ?></p>
    <?php echo $this->element('documents/activity/activity_sample'); ?>
    <div id="activity-get-feed" class="resource">
        <h3><?php echo __d('api','Get Single Activity Feed') ?><a href="#activity-get-feed" class="permalink">&para;</a></h3>
        <div id="get-activity-feed-wrap" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get Single Activity Feeds') ?></div>
                <a href="#get-activity-feed-wrap" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">/activity/{activity_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','An individual entry in a profile\'s feed or plugins activities . The profile could be a user, event or group.') ?>
                </span>
            </p>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Request')?></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <table>
                    <thead>
                        <tr>
                            <th><?php echo __d('api','Parameter')?></th>
                            <th><?php echo __d('api','Type')?></th>
                            <th><?php echo __d('api','Example')?></th>
                            <th><?php echo __d('api','Description')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','The post ID')?></td>
                        </tr>
                        <tr>
                            <td><code>published</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','The time the post was initially published.')?></td>
                        </tr>
                        <tr>
                            <td><code>publishedTranslated</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The time the post was initially published with text translation')?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The actual number privacy settings of the post.')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">EVERYONE   </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">ALL_FRIENDS   </span> :  <span class="hljs-value">2</span>
                                        <span class="hljs-attribute">SELF   </span> :  <span class="hljs-value">3</span>

                                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>commentCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total comment count')?></td>
                        </tr>
                        <tr>
                            <td><code>likeCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total like count.')?></td>
                        </tr>
                        <tr>
                            <td><code>dislikeCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total dislike count.')?></td>
                        </tr>
                        <tr>
                            <td><code>actor</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The author of this post.')?>
                                <pre><code>{
                                        <span class="hljs-attribute">url</span>: <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/api/users/view/user_id</span>,
                                        <span class="hljs-attribute">type</span>: <span class="hljs-value">person</span>,
                                        <span class="hljs-attribute">id</span>: <span class="hljs-value">user_id</span>,
                                        <span class="hljs-attribute">image</span>: <span class="hljs-value">{
                                          <i class="marleft"></i><span class="hljs-attribute">600</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
                                          <i class="marleft"></i><span class="hljs-attribute marleft">50_square</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span>
                                          <i class="marleft"></i><span class="hljs-attribute">100_square</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span></span>,
                                          <i class="marleft"></i><span class="hljs-attribute marleft">200_square</span>: <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"</span>
                                          <i class="marleft"></i><span class="hljs-attribute marleft">type</span>: <span class="hljs-value"><span class="hljs-string">"Link"</span>
                                          <i class="marleft"></i><span class="hljs-attribute marleft">mediaType</span>: <span class="hljs-value"><span class="hljs-string">"image/jpeg"</span>
                                        </span><i class="marleft"></i>}
                                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><?php echo __d('api','User Name')?></span>,
                                      </span>}</code></pre>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>title</code></td>
                                                        <td><?php echo __d('api','string')?></td>
                                                        <td></td>
                                                        <td><?php echo __d('api','Title of this post')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>titleHtml</code></td>
                                                        <td><?php echo __d('api','string')?></td>
                                                        <td></td>
                                                        <td><?php echo __d('api','Title of this post with HTML format')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>type</code></td>
                                                        <td><?php echo __d('api','string')?></td>
                                                        <td></td>
                                                        <td><?php echo __d('api','Action of this post')?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>object</code></td>
                                                        <td><?php echo __d('api','object')?></td>
                                                        <td></td>
                                                        <td><?php echo __d('api','The author of this post.')?>
                                                            <pre><code>{
                        <span class="hljs-attribute">type</span>: <span class="hljs-value"><?php echo __d('api','Type of this post')?></span>,
                        <span class="hljs-attribute">id</span>: <span class="hljs-value"><?php echo __d('api','id object can be group_id , activity_id , userArray , ... base on type')?> </span>,
                        <span class="hljs-attribute">url</span>: <span class="hljs-value"><?php echo __d('api','url of this object post')?></span>,
                        </span>}</code></pre>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><code>target</code></td>
                                                        <td><?php echo __d('api','object')?></td>
                                                        <td></td>
                                                        <td><?php echo __d('api','Describes the target of the activity. The precise meaning of the activity\'s target is dependent on the activities type.')?></td>
                                                    </tr>
                                                    </tbody>
                                                    </table>
                                                    </div>
                                                    <div class="title">
                                                        <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                                                        <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                    </div>
                                                    <div class="collapse-content">
                                                        <pre><code>{
               "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You can not view this activity.") ?>"</span></span>,
               "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You can not view this activity.") ?>"</span></span>,
               "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/119"</span></span>
               </span>}</code></pre>
                                                    </div>
                                                    <div class="title">
                                                        <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                                                        <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                    </div>
                                                    <div class="collapse-content">
                                                        <pre><code>{
               "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist.") ?>"</span></span>,
               "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist.") ?>"</span></span>,
               "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/1122"</span></span>
               </span>}</code></pre>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div id="activity-get-tag-list" class="resource">
                                                        <h3><?php echo __d('api','Get Users were tagged in invidual feed') ?><a href="#activity-get-tag-list" class="permalink">&para;</a></h3>
                                                        <div id="get-activity-tag-list" class="action get">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Get Users were tagged in invidual feed') ?></div>
                                                                <a href="#get-activity-tag-list" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">/activity/tag/{tag_id}</code>
                                                            </h4>
                                                            <p>
                                                                <span>
                  <?php echo __d('api','Return list of users were tagged in individual feed.') ?>
                                                                </span>
                                                            </p>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Field')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>tag_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Tag id')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                <?php echo __d('api','An array of user information.'); ?>
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','User id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>name</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','User name')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>avatar</code></td>
                                                                            <td><?php echo __d('api','object')?></td>
                                                                            <td></td>
                                                                            <td>
                              <?php echo __d('api',"The list of person's image path of this person's avatar .")?>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>profile_url</code></td>
                                                                            <td><?php echo __d('api','link')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Link to profile of user')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
               "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"This tag feed not exist.") ?>"</span></span>,
               "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"This tag feed not exist.") ?>"</span></span>,
               "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/tag/1234"</span></span>
               </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="activity-post-feed" class="resource">
                                                        <h3><?php echo __d('api','Post New Feed')?><a href="#activity-post-feed" class="permalink">&para;</a></h3>
                                                        <p> <?php echo __d('api','Post a new feed')?></p>
                                                        <div id="user-newfeed-post" class="action post">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','New feed')?></div>
                                                                <a href="#user-newfeed-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/activity</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','A user access token with publish_actions permission can be used to publish new posts.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>type</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','default : User  , in array of (User,Group_Group,Event_Event). <br> Define which type of feed is posted , User  can post feed at home , user profile , in a group or event')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>target_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','default : 0 , in array of (userid , groupid , eventid)')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>message</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td>Hi @[25:David J. Thouless] #1234</td>
                                                                            <td><?php echo __d('api','The main body of the post, otherwise called the status message. Either link, place, or message must be supplied.')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>messageText</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td>Hi David J. Thouless #1234</td>
                                                                            <td><?php echo __d('api','The text of status')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>userTagging</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td>63,25,33</td>
                                                                            <td><?php echo __d('api','Comma-separated list of user IDs of people tagged in this post')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>privacy</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Determines the privacy settings of the post')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>wallphoto</code></td>
                                                                            <td><?php echo __d('api','arrat[string]')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','An array of Photo path which is uploaded by using the api :')?><a href="#file-upload">/file</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo  __d('api', 'success') ?>"</span></span>,
                        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"activity_id"</span></span>,
                        }</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Share feed can not be empty") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Share feed can not be empty") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/post"</span></span>
                      </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="activity-post-activty-comment" class="resource">
                                                        <h3><?php echo __d('api','Post a comment on a feed')?><a href="#activity-post-activty-comment" class="permalink">&para;</a></h3>
                                                        <p> <?php echo __d('api','Post a comment on a feed')?></p>
                                                        <div id="user-activity-post" class="action post">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Post comment on feed')?></div>
                                                                <a href="#user-activity-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/activity/{activity_id}/comment</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','A user access token with publish_actions permission can be used to publish new posts.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>activity_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Activity Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>text</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Content of comment')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>photo</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','is the path which is uploaded by using the api : /file')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo  __d('api', 'success') ?></span></span>,
                        "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">"comment_id"</span></span>,
                        }</code></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="activity-post-activty-comment-edit" class="resource">
                                                        <h3><?php echo __d('api','Edit comment on feed')?><a href="#activity-post-activty-comment-edit" class="permalink">&para;</a></h3>
                                                        <p> <?php echo __d('api','Edit comment on feed')?></p>
                                                        <div id="user-activity-post-comment-edit" class="action post col-md-6 block-left">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Edit comment on feed')?></div>
                                                                <a href="#user-activity-post-comment-edit" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/activity/comment/edit</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','A user access token with publish_actions permission can be used to publish new posts.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>activity_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Activity Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>comment_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Comment Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>text</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Content of comment')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>photo</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','is the path which is uploaded by using the api : /file')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo  __d('api', 'success') ?></span></span>,
                        }</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                                                            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Comment can not be empty.") ?></span></span>,
                                                            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Comment can not be empty.") ?></span></span>,
                                                            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/comment/edit"</span></span>
                                                          </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                        <div id="user-activity-put-comment-edit" class="action put col-md-6 block-right">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Edit comment on feed')?></div>
                                                                <a href="#user-activity-put-comment-edit" class="method put"><?php echo __d('api','PUT')?></a><code class="uri">/activity/{activity_id}/comment/{comment_id}</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','A user access token with publish_actions permission can be used to publish new posts.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>activity_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Activity Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>comment_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Comment Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>text</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Content of comment')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>photo</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','is the path which is uploaded by using the api : /file')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo  __d('api', 'success') ?></span></span>,
                        }</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                                                            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Comment can not be empty.") ?></span></span>,
                                                            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Comment can not be empty.") ?></span></span>,
                                                            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/10/comment/20"</span></span>
                                                          </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="activity-delete-feed" class="resource">
                                                        <h3><?php echo __d('api','Delete Activity feed')?><a href="#activity-delete-feed" class="permalink">&para;</a></h3>
                                                        <p><?php echo __d('api',' Delete an activity feed.')?></p>
                                                        <div id="activity-delete-acitivity-post" class="action post col-md-6">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Delete Activity feed')?></div>
                                                                <a href="#activity-delete-acitivity-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/activity/delete/{id}</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>,
                        </span>}</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/1122"</span></span>
                      </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                        <div id="activity-delete-acitivity" class="action delete col-md-6">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Delete Activity feed')?></div>
                                                                <a href="#activity-delete-acitivity" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/activity/{activity_id}</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>,
                        </span>}</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This activity feed not exist") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/1122"</span></span>
                      </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div id="activity-delete-activity-comment" class="resource">
                                                        <h3><?php echo __d('api','Delete comment on a feed .')?><a href="#activity-delete-activity-comment" class="permalink">&para;</a></h3>
                                                        <p><?php echo __d('api','Delete comment on a feed .')?></p>
                                                        <div id="activity-delete-acitivity-comment-post" class="action post col-md-6">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Delete comment on a feed.')?></div>
                                                                <a href="#activity-delete-acitivity-comment-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/activity/{activity_id}/comment/delete</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?>&nbsp;&nbsp;</strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>activity_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Activity Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>comment_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Comment Id')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>,
                        </span>}</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Something wrong with your data , please check again.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Something wrong with your data , please check again.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/1/comment/delete"</span></span>
                      </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                        <div id="activity-delete-acitivity-comment" class="action delete col-md-6">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Delete comment on a feed.')?></div>
                                                                <a href="#activity-delete-acitivity-comment" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/activity/{activity_id}/comment</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?>&nbsp;&nbsp;</strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>activity_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Activity Id')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>comment_id</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','Comment Id')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>,
                        </span>}</code></pre>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Something wrong with your data , please check again.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Something wrong with your data , please check again.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/1/comment"</span></span>
                      </span>}</code></pre>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div id="activity-get-my-feed" class="resource">
                                                        <h3><?php echo __d('api','Get Home Feed')?><a href="#activity-get-my-feed" class="permalink">&para;</a></h3>
                                                        <p><?php echo __d('api',' The posts that a person sees in their mooSoical News Feed.')?></p>
                                                        <div id="user-homeuser-get" class="action get">
                                                            <h4>
                                                                <div class="name"><?php echo __d('api','Get User Activity Feed')?></div>
                                                                <a href="#user-homeuser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/activity/home</code>
                                                            </h4>
                                                            <h3><?php echo __d('api','Permission')?></h3>
                                                            <p><?php echo __d('api','It\'s required a user access token.')?></p>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Fields')?></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th><?php echo __d('api','Parameter')?></th>
                                                                            <th><?php echo __d('api','Type')?></th>
                                                                            <th><?php echo __d('api','Example')?></th>
                                                                            <th><?php echo __d('api','Description')?></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><code>filter</code></td>
                                                                            <td><?php echo __d('api','string')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','OPTIONAL.It mus be "everyone" or "friends"')?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><code>page</code></td>
                                                                            <td><?php echo __d('api','int')?></td>
                                                                            <td></td>
                                                                            <td><?php echo __d('api','default value is 1')?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="title">
                                                                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                                                                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
                                                            </div>
                                                            <div class="collapse-content">
                                                                <p><?php echo __d('api','An array of')?> <a href="#activity-plugin" rel="nofollow"><?php echo __d('api','Activity objects.')?></a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </section>