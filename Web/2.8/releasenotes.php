<?php
  include('../page.inc');

  $page = new Page;
  $page->printHead('WinMerge 2.8: Release Notes', WINMERGE_2_8);
  $releasenotes = $page->getContentFromHtmlFile('ReleaseNotes.html', '#href="ChangeLog.txt"#si', 'href="changelog.php"');
  if ($releasenotes == '') {
    print("<h2>Release Notes</h2>\n");
    print("<p>The release notes are currently not available...</p>\n");
  }
  else
    print($releasenotes);
  $page->printFoot();
?>