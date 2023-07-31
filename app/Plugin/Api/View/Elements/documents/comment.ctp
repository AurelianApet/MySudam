<section id="comment-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Comment') ?><a href="#blog-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to comment plugin') ?></p>
    <div id="comment-get-comment" class="resource">
        <h3><?php echo __d('api','View comment from item')?><a href="#comment-get-comment" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Get comment from an item like  feed , topic , blog, video, photo...')?></p>
        <div id="comment-get" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get comment from item')?></div>
                <a href="#comment-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">{objectType}/comment/view/{item_id}</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object Type can be ( conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>item_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
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
                            <td><code>commentCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total comment of an items.') ?></td>
                        </tr>
                        <tr>
                            <td><code>commentObject</code></td>
                            <td><?php echo __d('api','objectType')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','An array of comment') ?>
                                <pre><code>
                        {
                            <span class="hljs-attribute">id</span> :  <span class="hljs-value">100</span>
                            <span class="hljs-attribute">userId</span> :  <span class="hljs-value">2</span>
                            <span class="hljs-attribute">userName</span> :  <span class="hljs-value">Admin</span>
                           <span class="hljs-attribute">edited</span> :  <span class="hljs-value">false</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d("api","comment to album") ?> </span>
                            <span class="hljs-attribute">likeCount</span> :  <span class="hljs-value">0</span>	
							<span class="hljs-attribute">dislikeCount</span> :  <span class="hljs-value">0</span>
                            <span class="hljs-attribute">created</span> :  <span class="hljs-value">2016-08-31 04:12:08</span>	
							<span class="hljs-attribute">thumbnail</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/uploads/comments/thumbnail/image.jpg</span>
                        }
                     </code></pre>
                            </td>
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
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value"><?php echo __d('api',"This photo not allow to comment") ?></span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d('api',"This photo not allow to comment") ?></span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Photo_Photo/comment/view/120</span>
                        }
                     </code></pre>
            </div>
        </div>
    </div>
    <div id="comment-get-list-edited" class="resource">
        <h3><?php echo __d('api','Get list of edited comment')?><a href="#comment-get-list-edited" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Get list of edited comment.')?></p>
        <div id="comment-get-list" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get list of edited comment.')?></div>
                <a href="#comment-get-list" class="method get"><?php echo __d('api','GET')?></a><code class="uri">{objectType}/comment/{item_id}/edited/{comment_id}</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object Type can be ( activity | conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>item_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( activity_id ,  comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>comment_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Comment id .') ?></td>
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
                            <td><code>editCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total edited count') ?></td>
                        </tr>
                        <tr>
                            <td><code>editObject</code></td>
                            <td><?php echo __d('api','objectType')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','An array of comment') ?>
                                <pre><code>
                        {
                            <span class="hljs-attribute">id</span> :  <span class="hljs-value">100</span>
                            <span class="hljs-attribute">userId</span> :  <span class="hljs-value">2</span>
                            <span class="hljs-attribute">userName</span> :  <span class="hljs-value">Admin</span>
                           <span class="hljs-attribute">content</span> :  <span class="hljs-value"><?php echo __d("api","This is an edited comment") ?></span>
                            <span class="hljs-attribute">created</span> :  <span class="hljs-value">2016-08-31 04:12:08</span>	
							<span class="hljs-attribute">status</span> :  <span class="hljs-value"><?php echo __d("api","Added photo attachment.") ?></span>
                        }
                     </code></pre>
                            </td>
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
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value"><?php echo __d('api',"This photo not allow to comment") ?></span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d('api',"This photo not allow to comment") ?></span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Photo_Photo/comment/116/edited/51</span>
                        }
                     </code></pre>
            </div>
        </div>
    </div>
    <div id="comment-post-comment" class="resource">
        <h3><?php echo __d('api','Share new comment')?><a href="#comment-post-comment" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Share new comment')?></p>
        <div id="comment-post-comment" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Post new comment')?></div>
                <a href="#comment-post-comment" class="method post"><?php echo __d('api','POST')?></a><code class="uri">{objectType}/comment</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object Type can be ( conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>text</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The text content of comment') ?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','is the path which is uploaded by using the api : ') ?><a href="#file-upload">/file</a></td>
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
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','Comment can not be empty')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','Comment can not be empty')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/blog/comment</span>
                        }
                     </code></pre>
                
                <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"not_group_member"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','This photo is in a group . Only group members can leave comment')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','This photo is in a group . Only group members can leave comment')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/photo/comment</span>
                        }
                     </code></pre>
                <pre><code>
                        {
							<span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"topic_is_blocked"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api',"This topic has been locked")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api',"This topic has been locked")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/topic/comment</span>
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
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api',"Access denied")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api',"Access denied")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/conversation/comment</span>
                        }
                     </code></pre>
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api',"Only friends of the poster can view this item")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api',"Only friends of the poster can view this item")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/blog/comment</span>
                        }
                     </code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api',"items not exist.")?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api',"items not exist.")?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/blog/comment</span>
                        }
                     </code></pre>
            </div>
        </div>
    </div>
    <div id="comment-edit-comment" class="resource">
        <h3><?php echo __d('api','Edit a comment')?><a href="#comment-edit-comment" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Edit a comment on module like  Topic , Photo , Blog , Video ,....')?></p>
        <div id="post-comment-edit" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit a comment')?></div>
                <a href="#post-comment-edit" class="method post"><?php echo __d('api','POST')?></a><code class="uri">{objectType}/comment/edit</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object Type can be (conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>comment_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Comment id') ?></td>
                        </tr>
                        <tr>
                            <td><code>text</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The text content of comment') ?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','is the path which is uploaded by using the api : ') ?><a href="#file-upload">/file</a></td>
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
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment can not be empty.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment can not be empty.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Blog_Blog/comment/edit</span>
                        }
                     </code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Blog_Blog/comment/edit</span>
                        }
                     </code></pre>
            </div>
        </div>
        <div id="put-comment-edit" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit a comment')?></div>
                <a href="#put-comment-edit" class="method put"><?php echo __d('api','PUT')?></a><code class="uri">{objectType}/comment</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object Type can be (conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>comment_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Comment id') ?></td>
                        </tr>
                        <tr>
                            <td><code>text</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The text content of comment') ?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','is the path which is uploaded by using the api : ') ?><a href="#file-upload">/file</a></td>
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
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment can not be empty.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment can not be empty.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Blog_Blog/comment</span>
                        }
                     </code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/Blog_Blog/comment</span>
                        }
                     </code></pre>
            </div>
        </div>
    </div>
    <div id="comment-delete-comment" class="resource">
        <h3><?php echo __d('api','Delete a comment')?><a href="#comment-delete-comment" class="permalink">&para;</a></h3>
        <p> <?php echo __d('api','Delete a comment on module like  Topic , Photo , Blog , Video ,....')?></p>
        <div id="post-comment-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete a comment')?></div>
                <a href="#post-comment-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">{objectType}/comment/delete</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object can be (conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>item_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>comment_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Comment id') ?></td>
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
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/blog/comment/edit</span>
                        }
                     </code></pre>
            </div>
        </div>
        <div id="delete-comment-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete a comment')?></div>
                <a href="#delete-comment-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">{objectType}/comment/delete</code>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Object can be (conversation | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic)') ?></td>
                        </tr>
                        <tr>
                            <td><code>item_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','item id ( comment_id , photo_id .....)') ?></td>
                        </tr>
                        <tr>
                            <td><code>comment_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Comment id') ?></td>
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
                <pre><code>
                        {
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d("api","Comment not found.") ?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/blog/comment/edit</span>
                        }
                     </code></pre>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>