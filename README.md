# repoComparator
Comparator of two any git repositories

# How it works
It works based on gitHub API (https://api.github.com)

# Requirements
- Web server
- installed PHP
- installed browser

# Quick start
- pull content into web files directory and open /localhost/ in browser

On main the page presented two fields for repositories. Format of input data (path to repo) is {owner}/{repo}.
Put both of them and press 'Start compare' button.

After processing you will see some info about that repo's:
- Forks:
- Stars:		
- Watchers:		
- Last release:		
- PR's: open/closed

# Attention
Application is not broken data safety. Without error handling. 
