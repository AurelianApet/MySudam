<section id="authentication-group" class="resource-group">
    <h2 class="group-heading"> <?php echo __d('api','Authentication') ?><a href="#authentication-group" class="permalink">&para;</a></h2>
    <p> <?php echo __d('api','Access Token Request - Allows a application to exchange the OAuth Request Token for an OAuth Access Token.') ?></p>
    <div id="authentication" class="resource">
        <h3><?php echo __d('api','Authenticate') ?><a href="#authentication" class="permalink">&para;</a></h3>
        <div id="member-login-login-get" class="action post">
            <h4>
                <div class="name"><?php echo __d('api','Authenticate') ?></div>
                <a href="#member-login-login-get" class="method post"><?php echo __d('api','POST') ?></a><code class="uri">/auth/token</code>
            </h4>
            <p><?php echo __d('api','Endpoint :') ?> /api/auth/token.json</p>
            <p>
                <span>
                    <span><?php echo __d('api','It is based on the&nbsp;') ?></span><a class="external-link" href="http://tools.ietf.org/html/rfc6749#section-10.7" rel="nofollow"><?php echo __d('api','Resource Owner Password Credentials') ?></a><span><?php echo __d('api','&nbsp; &nbsp;flow of the &nbsp;&nbsp;') ?></span><a class="external-link" href="http://tools.ietf.org/html/rfc6749#section-4.3" rel="nofollow"><?php echo __d('api','OAuth 2 specification') ?></a><a class="external-link" href="http://tools.ietf.org/html/rfc6749#section-4.4" rel="nofollow"></a>
                </span>
            </p>
            <h3><?php echo __d('api','Permission')?></h3>
            <p><?php echo __d('api','It is not requires permission .')?></p>
            <div class="title">
                <strong><?php echo __d('api','Request')?></strong>
                <div class="collapse-button"><span class="close"><?php echo __d('api','Hide')?></span><span class="open"><?php echo __d('api','Show')?></span></div>
            </div>
            <div class="collapse-content">
                <table>
                    <thead>
                        <tr>
                            <th><?php echo __d('api','Parameter')?></th>
                            <th style="text-align:center"><?php echo __d('api','Required')?></th>
                            <th><?php echo __d('api','Type')?></th>
                            <th><?php echo __d('api','Example')?></th>
                            <th><?php echo __d('api','Description')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>grant_type</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','Value MUST be set to "password" or "refresh_token"') ?></td>
                        </tr>
                        <tr>
                            <td><code>username</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','if grant_type is "password". NOT NEED if grant_type is "refresh_token" The resource owner email.')?></td>
                        </tr>
                        <tr>
                            <td><code>password</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','if grant_type is "password". NOT NEED if grant_type is "refresh_token" The resource owner email.')?></td>
                        </tr>
                        <tr>
                            <td><code>refresh_token</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td></td>
                            <td></td>
                            <td><?php echo __d('api','if grant_type is "password". NOT NEED if grant_type is "refresh_token" The resource owner email.')?></td>
                        </tr>
                        <tr>
                            <td><code>scope</code></td>
                            <td style="text-align:center"><?php echo __d('api','OPTIONAL')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td> <?php echo __d('api','The scope of the access request as described by')?> <a href="http://tools.ietf.org/html/rfc6749#section-3.3" class="external-link" rel="nofollow"><?php echo __d('api','Section 3.3')?></a>.</td>
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
                            <th style="text-align:center"><?php echo __d('api','Required')?></th>
                            <th><?php echo __d('api','Type')?></th>
                            <th><?php echo __d('api','Example')?></th>
                            <th><?php echo __d('api','Description')?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>access_token</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The access token issued by the authorization server.')?></td>
                        </tr>
                        <tr>
                            <td><code>token_type</code></td>
                            <td style="text-align:center"><?php echo __d('api','yes')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The type of the token')?></td>
                        </tr>
                        <tr>
                            <td><code>expires_in</code></td>
                            <td style="text-align:center"><?php echo __d('api','RECOMMENDED')?></td>
                            <td><?php echo __d('api','number')?></td>
                            <td></td>
                            <td><?php echo __d('api','The lifetime in seconds of the access token')?></td>
                        </tr>
                        <tr>
                            <td><code>refresh_token</code></td>
                            <td style="text-align:center"><?php echo __d('api','OPTIONAL')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td><?php echo __d('api','The refresh token, which can be used to obtain new access tokens using the same authorization grant')?></td>
                        </tr>
                        <tr>
                            <td><code>scope</code></td>
                            <td style="text-align:center"><?php echo __d('api','OPTIONAL')?></td>
                            <td><?php echo __d('api','string')?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>