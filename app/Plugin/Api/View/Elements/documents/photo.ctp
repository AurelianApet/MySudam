<section id="photo-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Photo') ?><a href="#photo-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to photo plugin') ?></p>
    <div id="photo-plugin" class="resource">
        <h3><?php echo __d('api','Photo Object') ?><a href="#photo-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','Photo id')?></td>
                </tr>
                <tr>
                    <td><code>published</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','photo date created') ?></td>
                </tr>
                <tr>
                    <td><code>publishedTranslated</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','photo date created with translation') ?></td>
                </tr>
                <tr>
                    <td><code>caption</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','photo caption')?></td>
                </tr>
                <tr>
                    <td>thumbnail</code></td>
                    <td><?php echo __d('api','array')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','An array of photo thumbnail . .') ?>
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
                    <td><code>type</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Photo type') ?></td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','link')?></td>
                    <td></td>
                    <td><?php echo __d('api','Photo url') ?></td>
                </tr>
                <tr>
                    <td><code>commentCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total comment count on a photo')?></td>
                </tr>
                <tr>
                    <td><code>likeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total like count on a photo')?></td>
                </tr>
                <tr>
                    <td><code>dislikeCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total dislike count on a photo')?></td>
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
                    <td><code>albumType</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Type of Album')?></td>
                </tr>
                <tr>
                    <td><code>nextPhotoId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Photo Id of next photo in same album')?></td>
                </tr>
                <tr>
                    <td><code>prePhotoId</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Photo Id of previous photo in same album')?></td>
                </tr>
                <tr>
                    <td><code>isViewerLiked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td><?php echo __d('api','Return TRUE if current user liked this photo')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#photo-view-photo">photo/{photo_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>isViewerDisliked</code></td>
                    <td><?php echo __d('api','boolean')?></td>
                    <td></td>
                    <td><?php echo __d('api','Return TRUE if current user disliked this photo')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#photo-view-photo">photo/{photo_id}</a></p>
                    </td>
                </tr>
                <tr>
                    <td><code>shareAction</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Action type when share detail of Photo (photo_item_detail)')?>
                        <p><?php echo __d("api","It will be used in api") ?> <a href="#photo-view-photo">photo/{photo_id}</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="photo-browse-group" class="resource">
        <h3><?php echo __d('api','Browse photo from a group') ?><a href="#photo-browse-group" class="permalink">&para;</a></h3>
        <div id="get-group-photo" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse group photo') ?></div>
                <a href="#get-group-photo" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">photo/group/{group_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Browse group photo') ?>
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
                            <td><?php echo __d('api','Group id')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#photo-plugin"><?php echo __d('api','photo object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/group/{group_id}"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-browse-album" class="resource">
        <h3><?php echo __d('api','Browse photo from an album') ?><a href="#photo-browse-album" class="permalink">&para;</a></h3>
        <div id="get-album-photo" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse album photo') ?></div>
                <a href="#get-album-photo" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">photo/album/{album_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Browse album photo') ?>
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
                            <td><?php echo __d('api','Album id')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#photo-plugin"><?php echo __d('api','photo object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/album/{album_id}"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-view-photo" class="resource">
        <h3><?php echo __d('api','View single photo') ?><a href="#photo-view-photo" class="permalink">&para;</a></h3>
        <div id="get-photo-view" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','View single photo') ?></div>
                <a href="#get-photo-view" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">photo/{photo_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Browse a photo') ?>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Photo id')?></td>
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
                     <?php echo __d('api','A ') ?><a href="#photo-plugin"><?php echo __d('api','photo object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/{photo_id}"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-upload-group" class="resource">
        <h3><?php echo __d('api','Upload photo in a group') ?><a href="#photo-upload-group" class="permalink">&para;</a></h3>
        <div id="post-photo-group" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Upload photo in a group') ?></div>
                <a href="#post-photo-group" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/group/upload</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Upload photo in a group') ?>
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
                            <td><code>target_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','group id')?></td>
                        </tr>
                        <tr>
                            <td><code>photos</code></td>
                            <td><?php echo __d('api','object')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Please select photo')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Please select photo')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/group/upload"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is a private group')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is a private group')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/group/upload"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/group/upload"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-tag-photo" class="resource">
        <h3><?php echo __d('api','Tag people to a Photo') ?><a href="#photo-tag-photo" class="permalink">&para;</a></h3>
        <div id="post-photo-tag" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Tag people to a Photo') ?></div>
                <a href="#post-photo-tag" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/tag</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Tag people to a Photo') ?>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Photo id')?></td>
                        </tr>
                        <tr>
                            <td><code>user_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id')?></td>
                        </tr>
                        <tr>
                            <td><code>value</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Text value when tagged')?></td>
                        </tr>
                        <tr>
                            <td><code>style</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Position of tagged user .')?></p>
                                <p><?php echo __d('api','Ex : left: 458px; top:400px')?></p>
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
                            <td><?php echo __d('api','Return tagged id when success')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Duplicated tag!')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Duplicated tag!')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/tag"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/tag"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','User not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/tag"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-removetag-photo" class="resource">
        <h3><?php echo __d('api','Remove tag people to a Photo') ?><a href="#photo-removetag-photo" class="permalink">&para;</a></h3>
        <div id="post-photo-removetag" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Remove tag people to a Photo') ?></div>
                <a href="#post-photo-removetag" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/removetag</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Remove tag from a photo') ?>
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
                            <td><code>tag_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Tagged id')?></td>
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
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Not tagged yet.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Not tagged yet.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/removetag"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-setcover-photo" class="resource">
        <h3><?php echo __d('api','Set Profile Cover Photo') ?><a href="#photo-setcover-photo" class="permalink">&para;</a></h3>
        <div id="post-photo-setcover" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Set Profile Cover Photo') ?></div>
                <a href="#post-photo-setcover" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/setcover</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Set Profile Cover Photo') ?>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Photo id')?></td>
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
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/setcover"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-setprofilepicture-photo" class="resource">
        <h3><?php echo __d('api','Set photo as profile picture') ?><a href="#photo-setprofilepicture-photo" class="permalink">&para;</a></h3>
        <div id="post-photo-setprofilepicture" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Set photo as profile picture') ?></div>
                <a href="#post-photo-setprofilepicture" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/setprofilepicture</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Set photo as profile picture') ?>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Photo id')?></td>
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
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/setprofilepicture"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="photo-update-caption" class="resource">
        <h3><?php echo __d('api','Update Photo Caption')?><a href="#photo-update-caption" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Update Photo Caption')?></p>
        <div id="get-photo-caption" class="action get col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Update Photo Caption')?></div>
                <a href="#get-photo-caption" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/photo/updatecaption </code>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','photo id')?></td>
                        </tr>
                        <tr>
                            <td><code>caption</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Caption of photo')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/updatecaption"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/updatecaption"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="put-photo-caption" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Update Photo Caption')?></div>
                <a href="#put-photo-caption" class="method put"><?php echo __d('api','PUT')?></a><code class="uri">/photo/updatecaption</code>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','photo id')?></td>
                        </tr>
                        <tr>
                            <td><code>caption</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Caption of photo')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/updatecaption"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/updatecaption"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="photo-delete-photo" class="resource">
        <h3><?php echo __d('api','Delete photo')?><a href="#photo-delete-photo" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete photo')?></p>
        <div id="post-photo-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete photo')?></div>
                <a href="#post-photo-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/photo/delete/{photo_id}</code>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','photo id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-photo-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete photo')?></div>
                <a href="#delete-photo-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/photo/{photo_id}</code>
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
                            <td><code>photo_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','photo id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','photo not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/photo/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>
     <div id="photo-album-save" class="resource">
        <h3><?php echo __d('api','Save album photo') ?><a href="#photo-album-save" class="permalink">&para;</a></h3>
        <div id="post-album-save" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Save album photo') ?></div>
                <a href="#post-album-save" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">photo/album/save</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Save album photo') ?>
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
                            <td><code>type</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED Photo type')?></td>
                        </tr>
                        <tr>
                            <td><code>target_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED Id of album')?></td>
                        </tr>
                        <tr>
                            <td><code>photos</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED A list of photo url, separated by comma by using ')?><a href="#file-album-upload">file/album</a></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Album cound not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Album cound not be found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/save"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>401</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Type is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Type is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/save"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Target id is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Target id is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/save"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Photos is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Missing parameter : Photos is REQUIRED") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/album/save"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
</section>