[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/takielias/codeigniter4-websocket">
    <img src="https://user-images.githubusercontent.com/38932580/71280886-acce1c00-2386-11ea-95d7-23e1775d3724.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">CodeIgniter 4 WebSocket Library</h3>

CodeIgniter WebSocket library. It allows you to make powerfull realtime applications by using Ratchet [Socketo.me](http://socketo.me) Websocket technology.

<!-- TABLE OF CONTENTS -->
## Table of Contents

* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
  * [Publishing](#publishing)
* [Usage](#usage)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [License](#license)
* [Contact](#contact)
* [Acknowledgements](#acknowledgements)


<!-- GETTING STARTED -->
## Getting Started

This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

- PHP 7.2+
- CodeIgniter Framework (4.* recommanded)
- Composer
- PHP sockets extension enabled

### Installation

```sh
composer require takielias/codeigniter4-websocket
```
### Publishing Resource
You need to publish the resources for default configuration
```sh
php spark websocket:publish
```

<!-- USAGE EXAMPLES -->
## Usage
First start Codeigniter
```sh
php spark serve
```
Finally start Websocket Server
```sh
php public/index.php Websocket start
```

**WOW You made it !!!** :heavy_check_mark: 

Open two pages of your project on following url with different IDs :

`http://localhost:8080/user/index/1`

`http://localhost:8080/user/index/2`

<!-- ROADMAP -->
## Roadmap

See the [open issues](https://github.com/othneildrew/codeigniter4-websocket/issues) for a list of proposed features (and known issues).


<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->
## Contact

Taki Elias - [@cheapapp_net](https://twitter.com/cheapapp_net) - [https://ebuz.xyz](https://ebuz.xyz) - takielias@gmail.com

<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [http://socketo.me](https://github.com/ratchetphp/Ratchet)
* [Websocket Client for PHP](https://github.com/Textalk/websocket-php)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Font Awesome](https://fontawesome.com)


<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/codeigniter4-websocket.svg?style=flat-square
[contributors-url]: https://github.com/othneildrew/codeigniter4-websocket/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/codeigniter4-websocket.svg?style=flat-square
[forks-url]: https://github.com/othneildrew/codeigniter4-websocket/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/codeigniter4-websocket.svg?style=flat-square
[stars-url]: https://github.com/othneildrew/codeigniter4-websocket/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/codeigniter4-websocket.svg?style=flat-square
[issues-url]: https://github.com/othneildrew/codeigniter4-websocket/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/codeigniter4-websocket.svg?style=flat-square
[license-url]: https://github.com/othneildrew/codeigniter4-websocket/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=flat-square&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/takielias
[product-screenshot]: images/screenshot.png

[ico-version]: https://img.shields.io/packagist/v/takielias/codeigniter4-websocket.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/takielias/codeigniter4-websocket.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/takielias/codeigniter4-websocket
[link-downloads]: https://packagist.org/packages/takielias/codeigniter4-websocket
[link-author]: https://github.com/takielias
