<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>PhpTweet! Put Twitter on your site with this simple php snippet</title>
  <link href="index.css" rel="stylesheet"/>
  <link href="jquery.tweet.css" rel="stylesheet"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".example").hide().each(function(i,e){
        $(e).before($('<a class="show-code" href="#">Show code &raquo;</a>').
                      click(function(ev) {
                        $(e).slideToggle();
                        $(this).hide();
                        ev.preventDefault();
                      }));
      });
    });
  </script>
</head>
<body>
  <h1>Php Tweet!</h1>
  <h2>put <a href="http://twitter.com">twitter</a> on your website with <em>phptweet!</em>, an php snippet inspired from <a href="http://tweet.seaofclouds.com/">tweet! (jquery plugin)</a></h2>
  <p>Coded in php by <a href="http://twitter.com/nickcis">@nickcis</a></p>
  <p>Check out the script in action at <a href="http://proyectos.nckweb.com.ar/phptweet">http://proyectos.nckweb.com.ar/phptweet</a>, and see the following demos.</p>

  <h3>Examples</h3>

  <p>Displaying three tweets from the <a href="http://twitter.com/seaofclouds">seaofclouds twitter feed</a>:</p>
  <pre class="example">
    $tweet = new tweet(array(
        'join_text' => "auto",
        'username' => "seaofclouds",
        'avatar_size' => 48,
        'count' => 3,
        'auto_join_text_default' => "we said,",
        'auto_join_text_ed' => "we",
        'auto_join_text_ing' => "we were",
        'auto_join_text_reply' => "we replied",
        'auto_join_text_url' => "we were checking out"
    ));
  </pre>
  <div class='tweet query'><?php
  include_once 'tweet.php';
  $tweet = new tweet(array(
        'join_text' => "auto",
        'username' => "seaofclouds",
        'avatar_size' => 48,
        'count' => 3,
        'auto_join_text_default' => "we said,",
        'auto_join_text_ed' => "we",
        'auto_join_text_ing' => "we were",
        'auto_join_text_reply' => "we replied",
        'auto_join_text_url' => "we were checking out"
    ));
  ?></div>

  <p>Displaying up to four tweets with the query "<a href="http://search.twitter.com/search?q=tweet.seaofclouds.com">tweet.seaofclouds.com</a>":</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'query' => "tweet.seaofclouds.com"
    ));
  </pre>
  <div id="query" class='query'><?php
  $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'query' => "tweet.seaofclouds.com"
    ));
  ?></div>

  <p>Displaying up to three links with the search query "<a href="http://search.twitter.com/search?q=from%3Aseaofclouds%20http">from:seaofclouds http</a>":</p>
  <pre class="example">
    $tweet = new tweet(array(
        'count' => 3,
        'query' => "from:seaofclouds http"
    ));
  </pre>
  <div id='userandquery' class="query"><?php
    $tweet = new tweet(array(
        'count' => 3,
        'query' => "from:seaofclouds http"
    ));
  ?></div>

  <p>Displaying four tweets from the two users "seaofclouds" and "laughingsquid", refreshing every 10 seconds:</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => array("seaofclouds", "laughingsquid")
    ));
  </pre>
  <div id='fromtwo' class="query"><?php
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => array("seaofclouds", "laughingsquid")
    ));  
  ?></div>

  <p>Displaying tweets from users on the 'team' list of 'twitter':</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => "twitter",
        'list' => "team"
    ));
  </pre>
  <div id='list' class="query"><?php
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => "twitter",
        'list' => "team"
    ));  
  ?></div>

  <p>Displaying the user seaofclouds' favorite tweets, and TODO:opening links in a new window:</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 3,
        'username' => "seaofclouds",
        'favorites' => True
    ));
  </pre>
  <div id="favorites" class="query"><?php
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 3,
        'username' => "seaofclouds",
        'favorites' => True
    ));  
  ?></div>

  <p>Fetch 20 tweets, but filter out @replies, and display only 3:</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 3,
        'fetch' => 20,
        'filter' => create_function('$t', 'return (preg_match("/^@\w+/", $t["tweet_raw_text"]) ? False : True);'),
        'username' => "seaofclouds",
    ));
  </pre>
  <div id='filter' class="query"><?php
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 3,
        'fetch' => 20,
        'filter' => create_function('$t', 'return (preg_match("/^@\w+/", $t["tweet_raw_text"]) ? False : True);'),
        'username' => "seaofclouds",
    ));  
  ?></div>

  <p>Customize the layout to eliminate the date stamps and avatars, and add an action link:</p>
  <pre class="example">
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => "seaofclouds",
        'template' => "{text} &raquo; {retweet_action}"
    ));
  </pre>
  <div id='custom' class="query"><?php
    $tweet = new tweet(array(
        'avatar_size' => 32,
        'count' => 4,
        'username' => "seaofclouds",
        'template' => "{text} &raquo; {retweet_action}"
    ));  
  ?></div>
  <h3>Features</h3>
  <ul>
    <li>small size and fast download time</li>
    <li>does not require javascript. Tweets are server-side loaded</li>
    <li>display tweets from a twitter search, or from your own feed</li>
    <li>optional verb tense matching, for human readable tweets</li>
    <li>optionally display your avatar</li>
    <li>optionally display tweets from multiple accounts!</li>
    <li>display tweets from a list, or display a user's favorites</li>
    <li>automatic linking of  @replies to users&#8217; twitter page</li>
    <li>automatic linking of URLs</li>
    <li>uses <a href="http://apiwiki.twitter.com/Twitter-Search-API-Method%3A-search">Twitter's Search API</a>, so you can display any tweets you like</li>
    <li>Display up to 100 tweets that have been posted within 7 days (limit set by <a href="http://apiwiki.twitter.com/Twitter-Search-API-Method%3A-search">Twitter's Search API</a>)</li>
    <li>automatic linking of <a href="http://search.twitter.com/search?q=&amp;tag=hashtags">#hashtags</a>, to a twitter search of all your tags</li>
    <li>customize the layout for tweets within the widget</li>
    <li>apply custom filters, e.g. to remove @replies</li>
    <li>define a custom sort order for tweets</li>
    <li>customize the style with your own stylesheet</li>
  </ul>
  
  <h3>To do</h3>
  <ul>
    <li>Some type of caching</li>
    <li>Specifing target of links (target="_blank" for openning links in new tab)</li>
    <li>Custom messages for "about", "seconds", "minutes", "hours", "days", "ago", etc.</li>
    <li>Setting custom clases for tweets</li>
  </ul>

  <p><strong>NOTE:</strong> Some users have reported that they <a href="http://help.twitter.com/forums/10713/entries/42646">do not show up in Twitter's search results</a>.</p>

  <div class='download'>
    <h3>Download</h3>
    <p>
      <a href="http://github.com/nickcis/phptweet/zipball/master">
        <img width="90" src="http://github.com/images/modules/download/zip.png"></a>
      <a href="http://github.com/nickcis/phptweet/tarball/master">
        <img width="90" src="http://github.com/images/modules/download/tar.png"></a>
    </p>
  </div>

  <h3>Usage</h3>
  <p><strong>1.</strong> Include tweet.php files in your template.</p>
  <code>
    &lt;?php<br />
    include_once 'tweet.php';<br />
    ...<br />
    ?&gt;
  </code>
  <p><strong>2.</strong> In <span class="code">&lt;body&gt;</span>, include a placeholder for your tweets.</p>
  <code>
    &lt;div class=&quot;tweet&quot;&gt;&lt;/div&gt;
  </code>
  <p><strong>3.</strong> Include phptweet (in the place holder). Customize it with your Username and other options</p>
  <code>
    &lt;div class=&quot;tweet&quot;&gt;<br />
    &lt;?php<br />
    &nbsp; &nbsp; $tweet = new tweet(array(<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'username' =&gt; "seaofclouds",<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'join_text' =&gt; "auto",<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'avatar_size' =&gt; 32,<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'count' =&gt; 3,<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'auto_join_text_default' =&gt; "we said,", <br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'auto_join_text_ed' =&gt; "we",<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'auto_join_text_ing' =&gt; "we were",<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'auto_join_text_reply' =&gt; "we replied to",<br />
    &nbsp; &nbsp; &nbsp; &nbsp; 'auto_join_text_url' =&gt; "we were checking out"<br />
    &nbsp; &nbsp; ));<br />
    ?&gt;<br />
    &lt;/div&gt
  </code> 
  <p><strong>4.</strong> Remember that the file where you are placing the code need the <span class="code">.php</span> extension. If your file is <span class="code">.html</span> rename it!</p>
  <p><strong>5.</strong> Style with our stylesheet in <span class="code">&lt;head&gt;</span>, or modify as you like!</p>
  <code>
    &lt;link href=&quot;jquery.tweet.css&quot; media=&quot;all&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;/&gt;
  </code>

  <h3>Contribute</h3>
  <p>Bring your code slinging skills to <a href="http://github.com/nickcis/phptweet/">Github</a> and help us develop new features for tweet!</p>
  <code>
    git clone git://github.com/nickcis/phptweet.git
  </code>
  <a href="http://github.com/nickcis/phptweet"><img style="position: absolute; top: 0; right: 0; border: 0;" src="http://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png" alt="Fork me on GitHub" /></a>
  <p>
    <strong>Report bugs and request features</strong> in <a href="http://github.com/nickcis/phptweet/issues">Github Issues</a>
  </p>
  <h3>Licensed under the MIT</h3>
  <code>
    <a href="http://www.opensource.org/licenses/mit-license.php">http://www.opensource.org/licenses/mit-license.php</a>
  </code>
  <div class='twoot'>
    <h3>If you like Phptweet, check out <a href="http://github.com/seaofclouds/tweet/">Tweet</a>!</h3>
    <p><a href="http://github.com/seaofclouds/tweet/">Tweet</a> is a unobtrusive javascript plugin for jquery.</p>
  </div>
  <p class='copyright'>coded in php by <a href="http://nckweb.com.ar">Nicolas Cisco</a> Original idea by <a href="http://seaofclouds.com">seaofclouds</a> | <a href="http://github.com/nickcis/phptweet/">contribute</a></p>
</body>
</html>

