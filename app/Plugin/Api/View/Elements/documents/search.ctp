<section id="search-group" class="resource-group">
    <h2 class="group-heading"><?php echo __d('api','Search')?> <a href="#search-group" class="permalink">&para;</a></h2>
    <div id="search-keyword" class="resource">
        <h3><?php echo __d('api','Search Keyword')?><a href="#search-keyword" class="permalink">&para;</a></h3>
        <div id="search-keyword-get" class="action get">
            <h4>
                <div class="name"><?php echo __d('api','Search Keyword')?></div>
                <a href="#search-keyword-get" class="method get"><?php echo __d('api','GET')?></a><code class="uri">/search/{keyword}</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api','It\'s required a user access token.')?></p>
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
                            <td><?php echo __d('api','id')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The item's id.")?></td>
                        </tr>
                        <tr>
                            <td><code>url</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The url link to entry")?></td>
                        </tr>
                        <tr>
                            <td><code>avatar</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The image of entry")?></td>
                        </tr>
                        <tr>
                            <td><code>owner_id</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td> <?php echo __d('api',"The user id of entry")?></td>
                        </tr>
                        <tr>
                            <td><code>title_1</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The intro text of entry")?></td>
                        </tr>
                        <tr>
                            <td><code>title_2</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The addition intro text of entry")?></td>
                        </tr>
                        <tr>
                            <td><code>created</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Created Time')?> </td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api',"The entrie type.")?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="search-keyword-post" class="resource">
        <h3><?php echo __d('api','Search Keyword Post')?><a href="#search-keyword" class="permalink">&para;</a></h3>
        <div id="search-keywordby-post" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Search Keyword Post')?></div>
                <a href="#search-keywordby-post" class="method post"><?php echo __d('api','POST')?></a><code class="uri">/search</code>
            </h4>
            <h3><?php echo __d('api','Permission')?></h3>
            <p> <?php echo __d('api','It\'s required a user access token.')?></p>
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
                <p><?php echo __d("api","It is same as ") ?><a href="#search-keyword">GET /search/{keyword}</a></p>
            </div>
        </div>
    </div>
</section>