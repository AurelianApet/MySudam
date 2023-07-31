<section id="file-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','File') ?><a href="#file-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','All action related to upload file') ?></p>
    <div id="file-upload" class="resource">
        <h3><?php echo __d('api','Upload photo for new feed') ?><a href="#file-upload" class="permalink">&para;</a></h3>
        <div id="post-file-upload" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Upload photo for new feed') ?></div>
                <a href="#post-file-upload" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">/file</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Upload photo for  a new feed') ?>
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
                            <td><code>qqfile</code></td>
                            <td><?php echo __d('api','image/jpeg')?></td>
                            <td></td>
                            <td></td>
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
                        "<span class="hljs-attribute">filename</span>": <span class="hljs-value"><span class="hljs-string">0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>,
                        "<span class="hljs-attribute">photo</span>": <span class="hljs-value"><span class="hljs-string">uploads/tmp/0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>
                        "<span class="hljs-attribute">file_path</span>": <span class="hljs-value"><span class="hljs-string"><?php echo FULL_BASE_URL . $this->request->base ?>/uploads/tmp/0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api','Message')?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api','Message')?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/activity/photo"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d("api","Messages can be :") ?> </p>
                <p><?php echo __d('api',"# Server error. Upload directory isn't writable.")?></p>
                <p><?php echo __d('api',"# No files were uploaded.")?></p>
                <p><?php echo __d('api',"# File is empty")?></p>
                <p><?php echo __d('api',"# File is too large")?></p>
                <p><?php echo __d('api',"# File has an invalid extension.")?></p>
                <p><?php echo __d('api',"# Could not save uploaded file.The upload was cancelled, or server error encountered")?></p>
            </div>
        </div>
    </div>
    <div id="file-album-upload" class="resource">
        <h3><?php echo __d('api','Upload photo for album') ?><a href="#file-album-upload" class="permalink">&para;</a></h3>
        <div id="post-file-album-upload" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Upload photo for album') ?></div>
                <a href="#post-file-album-upload" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">/file/album</code>
            </h4>
            <p>
                <span>
                  <?php echo __d('api','Upload photo for album') ?>
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
                            <td><code>qqfile</code></td>
                            <td><?php echo __d('api','image/jpeg')?></td>
                            <td></td>
                            <td></td>
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
                        "<span class="hljs-attribute">filename</span>": <span class="hljs-value"><span class="hljs-string">0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>,
                        "<span class="hljs-attribute">photo</span>": <span class="hljs-value"><span class="hljs-string">uploads/tmp/0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>
                        "<span class="hljs-attribute">file_path</span>": <span class="hljs-value"><span class="hljs-string"><?php echo FULL_BASE_URL . $this->request->base ?>/uploads/tmp/0fdc7992b900f41ab1b7641a48604bed.jpg</span></span>
                      </span>}</code></pre>
            </div>
            <div class="title">
                <strong><?php echo __d('api','Response')?>&nbsp;&nbsp;<code>400</code></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <pre><code>{
                        "<span class="hljs-attribute">name</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api','Message')?></span></span>,
                        "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string"><?php echo __d('api','Message')?></span></span>,
                        "<span class="hljs-attribute">url</span>": <span class="hljs-value"><span class="hljs-string">"<?php echo FULL_BASE_URL . $this->request->base ?>/api/file/album"</span></span>
                      </span>}</code></pre>
                <p><?php echo __d("api","Messages can be :") ?> </p>
                <p><?php echo __d('api',"# Server error. Upload directory isn't writable.")?></p>
                <p><?php echo __d('api',"# No files were uploaded.")?></p>
                <p><?php echo __d('api',"# File is empty")?></p>
                <p><?php echo __d('api',"# File is too large")?></p>
                <p><?php echo __d('api',"# File has an invalid extension.")?></p>
                <p><?php echo __d('api',"# Could not save uploaded file.The upload was cancelled, or server error encountered")?></p>
            </div>
        </div>
    </div>
</section>