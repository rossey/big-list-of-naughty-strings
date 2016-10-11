#!/bin/bash
if [[ -x $(which git) ]]; then
	git submodule update --init --recursive
elif [[ -x $(which curl) && -x $(which unzip) ]]; then
	curl -L https://github.com/minimaxir/big-list-of-naughty-strings/archive/master.zip -o BLoNS.zip &&
	unzip -o BLoNS.zip -d resources &&
	rm BLoNS.zip
else
	echo "Can't update the Big List Of Naughty Strings"
fi
