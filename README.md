# Capsule UI

A way to build encapsulated components (colocated HTML, CSS and JS) in PHP. (Every
Javascript framework is embracing server-side rendering, so why not just skip straight to PHP?)

## Installation

Don't. It's not on Packagist yet. I'm using an in-progress version of the [Smolblog framework][sb-fx] to build this.
Once I get this and that uploaded to Packagist, it'll be simpler. Until then:

[sb-fx]: https://github.com/smolblog/smolblog/tree/refactor/value-interface/packages/framework/foundation

1) Add both this repo and the [Smolblog monorepo][sb-mono] to your `composer.json`:

```json
[
  {
    "type": "vcs",
    "url": "https://github.com/smolblog/smolblog"
  },
  {
    "type": "vcs",
    "url": "https://github.com/oddevan/capsule-ui"
  }
]
```

[sb-mono]: https://github.com/smolblog/smolblog

2) Add this to your `composer.json`:

```json
"oddevan/capsule-ui": "dev-main"
```

## Usage

More detailed writeup to come, but basically create an instance of `oddEvan\CapsuleUi\ComponentManager` with the
preferred modules, then use the `ComponentRegistry` to render:

```php
$manager = new oddEvan\MimicYou\ComponentManager(oddEvan\UI\Module::class);
$manager->registry->render(
  'card',
  headline: 'Headline',
  description: 'This is a card.',
  submitButtonText: 'Cool!'
);
```

## License

(Currently AGPL, subject to change as project matures.)

Capsule UI by oddEvan
Copyright (C) 2025 Evan Hildreth

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as
published by the Free Software Foundation, either version 3 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.