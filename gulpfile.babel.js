"use strict";

import { src, dest, series, watch, task } from "gulp";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import sourcemaps from "gulp-sourcemaps";
import uglify from "gulp-uglify";

const paths = {
  css: [
    "./src/css/fonts.css",
    "./src/css/animations.css",
    "./src/css/base.css",
    "./src/css/layout.css",
    "./src/css/state.css",
    "./src/css/module.css",
    "./src/css/theme.css",
    // MODULES
    "./modules/header/header/header.css",
    "./modules/header/nav/global_nav.css",
    "./modules/front-page/front-page.css",
    "./modules/flex_img/flex_img.css",
    "./modules/flex_events/flex_events.css",

    "./modules/footer/footer.css",
    // LIBS
    "./node_modules/@splidejs/splide/dist/css/splide.min.css"
  ],
  scriptsHead: [
    "./src/js/scripts-head.js"
  ],
  scriptsFooter: [
    // LIBS
    //"./node_modules/particlesjs/dist/particles.js",
    "./src/libs/particles.min.js",
    "./node_modules/@splidejs/splide/dist/js/splide.min.js",
    // FOOTER SCRIPTS
    "./src/js/scripts-footer.js",
    // MODULES
    "./modules/header/header/header.js",
    "./modules/header/nav/global_nav.js",
    "./modules/front-page/front-page.js",
    "./modules/flex_events/flex_events.js",
  ],
};

const dirs = {
  dest: "./dist",
  css: "./dist/css",
  js: "./dist/js",
};

export const styles = () =>
  src(paths.css, { sourcemaps: true })
    .pipe(concat("core.min.css"))
    .pipe(cleanCSS({ compatibility: "*" }))
    .pipe(dest(dirs.css, { sourcemaps: true }));

export const styles_dev = () =>
  src(paths.css, { sourcemaps: true })
    .pipe(concat("core.dev.css"))
    .pipe(dest(dirs.css, { sourcemaps: true }));

export const jsHead = () =>
  src(paths.scriptsHead)
    .pipe(concat("scripts-head.min.js"))
    .pipe(uglify())
    .pipe(dest(dirs.js));

export const jsFooter = () =>
  src(paths.scriptsFooter)
    .pipe(concat("scripts-footer.min.js"))
    .pipe(uglify())
    .pipe(dest(dirs.js));

exports.default = series(styles, styles_dev, jsHead, jsFooter);