<html>

<head>
  <meta charset="utf-8" name=="viewport" content="width=device-width">
  <title>Next Kie's TV program</title>
</head>

<body>
  <?php
    $req = "http://appli.ntv.co.jp/ntv_WebAPI/program/?key=QJJnT6mNJAofrbpx8P2HQBRnfDOdyHmrvTnYGbofQs4ILsgxkTlxchPp0vhq&cast=%96k%94T%82%AB%82%A2";
    $xml = simplexml_load_file($req)
    or die("XML Parse Error");
    $ret = '<div class="sex">';
    $ret .= "<div>Title : ".$xml->program->title."<br><br></div>";
    $ret .= "<div>HP : <a href=".$xml->program->url.">".$xml->program->url."</a><br><br></div>";
    $ret .= "<div>Casts : ".$xml->program->castlist."<br><br></div>";
    $ret .= "<div>Synopsis : ".$xml->program->synopsis."<br><br></div>";
    $ret .= "</div><br>";
    echo "<h1>Next Kie's TV program broadcasted by NihonTV is ...</h1>\n";
    echo $ret;
  ?>
    <a href="http://www.ntv.co.jp/appli/">
      <img src="http://www.ntv.co.jp/appli/api/howto/img/credit_api.gif" width="100" height="31" border="0" alt="日テレアプリ">
    </a>
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://entyo.azurewebsites.net/kie.php" data-via="E_ntyo" data-lang="ja">ツイート</a>
    <script>
      function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
          p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id;
          js.src = p + '://platform.twitter.com/widgets.js';
          fjs.parentNode.insertBefore(js, fjs);
        }
      }(document, 'script', 'twitter-wjs');
    </script>
</body>

</html>
