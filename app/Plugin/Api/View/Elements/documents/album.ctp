<section id="album-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Album') ?><a href="#album-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to album plugin') ?></p>
    <div id="album-plugin" class="resource">
        <h3><?php echo __d('api','album Object') ?><a href="#album-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','album id')?></td>
                </tr>
                <tr>
                    <td><code>published</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Date created') ?></td>
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
                    <td><?php echo __d('api','album title') ?></td>
                </tr>
                <tr>
                    <td><code>description</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Album description')?></td>
                </tr>
                <tr>
                    <td><code>thumbnail</code></td>
                    <td><?php echo __d('api','array')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','A array of album thumbnail .') ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>caterogyId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','album category id') ?></td>
                </tr>
                <tr>
                    <td><code>type</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Album type') ?></td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','link')?></td>
                    <td></td>
                    <td><?php echo __d('api','Album link') ?></td>
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
                    <td><?php echo __d('api','Total comment count on a album')?></td>
                </tr>
                <tr>
                    <td><code>likeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total like count on a album')?></td>
                </tr>
                <tr>
                    <td><code>dislikeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total dislike count on a album')?></td>
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
                    <td><code>shareAction</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Action type when share detail of Album (album_item_detail)')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#album-view-detail">album/{album_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerLiked</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Return TRUE if current user liked this album')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#album-view-detail">album/{album_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerDisliked</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Return TRUE if current user disliked this album')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#album-view-detail">album/{album_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>photoCount</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Number of photo')?></td>
                </tr>
                <tr>
                    <td><code>photoObject</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <p><?php echo __d('api','An array of photo in current  album')?></p>
                        <pre><code>
                            {
                            <span class="hljs-attribute">id    </span> :  <span class="hljs-value">"<?php echo __d("api","photo id") ?>"</span>
                            <span class="hljs-attribute">published</span> :  <span class="hljs-value">"<?php echo __d("api","date uploaded") ?>"</span>
                            <span class="hljs-attribute">publishedTranslated</span> :  <span class="hljs-value">"<?php echo __d("api","date uploaded translated") ?>"</span>
                            <span class="hljs-attribute">targetId</span> :  <span class="hljs-value">"<?php echo __d("api","album id") ?>"</span>
                            <span class="hljs-attribute">thumbnail</span> :  <span class="hljs-value">"<?php echo __d("api","An array of photo thumbnail") ?>"
                                                                        <pre><code> {
                                                                                                 <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                                <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                                <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                                <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                               <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                                <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                                                                                                <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/photos/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                                                                                                }
                                                                                                                </code></pre>
                                                                             </span>
                            <span class="hljs-attribute">caption     </span> :  <span class="hljs-value">"<?php echo __d("api","photo caption") ?>"</span>                                               
                            <span class="hljs-attribute">privacy      </span> :  <span class="hljs-value">"<?php echo __d("api","photo privacy") ?>"</span>                                               
                            <span class="hljs-attribute">commentCount       </span> :  <span class="hljs-value">"<?php echo __d("api","photo comment count") ?>"</span>                                               
                            <span class="hljs-attribute">likeCount        </span> :  <span class="hljs-value">"<?php echo __d("api","photo like count") ?>"</span>                                               
                            <span class="hljs-attribute">dislikeCount         </span> :  <span class="hljs-value">"<?php echo __d("api","photo dislike count") ?>"</span>                                               
                          }
                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>canUploadPhoto</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td><?php echo __d('api','Show If current user has permission to upload photo or not')?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="album-all-album" class="resource">
        <h3><?php echo __d('api','Get All album') ?><a href="#album-all-album" class="permalink">&para;</a></h3>
        <div id="get-all-album" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all album') ?></div>
                <a href="#get-all-album" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/all</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of all albums') ?>
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
                           <td><?php echo __d('api','Paging')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/all"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-my-album" class="resource">
        <h3><?php echo __d('api','Get My album') ?><a href="#album-my-album" class="permalink">&para;</a></h3>
        <div id="get-my-album" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my album') ?></div>
                <a href="#get-my-album" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/my</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my albums') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/my"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-friends-album" class="resource">
        <h3><?php echo __d('api','Get Friends album') ?><a href="#album-friends-album" class="permalink">&para;</a></h3>
        <div id="get-friends-album" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get friends album') ?></div>
                <a href="#get-friends-album" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/friends</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of friends albums') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/friends"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-popular-album" class="resource">
        <h3><?php echo __d('api','Get Popular album') ?><a href="#album-popular-album" class="permalink">&para;</a></h3>
        <div id="get-popular-album" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get popular album') ?></div>
                <a href="#get-popular-album" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/popular</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of popular albums') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/popular"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-category-album" class="resource">
        <h3><?php echo __d('api','Browse album from a category') ?><a href="#album-view-detail" class="permalink">&para;</a></h3>
        <div id="get-album-category" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse album from a category') ?></div>
                <a href="#get-album-category" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/category/{category_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get album from a category') ?>
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
                     <?php echo __d('api','An array of') ?> <a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/category/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-filter-album" class="resource">
        <h3><?php echo __d('api','Filter album') ?><a href="#album-filter-album" class="permalink">&para;</a></h3>
        <div id="post-album-filter" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Filter album') ?></div>
                <a href="#post-album-filter" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">album/filter</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Filter album by keyword') ?>
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
                            <td><?php echo __d('api','string')?></td>
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
                     <?php echo __d('api','An array of') ?><a href="#album-plugin"><?php echo __d('api','album object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-view-detail" class="resource">
        <h3><?php echo __d('api','View album Detail') ?><a href="#album-view-detail" class="permalink">&para;</a></h3>
        <div id="get-album-detail" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get album detail') ?></div>
                <a href="#get-album-detail" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">album/{album_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','View album detail by album id') ?>
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
                            <td><code>album_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id') ?></td>
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
                            <td><code>Album object</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td>
                                <p>
                                    <span>
                                 <?php echo __d('api','A') ?> <a href="#album-plugin"><?php echo __d('api','album object')?></a>
                                    </span>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>Photo object</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td>
                                <p>
                                    <span>
                                 <?php echo __d('api','An array of photo belong to album id') ?> <a href="#photo-plugin">Photo object</a>
                                    </span>
                                </p>
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
			"<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','friends_only')?>"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only friends of the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/2"</span></span>
          </span>}</code></pre>
                <pre><code>{
			"<span class="hljs-attribute">errorCode</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','only_me')?>"</span></span>,
            "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only the poster can view this item')?>"</span></span>,
            "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/3"</span></span>
          </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/4000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-create-album" class="resource">
        <h3><?php echo __d('api','Create album') ?><a href="#album-create-album" class="permalink">&para;</a></h3>
        <div id="post-album-create" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Create album') ?></div>
                <a href="#post-album-create" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">album/create</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Create a album') ?>
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
                            <td><?php echo __d('api','REQUIRED |  album title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  album description')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','album tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,album,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED | album category id')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/create"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-edit-album" class="resource">
        <h3><?php echo __d('api','Edit album') ?><a href="#album-edit-album" class="permalink">&para;</a></h3>
        <div id="post-album-edit" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit album') ?></div>
                <a href="#post-album-edit" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">album/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a album') ?>
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
                            <td><?php echo __d('api','id')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  album title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  album description')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','album tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,album,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED | album category id')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/edit"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="put-album-edit" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit album') ?></div>
                <a href="#put-album-edit" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">album/{id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a album') ?>
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
                            <td><?php echo __d('api','id')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  album title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  album description')?></td>
                        </tr>
                        <tr>
                            <td><code>tags</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','album tag , seperate by comma')?></p>
                                <p><?php echo __d('api','ex : this,is,album,tag')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED | album category id')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"album title is missing.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/12"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album body is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/12"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','No special characters ( /,?,#,%,...) allowed in Tags')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/1"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
<!--    <div id="album-upload-album" class="resource">
        <h3><?php echo __d('api','Upload photo to album') ?><a href="#album-upload-album" class="permalink">&para;</a></h3>
        <div id="post-album-upload" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Upload photo to album') ?></div>
                <a href="#post-album-upload" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">album/upload</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Upload photo to album') ?>
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
                            <td><code><?php echo __d('api','target_id')?></code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id')?></td>
                        </tr>
                        <tr>
                            <td><code><?php echo __d('api','qqfile[]')?></code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api',' An array of photo upload')?></td>
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
                            <td><code><?php echo __d('api','success')?></code></td>
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when success')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Please select photo"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Please select photo"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/upload"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Only the poster can upload photo."</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Only the poster can upload photo."</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/upload"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"Album not found"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Album not found"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/upload"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>-->
    <div id="album-setcover-album" class="resource">
        <h3><?php echo __d('api','Set album cover image') ?><a href="#album-setcover-album" class="permalink">&para;</a></h3>
        <div id="post-album-setcover" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Set album cover image') ?></div>
                <a href="#post-album-setcover" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">album/setcover</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Set album cover image') ?>
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
                            <td><?php echo __d('api','Album id')?></td>
                        </tr>
                        <tr>
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api',' Photo id')?></td>
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
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not belong to this album.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not belong to this album.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/setcover"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/setcover"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/setcover"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="album-delete-album" class="resource">
        <h3><?php echo __d('api','Delete album')?><a href="#album-delete-album" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete album')?></p>
        <div id="post-album-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete album')?></div>
                <a href="#post-album-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/album/delete/{album_id}</code>
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
                            <td><code>album_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-album-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete album')?></div>
                <a href="#delete-album-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/album/{album_id}</code>
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
                            <td><code>album_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','album id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','album not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>