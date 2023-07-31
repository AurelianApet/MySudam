<section id="conversation-group" class="resource-group">
         <h2 class="group-heading"> Conversation<a href="#conversation-group" class="permalink">&para;</a></h2>
         <div id="conversation-plugin" class="resource">
            <h3><?php echo __d('api','Conversation Object') ?><a href="#conversation-plugin" class="permalink">&para;</a></h3>
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
                     <td><?php echo __d('api','Message id')?></td>
                  </tr>
                  <tr>
                     <td><code>from</code></td>
                     <td><?php echo __d('api','array')?></td>
                     <td></td>
                     <td><?php echo __d('api','An array from user that "sent" message.') ?>
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
                     <td><?php echo __d('api','An array of user that received the message, include content .') ?>
                         <pre><code>
                                {
                                    <span class="hljs-attribute">created_time  </span> :  <span class="hljs-value"><?php echo __d('api','When the message was created.')?></span>
                                    <span class="hljs-attribute">updated_time  </span> :  <span class="hljs-value"><?php echo __d('api','When the message was last updated.')?></span>
                                    <span class="hljs-attribute">subject</span> :  <span class="hljs-value"><?php echo __d('api','The message subject')?></span>
                                    <span class="hljs-attribute">message</span> :  <span class="hljs-value"><?php echo __d('api','Message content')?></span>
                                    <span class="hljs-attribute">link </span> :  <span class="hljs-value"><?php echo __d('api','Message url')?></span>
                                    <span class="hljs-attribute">unread  </span> :  <span class="hljs-value"><?php echo __d('api','TRUE or FALSE .')?></span>
                                    <span class="hljs-attribute">object  </span> :  <span class="hljs-value"><?php echo __d('api','The object (this can be a post, a photo, a comment, etc.) that was the subject of the message.')?></span>
                                }
                                        </code></pre>
                     </td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
         <div id="conversation-meassage" class="resource">
            <h3><?php echo __d('api','Conversation All')?><a href="#conversation-meassage" class="permalink">&para;</a></h3>
            <div id="conversation-meassage-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','Conversation All')?></div>
                  <a href="#conversation-meassage-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/message/{id}</code>
               </h4>
               <p><?php echo __d('api','An individual unread mooSocial message')?></p>
               <h3><?php echo __d('api','Permission')?></h3>
               <p><?php echo __d('api',"A user access token with manage_message permission is required to view that person's message.")?> </p>
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
                           <td><?php echo __d('api',"The message's id.")?></td>
                        </tr>
                        <tr>
                           <td><code>from</code></td>
                           <td>User|Group|Event</td>
                           <td></td>
                           <td><?php echo __d('api',"The entity (user, group, event, etc.) that 'sent', or is the source of the message.")?></td>
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
                           <td><?php echo __d('api',"When the message was created.")?> </td>
                        </tr>
                        <tr>
                           <td><code>updated_time</code></td>
                           <td><?php echo __d('api','datetime')?></td>
                           <td></td>
                           <td><?php echo __d('api',"When the message was last updated.")?></td>
                        </tr>
                        <tr>
                           <td><code>subject</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The subject text in the notification.")?></td>
                        </tr>
                        <tr>
                           <td><code>message</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The message text in the message.")?> </td>
                        </tr>
                        <tr>
                           <td><code>link</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The URL that clicking on the message would take someone.")?></td>
                        </tr>
                        <tr>
                           <td><code>unread</code></td>
                           <td><?php echo __d('api','boolean')?></td>
                           <td></td>
                           <td><?php echo __d('api',"Indicates that the message is unread. Note that 'read' message will not be accessible.")?> </td>
                        </tr>
                        <tr>
                           <td><code>object</code></td>
                           <td><?php echo __d('api','Object')?></td>
                           <td></td>
                           <td><?php echo __d('api',"The object (this can be a post, a photo, a comment, etc.) that was the subject of the message.")?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div id="conversation-me-show" class="resource">
            <h3><?php echo __d('api','All message')?><a href="#conversation-clear" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Gets all message of owner user .')?>   </p>
            <div id="conversation-clear-get" class="action get">
               <h4>
                  <div class="name"><?php echo __d('api','All message from current user')?></div>
                  <a href="#conversation-clear-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/message/me/show</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token is required to view that person's messages.")?></p>
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
                           <td><code>filter</code></td>
                           <td><?php echo __d('api','string')?></td>
                           <td></td>
                           <td><p><?php echo __d('api','Message filter type :')?></p>
                               <p><?php echo __d('api','first : frist 10 message')?></p>
                               <p><?php echo __d('api','more : load more message')?></p>
                               <p><?php echo __d('api','all : load all message (default)')?></p>
                           </td>
                        </tr>
                        <tr>
                           <td><code>page</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Message page')?></td>
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
                     <?php echo __d('api','An array of ') ?><a href="#conversation-plugin"><?php echo __d('api','message object')?></a>
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
                            <span class="hljs-attribute">errorCode</span> :  <span class="hljs-value">"<?php echo __d('api','message_not_found')?>"</span>
                            <span class="hljs-attribute">name</span> :  <span class="hljs-value">"<?php echo __d('api','Message not found')?>"</span>
                            <span class="hljs-attribute">message</span> :  <span class="hljs-value">"<?php echo __d('api','Message not found')?>"</span>
                            <span class="hljs-attribute">url</span> :  <span class="hljs-value"><?php echo FULL_BASE_URL . $this->request->base ?>/message/me/show</span>
                        }
                     </code></pre>
               </div>
            </div>
         </div>
         <div id="conversation-update" class="resource">
            <h3><?php echo __d('api','Update message status.')?><a href="#conversation-update" class="permalink">&para;</a></h3>
            <p> <?php echo __d('api','Update message status.')?></p>
            <div id="conversation-update-post" class="action post">
               <h4>
                  <div class="name"><?php echo __d('api','Update message')?></div>
                  <a href="#conversation-update-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/message/:id</code>
               </h4>
               <h3><?php echo __d('api','Permission')?></h3>
               <p> <?php echo __d('api',"A user access token is required to view that person's messages.")?></p>
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
                           <td><code>unread</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Message status ( 0 | 1)')?></td>
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
                           <td><?php echo __d('api',"Return DONE when success")?></td>
                        </tr>
                        <tr>
                           <td><code>id</code></td>
                           <td><?php echo __d('api','int')?></td>
                           <td></td>
                           <td><?php echo __d('api','Message id')?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               
            </div>
         </div>
      </section>