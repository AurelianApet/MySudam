<section id="blog-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Blog') ?><a href="#blog-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to blog plugin') ?></p>
    <div id="blog-plugin" class="resource">
        <h3><?php echo __d('api','Blog Object') ?><a href="#blog-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','Blog id')?></td>
                </tr>
                <tr>
                    <td><code>title</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Blog title') ?></td>
                </tr>
                <tr>
                    <td><code>body</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Blog body')?></td>
                </tr>
                <tr>
                    <td><code>thumbnail</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','A array of blog thumbnail .') ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/blogs/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>categoryId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Blog category id') ?></td>
                </tr>
                <tr>
                    <td><code>privacy</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td>1</td>
                    <td>
                        <?php echo __d('api','The privacy settings of the post.') ?>
                        <pre><code>
                                        {
                                            <span class="hljs-attribute">description    </span> :  <span class="hljs-value"><?php echo __d('api','Number that describes the privacy settings, as they would appear on mooSocial')?></span>
                                            <span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d('api',"The actual privacy setting. enum{EVERYONE = 1 , ALL_FRIENDS = 2 , SELF = 3}")?></span>
                                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>commentCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total comment count on a blog')?></td>
                </tr>
                <tr>
                    <td><code>shareCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total share count on a blog') ?></td>
                </tr>
                <tr>
                    <td><code>likeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total like count on a blog')?></td>
                </tr>
                <tr>
                    <td><code>dislikeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total dislike count on a blog')?></td>
                </tr>
                <tr>
                    <td><code>userId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Owner id') ?></td>
                </tr>
                <tr>
                    <td><code>userName</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Owner name')?></td>
                </tr>
                <tr>
                    <td><code>userUrl</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Owner link to profile')?></td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Blog url')?></td>
                </tr>
                <tr>
                    <td><code>published</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Created time')?></td>
                </tr>
                <tr>
                    <td><code>publishedTranslated</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','The time the post was initially published with text translation')?></td>
                </tr>
                <tr>
                    <td><code>type</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Type of blog object (Blog_Blog)')?></td>
                </tr>
                <tr>
                    <td><code>shareAction</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','Action type when share detail of Blog (blog_item_detail)')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#blog-view-detail">blog/{blog_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerLiked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','Return TRUE if current user liked this blog')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#blog-view-detail">blog/{blog_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerDisliked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','Return TRUE if current user disliked this blog')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#blog-view-detail">blog/{blog_id}</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="blog-all-blog" class="resource">
        <h3><?php echo __d('api','Get All Blog') ?><a href="#blog-all-blog" class="permalink">&para;</a></h3>
        <div id="get-all-blog" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all blog') ?></div>
                <a href="#get-all-blog" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/all</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of all blogs') ?>
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
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Page number')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/all"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-my-blog" class="resource">
        <h3><?php echo __d('api','Get My Blog') ?><a href="#blog-my-blog" class="permalink">&para;</a></h3>
        <div id="get-my-blog" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my blog') ?></div>
                <a href="#get-my-blog" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/my</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my blogs') ?>
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
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Page number')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/my"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-friends-blog" class="resource">
        <h3><?php echo __d('api','Get Friends Blog') ?><a href="#blog-friends-blog" class="permalink">&para;</a></h3>
        <div id="get-friends-blog" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get friends blog') ?></div>
                <a href="#get-friends-blog" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/friends</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of friends blogs') ?>
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
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Page number')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/friends"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-popular-blog" class="resource">
        <h3><?php echo __d('api','Get Popular Blog') ?><a href="#blog-popular-blog" class="permalink">&para;</a></h3>
        <div id="get-popular-blog" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get popular blog') ?></div>
                <a href="#get-popular-blog" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/popular</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of popular blogs') ?>
                </span>
            </p>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <p>
                    <span>
                     <?php echo __d('api','An array of ') ?><a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/popular"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-category-blog" class="resource">
        <h3><?php echo __d('api','Browse blog from a category') ?><a href="#blog-view-detail" class="permalink">&para;</a></h3>
        <div id="get-blog-category" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse blog from a category') ?></div>
                <a href="#get-blog-category" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/category/{category_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get blog from a category') ?>
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
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Page number')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
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
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','category id') ?></td>
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
                     <?php echo __d('api','An array of') ?> <a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/category/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-view-detail" class="resource">
        <h3><?php echo __d('api','View Blog Detail') ?><a href="#blog-view-detail" class="permalink">&para;</a></h3>
        <div id="get-blog-detail" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get blog detail') ?></div>
                <a href="#get-blog-detail" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">blog/{blog_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','View blog detail by blog id') ?>
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
                            <td><code>blog_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Blog id') ?></td>
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
                     <?php echo __d('api','A') ?> <a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
			"<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','friends_only')?>"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/2"</span></span>
          </span>}</code></pre>
                <pre><code>{
			"<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','only_me')?>"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/3"</span></span>
          </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/4000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-filter-blog" class="resource">
        <h3><?php echo __d('api','Filter blog') ?><a href="#blog-filter-blog" class="permalink">&para;</a></h3>
        <div id="post-blog-filter" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Filter blog') ?></div>
                <a href="#post-blog-filter" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">blog/filter</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Filter blog by keyword') ?>
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
                            <td><code>keyword</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Keyword to search')?></td>
                        </tr>
                        <tr>
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Page number')?></td>
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
                     <?php echo __d('api','An array of') ?><a href="#blog-plugin"><?php echo __d('api','blog object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-create-blog" class="resource">
        <h3><?php echo __d('api','Create blog') ?><a href="#blog-create-blog" class="permalink">&para;</a></h3>
        <div id="post-blog-create" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Create blog') ?></div>
                <a href="#post-blog-create" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">blog/create</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Create a blog') ?>
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
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog title')?></td>
                        </tr>
                        <tr>
                            <td><code>body</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog body')?></td>
                        </tr>
                        <tr>
                            <td><code>thumbnail</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of blog , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,blog,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog category id')?></p>
                            </td>
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
						"<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">10</span></span>,
                        </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/create"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-edit-blog" class="resource">
        <h3><?php echo __d('api','Edit blog') ?><a href="#blog-edit-blog" class="permalink">&para;</a></h3>
        <div id="post-blog-edit" class="action post col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit blog') ?></div>
                <a href="#post-blog-edit" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">blog/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a blog') ?>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Blog id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog title')?></td>
                        </tr>
                        <tr>
                            <td><code>body</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog body')?></td>
                        </tr>
                        <tr>
                            <td><code>thumbnail</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of blog , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,blog,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog category id')?></p>
                            </td>
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
						"<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">10</span></span>,
                        </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/edit"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="put-blog-edit" class="action put col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit blog') ?></div>
                <a href="#put-blog-edit" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">blog/{id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a blog') ?>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Blog id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog title')?></td>
                        </tr>
                        <tr>
                            <td><code>body</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Blog body')?></td>
                        </tr>
                        <tr>
                            <td><code>thumbnail</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of blog , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,blog,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Blog category id')?></p>
                            </td>
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
						"<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-string">10</span></span>,
                        </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/10"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','blog body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/10"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/10"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="blog-delete-blog" class="resource">
        <h3><?php echo __d('api','Delete Blog')?><a href="#blog-delete-blog" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete Blog')?></p>
        <div id="get-blog-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete blog')?></div>
                <a href="#get-blog-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/blog/delete/{blog_id}</code>
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
                            <td><code>blog_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Blog id')?></td>
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
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Access denied')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Access denied')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-blog-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete blog')?></div>
                <a href="#delete-blog-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/blog/delete/{blog_id}</code>
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
                            <td><code>blog_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Blog id')?></td>
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
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Access denied')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Access denied')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Blog not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/blog/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>