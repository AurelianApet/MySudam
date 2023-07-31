<section id="notification-group" class="resource-group">
         <h2 class="group-heading"> Notification<a href="#notification-group" class="permalink">&para;</a></h2>
         <div id="notification-plugin" class="resource">
            <h3><?php echo __d('api','Notification Object') ?><a href="#notification-plugin" class="permalink">&para;</a></h3>
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
                     <td><?php echo __d('api','Notification id')?></td>
                  </tr>
                  <tr>
                     <td><code>from</code></td>
                     <td><?php echo __d('api','array')?></td>
                     <td></td>
                     <td><?php echo __d('api','An array from user that "sent" or make action to notification .') ?>
                         <pre><code>
                                {
                                    <span class="hljs-attribute">id  </span> :  <span class="hljs-value"><?php echo __d('api','User Id')?></span>
                                    <span class="hljs-attribute">name  </span> :  <span class="hljs-value"><?php echo __d('api','User name')?></span>
                                    <span class="hljs-attribute">avatar  </span> :  <span class="hljs-value"><?php echo __d('api','User avatar')?></span>
                                    <span class="hljs-attribute">profile_url  </span> :  <span class="hljs-value"><?php echo __d('api','User url')?></span>
                                }
                                        </code></pre>
                     </td>
                  </tr>
                  <tr>
                     <td><code>to</code></td>
                     <td><?php echo __d('api','array')?></td>
                     <td></td>
                     <td><?php echo __d('api','An array of user that received the notification , include content.') ?>
                         <pre><code>
                                {
                                    <span class="hljs-attribute">created_time  </span> :  <span class="hljs-value"><?php echo __d('api','When the notification was created.')?></span>
                                    <span class="hljs-attribute">updated_time  </span> :  <span class="hljs-value"><?php echo __d('api','When the notification was last updated.')?></span>
                                    <span class="hljs-attribute">title</span> :  <span class="hljs-value"><?php echo __d('api','The message text in the notification.')?></span>
                                    <span class="hljs-attribute">link </span> :  <span class="hljs-value"><?php echo __d('api','The URL that clicking on the notification would take someone.')?></span>
                                    <span class="hljs-attribute">unread  </span> :  <span class="hljs-value"><?php echo __d('api',"Indicates that the notification is unread. Note that 'read' notifications will not be accessible.")?></span>
                                    <span class="hljs-attribute">object  </span> :  <span class="hljs-value"><?php echo __d('api',"The object (this can be a post, a photo, a comment, etc.) that was the subject of the notification.")?></span>
                                }
                                        </code></pre>
                     </td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
         <div id="notification-get" class="resource">
            <h3><?php echo __d('api','Notification Unread')?><a href="#notification-get" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','An individual unread mooSocial notification .')?></p>
            <div id="notification-unread-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Notification Unread')?></div>
                  <a href="#notification-unread-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/notification/{notification-id}</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with manage_notifications permission is required to view that person's notifications.")?> </p>
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
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The notification's id")?></td>
                        </tr>
                        <tr>
                           <td><code>from</code></td>
                           <td>User|Group|Event</td>
                           <td></td>
                           <td><?php echo __d('api',"The entity (user, group, event, etc.) that 'sent', or is the source of the notification.")?></td>
                        </tr>
                        <tr>
                           <td><code>to</code></td>
                           <td>User</td>
                           <td></td>
                           <td><?php echo __d('api',"The entity that received the notification.")?></td>
                        </tr>
                        <tr>
                           <td><code>created_time</code></td>
                           <td><?php echo __d('api','datetime')?></td>
                           <td></td>
                           <td><?php echo __d('api','When the notification was created.')?></td>
                        </tr>
                        <tr>
                           <td><code>updated_time</code></td>
                           <td><?php echo __d('api','datetime')?></td>
                           <td></td>
                           <td><?php echo __d('api','When the notification was last updated.')?></td>
                        </tr>
                        <tr>
                           <td><code>title</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The message text in the notification.')?></td>
                        </tr>
                        <tr>
                           <td><code>link</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api','The URL that clicking on the notification would take someone.')?></td>
                        </tr>
                        <tr>
                           <td><code>unread</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api',"Indicates that the notification is unread. Note that 'read' notifications will not be accessible.")?></td>
                        </tr>
                        <tr>
                           <td><code>object</code></td>
                           <td><?php echo __d('api','object')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The object (this can be a post, a photo, a comment, etc.) that was the subject of the notification.")?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="notification-post" class="resource">
            <h3><?php echo __d('api','Updated Notification')?><a href="#notification-post" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Updating a unread mooSocial notification .')?></p>
            <div id="notification-update-post" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','Updated Notification')?></div>
                  <a href="#notification-update-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/notification/{notification-id}</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token  permission is required to view that person's notifications.")?></p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?>&nbsp;&nbsp;</strong>
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
                           <td><code>unread</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api','REQUIRED. Value MUST be set to false.')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;</strong>
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
                           <td><?php echo __d('api','Return DONE when success')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="notification-count" class="resource">
            <h3><?php echo __d('api','Notification Count')?><a href="#notification-count" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Gets the count of  unread notification and message of owner user .')?>  </p>
            <div id="notification-count-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Notification Count')?></div>
                  <a href="#notification-count-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/notification/me</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token is required to view that person's notifications.")?> </p>
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
                           <td><code>count_notification</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','The number of unread notification of owner user')?></td>
                        </tr>
                        <tr>
                           <td><code>count_conversation</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','The number of unread conversation of owner user.')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="notification-show-all" class="resource">
            <h3> <?php echo __d('api','Notification Show All')?> <a href="#notification-count" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api',"Gets unread/read notification and message of owner user .")?>   </p>
            <div id="notification-count-get" class="action get">
               <h4>
                  <div class="name"> <?php echo __d('api','Show all Notification')?> </div>
                  <a href="#notification-count-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/notification/me/show</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token is required to view that person's notifications.")?></p>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>200</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                   <p>
                     <span>
                     <?php echo __d('api','An array of ') ?><a href="#notification-plugin"><?php echo __d('api','notification object')?></a>
                     </span>
                  </p>
               </div>
               <div class="title">
                  <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>404</code></strong>
                  <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
               </div>
               <div class="collapse-content">
                  <pre><code>
                        {
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d('api','notification_not_found')?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','Notification not found')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','Notification not found')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/notification/me/show</span>
                        }
                     </code></pre>
               </div>
            </div>
         </div>
         <div id="notification-clear" class="resource">
            <h3><?php echo __d('api','Notification Clear All')?> <a href="#notification-clear" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Clear all notifications of owner user')?>   </p>
            <div id="notification-clear-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Notification Clear All')?></div>
                  <a href="#notification-clear-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/api/notification/me/clear</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token is required to view that person's notifications.")?></p>
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
                           <td><?php echo __d('api','Return DONE when success')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="notification-delete" class="resource">
            <h3><?php echo __d('api','Notification Delete One')?><a href="#notification-delete" class="permalink">&para;</a></h3>
            <p><?php echo __d('api','Clear one notification of owner user')?>    </p>
            <div id="notification-deleteone-post" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','Notification Delete One')?></div>
                  <a href="#notification-deleteone-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/notification/me/delete</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token is required to view that person's notifications.")?></p>
               <div class="title">
                  <strong><?php echo __d('api','Fields')?>&nbsp;&nbsp;</strong>
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
                           <td><?php echo __d('api','REQUIRED')?></td>
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
                           <td><?php echo __d('api','Return DONE when success')?></td>
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
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">missing_parameter_id_is_REQUIRED</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','Missing parameter : id is REQUIRED')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','Missing parameter : id is REQUIRED')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/notification/me/delete</span>
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
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"access_denied"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','Access denied')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','Access denied')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/notification/me/delete</span>
                        }
                     </code></pre>
               </div>
            </div>
         </div>
      </section>