<section id="group-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Group') ?><a href="#group-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to group plugin') ?></p>
    <div id="group-plugin" class="resource">
        <h3><?php echo __d('api','Group Object') ?><a href="#group-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','group id')?></td>
                </tr>
                <tr>
                    <td><code>name</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','group name') ?></td>
                </tr>
                <tr>
                    <td><code>description</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','group description')?></td>
                </tr>
                <tr>
                    <td><code>thumbnail</code></td>
                    <td><?php echo __d('api','array')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','An array of group thumbnail .') ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','group url')?></td>
                </tr>
                <tr>
                    <td><code>memberCount</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Number of member in this group')?></td>
                </tr>
                <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td>1</td>
                            <td>
								<?php echo __d('api','The privacy settings of the post.') ?>
                                <pre><code>
												{
													<span class="hljs-attribute">description    </span> :  <span class="hljs-value"><?php echo __d('api','Number that describes the privacy settings, as they would appear on mooSocial') ?></span>
													<span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d('api','The actual privacy setting. enum{PUBLIC  = 1 , RESTRICTED  = 2 , PRIVATE  = 3}') ?></span>
												}
												</code></pre>
                            </td>
                </tr>
                <tr>
                    <td><code>published</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Group created datetime.') ?></td>
                </tr>
                <tr>
                    <td><code>publishedTranslated</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Group created datetime with translation.') ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="group-all-group" class="resource">
        <h3><?php echo __d('api','Get All group') ?><a href="#group-all-group" class="permalink">&para;</a></h3>
        <div id="get-all-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all group') ?></div>
                <a href="#get-all-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/all</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of all groups') ?>
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
                           <td><?php echo __d("api","Page number") ?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/all"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-my-group" class="resource">
        <h3><?php echo __d('api','Get My group') ?><a href="#group-my-group" class="permalink">&para;</a></h3>
        <div id="get-my-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my group') ?></div>
                <a href="#get-my-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/my</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my groups') ?>
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
                           <td><?php echo __d("api","Page number") ?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/my"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-friends-group" class="resource">
        <h3><?php echo __d('api','Get Friends group') ?><a href="#group-friends-group" class="permalink">&para;</a></h3>
        <div id="get-friends-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get friends group') ?></div>
                <a href="#get-friends-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/friends</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of friends groups') ?>
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
                           <td><?php echo __d("api","Page number") ?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/friends"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-popular-group" class="resource">
        <h3><?php echo __d('api','Get Popular group') ?><a href="#group-popular-group" class="permalink">&para;</a></h3>
        <div id="get-popular-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get popular group') ?></div>
                <a href="#get-popular-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/popular</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of popular groups') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/popular"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-feature-view" class="resource">
        <h3><?php echo __d('api','Get Featured Group') ?><a href="#group-feature-view" class="permalink">&para;</a></h3>
        <div id="get-feature-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get featured group') ?></div>
                <a href="#get-feature-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/featured</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get feature group') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/featured"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-join-group" class="resource">
        <h3><?php echo __d('api','Get group that current user joned') ?><a href="#group-join-group" class="permalink">&para;</a></h3>
        <div id="get-join-group" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get group that current user joned') ?></div>
                <a href="#get-join-group" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/join</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get group that current user joned') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-category-group" class="resource">
        <h3><?php echo __d('api','Browse group from a category') ?><a href="#group-view-detail" class="permalink">&para;</a></h3>
        <div id="get-group-category" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse group from a category') ?></div>
                <a href="#get-group-category" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/category/{category_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get group from a category') ?>
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
                     <?php echo __d('api','An array of') ?> <a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
							"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
							"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
							"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/category/5"</span></span>
						  </span>}</code></pre>
            </div>
        </div>
    </div> 

    <div id="group-member-group" class="resource">
        <h3><?php echo __d('api','Browse group member') ?><a href="#group-member-group" class="permalink">&para;</a></h3>
        <div id="get-group-member" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse group member') ?></div>
                <a href="#get-group-member" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/member/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Browse group member') ?>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id') ?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name') ?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .') ?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/member/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/member/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group member not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group member not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/member/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-activity-group" class="resource">
        <h3><?php echo __d('api','Browse group activity') ?><a href="#group-activity-group" class="permalink">&para;</a></h3>
        <div id="get-group-activity" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse group activity') ?></div>
                <a href="#get-group-activity" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/activity/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Browse group activity') ?>
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
						<?php echo __d('api','An array of ') ?><a href="#activity-plugin"><?php echo __d('api','activity feed')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group activitys can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group activitys can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/activity/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/activity/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','There are no new feeds to view at this time.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','There are no new feeds to view at this time.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/activity/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-admin-group" class="resource">
        <h3><?php echo __d('api','Browse group admin') ?><a href="#group-admin-group" class="permalink">&para;</a></h3>
        <div id="get-group-admin" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse group admin') ?></div>
                <a href="#get-group-admin" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/admin/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Browse group admin') ?>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id') ?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name') ?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .') ?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group admins can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group admins can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/admin/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/admin/5"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-view-detail" class="resource">
        <h3><?php echo __d('api','Get group detail by id') ?><a href="#group-view-detail" class="permalink">&para;</a></h3>
        <div id="get-group-view" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get group detail by id') ?></div>
                <a href="#get-group-view" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Get group detail by id') ?>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','group id')?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','group name') ?></td>
                        </tr>
                        <tr>
                            <td><code>published</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group created datetime.') ?></td>
                        </tr>
                        <tr>
                            <td><code>publishedTranslated</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group created datetime with translation.') ?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','group description')?></td>
                        </tr>
                        <tr>
                            <td><code>thumbnail</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <?php echo __d('api','An array of group thumbnail .') ?>
                                <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/groups/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>featured</code></td>
                            <td><?php echo __d('api','boolean')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return TRUE when group is featured , FALSE when not feature .')?></td>
                        </tr>
                        <tr>
                            <td><code>groupUserCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total member of this group') ?></td>
                        </tr>
                        <tr>
                            <td><code>categoryId</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group category id')?></td>
                        </tr>
                        <tr>
                            <td><code>categoryName</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group category name') ?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td>1</td>
                            <td>
								<?php echo __d('api','The privacy settings of the post.') ?>
                                <pre><code>
												{
													<span class="hljs-attribute">description    </span> :  <span class="hljs-value"><?php echo __d('api','Number that describes the privacy settings, as they would appear on mooSocial') ?></span>
													<span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d('api','The actual privacy setting. enum{PUBLIC  = 1 , RESTRICTED  = 2 , PRIVATE  = 3}') ?></span>
												}
												</code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>joinRequest</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total join request count')?></td>
                        </tr>
                        <tr>
                            <td><code>photoCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total photo of group count') ?></td>
                        </tr>
                        <tr>
                            <td><code>topicCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total topic of group count')?></td>
                        </tr>
                        <tr>
                            <td><code>videoCount</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total video of group count') ?></td>
                        </tr>
                        <tr>
                            <td><code>userCreateId</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group create user id')?></td>
                        </tr>
                        <tr>
                            <td><code>userCreateName</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group create user name') ?></td>
                        </tr>
                        <tr>
                            <td><code>shareAction</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Action type when share detail of Group (group_item_detail)')?>
                            </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Type of group (Group_Group)')?>
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
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group admins can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group admins can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/5"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-leave-group" class="resource">
        <h3><?php echo __d('api','Leave group') ?><a href="#group-leave-group" class="permalink">&para;</a></h3>
        <div id="get-group-leave" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Leave group') ?></div>
                <a href="#get-group-leave" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/leave/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Leave group') ?>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are group admin so can not leave this group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are group admin so can not leave this group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/leave/5"</span></span>
								  </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/leave/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/leave/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-feature-group" class="resource">
        <h3><?php echo __d('api','Feature group') ?><a href="#group-feature-group" class="permalink">&para;</a></h3>
        <div id="get-group-feature" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Feature group') ?></div>
                <a href="#get-group-feature" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/feature/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Feature group') ?>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only admin can feature group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only admin can feature group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/feature/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not allowed feature private group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not allowed feature private group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/feature/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group featured already.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group featured already.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/feature/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/feature/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-unfeature-group" class="resource">
        <h3><?php echo __d('api','Unfeature group') ?><a href="#group-unfeature-group" class="permalink">&para;</a></h3>
        <div id="get-group-unfeature" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Unfeature group') ?></div>
                <a href="#get-group-unfeature" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/unfeature/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Unfeature group') ?>
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
                            <td><?php echo __d('api','Group id') ?></td>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only admin can unfeature group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Only admin can unfeature group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/unfeature/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not allowed unfeature private group.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You are not allowed unfeature private group.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/unfeature/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group unfeatured already.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group unfeatured already.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/unfeature/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/unfeature/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>
    <div id="group-request-sent" class="resource">
        <h3><?php echo __d('api','Send request to join a group') ?><a href="#group-request-sent" class="permalink">&para;</a></h3>
        <div id="get-group-sent" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Send request to join a group') ?></div>
                <a href="#get-group-sent" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/join/request/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Send request to join a group') ?>
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
                            <td><?php echo __d('api','Group id') ?></td>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Already joined..')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Already joined..')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/request/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is a private group. You must be invited by a group admin in order to join')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is a private group. You must be invited by a group admin in order to join')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/request/5"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/request/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-request-view" class="resource">
        <h3><?php echo __d('api','Browse all join request from a group') ?><a href="#group-request-view" class="permalink">&para;</a></h3>
        <div id="get-group-request-view" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Browse all join request from a group') ?></div>
                <a href="#get-group-request-view" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/join/request/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Browse all join request from a group') ?>
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
                            <td><?php echo __d('api','Group id') ?></td>
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
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User id') ?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','User name') ?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .') ?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/request/200"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group request not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group request not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/request/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-request-join" class="resource">
        <h3><?php echo __d('api','Accept join request') ?><a href="#group-request-join" class="permalink">&para;</a></h3>
        <div id="get-group-accept" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Accept join request') ?></div>
                <a href="#get-group-accept" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/join/accept/{request_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Accept join request') ?>
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
                            <td><code>request_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group request id') ?></td>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Joined already.')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Joined already.')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/accept/5"</span></span>
								  </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group request not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group request not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/accept/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-notifi-on" class="resource">
        <h3><?php echo __d('api','Turn group notification on') ?><a href="#group-notifi-on" class="permalink">&para;</a></h3>
        <div id="get-group-notify-on" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Turn group notification on') ?></div>
                <a href="#get-group-notify-on" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/notification/on/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Turn group notification on') ?>
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
                            <td><?php echo __d('api','Group id') ?></td>
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
                            <td><?php echo __d('api','Return message when success') ?></td>
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
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notification/on/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group notification on already')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group notification on already')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notification/on/200"</span></span>
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
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notification/on/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-notifi-off" class="resource">
        <h3><?php echo __d('api','Turn group notificatioff off') ?><a href="#group-notifi-off" class="permalink">&para;</a></h3>
        <div id="get-group-notify-off" class="actioff get">
            <h4>
                <div class="name"><?php echo __d('api','Turn group notificatioff off') ?></div>
                <a href="#get-group-notify-off" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">group/notificatioff/off/{group_id}</code>
            </h4>
            <p>
                <span>
				 <?php echo __d('api','Turn group notificatioff off') ?>
                </span>
            </p>
            <h3><?php echo __d('api','Permissioff')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <stroffg><?php echo __d('api','Fields')?></stroffg>
                <div class="collapse-buttoff"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-cofftent">
                <table>
                    <thead>
                        <tr>
                            <th><?php echo __d('api','Parameter')?></th>
                            <th><?php echo __d('api','Type')?></th>
                            <th><?php echo __d('api','Example')?></th>
                            <th><?php echo __d('api','Descriptioff')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Group id') ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <stroffg><?php echo __d('api','Respoffse')?>&nbsp;&nbsp;<code>200</code></stroffg>
                <div class="collapse-buttoff"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-cofftent">
                <table>
                    <thead>
                        <tr>
                            <th><?php echo __d('api','Parameter')?></th>
                            <th><?php echo __d('api','Type')?></th>
                            <th><?php echo __d('api','Example')?></th>
                            <th><?php echo __d('api','Descriptioff')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>message</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Return message when success') ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <stroffg><?php echo __d('api','Respoffse')?>&nbsp;&nbsp;<code>400</code></stroffg>
                <div class="collapse-buttoff"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-cofftent">
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notificatioff/off/5"</span></span>
								  </span>}</code></pre>
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group notification off already')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group notification off already')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notificatioff/off/200"</span></span>
								  </span>}</code></pre>
            </div>
            <div class="title">
                <stroffg><?php echo __d('api','Respoffse')?>&nbsp;&nbsp;<code>404</code></stroffg>
                <div class="collapse-buttoff"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-cofftent">
                <pre><code>{
									"<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
									"<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/notificatioff/off/200"</span></span>
								  </span>}</code></pre>
            </div>
        </div>
    </div>


    <div id="group-filter-group" class="resource">
        <h3><?php echo __d('api','Filter group') ?><a href="#group-filter-group" class="permalink">&para;</a></h3>
        <div id="post-group-filter" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Filter group') ?></div>
                <a href="#post-group-filter" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">group/filter</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Filter group by keyword') ?>
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
                     <?php echo __d('api','An array of') ?> <a href="#group-plugin"><?php echo __d('api','group object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-invite-friend" class="resource">
        <h3><?php echo __d('api','Invite friend to a group') ?><a href="#group-invite-friend" class="permalink">&para;</a></h3>
        <div id="post-group-invite" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Invite friend to a group') ?></div>
                <a href="#post-group-invite" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">group/invite</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Invite friend to a group') ?>
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
                            <td><code>emails</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Invite by email . Enter their emails below (separated by commas)')?></p>
                                <p><?php echo __d('api','Limit 10 email addresses per request')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>friends</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','Invite by user id . Enter their id (separated by commas)')?></p></td>
                        </tr>
                        <tr>
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','Group id')?></p></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Please insert friend id  or email to invite .')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Please insert friend id  or email to invite .')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/invite"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private group. Only group members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/invite"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/filter"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this group.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this group.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="group-create-group" class="resource">
        <h3><?php echo __d('api','Create group') ?><a href="#group-create-group" class="permalink">&para;</a></h3>
        <div id="post-group-create" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Create group') ?></div>
                <a href="#post-group-create" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">group/create</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Create a group') ?>
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
                            <td><?php echo __d('api','REQUIRED |  Group name')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of group , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Category Id')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The privacy settings of group')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">RESTRICTED    </span> :  <span class="hljs-value">2</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">3</span>

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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group category is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group category is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group name is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group name is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/create"</span></span>
                      }</code></pre>
            </div>
        </div>
    </div>

    <div id="group-edit-group" class="resource">
        <h3><?php echo __d('api','Edit group') ?><a href="#group-edit-group" class="permalink">&para;</a></h3>
        <div id="post-group-edit" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Edit group') ?></div>
                <a href="#post-group-edit" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">group/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a group') ?>
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
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group id')?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group name')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of group , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Category Id')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The privacy settings of group')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">RESTRICTED    </span> :  <span class="hljs-value">2</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">3</span>

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
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group category is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group category is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/edit"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group name is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group name is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/edit"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/edit"</span></span>
                      }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/edit"</span></span>
                    }</code></pre>
            </div>
        </div>
        <div id="put-group-edit" class="action put col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Edit group') ?></div>
                <a href="#put-group-edit" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">group/{group_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a group') ?>
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
                            <td><?php echo __d('api','REQUIRED |  Group id')?></td>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group name')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  Group description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of group , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
                        </tr>
                        <tr>
                            <td><code>category_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Category Id')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The privacy settings of group')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">RESTRICTED    </span> :  <span class="hljs-value">2</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">3</span>

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
                        }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group category is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group category is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/12"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group name is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","<?php echo __d('api','Group name is missing.')?>") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/11"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/11"</span></span>
                      }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                       "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/edit"</span></span>
                    }</code></pre>
            </div>
        </div>
    </div>



    <div id="group-request-delete" class="resource">
        <h3><?php echo __d('api','Delete join request from a group')?><a href="#group-request-delete" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete join request from a group')?></p>
        <div id="post-group-join-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete join request from a group')?></div>
                <a href="#post-group-join-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/group/join/delete/{request_id}</code>
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
                            <td><code>request_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Join request id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/join/group/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-group-join-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete group')?></div>
                <a href="#delete-group-join-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/group/join/{request_id}</code>
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
                            <td><code>request_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Join request id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/join/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>


    <div id="group-delete-group" class="resource">
        <h3><?php echo __d('api','Delete group')?><a href="#group-delete-group" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete group')?></p>
        <div id="post-group-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete group')?></div>
                <a href="#post-group-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/group/delete/{group_id}</code>
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
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','group id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-group-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete group')?></div>
                <a href="#delete-group-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/group/{group_id}</code>
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
                            <td><code>group_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','group id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','group not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/group/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>


</section>