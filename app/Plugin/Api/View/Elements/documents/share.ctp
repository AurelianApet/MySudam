<section id="share-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Share') ?><a href="#share-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to share plugin') ?></p>

    <div id="share-wall" class="resource">
        <h3><?php echo __d('api','Share object to my wall') ?><a href="#share-wall" class="permalink">&para;</a></h3>
        <div id="post-share-wall" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object to my wall') ?></div>
                <a href="#post-share-wall" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/wall</code>
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
                            <td><code>share_type</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED share types: #me, #friend, #group, #email')?></td>
                        </tr>
                        <tr>
                            <td><code>action</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED action is type of activity')?></td>
                        </tr>
                        <tr>
                            <td><code>object_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code>param</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','OPTIONAL Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | Group_Group | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','OPTIONAL share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>userTagging</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of people tagged in this post')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>friendSuggestion</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','OPTIONAL for other share types, REQUIRED for share type #friend, Comma-separated list of user IDs of friends in this post')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>groupSuggestion</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','OPTIONAL for other share types, REQUIRED for share type #group, Comma-separated list of group IDs of groups in this post')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>email</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','OPTIONAL for other share types, REQUIRED for share type #email, Comma-separated list of emails')?></p>
                            </td>
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
                            <td><code>meesage</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','Return message when success')?></p></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Share type cound not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Share type cound not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Parameter error : Object id could not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Parameter error : Object id could not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Message')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Message')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d('api','Message can be :')?></p>
                <p><?php echo __d('api','# Missing parameter : Share type is REQUIRED')?></p>
                <p><?php echo __d('api','# Missing parameter : Action is REQUIRED')?></p>
                <p><?php echo __d('api','# Missing parameter : Object_id is REQUIRED')?></p>
                <p><?php echo __d('api','# Missing parameter : friendSuggestion is REQUIRED')?></p>
                <p><?php echo __d('api','# Missing parameter : groupSuggestion is REQUIRED')?></p>
                <p><?php echo __d('api','# Missing parameter : email is REQUIRED')?></p>
               
            </div>
        </div>
    </div>
<!--    <div id="share-wall" class="resource">
        <h3><?php echo __d('api','Share object to my wall') ?><a href="#share-wall" class="permalink">&para;</a></h3>
        <div id="post-share-wall" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object to my wall') ?></div>
                <a href="#post-share-wall" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/wall</code>
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
                            <td><code><?php echo __d('api','object_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','param')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | Group_Group | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','message')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','userTagging')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of people tagged in this post')?></p>
                            </td>
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
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/wall"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="share-friend" class="resource">
        <h3><?php echo __d('api','Share object to friend wall') ?><a href="#share-friend" class="permalink">&para;</a></h3>
        <div id="post-share-friend" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object to friend wall') ?></div>
                <a href="#post-share-friend" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/friend</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Share object to friend wall') ?>
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
                            <td><code><?php echo __d('api','object_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','param')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | Group_Group | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','message')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','userTagging')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of people tagged in this post')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','friendSuggestion')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of friend suggesion')?></p>
                            </td>
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
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/friend"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/friend"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/friend"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="share-group" class="resource">
        <h3><?php echo __d('api','Share object to group wall') ?><a href="#share-group" class="permalink">&para;</a></h3>
        <div id="post-share-group" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object to group wall') ?></div>
                <a href="#post-share-group" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/group</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Share object to group wall') ?>
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
                            <td><code><?php echo __d('api','object_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','param')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | Group_Group | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','message')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','userTagging')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of people tagged in this post')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','groupSuggestion')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of group suggesion')?></p>
                            </td>
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
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/group"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/group"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/group"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"You are not in group id : 3 . Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"You are not in group id : 3 . Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/group"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="share-email" class="resource">
        <h3><?php echo __d('api','Share object through email') ?><a href="#share-email" class="permalink">&para;</a></h3>
        <div id="post-share-email" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object through email') ?></div>
                <a href="#post-share-email" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/email</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Share object to through email') ?>
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
                            <td><code><?php echo __d('api','object_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','param')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | email_email | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','message')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','email')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of email to share object')?></p>
                            </td>
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
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/email"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/email"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/email"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="share-msg" class="resource">
        <h3><?php echo __d('api','Share object to message with friend') ?><a href="#share-msg" class="permalink">&para;</a></h3>
        <div id="post-share-message" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Share object to message with friend') ?></div>
                <a href="#post-share-message" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">share/msg</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Share object to message with friend') ?>
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
                            <td><code><?php echo __d('api','object_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','id of object')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','param')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Param is type of object .')?></p>
                                <p>( Activity | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | message_message | Event_Event )</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','message')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Share message')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','friendSuggestion')?></code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Comma-separated list of user IDs of friend suggesion')?></p>
                            </td>
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
                        "<span class="hljs-attribute">success</span>": <span class="hljs-value"><span class="hljs-string">true</span></span>
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"This is private item. Can not share"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/msg"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Param not correct. Please check again"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/msg"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Items not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/share/msg"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>-->


</section>