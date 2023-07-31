<section id="event-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','event') ?><a href="#event-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to event plugin') ?></p>
    <div id="event-plugin" class="resource">
        <h3><?php echo __d('api','event Object') ?><a href="#event-plugin" class="permalink">&para;</a></h3>
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
                    <td><?php echo __d('api','event id')?></td>
                </tr>
                <tr>
                    <td><code>eventDate</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Event created date') ?></td>
                </tr>
                <tr>
                    <td><code>title</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','event title')?></td>
                </tr>
                <tr>
                    <td><code>thumbnail</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td>
                        <?php echo __d('api','A array of event thumbnail .') ?>
                        <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>totalAttending</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td></td>
                    <td><?php echo __d('api','Total user attending this event') ?></td>
                </tr>
                <tr>
                    <td><code>privacy</code></td>
                    <td><?php echo __d('api','int')?></td>
                    <td>1</td>
                    <td>
                        <?php echo __d('api','The privacy settings of the post.') ?>
                        <pre><code>
                                        {
                                            <span class="hljs-attribute">description    </span> :  <span class="hljs-value"><?php echo __d('api',"Number that describes the privacy settings, as they would appear on mooSocial")?></span>
                                            <span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d('api',"The actual privacy setting. enum{EVERYONE = 1 , ALL_FRIENDS = 2 , SELF = 3}")?></span>
                                        }
                                        </code></pre>
                    </td>
                </tr>
                <tr>
                    <td><code>fromTime</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Time event start')?></td>
                </tr>
                <tr>
                    <td><code>fromTimeFormat</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Time event start has been shortened')?></td>
                </tr>
                <tr>
                    <td><code>toTime</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Time event end') ?></td>
                </tr>
                <tr>
                    <td><code>toTimeFormat</code></td>
                    <td><?php echo __d('api','datetime')?></td>
                    <td></td>
                    <td><?php echo __d('api','Time event end has been shortened') ?></td>
                </tr>
                <tr>
                    <td><code>location</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Event location')?></td>
                </tr>
                <tr>
                    <td><code>address</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Event address')?></td>
                </tr>
                <tr>
                    <td><code>url</code></td>
                    <td><?php echo __d('api','string')?></td>
                    <td></td>
                    <td><?php echo __d('api','Event url')?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="event-upcoming-event" class="resource">
        <h3><?php echo __d('api','Get upcoming event') ?><a href="#event-upcoming-event" class="permalink">&para;</a></h3>
        <div id="get-upcoming-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get upcoming event') ?></div>
                <a href="#get-upcoming-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/upcoming</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of upcoming events') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/upcoming"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-myupcoming-event" class="resource">
        <h3><?php echo __d('api','Get my upcoming event') ?><a href="#event-myupcoming-event" class="permalink">&para;</a></h3>
        <div id="get-myupcoming-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my upcoming event') ?></div>
                <a href="#get-myupcoming-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/myupcoming</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my upcoming events') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/myupcoming"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-mypast-event" class="resource">
        <h3><?php echo __d('api','Get my past event') ?><a href="#event-mypast-event" class="permalink">&para;</a></h3>
        <div id="get-mypast-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get my past event') ?></div>
                <a href="#get-mypast-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/mypast</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of my past events') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/mypast"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-friend-event" class="resource">
        <h3><?php echo __d('api','Get friend attending event') ?><a href="#event-friend-event" class="permalink">&para;</a></h3>
        <div id="get-friend-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get friend attending event') ?></div>
                <a href="#get-friend-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/friendattend</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of friend attending events') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/friendattend"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-past-event" class="resource">
        <h3><?php echo __d('api','Get past event') ?><a href="#event-past-event" class="permalink">&para;</a></h3>
        <div id="get-past-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get past event') ?></div>
                <a href="#get-past-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/past</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of past events') ?>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/past"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-category-event" class="resource">
        <h3><?php echo __d('api','Get event by category') ?><a href="#event-category-event" class="permalink">&para;</a></h3>
        <div id="get-category-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get event by category') ?></div>
                <a href="#get-category-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/category/{category_id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Get an array of events by category') ?>
                </span>
            </p>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><?php echo __d('api','Category id')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/category/4"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-activity-event" class="resource">
        <h3><?php echo __d('api','Get activity of event') ?><a href="#event-activity-event" class="permalink">&para;</a></h3>
        <div id="get-activity-event" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get activity of event') ?></div>
                <a href="#get-activity-event" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/activity/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/activity/7"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/activity/4"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"There are no new feeds to view at this time.")?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api',"There are no new feeds to view at this time.")?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/activity/5"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-rsvp-attend" class="resource">
        <h3><?php echo __d('api','Get member who will attending this event') ?><a href="#event-rsvp-attend" class="permalink">&para;</a></h3>
        <div id="get-rsvp-attend" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get member who will attending this event') ?></div>
                <a href="#get-rsvp-attend" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/rsvp/attend/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                <p><?php echo __d('api','An array of user information .')?></p>
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
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .')?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/attend/3"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/attend/5"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/attend/9"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-rsvp-maybe" class="resource">
        <h3><?php echo __d('api','Get member who will maybe attending this event') ?><a href="#event-rsvp-maybe" class="permalink">&para;</a></h3>
        <div id="get-rsvp-maybe" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get member who will maybe attending this event') ?></div>
                <a href="#get-rsvp-maybe" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/rsvp/maybe/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                <p><?php echo __d('api','An array of user information .')?></p>
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
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .')?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/maybe/3"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/maybe/5"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/maybe/9"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-rsvp-no" class="resource">
        <h3><?php echo __d('api','Get member who will not attend this event') ?><a href="#event-rsvp-no" class="permalink">&para;</a></h3>
        <div id="get-rsvp-no" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get member who will not attend this event') ?></div>
                <a href="#get-rsvp-no" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/rsvp/no/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <p><?php echo __d('api','An array of user information .')?></p>
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
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .')?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/no/3"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/no/5"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/no/9"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-rsvp-wait" class="resource">
        <h3><?php echo __d('api','Get all member who is wating respone to this event') ?><a href="#event-rsvp-wait" class="permalink">&para;</a></h3>
        <div id="get-rsvp-wait" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get all member who is wating respone to this event') ?></div>
                <a href="#get-rsvp-wait" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/rsvp/wait/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                <p><?php echo __d('api','An array of user information .')?></p>
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
                            <td><?php echo __d('api','User name')?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','object')?></td>
                            <td></td>
                            <td><?php echo __d('api','The list of person\'s image path of this person\'s avatar .')?></td>
                        </tr>
                        <tr>
                            <td><code>profile_url</code></td>
                            <td><?php echo __d('api','link')?></td>
                            <td></td>
                            <td><?php echo __d('api','Link to profile of user')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/wait/3"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/wait/5"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','user not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp/wait/9"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-view-event" class="resource">
        <h3><?php echo __d('api','Get event detail by id') ?><a href="#event-view-event" class="permalink">&para;</a></h3>
        <div id="get-event-view" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Get event detail by id') ?></div>
                <a href="#get-event-view" class="method get"><?php echo __d('api','GET') ?></a><code class="uri">event/{event_id}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It\'s required a user access token.')?></p>
            <div class="title">
                <strong><?php echo __d('api','Fileds')?></strong>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                            <td><?php echo __d('api','event id')?></td>
                        </tr>
                        <tr>
                            <td><code>eventDate</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event created date') ?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','event title')?></td>
                        </tr>
                        <tr>
                            <td><code>thumbnail</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                        <?php echo __d('api','A array of event thumbnail .') ?>
                                <pre><code> {
                         <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/150_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/250_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/450_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/850_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                       <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/1500_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/75_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg

                        <?php echo FULL_BASE_URL . $this->request->base ?>/uploads/events/thumbnail/6/300_square_f75d2b51a5ddceb130c3d52ca27f692b.jpg
                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>totalAttending</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Total user attending this event') ?></td>
                        </tr>
                        <tr>
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td>1</td>
                            <td>
                        <?php echo __d('api','The privacy settings of the post.') ?>
                                <pre><code>
                                        {
                                            <span class="hljs-attribute">description    </span> :  <span class="hljs-value"><?php echo __d('api',"Number that describes the privacy settings, as they would appear on mooSocial")?></span>
                                            <span class="hljs-attribute">value    </span> :  <span class="hljs-value"><?php echo __d('api',"The actual privacy setting. enum{EVERYONE = 1 , ALL_FRIENDS = 2 , SELF = 3}")?></span>
                                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>fromTime</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Time event start')?></td>
                        </tr>
                        <tr>
                            <td><code>fromTimeFormat</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Time event start has been shortened')?></td>
                        </tr>
                        <tr>
                            <td><code>toTime</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Time event end') ?></td>
                        </tr>
                        <tr>
                            <td><code>toTimeFormat</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td><?php echo __d('api','Time event end has been shortened') ?></td>
                        </tr>
                        <tr>
                            <td><code>location</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event location')?></td>
                        </tr>
                        <tr>
                            <td><code>address</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event address')?></td>
                        </tr>
                        <tr>
                            <td><code>url</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event url')?></td>
                        </tr>
                        <tr>
                            <td><code>categoryId</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event Category id')?></td>
                        </tr>
                        <tr>
                            <td><code>createId</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','User Id')?></td>
                        </tr>
                        <tr>
                            <td><code>categoryName</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Event category name')?></td>
                        </tr>
                        <tr>
                            <td><code>createName</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Created user name')?></td>
                        </tr>
                        <tr>
                            <td><code>shareAction</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <?php echo __d('api','Action type when share detail of Event (event_item_detail)')?>
                            </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Type of Event (Event_Event)')?></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/3"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/500"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-filter-event" class="resource">
        <h3><?php echo __d('api','Filter event') ?><a href="#event-filter-event" class="permalink">&para;</a></h3>
        <div id="post-event-filter" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Filter event') ?></div>
                <a href="#post-event-filter" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">event/filter</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Filter event by keyword') ?>
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
                     <?php echo __d('api','An array of') ?> <a href="#event-plugin"><?php echo __d('api','event object')?></a>
                    </span>
                </p>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/filter"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-invite-friend" class="resource">
        <h3><?php echo __d('api','Invite friend to a event') ?><a href="#event-invite-friend" class="permalink">&para;</a></h3>
        <div id="post-event-invite" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Invite friend to a event') ?></div>
                <a href="#post-event-invite" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">event/invite</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Invite friend to a event') ?>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','event id')?></p></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/invite"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','This is private event. Only event members can view')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/invite"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/invite"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this event.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','You not in this event.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/invite"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-rsvp-submit" class="resource">
        <h3><?php echo __d('api','Submit RSVP') ?><a href="#event-rsvp-submit" class="permalink">&para;</a></h3>
        <div id="post-event-rsvp" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Submit RSVP to current event') ?></div>
                <a href="#post-event-rsvp" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">event/rsvp</code>
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
                            <td><code>rsvp</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Value of your reponse to this event')?></p>
                                <p><?php echo __d('api','YES : 1, NO : 2, MAYBE : 3')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','event id')?></p></td>
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
                        <tr>
                            <td><code>id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><p><?php echo __d('api','Event rsvp id')?></p></td>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/rsvp"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-create-event" class="resource">
        <h3><?php echo __d('api','Create event') ?><a href="#event-create-event" class="permalink">&para;</a></h3>
        <div id="post-event-create" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Create event') ?></div>
                <a href="#post-event-create" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">event/create</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Create a event') ?>
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
                            <td><?php echo __d('api','REQUIRED |  event title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  event description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of event , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
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
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The actual number privacy settings of the post.')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">2</span>
                                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>location</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event location')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>address</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event address')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event start date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event start time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event end date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event end time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>timezone</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event timezone')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event category is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event category is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event title is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/create"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event description  is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/create"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event date start is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event date start is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/create"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event date end is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','Event date end is missing.')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/create"</span></span>
                      }</code></pre>
            </div>
        </div>
    </div>

    <div id="event-edit-event" class="resource">
        <h3><?php echo __d('api','Edit event') ?><a href="#event-edit-event" class="permalink">&para;</a></h3>
        <div id="post-event-edit" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Edit event') ?></div>
                <a href="#post-event-edit" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">event/edit</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a event') ?>
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
                            <td><?php echo __d('api','REQUIRED |  event id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  event title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  event description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of event , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
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
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The actual number privacy settings of the post.')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">2</span>
                                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>location</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event location')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>address</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event address')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event start date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event start time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event end date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event end time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>timezone</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event timezone')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event category is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event category is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event title is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event title is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event description is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event description is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date start is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date start is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date end is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date end is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/edit"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="put-event-edit" class="action put">
            <h4>
                <div class="name"><?php echo __d('api','Edit event') ?></div>
                <a href="#put-event-edit" class="method put"><?php echo __d('api','PUT') ?></a><code class="uri">event/{id}</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Edit a event') ?>
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
                            <td><?php echo __d('api','REQUIRED |  event id')?></td>
                        </tr>
                        <tr>
                            <td><code>title</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  event title')?></td>
                        </tr>
                        <tr>
                            <td><code>description</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','REQUIRED |  event description')?></td>
                        </tr>
                        <tr>
                            <td><code>photo</code></td>
                            <td><?php echo __d('api','file')?></td>
                            <td></td>
                            <td><?php echo __d('api','Thumbnail of event , is the path which is uploaded by using the api ')?><a href="#file-plugin">/file</a></td>
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
                            <td><code>privacy</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td>
                              <?php echo __d('api','The actual number privacy settings of the post.')?>
                                <pre><code>
                                        {

                                        <span class="hljs-attribute">PUBLIC    </span> :  <span class="hljs-value">1</span>
                                        <span class="hljs-attribute">PRIVATE    </span> :  <span class="hljs-value">2</span>
                                        }
                                        </code></pre>
                            </td>
                        </tr>
                        <tr>
                            <td><code>location</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event location')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>address</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event address')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event start date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>from_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event start time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','REQUIRED |  Event end date')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>to_time</code></td>
                            <td><?php echo __d('api','datetime')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event end time')?></p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>timezone</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td>
                                <p><?php echo __d('api','Event timezone')?></p>
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
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event category is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event category is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/1"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event title is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event title is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/1"</span></span>
                      </span>}</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event description is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event description is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/3"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date start is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date start is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/2"</span></span>
                      }</code></pre>
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date end is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","Event date end is missing.") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/3"</span></span>
                      }</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event not found") ?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d("api","event not found") ?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/4"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
    </div>

    <div id="event-delete-event" class="resource">
        <h3><?php echo __d('api','Delete event')?><a href="#event-delete-event" class="permalink">&para;</a></h3>
        <p><?php echo __d('api','Delete event')?></p>
        <div id="post-event-delete" class="action post col-md-6 block-left">
            <h4>
                <div class="name"><?php echo __d('api','Delete event')?></div>
                <a href="#post-event-delete" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/event/delete/{event_id}</code>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/delete/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/delete/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div id="delete-event-delete" class="action delete col-md-6 block-right">
            <h4>
                <div class="name"><?php echo __d('api','Delete event')?></div>
                <a href="#delete-event-delete" class="method delete"><?php echo __d('api','DELETE')?></a><code class="uri">/event/{event_id}</code>
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
                            <td><code>event_id</code></td>
                            <td><?php echo __d('api','int')?></td>
                            <td></td>
                            <td><?php echo __d('api','event id')?></td>
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
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/2"</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo __d('api','event not found')?>"</span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/event/20000"</span></span>
                      </span>}</code></pre>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</section>