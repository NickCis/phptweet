# PhpTweet!
#### Put twitter on your website with tweet!, a php snippet.
Coded in php by NickCis. Inspired from tweet (jQuery plugin) http://github.com/seaofclouds/tweet
(index & css files are borrowed from tweet. Thank you tweet (jquery plugin) for existing! =D)

## Demos & examples

See [proyectos.nckweb.com.ar/phptweet](http://proyectos.nckweb.com.ar/phptweet), or the bundled `index.php` file. (In order to see the demos, you will need a php server)

## Source

[Download tarball](http://github.com/NickCis/phptweet/tarball/master)

## Features

  * display up to 100 tweets, as permitted by the twitter search api
  * display tweets from a twitter search, or from your own feed
  * optional verb tense matching, for human readable tweets
  * optionally display your avatar
  * optionally display tweets from multiple accounts!
  * automatic linking of @replies to usersâ€™ twitter page
  * automatic linking of URLs
  * automatic linking of #hashtags, to a twitter search of all your tags
  * customize the style with your own stylesheet
  * customize the layout with a user-defined temmplate function

## Usage

1. Include tweet.php files in your template.
        <?php
        include_once 'tweet.php';
        ...
        ?> 

2. In ´<body>´, include a placeholder for your tweets.
        <div class="tweet"></div> 

3. Include phptweet (in the place holder). Customize it with your Username and other options

    <div class="tweet">
    <?php
        $tweet = new tweet(array(
            'username' => "seaofclouds",
            'join_text' => "auto",
            'avatar_size' => 32,
            'count' => 3,
            'auto_join_text_default' => "we said,",
            'auto_join_text_ed' => "we",
            'auto_join_text_ing' => "we were",
            'auto_join_text_reply' => "we replied to",
            'auto_join_text_url' => "we were checking out"
        ));
    ?>
    </div> 

4. Remember that the file where you are placing the code need the ´.php´ extension. If your file is ´.html´ rename it!

5. Style with our stylesheet in ´<head>´, or modify as you like!

   <link href="jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/> 


### Contribute

Bring your code slinging skills to Github and help us develop new features for tweet!

[Github project page](http://github.com/NickCis/tweet/)

    git clone git://github.com/NickCis/phptweet.git

Report bugs at http://github.com/nickcis/phptweet/issues

### Licensed under the MIT

[License text](http://www.opensource.org/licenses/mit-license.php)
