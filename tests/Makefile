# --------------------------------------------------------------------
# Copyright (c) 2019 MINISTRY OF JUSTICE
# 
# This software may be modified and distributed under the terms of the
# MIT license. See the LICENSE file for details.
# ---

help:
	@echo ''
	@echo 'Usage: make [TARGET] [EXTRA_ARGUMENTS]'
	@echo 'Targets:'
	@echo ' install docker pull phpunit/phpunit'
	@echo ' test  docker run -v $(pwd):/app --rm phpunit/phpunit .'
	@echo ' uhelp  docker run -v $(pwd):/app --rm phpunit/phpunit'

install:
	@docker pull phpunit/phpunit

uhelp:
	@docker run -v $(pwd):/app --rm phpunit/phpunit

run:
	@docker run -v $(pwd):/app --rm phpunit/phpunit .