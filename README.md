# Instructions

## Get the plugin working

Go to your remote moodle directory (cd /var/www/html/moodle):
* git status
* If you have any red lines, type:
  * git add -A
  * git commit -m "Commit untracked files"
  * git push origin {branchname} (should be dev-customblock)
* Then:
  * git checkout -b --no-track dev-bocblock dev-customblock
* Fork this repository to your github: https://github.com/oliver-jk-redding/moodle-block_boc_countdown
* git add -f block_boc_countdown {your forked plugin url}
* git subtree add --prefix blocks/boc_countdown block_boc_countdown master
* Open your code in atom (don't forget to re mount moodle if needed - if it complains about mount point being nonempty, type `rm -rf ~/moodle/*`)
* Make this countdown plugin work by getting the block title and the countdown timer to appear (use your simplehtml plugin as a guide, but if you get really stuck you can see the working code on the `answers` branch of the plugin)
  * NOTE: you should only need to make changes to the PHP files to get it working.
  * HINT: the timer will automatically attach to an HTML element given a certain class. Look at the `boc_countdown.js` file to figure out what class is needed.

## Make the plugin better

* Write a description of the plugin that shows in the block above the timer and below the title. Use a language string for this by adding a string to your the lang/en/block_boc_countdown.php file. Then insert the description as an html element.
  * HINT: You will need to figure out how to use the `get_string` function within the `html_writer` function.
  * Rremember to increment the version number in the version.php file and rerun the upgrade script `sudo -u www-data php admin/cli/upgrade.php` when you change/add language strings
* Make it pretty
  * Add some styles to `styles.css` to make the title, the description and the countdown timer pretty
* Once you have got the timer showing and working, test what happens when beer o'clock is reached by setting the time for beer o'clock to one minute from your current time. Just change the line in block_boc_countdown.php which says`'boctime' => strtotime('friday 5pm')` to one minute from the current time e.g. `'friday 10:23am'`). Then wait for that minute to arrive. You will see a message is displayed:
  * Improve the message. You will have to make an edit to the `boc_countdown.js` file.
  * Get the timer to show an image when beer o'clock arrives. One way to do this is to use jquery to add a class in the `boc_countdown.js` file when the timer reaches 0 - https://api.jquery.com/addclass/ - then add a background image to this class in the styles.css file. You will also have to add height and width in the styles.css file. Or you could use jquery to add an `<img>` element by using the `html` class - https://api.jquery.com/html/. Your choice. Use google to help if you need.
* Write some documentation using the headings below
* Delete the instructions in this readme
* Add and commit changes:
  * git add blocks/boc_countdown
  * git commit -m "blocks/boc_countdown: Fix and improve plugin"
  * git subtree push --prefix blocks/boc_countdown block_boc_countdown master

# BOC Countdown Plugin Manual


## About


## How do add plugin


## Credits
