<section id="friends-group" class="resource-group">
    <h2 class="group-heading"><?php echo __d('api','Friends')?> <a href="#friends-group" class="permalink">&para;</a></h2>
    <div id="friend-get-list" class="resource">
        <h3><?php echo __d('api','Get Friend lists')?><a href="#friend-get-list" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Get list of your friend .')?></p>
        <div id="friend-list-get" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get list of your friend .')?></div>
                <a href="#friend-list-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/friend/list</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><code>totalFriendCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total friend count') ?></td>
                        </tr>
                        <tr>
                            <td><code>friend</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','An array of user friend') ?>
                                <pre><code>
                                        {
                                            <span class="hljs-attribute">url   </span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1</span>
                                            <span class="hljs-attribute">type   </span> :  <span class="hljs-value">User</span>
                                            <span class="hljs-attribute">id   </span> :  <span class="hljs-value">1</span>
                                            <span class="hljs-attribute">name   </span> :  <span class="hljs-value">Admin</span>
                                            <span class="hljs-attribute">photoCount   </span> :  <span class="hljs-value">10</span>
                                            <span class="hljs-attribute">friendCount   </span> :  <span class="hljs-value">5</span>
                                            <span class="hljs-attribute">image   </span> :  <span class="hljs-value">
                                                                                        "600": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "50_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "100_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "200_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"
                                                                                        </span>
                                        }
                                        </code></pre>
                            </td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No friend found.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No friend found.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/list"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-get-user-list" class="resource">
        <h3><?php echo __d('api',"Get User friend lists")?><a href="#friend-get-user-list" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api',"Get the user’s friends.")?></p>
        <div id="friend-user-list-get" class="action get">
            <h4>
                <div class="name"><?php echo __d('api',"Get the user’s friends.")?></div>
                <a href="#friend-user-list-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/friend/{user_id}/list</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><code>totalFriendCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total friend count') ?></td>
                        </tr>
                        <tr>
                            <td><code>friend</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','An array of user friend') ?>
                                <pre><code>
                                        {
                                            <span class="hljs-attribute">url   </span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/users/view/1</span>
                                            <span class="hljs-attribute">type   </span> :  <span class="hljs-value">User</span>
                                            <span class="hljs-attribute">id   </span> :  <span class="hljs-value">1</span>
                                            <span class="hljs-attribute">name   </span> :  <span class="hljs-value">Admin</span>
                                            <span class="hljs-attribute">photoCount   </span> :  <span class="hljs-value">10</span>
                                            <span class="hljs-attribute">friendCount   </span> :  <span class="hljs-value">5</span>
                                            <span class="hljs-attribute">image   </span> :  <span class="hljs-value">
                                                                                        "600": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "50_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "100_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg",
                                                                                        "200_square": "<?php echo FULL_BASE_URL . $this->request->base ?>/uploads/users/avatar/user_id/prefix_name.jpg"
                                                                                        </span>
                                        }
                                        </code></pre>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not have access to this resource.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not have access to this resource.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/3/list"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/2/list"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-post-friend-add" class="resource">
        <h3><?php echo __d('api','Add friend')?><a href="#friend-post-friend-add" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Send friend request to a user.')?></p>
        <div id="friend-user-add-post" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Send friend request to a user.')?></div>
                <a href="#friend-user-add-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/friend/add</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><?php echo __d('api','User id to whom sent the friend request by logged-in user.') ?></td>
                        </tr>
                        <tr>
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Message sent to user whom you sent request .') ?></td>
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
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success') ?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend already .')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend already .')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/add"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User does not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/add"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>405</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You have already sent a friend request to this user')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You have already sent a friend request to this user')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/add"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-post-friend-accept" class="resource">
        <h3><?php echo __d('api','Accept friend request')?><a href="#friend-post-friend-accept" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Accept friend request')?></p>
        <div id="friend-user-accept-post" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Accept friend request')?></div>
                <a href="#friend-user-accept-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/friend/accept</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Friend request id .') ?></td>
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
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success') ?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/accept"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-post-friend-reject" class="resource">
        <h3><?php echo __d('api','Reject friend request')?><a href="#friend-post-friend-reject" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Reject friend request')?></p>
        <div id="friend-user-reject-post" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Reject friend request')?></div>
                <a href="#friend-user-reject-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/friend/reject</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Friend request id .') ?></td>
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
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success') ?></td>
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
                         "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/reject"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-post-friend-cancel" class="resource">
        <h3><?php echo __d('api','Cancel friend request')?><a href="#friend-post-friend-cancel" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Cancel the friend request sent to a user.')?></p>
        <div id="friend-user-cancel-post" class="action post">
            <h4>
                <a href="#friend-user-cancel-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/friend/cancel</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><?php echo __d('api','User id to whom sent the friend request by logged-in user.') ?></td>
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
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success') ?></td>
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
                         "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Friend request not found.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/cancel"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="friend-post-friend-delete" class="resource">
        <h3><?php echo __d('api','Delete friendship')?><a href="#friend-post-friend-delete" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Remove friendship with a user .')?></p>
        <div id="friend-user-delete-post" class="action post">
            <h4>
                <a href="#friend-user-delete-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/friend/delete</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api',"It's required a user access token.")?></p>
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
                            <td><?php echo __d('api','user id of the friend to remove as friend by logged-in user.') ?></td>
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
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success') ?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not a friend of this user')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not a friend of this user')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/friend/delete"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
</section>