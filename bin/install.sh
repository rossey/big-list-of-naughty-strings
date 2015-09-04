#!/bin/bash
[[ -x $(which git) ]] && git submodule update --init --recursive || echo 'You don/'t have git installed, so can/'t update the list'
