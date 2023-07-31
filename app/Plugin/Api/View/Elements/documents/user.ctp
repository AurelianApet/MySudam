 <section id="user-group" class="resource-group">
         <h2 class="group-heading"> <?php echo __d('api','User')?><a href="#user-group" class="permalink">&para;</a></h2>
         <div id="user-plugin" class="resource">
            <h3><?php echo __d('api','User Object') ?><a href="#user-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','User name') ?></td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','User profile url') ?></td>
                </tr>
                <tr>
                    <td><code>avatar</code></td>
                    <td><?php echo __d('api','array')?></td>
                    <td>1</td>
                    <td>
                        <?php echo __d('api','An array of user avatar') ?>
                        <pre><code>
                                        {
                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                           <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                            <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>type</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','User type') ?></td>
                </tr>
                <tr>
                    <td><code>friendCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api',"User's friend count") ?></td>
                </tr>
                <tr>
                    <td><code>photoCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api',"User's photo count") ?></td>
                </tr>
                <tr>
                    <td><code>userStatus</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api',"Status with current user (Remove,Add, Cancel,Respond)") ?></td>
                </tr>
                <tr>
                    <td><code>userCase</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api',"User case that similar to user's status of current user (2 : Remove ,1 : Add  ,4: Cancel  ,3: Respond )") ?></td>
                </tr>
                <tr>
                    <td><code>requestId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api',"If status is Respond , will have request id to answer Accept or Remove friend request . (Default is null )") ?></td>
                </tr>
            </tbody>
        </table>
    </div>
          <div id="user-all-user" class="resource">
        <h3><?php echo __d('api','Get All User') ?><a href="#user-all-user" class="permalink">&para;</a></h3>
        <div id="get-all-user" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all user') ?></div>
                <a href="#get-all-user" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">user/browse/all</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of all users') ?>
                </span>
            </p>
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
                            <td><code>page</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Pagging number')?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <p>
                    <span>
                     <?php echo __d('api','An array of ') ?><a href="#user-plugin"><?php echo __d('api','user object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/browse/all"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
          <div id="user-friend-user" class="resource">
        <h3><?php echo __d('api',"Get all current user's friend") ?><a href="#user-friend-user" class="permalink">&para;</a></h3>
        <div id="get-friend-user" class="action get">
            <h4>
                <div class="name"><?php echo __d('api',"Get all current user's friend") ?></div>
                <a href="#get-friend-user" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">user/browse/friends</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api',"Get an array of current user's friend") ?>
                </span>
            </p>
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
                            <td><code>page</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Pagging number')?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <p>
                    <span>
                     <?php echo __d('api','An array of ') ?><a href="#user-plugin"><?php echo __d('api','user object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/browse/friends"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
             <div id="user-search-user" class="resource">
        <h3><?php echo __d('api','Search user') ?><a href="#user-search-user" class="permalink">&para;</a></h3>
        <div id="post-user-search" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Search user') ?></div>
                <a href="#post-user-search" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/search</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Search user') ?>
                </span>
            </p>
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
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>email</code></td>
                            <td><?php echo __d('api','email')?></td>
                            <td></td>
                            <td><?php echo __d('api','User email')?></td>
                        </tr>
                        <tr>
                            <td><code>gender</code></td>
                            <td><?php echo __d('api','array')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Array of gender')?></p>
                                <p><?php echo __d('api','0 : Male')?></p>
                                <p><?php echo __d('api','1: Female')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>picture</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Have profile picture or not ( default : 0 , selected : 1)')?></td>
                        </tr>
                        <tr>
                            <td><code>online</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User is online ( default : 0 , selected : 1)')?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <p>
                    <span>
                     <?php echo __d('api','An array of') ?><a href="#user-plugin"><?php echo __d('api','user object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/search"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
       <div id="user-change-password" class="resource">
        <h3><?php echo __d('api','Change password') ?><a href="#user-change-password" class="permalink">&para;</a></h3>
        <div id="post-change-password" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Change password') ?></div>
                <a href="#post-change-password" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/password</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Change current user password') ?>
                </span>
            </p>
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
                            <td><code>old_password</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Current password')?></td>
                        </tr>
                        <tr>
                            <td><code>password</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','New password')?></td>
                        </tr>
                        <tr>
                            <td><code>password2</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','New password ( need matching with password)')?></td>
                        </tr>
                    </tbody>
                </table>
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
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Your password has been changed')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","message") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Message") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/password"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d("api","Messages can be :") ?> </p>
                <p><?php echo __d('api','# Incorrect current password') ?></p>
                <p><?php echo __d('api','# Passwords do not match') ?></p>
                <p><?php echo __d('api','# Password must have at least 6 characters') ?></p>
            </div>
        </div>
    </div>
       <div id="user-edit-profile" class="resource">
        <h3><?php echo __d('api','Edit user information') ?><a href="#user-edit-profile" class="permalink">&para;</a></h3>
        <div id="post-edit-profile" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit user information') ?></div>
                <a href="#post-edit-profile" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit user information') ?>
                </span>
            </p>
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
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>email</code></td>
                            <td><?php echo __d('api','email')?></td>
                            <td></td>
                            <td><?php echo __d('api','User email')?></td>
                        </tr>
                        <tr>
                            <td><code>month</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday month')?></td>
                        </tr>
                        <tr>
                            <td><code>day</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday day')?></td>
                        </tr>
                        <tr>
                            <td><code>year</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday year')?></td>
                        </tr>
                        <tr>
                            <td><code>gender</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User gender (Male , Female)')?></td>
                        </tr>
                        <tr>
                            <td><code>timezone</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Timezone')?></td>
                        </tr>
                        <tr>
                            <td><code>username</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User special username')?></td>
                        </tr>
                        <tr>
                            <td><code>about</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User about')?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Privacy setting')?></p>
                                <p><?php echo __d('api','1 : Everyone')?></p>
                                <p><?php echo __d('api','2 : Friends Only')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>hide_online</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Setting hide your online status ( default : 0)')?></td>
                        </tr>
                        <tr>
                            <td><code>receive_message_from_non_friend</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Setting receive message from non-friend (default:1)')?></td>
                        </tr>
                    </tbody>
                </table>
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
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Your changes have been saved')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","message") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Message") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/edit"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d("api","Messages can be :") ?> </p>
                <p><?php echo __d('api','# Birthday is required') ?></p>
                <p><?php echo __d('api','# Username must not be a numeric value') ?></p>
                <p><?php echo __d('api','# Username is restricted') ?></p>
                <p><?php echo __d('api','# Name is required') ?></p>
                <p><?php echo __d('api','# Email must be a valid email') ?></p>
                <p><?php echo __d('api','# Email already exists') ?></p>
                <p><?php echo __d('api','# Email is required') ?></p>
                <p><?php echo __d('api','# Username must only contain letters and numbers') ?></p>
                <p><?php echo __d('api','# Username must be between 5 and 50 characters long.') ?></p>
                <p><?php echo __d('api','# Username already exist') ?></p>
            </div>
        </div>
        <div id="put-edit-profile" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit user information') ?></div>
                <a href="#put-edit-profile" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">user</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit user information') ?>
                </span>
            </p>
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
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>email</code></td>
                            <td><?php echo __d('api','email')?></td>
                            <td></td>
                            <td><?php echo __d('api','User email')?></td>
                        </tr>
                        <tr>
                            <td><code>month</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday month')?></td>
                        </tr>
                        <tr>
                            <td><code>day</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday day')?></td>
                        </tr>
                        <tr>
                            <td><code>year</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Birthday year')?></td>
                        </tr>
                        <tr>
                            <td><code>gender</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User gender (Male , Female)')?></td>
                        </tr>
                        <tr>
                            <td><code>timezone</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Timezone')?></td>
                        </tr>
                        <tr>
                            <td><code>username</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User special username')?></td>
                        </tr>
                        <tr>
                            <td><code>about</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User about')?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Privacy setting')?></p>
                                <p><?php echo __d('api','1 : Everyone')?></p>
                                <p><?php echo __d('api','2 : Friends Only')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>hide_online</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Setting hide your online status ( default : 0)')?></td>
                        </tr>
                        <tr>
                            <td><code>receive_message_from_non_friend</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Setting receive message from non-friend (default:1)')?></td>
                        </tr>
                    </tbody>
                </table>
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
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Your changes have been saved')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","message") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Message") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d("api","Messages can be :") ?> </p>
                <p><?php echo __d('api','# Birthday is required') ?></p>
                <p><?php echo __d('api','# Username must not be a numeric value') ?></p>
                <p><?php echo __d('api','# Username is restricted') ?></p>
                <p><?php echo __d('api','# Name is required') ?></p>
                <p><?php echo __d('api','# Email must be a valid email') ?></p>
                <p><?php echo __d('api','# Email already exists') ?></p>
                <p><?php echo __d('api','# Email is required') ?></p>
                <p><?php echo __d('api','# Username must only contain letters and numbers') ?></p>
                <p><?php echo __d('api','# Username must be between 5 and 50 characters long.') ?></p>
                <p><?php echo __d('api','# Username already exist') ?></p>
            </div>
        </div>
    </div>
         <div id="user-me" class="resource">
            <h3><?php echo __d('api','Get current user ')?><a href="#user-me" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Returns current user info.')?></p>
            <div id="user-me-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Get current user')?></div>
                  <a href="#user-me-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/me</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It\'s required a user access token.')?></p>
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
                           <td>number</td>
                           <td></td>
                           <td><?php echo __d('api',"The id of this person's user account. This ID is unique.")?></td>
                        </tr>
                        <tr>
                           <td><code>name</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The person's name.")?></td>
                        </tr>
                        <tr>
                           <td><code>email</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's primary email address listed on their profile.")?></td>
                        </tr>
                        <tr>
                           <td><code>avatar</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The list of person's image path of this person's avatar .")?></td>
                        </tr>
                        <tr>
                           <td><code>last_login</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's last login in the format MM/DD/YYYY .")?></td>
                        </tr>
                        <tr>
                           <td><code>photo_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total photos")?></td>
                        </tr>
                        <tr>
                           <td><code>friend_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total friends .")?></td>
                        </tr>
                        <tr>
                           <td><code>notification_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's notifications is unread")?></td>
                        </tr>
                        <tr>
                           <td><code>friend_request_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total friend request is being waited to accept.")?></td>
                        </tr>
                        <tr>
                           <td><code>blog_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total blogs")?></td>
                        </tr>
                        <tr>
                           <td><code>topic_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total topic")?></td>
                        </tr>
                        <tr>
                           <td><code>conversation_user_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total conversations")?></td>
                        </tr>
                        <tr>
                           <td><code>video_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's total videos")?></td>
                        </tr>
                        <tr>
                           <td><code>gender</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The gender pronoun selected by this person")?></td>
                        </tr>
                        <tr>
                           <td><code>birthday</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"This person's birthday in the format MM/DD/YYYY.")?></td>
                        </tr>
                        <tr>
                           <td><code>timezone</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The person's current timezone offset from UTC.")?></td>
                        </tr>
                        <tr>
                           <td><code>about</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The 'about me' section of this person's profile.")?></td>
                        </tr>
                        <tr>
                           <td><code>lang</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The language is selected by this person")?></td>
                        </tr>
                        <tr>
                           <td><code>cover</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The person's image path of this person's avatar.")?></td>
                        </tr>
                        <tr>
                           <td><code>profile_url</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The person's profile path")?></td>
                        </tr>
                        <tr>
                           <td><code>menus</code></td>
                           <td>objects</td>
                           <td></td>
                           <td><?php echo __d('api',"Lists menu show and hide")?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-single-use" class="resource">
            <h3><?php echo __d('api','Get User Info')?><a href="#user-single-use" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Get the profile field values of single user.') ?></p>
            <div id="user-singleuser-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Get User Info')?></div>
                  <a href="#user-singleuser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">user/{id}</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It\'s required a user access token.')?>.</p>
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
                           <td><code>enableFollow</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api',"Enable follow action or not ")?></td>
                        </tr>
                        <tr>
                           <td><code>follow</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api',"Follow status (followed : true , not follow : false)")?></td>
                        </tr>
                        <tr>
                           <td><code>canView</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api',"Current user can view that user's profiel or not")?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d('api','number')?></td>
                           <td></td>
                           <td><?php echo __d('api','The id of this person\'s user account. This ID is unique.')?></td>
                        </tr>
                        <tr>
                           <td><code>name</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The person\'s name.')?></td>
                        </tr>
                        <tr>
                           <td><code>avatar</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .')?></td>
                        </tr>
                        <tr>
                           <td><code>photo</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td><code>photo_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','This person\'s total photos of ???')?></td>
                        </tr>
                        <tr>
                           <td><code>friend_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','This person\'s total friends .')?></td>
                        </tr>
                        <tr>
                           <td><code>blog_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','This person\'s total blogs')?></td>
                        </tr>
                        <tr>
                           <td><code>topic_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','This person\'s total topic')?></td>
                        </tr>
                        <tr>
                           <td><code>video_count</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','This person\'s total videos')?> </td>
                        </tr>
                        <tr>
                           <td><code>gender</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTION.It\'s belongs to viewer access token .The gender pronoun selected by this person')?></td>
                        </tr>
                        <tr>
                           <td><code>birthday</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTION.It\'s belongs to viewer access token .This person\'s birthday in the format MM/DD/YYYY')?></td>
                        </tr>
                        <tr>
                           <td><code>timezone</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The person\'s current timezone offset from UTC.')?></td>
                        </tr>
                        <tr>
                           <td><code>about</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The \'about me\' section of this person\'s profile.')?></td>
                        </tr>
                        <tr>
                           <td><code>cover</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The person\'s image path of this person\'s avatar .')?></td>
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
                            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","User does not exist.") ?>"</span></span>,
                            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","User does not exist.") ?>"</span></span>,
                            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/1000"</span></span>
                          </span>}</code></pre>
                </div>
            </div>
         </div>
         <div id="user-me-avatar" class="resource">
            <h3><?php echo __d('api','My Avatar')?><a href="#user-me-avatar" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Post owner avatar .')?></p>
            <div id="user-homeuser-post" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','User avatar')?></div>
                  <a href="#user-homeuser-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/me/avatar</code>
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
                           <td><code>qqfile</code></td>
                           <td><?php echo __d('api','image')?></td>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>success</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d("api","success text") ?></td>
                        </tr>
                        <tr>
                           <td><code>filename</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d("api","photo name") ?></td>
                        </tr>
                        <tr>
                           <td><code>photo</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d("api","photo url") ?></td>
                        </tr>
                        <tr>
                           <td><code>file_path</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d("api","photo FULL url") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
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
                           <td><code>error</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d("api","error text") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-activities-user" class="resource">
            <h3><?php echo __d('api','Get User Activities') ?><a href="#user-activities-user" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Get user activities feed.') ?></p>
            <div id="user-activityget-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Activities') ?></div>
                  <a href="#user-activityget-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/activities</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','A user access token with user_activities permission is required to return activities of that person.') ?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
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
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"Parameter error : User does not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"Parameter error : User does not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/activities"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-friends-user" class="resource">
            <h3><?php echo __d('api',"Friend Lists")?><a href="#user-friends-user" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api',"A person's friends.")?></p>
            <div id="user-friend-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api',"Friend Lists")?></div>
                  <a href="#user-friend-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/friends</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with user_friends permission is required to view the current person's friends.")?></p>
               <p><?php echo __d('api',"If a friend of the person declines the user_friends permission, that friend will not show up in the friend list for this person.")?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <p><span><?php echo __d('api',"An array of")?><a href="#user-pluginid" rel="nofollow"><?php echo __d('api',"User objects")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/friends"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/friends"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-block-user" class="resource">
            <h3><?php echo __d('api','Blocked Lists')?><a href="#user-block-user" class="permalink">&para;</a></h3>
            <div id="user-block-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api',"Get all single user's blocked")?></div>
                  <a href="#user-block-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/blocked</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with user_blocks permission is required to view the current person's blocks.")?></p>
               <p><?php echo __d('api',"If a block of the person declines the user_blocks permission, that block will not show up in the block list for this person")?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <p><span><?php echo __d('api',"An array of")?><a href="#user-pluginid" rel="nofollow"><?php echo __d('api',"User objects")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/blocked"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/blocked"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-blogs-created" class="resource">
            <h3><?php echo __d('api','User Blogs Created')?><a href="#user-blogs-created" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','The photo blogs this person has created.')?></p>
            <div id="user-bloguser-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Blogs Created')?></div>
                  <a href="#user-bloguser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/blogs</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','A user access token with user_activities permission is required to return activities of that person.')?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#blog-plugin" rel="nofollow"><?php echo __d('api',"Blog object")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/blogs"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/blogs"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-topics-created" class="resource">
            <h3><?php echo __d('api','User Topics Created')?><a href="#user-topics-created" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','The photo topics this person has created.')?> </p>
            <div id="user-topicuser-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Topics Created')?></div>
                  <a href="#user-topicuser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/topics</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','A user access token with user_activities permission is required to return activities of that person.')?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#topic-plugin" rel="nofollow"><?php echo __d('api',"Topic object")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/topics"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/topics"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-albums-created" class="resource">
            <h3><?php echo __d('api','User Albums Created')?><a href="#user-albums-created" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','The photo albums this person has created')?> </p>
            <div id="user-albumuser-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Albums Created')?></div>
                  <a href="#user-albumuser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/albums</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','A user access token with user_activities permission is required to return activities of that person.')?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#album-plugin" rel="nofollow"><?php echo __d('api',"Album object")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/albums"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/albums"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-albums-publish" class="resource hideBlock">
            <h3>User Albums<a href="#user-albums-publish" class="permalink">&para;</a></h3>
            <p> Publishing new albums. </p>
            <p> Note :  Special endpoint  /user/me/albums</p>
            <div id="user-albumuser-post" class="action post">
               <h4>
                  <div class="name">User avatar</div>
                  <a href="#user-albumuser-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/{user-id}/albums</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p>A user access token with user_activities permission is required to return activities of that person.</p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  Reading this endpoint returns an array of Album objects with the same fields as that node.
               </div>
            </div>
         </div>
         <div id="user-event-attending" class="resource">
            <h3><?php echo __d('api','Attending Events')?><a href="#user-event-attending" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Returns the events this person is attending.')?></p>
            <div id="user-eventuser-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Attending Events')?></div>
                  <a href="#user-eventuser-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/events</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with user_events permission is required to view this person's events.")?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#event-plugin" rel="nofollow"><?php echo __d('api',"Event objects")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/events"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/events"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-group-members" class="resource">
            <h3><?php echo __d('api','Group Members')?><a href="#user-group-members" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','The  groups that a person is a member of.')?></p>
            <div id="user-groupmember-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Group Members')?></div>
                  <a href="#user-groupmember-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/groups</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api','A user access token with user_groups permission is required to view all other groups that person is a member of.')?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#group-plugin" rel="nofollow"><?php echo __d('api',"Group object")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/groups"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/groups"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-likes-item" class="resource hideBlock">
            <h3><?php echo __d('api',"Liked Items")?><a href="#user-likes-item" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api',"The items that this person has 'liked'.  ")?></p>
            <div id="user-liked-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api',"Liked Items")?></div>
                  <a href="#user-liked-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/likes</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token with user_likes permission is required to see all pages liked by that person.")?></p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <p><?php echo __d('api',"Reading this endpoint returns an array of item objects with the following additional field:")?></p>
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
                           <td><code>created_time</code></td>
                           <td><?php echo __d('api','datetime')?></td>
                           <td></td>
                           <td>
                             <?php echo __d('api','A timestamp indicating when the page was liked by this person.')?> 
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-notify-unread" class="resource hideBlock">
            <h3>Notification<a href="#user-notify-unread" class="permalink">&para;</a></h3>
            <p> The unread notifications that a person has.  </p>
            <p> Note :  Special endpoint  /user/me/notifications</p>
            <div id="user-notify-get" class="action get">
               <h4>
                  <div class="name">Notification</div>
                  <a href="#user-notify-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/notifications</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p>A user access token with manage_notifications permission is required to view that person's notifications.</p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  An array of Notification objects.
               </div>
            </div>
         </div>
         <div id="user-photo-person" class="resource hideBlock">
            <h3>Photo Tagged<a href="#user-photo-person" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Show')?>s all photos this person is tagged in.  </p>
            <p> Note :  Special endpoint  /user/me/photos</p>
            <div id="user-phototagged-get" class="action get">
               <h4>
                  <div class="name">Photo Tagged</div>
                  <a href="#user-phototagged-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/photos</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p>A user access token with user_photos permission is required to see all photos that person is tagged in .</p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  An array of Photo objects.
               </div>
            </div>
         </div>
         <div id="user-photo-uploaded" class="resource hideBlock">
            <h3>Photo Uploaded<a href="#user-photo-uploaded" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Show')?>s all photos were published by me.  </p>
            <p> Note :  Special endpoint  /user/me/photos/uploaded</p>
            <div id="user-phototagged-get" class="action get">
               <h4>
                  <div class="name">Photo Uploaded</div>
                  <a href="#user-phototagged-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/photos/uploaded</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p>A user access token with user_photos permission is required to see all photos that person has uploaded.</p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  An array of Photo objects.
               </div>
            </div>
         </div>
         <div id="user-profile-picture" class="resource">
            <h3><?php echo __d('api','Profile Picture')?><a href="#user-profile-picture" class="permalink">&para;</a></h3>
            <p><?php echo __d('api',"This person's profile picture.")?></p>
            <div id="user-profilepicture-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Profile Picture')?></div>
                  <a href="#user-profilepicture-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/photos/picture</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','Because profile pictures are always public on mooSocial, this call does not require any access token.')?></p>
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
                           <td><?php echo __d('api','enum{square,small,normal,large}')?></td>
                           <td></td>
                           <td><?php echo __d('api','You use this to get a pre-specified size of picture.')?></td>
                        </tr>
                        <tr>
                           <td><code>height</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Restrict the picture height to this size in pixels.')?></td>
                        </tr>
                        <tr>
                           <td><code>width</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Restrict the picture width to this size in pixels. When height and width are both used, the image will be scaled as close to the dimensions as possible and then cropped down')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>url</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The URL of the profile photo.')?></td>
                        </tr>
                        <tr>
                           <td><code>height</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Picture height in pixels. height and width are only returned when specified as modifiers.')?></td>
                        </tr>
                        <tr>
                           <td><code>width</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Picture width in pixels.')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-video-publish" class="resource">
            <h3><?php echo __d('api',"User's video")?><a href="#user-video-publish" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api',"All videos this person created.")?></p>
            <div id="user-videocreate-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api',"User's video")?></div>
                  <a href="#user-videocreate-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{id}/videos</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with user_videos permission is required to see all videos that person is tagged in .")?></p>
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
                           <td><code>page</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","default value is 1") ?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d("api","int") ?></td>
                           <td></td>
                           <td><?php echo __d("api","User id") ?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p><span><?php echo __d('api',"An array of")?><a href="#video-plugin" rel="nofollow"><?php echo __d('api',"Video objects")?></a></span></p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not exist.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/100/videos"</span></span>
                      </span>}</code></pre>
                  <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/10/videos"</span></span>
                      </span>}</code></pre>
               </div>
            </div>
         </div>
         <div id="user-video-tagged" class="resource hideBlock">
            <h3>Video Published<a href="#user-video-tagged" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Show')?>s all videos that were published to mooSocial by this person.  </p>
            <p> Note :  Special endpoint  /user/me/videos </p>
            <div id="user-phototagged-get" class="action get">
               <h4>
                  <div class="name">Video Published</div>
                  <a href="#user-phototagged-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/{user-id}/videos/uploaded</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p>A user access token with user_videos permission is required to see all videos that person is tagged in .</p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  An array of Video objects.
               </div>
            </div>
         </div>
        
         <div id="user-gcm-token" class="resource">
            <h3><?php echo __d('api','User Token')?><a href="#user-gcm-token" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Registering an ID issued by the GCM connection servers to the client app that allows it to receive messages')?></p>
            <div id="user-gcmtoken-post" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','User Token')?></div>
                  <a href="#user-gcmtoken-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/me/gcm/token</code>
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
                           <td><code>token</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED - GCM token')?></td>
                        </tr>
                        <tr>
                           <td><code>language</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTIONAL - default is eng')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when success')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","GCM_token_is_emtpy")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","GCM Token is emtpy")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d("api","GCM Token is emtpy")?></span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/me/gcm/token</span>
                        }
                     </code></pre>
               </div>
            </div>
         </div>
         <div id="user-delete-gcm-token" class="resource">
            <h3><?php echo __d('api','Delete Token')?><a href="#user-delete-gcm-token" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Delete GCM token.')?></p>
            <div id="user-delete-gcmtoken-post" class="action post col-md-6">
               <h4>
                  <div class="name"><?php echo __d('api','Delete Token')?></div>
                  <a href="#user-delete-gcmtoken-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/me/gcm/token/delete</code>
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
                           <td><code>token</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED - GCM token')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","GCM_token_is_emtpy")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","GCM Token is emtpy")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d("api","GCM Token is emtpy")?></span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/me/gcm/token/delete</span>
                        }
                     </code></pre>
               </div>
            </div>
            <div id="user-delete-gcmtoken-delete" class="action delete col-md-6">
               <h4>
                  <div class="name"><?php echo __d('api','Delete Token')?></div>
                  <a href="#user-delete-gcmtoken-post" class="method delete">DELETE</a><code class="uri">/user/me/gcm/token</code>
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
                           <td><code>token</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED - GCM token')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","GCM_token_is_emtpy")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","GCM Token is emtpy")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d("api","GCM Token is emtpy")?></span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/me/gcm/token/</span>
                        }
                     </code></pre>
               </div>
            </div>
            <div class="clear"></div>
         </div>
         <div id="user-register" class="resource">
            <h3><?php echo __d('api','User Register')?><a href="#user-register" class="permalink">&para;</a></h3>
            <p><?php echo __d('api',"Receiving  an token security  from the server  that uses it for registering new user (  It will help to protect the 'public' part of a REST service from spam? )")?> </p>
            <div id="user-register-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Register')?></div>
                  <a href="#user-register-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/register</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It is a public api')?> </p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
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
                           <td><code>key</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','AUTO defind , reuturn key string')?></td>
                        </tr>
                        <tr>
                           <td><code>birthday_require</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        <tr>
                           <td><code>disable_registration</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        <tr>
                           <td><code>require_gender</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        <tr>
                           <td><code>show_gender_signup</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        <tr>
                           <td><code>enable_unspecified_gender</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        <tr>
                           <td><code>show_birthday_signup</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','CORE defind , return TRUE or FALSE')?></td>
                        </tr>
                        
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-register-post" class="resource">
            <h3><?php echo __d('api','Sign up an account.')?><a href="#user-register-post" class="permalink">&para;</a></h3>
            <div id="user-register-receive" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','Sign up an account.')?></div>
                  <a href="#user-register-receive" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/register</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It is a public api')?> </p>
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
                         <td><code>key</code></td>
                         <td><?php echo __d('api','number')?></td>
                         <td></td>
                         <td><?php echo __d('api',"Get from '/user/register' api via 'GET' method")?></td>
                     </tr>
                        <tr>
                           <td><code>security_token</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td>md5(Api.api_secret_key + key)</td>
                        </tr>
                        <tr>
                           <td><code>email</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Required')?></td>
                        </tr>
                        <tr>
                           <td><code>password</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Required - Password must have at least 6 characters')?></td>
                        </tr>
                        <tr>
                           <td><code>password2</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Required - Verify password , need match with password')?></td>
                        </tr>
                        <tr>
                           <td><code>name</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Required')?></td>
                        </tr>
                        <tr>
                           <td><code>gender</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTIONAL - ( Male , Female ) , can be blank .')?></td>
                        </tr>
                        <tr>
                           <td><code>birthday</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTIONAL - Can be blank')?></td>
                        </tr>
                        <tr>
                           <td><code>registration_code</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','OPTIONAL')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","key_is_not_empty")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not empty!")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not empty!")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/register</span>
                        }
                     </code></pre>
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","key_is_not_invalid")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not invalid!")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not invalid!")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/register</span>
                        }
                     </code></pre>
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","security_token_is_invalid")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Security token is invalid")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Security token is invalid")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/register</span>
                        }
                     </code></pre>
               </div>
            </div>
         </div>
         <div id="user-forgot" class="resource">
            <h3><?php echo __d('api','User Forgot')?><a href="#user-forgot" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Set key for reset password form')?>  </p>
            <div id="user-forgot-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','User Forgot')?></div>
                  <a href="#user-forgot-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/user/forgot</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It is a public api')?> </p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?></strong>
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
                           <td><code>key</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','AUTO defind , reuturn key string')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="user-forgot-post" class="resource">
            <h3><?php echo __d('api','Forgot Password')?><a href="#user-forgot-post" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Reset and Send forgot password email to email user .')?> </p>
            <div id="user-forgot-receive" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','Send forgot password')?></div>
                  <a href="#user-forgot-receive" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/user/forgot</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api','It is a public api')?> </p>
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
                           <td><code>key</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED')?></td>
                        </tr>
                        <tr>
                           <td><code>email</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED - Email user')?></td>
                        </tr>
                     </tbody>
                  </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","key_is_not_empty")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not empty!")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not empty!")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/forgot</span>
                        }
                     </code></pre>
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","key_is_not_invalid")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not invalid!")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Key is not invalid!")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/forgot</span>
                        }
                     </code></pre>
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","email_does_not_exist")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Email does not exist")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Email does not exist")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/forgot</span>
                        }
                     </code></pre>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                    <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d("api","key_is_expired")?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Key is expired!")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Key is expired!")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/user/forgot</span>
                        }
                     </code></pre>
                   
               </div>
            </div>
         </div>
         
    <div id="user-follow" class="resource">
        <h3><?php echo __d('api','Follow user') ?><a href="#user-follow" class="permalink">&para;</a></h3>
        <div id="post-user-follow" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Follow user') ?></div>
                <a href="#post-user-follow" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/follow</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Follow user') ?>
                </span>
            </p>
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
                            <td><code>user_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id')?></td>
                        </tr>
                    </tbody>
                </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Already Followed") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Already Followed") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/follow"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/follow"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="user-unfollow" class="resource">
        <h3><?php echo __d('api','UnFollow user') ?><a href="#user-unfollow" class="permalink">&para;</a></h3>
        <div id="post-user-unfollow" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','UnFollow user') ?></div>
                <a href="#post-user-unfollow" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/unfollow</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','UnFollow user') ?>
                </span>
            </p>
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
                            <td><code>user_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id')?></td>
                        </tr>
                    </tbody>
                </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Already UnFollowed") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Already UnFollowed") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/unfollow"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/unfollow"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
         <div id="user-block" class="resource">
        <h3><?php echo __d('api','Block user') ?><a href="#user-block" class="permalink">&para;</a></h3>
        <div id="post-user-block" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Block user') ?></div>
                <a href="#post-user-block" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/block</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Block user') ?>
                </span>
            </p>
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
                            <td><code>user_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id')?></td>
                        </tr>
                    </tbody>
                </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You cannot block to yourself") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You cannot block to yourself") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/block"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You already block this user") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You already block this user") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/block"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/block"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
         <div id="user-unblock" class="resource">
        <h3><?php echo __d('api','UnBlock user') ?><a href="#user-unblock" class="permalink">&para;</a></h3>
        <div id="post-user-unblock" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','UnBlock user') ?></div>
                <a href="#post-user-unblock" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">user/unblock</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','UnBlock user') ?>
                </span>
            </p>
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
                            <td><code>user_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id')?></td>
                        </tr>
                    </tbody>
                </table>
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
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','Return message when done')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This user is not blocked by you") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","This user is not blocked by you") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/unblock"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You cannot unblock to yourself") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","You cannot unblock to yourself") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/unblock"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"User not found.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/user/unblock"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
      </section>