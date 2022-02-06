#!/bin/bash

for filename in /var/www/html/cathy-meints/files/memorex/*.aiff; do
	avconv -i "$filename" -f mp3 -acodec libmp3lame -ab 192000 -ar 44100 "$filename.mp3"
done

