import loadash from 'lodash'
window._ = loadash

import $ from 'jquery';
window.$ = $;

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import * as Popper from '@popperjs/core'
window.Popper = Popper

// Aos
import AOS from 'aos';
import '../../node_modules/aos/dist/aos.css';

AOS.init({
    offset: 50,
    delay: 50,
    duration: 600,
    easing: 'ease-in-out',
    mirror: true,
    once: false,
    anchorPlacement: 'top-center',
});

import 'bootstrap'



/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios'
window.axios = axios

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
