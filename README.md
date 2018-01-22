# Instructions

Go to your remote moodle directory (cd /var/www/html/moodle):
* git status
* If you have any red lines, type:
* git add -A
* git commit -m "Commit untracked files"
* git push origin {branchname}
* Then:
* git checkout -b --no-track dev-bocblock remotes/origin/MOODLE_33_STABLE
* Fork this repository to your github: https://github.com/oliver-jk-redding/moodle-block_boc_countdown
* git add -f block_boc_countdown {your forked plugin url}
* git subtree add --prefix blocks/boc_countdown block_boc_countdown master
* Open your code in atom (don't forget to re mount moodle if needed - if it complains about mount point being nonempty, type `rm -rf ~/moodle/*`)
* Make this countdown plugin work (if you get really stuck you can see the working code on the answers branch of the plugin)
* Make it pretty (add some styles to styles.css and add an image that displays when Beer O'Clock is reached - you can test this by making beer o'clock earlier for the purposes of testing - just change this line in block_boc_countdown.php `'boctime' => strtotime('friday 5pm')` to one minute from the current time e.g. `'friday 10:23am'`)
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
