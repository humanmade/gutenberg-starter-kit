# Gutenberg Starter Kit

A basic Gutenberg plugin to get started building your own custom blocks and plugins.

## Features

- Webpack config and commands
- Example block code
- Example plugin code
- Plugin bootstrap code for enqueueing assets

## Usage

You'll need to use the command line to start making edits so these intructions assume some basic command line knowledge.

### Prerequisites

1. XCode command line tools, run `xcode-select --install` to get these on OSX

### Setting up and developing

1. `cd` to your plugins directory in your WordPress install
1. Run `git clone https://github.com/humanmade/gutenberg-starter-kit.git`
1. `cd gutenberg-starter-kit`
1. `npm install`
1. `npm run build`

You can also use the webpack dev server to refresh the page when you make edits.

1. Add `define( 'SCRIPT_DEBUG', true );` to your wp config (make sure you don't put this live!)
1. `npm run start` to start the dev server.

The example block and plugin are in `assets/src/` and clearly named.
