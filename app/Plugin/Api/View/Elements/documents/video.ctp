<section id="video-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','video') ?><a href="#video-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to video plugin') ?></p>
    <div id="video-plugin" class="resource">
        <h3><?php echo __d('api','video Object') ?><a href="#video-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','video id')?></td>
                </tr>
                <tr>
                    <td><code>published</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Video created time') ?></td>
                </tr>
                <tr>
                    <td><code>publishedTranslated</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','The time the post was initially published with text translation') ?></td>
                </tr>
                <tr>
                    <td><code>title</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','video title') ?></td>
                </tr>
                <tr>
                    <td><code>description</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','video description')?></td>
                </tr>
                <tr>
                    <td><code>thumbnail</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','A array of video thumbnail .') ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Video url')?></td>
                </tr>
                <tr>
                    <td><code>videoType</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Type of video only allow( youtube | vimeo )')?></td>
                </tr>
                <tr>
                    <td><code>videoSourceId</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td>Ex: youtube : 34PmUiKPrQg</td>
                    <td><?php echo __d('api','Video source ID')?></td>
                </tr>
                <tr>
                    <td><code>caterogyId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','video category id') ?></td>
                </tr>
                <tr>
                    <td><code>privacy</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td>1</td>
                    <td>
                        <?php echo __d('api','The privacy settings of the post.') ?>
                        <pre><code>
                                        {
                                            <span class="hljs-attribute">description    </span> :  <span class="hljs-value">"<?php echo __d("api","Number that describes the privacy settings, as they would appear on mooSocial") ?>"</span>
                                            <span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d("api","The actual privacy setting. enum{EVERYONE = 1 , ALL_FRIENDS = 2 , SELF = 3}")?></span>
                                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>commentCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total comment count on a video')?></td>
                </tr>
                <tr>
                    <td><code>shareCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total share count on a video') ?></td>
                </tr>
                <tr>
                    <td><code>likeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total like count on a video')?></td>
                </tr>
                <tr>
                    <td><code>dislikeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total dislike count on a video')?></td>
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
                    <td><code>userAvatar</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api',"An array of owner's avatar") ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/50_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/100_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/200_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/videos/thumbnail/6/600_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>type</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Type of video object (Video_Video)')?></td>
                </tr>
                <tr>
                    <td><code>shareAction</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','Action type when share detail of Video (video_item_detail)')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#video-view-detail">video/{video_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerLiked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td><?php echo __d('api','Return TRUE if current user liked this photo')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#video-view-detail">video/{video_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerDisliked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','Return TRUE if current user disliked this photo')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#video-view-detail">video/{video_id}</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="video-all-video" class="resource">
        <h3><?php echo __d('api','Get All video') ?><a href="#video-all-video" class="permalink">&para;</a></h3>
        <div id="get-all-video" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all video') ?></div>
                <a href="#get-all-video" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/all</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of all videos') ?>
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
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of ') ?><a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/all"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-my-video" class="resource">
        <h3><?php echo __d('api','Get My video') ?><a href="#video-my-video" class="permalink">&para;</a></h3>
        <div id="get-my-video" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my video') ?></div>
                <a href="#get-my-video" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/my</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my videos') ?>
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
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of ') ?><a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/my"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-friends-video" class="resource">
        <h3><?php echo __d('api','Get Friends video') ?><a href="#video-friends-video" class="permalink">&para;</a></h3>
        <div id="get-friends-video" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get friends video') ?></div>
                <a href="#get-friends-video" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/friends</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of friends videos') ?>
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
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of ') ?><a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/friends"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-popular-video" class="resource">
        <h3><?php echo __d('api','Get Popular video') ?><a href="#video-popular-video" class="permalink">&para;</a></h3>
        <div id="get-popular-video" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get popular video') ?></div>
                <a href="#get-popular-video" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/popular</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of popular videos') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/popular"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-category-video" class="resource">
        <h3><?php echo __d('api','Browse video from a category') ?><a href="#video-view-detail" class="permalink">&para;</a></h3>
        <div id="get-video-category" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse video from a category') ?></div>
                <a href="#get-video-category" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/category/{category_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get video from a category') ?>
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
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','category id') ?></td>
                        </tr>
                        <tr>
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of') ?> <a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/category/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-group-video" class="resource">
        <h3><?php echo __d('api','Browse video from a group') ?><a href="#video-group-detail" class="permalink">&para;</a></h3>
        <div id="get-video-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse video from a group') ?></div>
                <a href="#get-video-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/group/{group_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get video from a group') ?>
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
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','group id') ?></td>
                        </tr>
                        <tr>
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of') ?> <a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only group members can view topics')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only group members can view topics')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/group/5"</span></span>
						  </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/group/5"</span></span>
						  </span>}</code></pre>
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/group/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-view-detail" class="resource">
        <h3><?php echo __d('api','View video detail by video id') ?><a href="#video-view-detail" class="permalink">&para;</a></h3>
        <div id="get-video-detail" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','View video detail by video id') ?></div>
                <a href="#get-video-detail" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">video/{video_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','View video detail by video id') ?>
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
                            <td><code>video_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','video id') ?></td>
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
                     <?php echo __d('api','A') ?> <a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
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
                            <td><code>groupId</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group id when posted video in a group') ?></td>
                        </tr>
                        <tr>
                            <td><code>groupName</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group name when posted video in a group') ?></td>
                        </tr>
                        <tr>
                            <td><code>groupUrl</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group url when posted video in a group') ?></td>
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
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/5"</span></span>
						  </span>}</code></pre>
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/5"</span></span>
						  </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-filter-video" class="resource">
        <h3><?php echo __d('api','Filter video') ?><a href="#video-filter-video" class="permalink">&para;</a></h3>
        <div id="post-video-filter" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Filter video') ?></div>
                <a href="#post-video-filter" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">video/filter</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Filter video by keyword') ?>
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
                           <td>Paging</td>
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
                     <?php echo __d('api','An array of') ?> <a href="#video-plugin"><?php echo __d('api','video object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','video not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-fetch-video" class="resource">
        <h3><?php echo __d('api','Fetch video') ?><a href="#video-fetch-video" class="permalink">&para;</a></h3>
        <div id="post-video-fetch" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Fetch video') ?></div>
                <a href="#post-video-fetch" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">video/fetch</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Fetch a video by url') ?>
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
                            <td><code>source</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Type of video ( youtube | vimeo )')?></td>
                        </tr>
                        <tr>
                            <td><code>url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td>
                                <p>youtube :  https://www.youtube.com/watch?v=sbfks7HdRoE </p>
                                <p>vimeo : https://vimeo.com/180525552  </p>
                            </td>
                            <td><?php echo __d('api','Url of video')?></td>
                        </tr>
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Group id when fetch video in a group')?></p>
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
                            <td><code>source</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Video source ( youtube | vimeo )')?></td>
                        </tr>
                        <tr>
                            <td><code>sourceId</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Video source id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"Title of video parsed by video's source")?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"Description of video parsed by video's source")?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api',"Privacy of video ( default : 1)")?></td>
                        </tr>
                        <tr>
                            <td><code>thumb</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api',"Video thumb")?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Invalid URL. Please try again.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api',"Invalid URL. Please try again.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/fetch"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-save-video" class="resource">
        <h3><?php echo __d('api','Save video') ?><a href="#video-save-video" class="permalink">&para;</a></h3>
        <div id="post-video-save" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Save video') ?></div>
                <a href="#post-video-save" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">video/save</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Save a video') ?>
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
                            <td><code>source</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Type of video ( youtube | vimeo )')?></td>
                        </tr>
                        <tr>
                            <td><code>source_id</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Video source id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF title set blank , title of video will be set by title of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF video description is blank , description will be set by description of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,video,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video category id')?></p>
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
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Group id when save video in a group')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>thumb</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Video thumb')?></p>
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
                            <td><code>success</code></td>
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success')?></td>
                        </tr>
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Video id')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/create"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"not_group_member"</span></span>,
						"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/create"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-edit-video" class="resource">
        <h3><?php echo __d('api','Edit video') ?><a href="#video-edit-video" class="permalink">&para;</a></h3>
        <div id="post-video-edit" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit video') ?></div>
                <a href="#post-video-edit" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">video/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a video') ?>
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
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','video id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF title set blank , title of video will be set by title of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF video description is blank , description will be set by description of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,video,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video category id')?></p>
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
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video group id')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/edit"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"not_group_member"</span></span>,
						"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/edit"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="put-video-edit" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit video') ?></div>
                <a href="#put-video-edit" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">video/{id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a video') ?>
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
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','video id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF title set blank , title of video will be set by title of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','OPTIONAL | IF video description is blank , description will be set by description of url video')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,video,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video category id')?></p>
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
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','video group id')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","video category is missing.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/1"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","No special characters ( /,?,#,%,...) allowed in Tags") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/1"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"not_group_member"</span></span>,
						"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d("api","You are not member of this group.") ?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/1"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="video-delete-video" class="resource">
        <h3><?php echo __d('api','Delete video')?><a href="#video-delete-video" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete video')?></p>
        <div id="post-video-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete video')?></div>
                <a href="#post-video-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/video/delete/{video_id}</code>
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
                            <td><code>video_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','video id')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Access denied") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Access denied") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','video not found')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','video not found')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-video-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete video')?></div>
                <a href="#delete-video-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/video/{video_id}</code>
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
                            <td><code>video_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','video id')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Access denied") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Access denied") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','video not found')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','video not found')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/video/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>





</section>