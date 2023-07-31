<section id="report-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Report') ?><a href="#blog-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','Report an item like blog, topic, video , ...') ?></p>
    <div id="report" class="resource">
        <h3><?php echo __d('api','Report an items') ?><a href="#report" class="permalink">&para;</a></h3>
        <div id="post-report" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Report an items') ?></div>
                <a href="#post-report" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">{objectType}/report</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Report an item like blog, topic, video , ...') ?>
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
                            <td><code>objectType</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api',"Object type can be (activity | core_activity_comment | comment | Blog_Blog | Photo_Album | Photo_Photo | Video_Video | Topic_Topic | .... )")?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>target_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><p><?php echo __d('api',"object id (blog_id , user_id , photo_id .....)")?></p></td>
                        </tr>
                        <tr>
                            <td><code>reason</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><p><?php echo __d('api',"Reason text why you report this object")?></p></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Reason is required')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Reason is required')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/Blog_Blog/report"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','duplicated report')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','duplicated report')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/Topic_Topic/report"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
						"<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"friends_only"</span></span>,
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/Blog_Blog/report"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','items not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','items not exist.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/Blog_Blog/report"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
</section>