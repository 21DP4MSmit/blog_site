<style>
    /*!
 * Bootstrap Grid v5.0.0-alpha2 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  --bs-gutter-x: 1.5rem;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) / 2);
  padding-left: calc(var(--bs-gutter-x) / 2);
  margin-right: auto;
  margin-left: auto; }

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px; } }

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px; } }

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px; } }

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px; } }

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px; } }

.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: calc(var(--bs-gutter-y) * -1);
  margin-right: calc(var(--bs-gutter-x) / -2);
  margin-left: calc(var(--bs-gutter-x) / -2); }
  .row > * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y); }

.col {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 0%;
  flex: 1 0 0%; }

.row-cols-auto > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.row-cols-1 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.row-cols-2 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.row-cols-3 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.row-cols-4 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.row-cols-5 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 20%; }

.row-cols-6 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

.g-0,
.gx-0 {
  --bs-gutter-x: 0; }

.g-0,
.gy-0 {
  --bs-gutter-y: 0; }

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem; }

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem; }

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem; }

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem; }

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem; }

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem; }

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem; }

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem; }

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem; }

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem; }

@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0; }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0; }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem; }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem; }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem; }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem; }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem; }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem; }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem; }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem; }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem; }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 768px) {
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0; }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0; }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem; }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem; }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem; }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem; }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem; }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem; }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem; }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem; }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem; }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 992px) {
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0; }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0; }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem; }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem; }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem; }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem; }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem; }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem; }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem; }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem; }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem; }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1200px) {
  .col-xl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0; }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0; }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem; }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem; }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem; }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1400px) {
  .col-xxl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xxl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xxl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xxl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xxl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xxl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xxl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xxl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xxl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xxl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xxl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xxl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xxl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xxl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xxl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xxl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xxl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xxl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xxl-0 {
    margin-left: 0; }
  .offset-xxl-1 {
    margin-left: 8.33333%; }
  .offset-xxl-2 {
    margin-left: 16.66667%; }
  .offset-xxl-3 {
    margin-left: 25%; }
  .offset-xxl-4 {
    margin-left: 33.33333%; }
  .offset-xxl-5 {
    margin-left: 41.66667%; }
  .offset-xxl-6 {
    margin-left: 50%; }
  .offset-xxl-7 {
    margin-left: 58.33333%; }
  .offset-xxl-8 {
    margin-left: 66.66667%; }
  .offset-xxl-9 {
    margin-left: 75%; }
  .offset-xxl-10 {
    margin-left: 83.33333%; }
  .offset-xxl-11 {
    margin-left: 91.66667%; }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0; }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0; }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem; }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem; }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem; }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem; } }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

.d-none {
  display: none !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
  -ms-flex-pack: space-evenly !important;
  justify-content: space-evenly !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  -ms-grid-row-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  -ms-grid-row-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  -ms-grid-row-align: stretch !important;
  align-self: stretch !important; }

.order-first {
  -webkit-box-ordinal-group: 0 !important;
  -ms-flex-order: -1 !important;
  order: -1 !important; }

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
  -ms-flex-order: 0 !important;
  order: 0 !important; }

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
  -ms-flex-order: 1 !important;
  order: 1 !important; }

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important; }

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
  -ms-flex-order: 3 !important;
  order: 3 !important; }

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
  -ms-flex-order: 4 !important;
  order: 4 !important; }

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
  -ms-flex-order: 5 !important;
  order: 5 !important; }

.order-last {
  -webkit-box-ordinal-group: 7 !important;
  -ms-flex-order: 6 !important;
  order: 6 !important; }

.m-0 {
  margin: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important; }

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important; }

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important; }

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important; }

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important; }

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important; }

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important; }

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important; }

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important; }

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important; }

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important; }

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important; }

.mt-0 {
  margin-top: 0 !important; }

.mt-1 {
  margin-top: 0.25rem !important; }

.mt-2 {
  margin-top: 0.5rem !important; }

.mt-3 {
  margin-top: 1rem !important; }

.mt-4 {
  margin-top: 1.5rem !important; }

.mt-5 {
  margin-top: 3rem !important; }

.mt-auto {
  margin-top: auto !important; }

.mr-0 {
  margin-right: 0 !important; }

.mr-1 {
  margin-right: 0.25rem !important; }

.mr-2 {
  margin-right: 0.5rem !important; }

.mr-3 {
  margin-right: 1rem !important; }

.mr-4 {
  margin-right: 1.5rem !important; }

.mr-5 {
  margin-right: 3rem !important; }

.mr-auto {
  margin-right: auto !important; }

.mb-0 {
  margin-bottom: 0 !important; }

.mb-1 {
  margin-bottom: 0.25rem !important; }

.mb-2 {
  margin-bottom: 0.5rem !important; }

.mb-3 {
  margin-bottom: 1rem !important; }

.mb-4 {
  margin-bottom: 1.5rem !important; }

.mb-5 {
  margin-bottom: 3rem !important; }

.mb-auto {
  margin-bottom: auto !important; }

.ml-0 {
  margin-left: 0 !important; }

.ml-1 {
  margin-left: 0.25rem !important; }

.ml-2 {
  margin-left: 0.5rem !important; }

.ml-3 {
  margin-left: 1rem !important; }

.ml-4 {
  margin-left: 1.5rem !important; }

.ml-5 {
  margin-left: 3rem !important; }

.ml-auto {
  margin-left: auto !important; }

.p-0 {
  padding: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important; }

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important; }

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important; }

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important; }

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important; }

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important; }

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important; }

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important; }

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important; }

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important; }

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important; }

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important; }

.pt-0 {
  padding-top: 0 !important; }

.pt-1 {
  padding-top: 0.25rem !important; }

.pt-2 {
  padding-top: 0.5rem !important; }

.pt-3 {
  padding-top: 1rem !important; }

.pt-4 {
  padding-top: 1.5rem !important; }

.pt-5 {
  padding-top: 3rem !important; }

.pr-0 {
  padding-right: 0 !important; }

.pr-1 {
  padding-right: 0.25rem !important; }

.pr-2 {
  padding-right: 0.5rem !important; }

.pr-3 {
  padding-right: 1rem !important; }

.pr-4 {
  padding-right: 1.5rem !important; }

.pr-5 {
  padding-right: 3rem !important; }

.pb-0 {
  padding-bottom: 0 !important; }

.pb-1 {
  padding-bottom: 0.25rem !important; }

.pb-2 {
  padding-bottom: 0.5rem !important; }

.pb-3 {
  padding-bottom: 1rem !important; }

.pb-4 {
  padding-bottom: 1.5rem !important; }

.pb-5 {
  padding-bottom: 3rem !important; }

.pl-0 {
  padding-left: 0 !important; }

.pl-1 {
  padding-left: 0.25rem !important; }

.pl-2 {
  padding-left: 0.5rem !important; }

.pl-3 {
  padding-left: 1rem !important; }

.pl-4 {
  padding-left: 1.5rem !important; }

.pl-5 {
  padding-left: 3rem !important; }

@media (min-width: 576px) {
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-sm-none {
    display: none !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-sm-0 {
    margin: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-sm-0 {
    margin-top: 0 !important; }
  .mt-sm-1 {
    margin-top: 0.25rem !important; }
  .mt-sm-2 {
    margin-top: 0.5rem !important; }
  .mt-sm-3 {
    margin-top: 1rem !important; }
  .mt-sm-4 {
    margin-top: 1.5rem !important; }
  .mt-sm-5 {
    margin-top: 3rem !important; }
  .mt-sm-auto {
    margin-top: auto !important; }
  .mr-sm-0 {
    margin-right: 0 !important; }
  .mr-sm-1 {
    margin-right: 0.25rem !important; }
  .mr-sm-2 {
    margin-right: 0.5rem !important; }
  .mr-sm-3 {
    margin-right: 1rem !important; }
  .mr-sm-4 {
    margin-right: 1.5rem !important; }
  .mr-sm-5 {
    margin-right: 3rem !important; }
  .mr-sm-auto {
    margin-right: auto !important; }
  .mb-sm-0 {
    margin-bottom: 0 !important; }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important; }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important; }
  .mb-sm-3 {
    margin-bottom: 1rem !important; }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important; }
  .mb-sm-5 {
    margin-bottom: 3rem !important; }
  .mb-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-0 {
    margin-left: 0 !important; }
  .ml-sm-1 {
    margin-left: 0.25rem !important; }
  .ml-sm-2 {
    margin-left: 0.5rem !important; }
  .ml-sm-3 {
    margin-left: 1rem !important; }
  .ml-sm-4 {
    margin-left: 1.5rem !important; }
  .ml-sm-5 {
    margin-left: 3rem !important; }
  .ml-sm-auto {
    margin-left: auto !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-sm-0 {
    padding-top: 0 !important; }
  .pt-sm-1 {
    padding-top: 0.25rem !important; }
  .pt-sm-2 {
    padding-top: 0.5rem !important; }
  .pt-sm-3 {
    padding-top: 1rem !important; }
  .pt-sm-4 {
    padding-top: 1.5rem !important; }
  .pt-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-0 {
    padding-right: 0 !important; }
  .pr-sm-1 {
    padding-right: 0.25rem !important; }
  .pr-sm-2 {
    padding-right: 0.5rem !important; }
  .pr-sm-3 {
    padding-right: 1rem !important; }
  .pr-sm-4 {
    padding-right: 1.5rem !important; }
  .pr-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-0 {
    padding-bottom: 0 !important; }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pb-sm-3 {
    padding-bottom: 1rem !important; }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pb-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-0 {
    padding-left: 0 !important; }
  .pl-sm-1 {
    padding-left: 0.25rem !important; }
  .pl-sm-2 {
    padding-left: 0.5rem !important; }
  .pl-sm-3 {
    padding-left: 1rem !important; }
  .pl-sm-4 {
    padding-left: 1.5rem !important; }
  .pl-sm-5 {
    padding-left: 3rem !important; } }

@media (min-width: 768px) {
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-md-none {
    display: none !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-md-0 {
    margin: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-md-0 {
    margin-top: 0 !important; }
  .mt-md-1 {
    margin-top: 0.25rem !important; }
  .mt-md-2 {
    margin-top: 0.5rem !important; }
  .mt-md-3 {
    margin-top: 1rem !important; }
  .mt-md-4 {
    margin-top: 1.5rem !important; }
  .mt-md-5 {
    margin-top: 3rem !important; }
  .mt-md-auto {
    margin-top: auto !important; }
  .mr-md-0 {
    margin-right: 0 !important; }
  .mr-md-1 {
    margin-right: 0.25rem !important; }
  .mr-md-2 {
    margin-right: 0.5rem !important; }
  .mr-md-3 {
    margin-right: 1rem !important; }
  .mr-md-4 {
    margin-right: 1.5rem !important; }
  .mr-md-5 {
    margin-right: 3rem !important; }
  .mr-md-auto {
    margin-right: auto !important; }
  .mb-md-0 {
    margin-bottom: 0 !important; }
  .mb-md-1 {
    margin-bottom: 0.25rem !important; }
  .mb-md-2 {
    margin-bottom: 0.5rem !important; }
  .mb-md-3 {
    margin-bottom: 1rem !important; }
  .mb-md-4 {
    margin-bottom: 1.5rem !important; }
  .mb-md-5 {
    margin-bottom: 3rem !important; }
  .mb-md-auto {
    margin-bottom: auto !important; }
  .ml-md-0 {
    margin-left: 0 !important; }
  .ml-md-1 {
    margin-left: 0.25rem !important; }
  .ml-md-2 {
    margin-left: 0.5rem !important; }
  .ml-md-3 {
    margin-left: 1rem !important; }
  .ml-md-4 {
    margin-left: 1.5rem !important; }
  .ml-md-5 {
    margin-left: 3rem !important; }
  .ml-md-auto {
    margin-left: auto !important; }
  .p-md-0 {
    padding: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-md-0 {
    padding-top: 0 !important; }
  .pt-md-1 {
    padding-top: 0.25rem !important; }
  .pt-md-2 {
    padding-top: 0.5rem !important; }
  .pt-md-3 {
    padding-top: 1rem !important; }
  .pt-md-4 {
    padding-top: 1.5rem !important; }
  .pt-md-5 {
    padding-top: 3rem !important; }
  .pr-md-0 {
    padding-right: 0 !important; }
  .pr-md-1 {
    padding-right: 0.25rem !important; }
  .pr-md-2 {
    padding-right: 0.5rem !important; }
  .pr-md-3 {
    padding-right: 1rem !important; }
  .pr-md-4 {
    padding-right: 1.5rem !important; }
  .pr-md-5 {
    padding-right: 3rem !important; }
  .pb-md-0 {
    padding-bottom: 0 !important; }
  .pb-md-1 {
    padding-bottom: 0.25rem !important; }
  .pb-md-2 {
    padding-bottom: 0.5rem !important; }
  .pb-md-3 {
    padding-bottom: 1rem !important; }
  .pb-md-4 {
    padding-bottom: 1.5rem !important; }
  .pb-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-0 {
    padding-left: 0 !important; }
  .pl-md-1 {
    padding-left: 0.25rem !important; }
  .pl-md-2 {
    padding-left: 0.5rem !important; }
  .pl-md-3 {
    padding-left: 1rem !important; }
  .pl-md-4 {
    padding-left: 1.5rem !important; }
  .pl-md-5 {
    padding-left: 3rem !important; } }

@media (min-width: 992px) {
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-lg-none {
    display: none !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-lg-0 {
    margin: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-lg-0 {
    margin-top: 0 !important; }
  .mt-lg-1 {
    margin-top: 0.25rem !important; }
  .mt-lg-2 {
    margin-top: 0.5rem !important; }
  .mt-lg-3 {
    margin-top: 1rem !important; }
  .mt-lg-4 {
    margin-top: 1.5rem !important; }
  .mt-lg-5 {
    margin-top: 3rem !important; }
  .mt-lg-auto {
    margin-top: auto !important; }
  .mr-lg-0 {
    margin-right: 0 !important; }
  .mr-lg-1 {
    margin-right: 0.25rem !important; }
  .mr-lg-2 {
    margin-right: 0.5rem !important; }
  .mr-lg-3 {
    margin-right: 1rem !important; }
  .mr-lg-4 {
    margin-right: 1.5rem !important; }
  .mr-lg-5 {
    margin-right: 3rem !important; }
  .mr-lg-auto {
    margin-right: auto !important; }
  .mb-lg-0 {
    margin-bottom: 0 !important; }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important; }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important; }
  .mb-lg-3 {
    margin-bottom: 1rem !important; }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important; }
  .mb-lg-5 {
    margin-bottom: 3rem !important; }
  .mb-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-0 {
    margin-left: 0 !important; }
  .ml-lg-1 {
    margin-left: 0.25rem !important; }
  .ml-lg-2 {
    margin-left: 0.5rem !important; }
  .ml-lg-3 {
    margin-left: 1rem !important; }
  .ml-lg-4 {
    margin-left: 1.5rem !important; }
  .ml-lg-5 {
    margin-left: 3rem !important; }
  .ml-lg-auto {
    margin-left: auto !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-lg-0 {
    padding-top: 0 !important; }
  .pt-lg-1 {
    padding-top: 0.25rem !important; }
  .pt-lg-2 {
    padding-top: 0.5rem !important; }
  .pt-lg-3 {
    padding-top: 1rem !important; }
  .pt-lg-4 {
    padding-top: 1.5rem !important; }
  .pt-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-0 {
    padding-right: 0 !important; }
  .pr-lg-1 {
    padding-right: 0.25rem !important; }
  .pr-lg-2 {
    padding-right: 0.5rem !important; }
  .pr-lg-3 {
    padding-right: 1rem !important; }
  .pr-lg-4 {
    padding-right: 1.5rem !important; }
  .pr-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-0 {
    padding-bottom: 0 !important; }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pb-lg-3 {
    padding-bottom: 1rem !important; }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pb-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-0 {
    padding-left: 0 !important; }
  .pl-lg-1 {
    padding-left: 0.25rem !important; }
  .pl-lg-2 {
    padding-left: 0.5rem !important; }
  .pl-lg-3 {
    padding-left: 1rem !important; }
  .pl-lg-4 {
    padding-left: 1.5rem !important; }
  .pl-lg-5 {
    padding-left: 3rem !important; } }

@media (min-width: 1200px) {
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xl-none {
    display: none !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xl-0 {
    margin: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xl-0 {
    margin-top: 0 !important; }
  .mt-xl-1 {
    margin-top: 0.25rem !important; }
  .mt-xl-2 {
    margin-top: 0.5rem !important; }
  .mt-xl-3 {
    margin-top: 1rem !important; }
  .mt-xl-4 {
    margin-top: 1.5rem !important; }
  .mt-xl-5 {
    margin-top: 3rem !important; }
  .mt-xl-auto {
    margin-top: auto !important; }
  .mr-xl-0 {
    margin-right: 0 !important; }
  .mr-xl-1 {
    margin-right: 0.25rem !important; }
  .mr-xl-2 {
    margin-right: 0.5rem !important; }
  .mr-xl-3 {
    margin-right: 1rem !important; }
  .mr-xl-4 {
    margin-right: 1.5rem !important; }
  .mr-xl-5 {
    margin-right: 3rem !important; }
  .mr-xl-auto {
    margin-right: auto !important; }
  .mb-xl-0 {
    margin-bottom: 0 !important; }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xl-3 {
    margin-bottom: 1rem !important; }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xl-5 {
    margin-bottom: 3rem !important; }
  .mb-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-0 {
    margin-left: 0 !important; }
  .ml-xl-1 {
    margin-left: 0.25rem !important; }
  .ml-xl-2 {
    margin-left: 0.5rem !important; }
  .ml-xl-3 {
    margin-left: 1rem !important; }
  .ml-xl-4 {
    margin-left: 1.5rem !important; }
  .ml-xl-5 {
    margin-left: 3rem !important; }
  .ml-xl-auto {
    margin-left: auto !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xl-0 {
    padding-top: 0 !important; }
  .pt-xl-1 {
    padding-top: 0.25rem !important; }
  .pt-xl-2 {
    padding-top: 0.5rem !important; }
  .pt-xl-3 {
    padding-top: 1rem !important; }
  .pt-xl-4 {
    padding-top: 1.5rem !important; }
  .pt-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-0 {
    padding-right: 0 !important; }
  .pr-xl-1 {
    padding-right: 0.25rem !important; }
  .pr-xl-2 {
    padding-right: 0.5rem !important; }
  .pr-xl-3 {
    padding-right: 1rem !important; }
  .pr-xl-4 {
    padding-right: 1.5rem !important; }
  .pr-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-0 {
    padding-bottom: 0 !important; }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xl-3 {
    padding-bottom: 1rem !important; }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-0 {
    padding-left: 0 !important; }
  .pl-xl-1 {
    padding-left: 0.25rem !important; }
  .pl-xl-2 {
    padding-left: 0.5rem !important; }
  .pl-xl-3 {
    padding-left: 1rem !important; }
  .pl-xl-4 {
    padding-left: 1.5rem !important; }
  .pl-xl-5 {
    padding-left: 3rem !important; } }

@media (min-width: 1400px) {
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xxl-none {
    display: none !important; }
  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xxl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xxl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xxl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xxl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
    -ms-grid-row-align: auto !important;
    align-self: auto !important; }
  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
    -ms-grid-row-align: center !important;
    align-self: center !important; }
  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
    -ms-grid-row-align: stretch !important;
    align-self: stretch !important; }
  .order-xxl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xxl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xxl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xxl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xxl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xxl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xxl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xxl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xxl-0 {
    margin: 0 !important; }
  .m-xxl-1 {
    margin: 0.25rem !important; }
  .m-xxl-2 {
    margin: 0.5rem !important; }
  .m-xxl-3 {
    margin: 1rem !important; }
  .m-xxl-4 {
    margin: 1.5rem !important; }
  .m-xxl-5 {
    margin: 3rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xxl-0 {
    margin-top: 0 !important; }
  .mt-xxl-1 {
    margin-top: 0.25rem !important; }
  .mt-xxl-2 {
    margin-top: 0.5rem !important; }
  .mt-xxl-3 {
    margin-top: 1rem !important; }
  .mt-xxl-4 {
    margin-top: 1.5rem !important; }
  .mt-xxl-5 {
    margin-top: 3rem !important; }
  .mt-xxl-auto {
    margin-top: auto !important; }
  .mr-xxl-0 {
    margin-right: 0 !important; }
  .mr-xxl-1 {
    margin-right: 0.25rem !important; }
  .mr-xxl-2 {
    margin-right: 0.5rem !important; }
  .mr-xxl-3 {
    margin-right: 1rem !important; }
  .mr-xxl-4 {
    margin-right: 1.5rem !important; }
  .mr-xxl-5 {
    margin-right: 3rem !important; }
  .mr-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-0 {
    margin-bottom: 0 !important; }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xxl-3 {
    margin-bottom: 1rem !important; }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xxl-5 {
    margin-bottom: 3rem !important; }
  .mb-xxl-auto {
    margin-bottom: auto !important; }
  .ml-xxl-0 {
    margin-left: 0 !important; }
  .ml-xxl-1 {
    margin-left: 0.25rem !important; }
  .ml-xxl-2 {
    margin-left: 0.5rem !important; }
  .ml-xxl-3 {
    margin-left: 1rem !important; }
  .ml-xxl-4 {
    margin-left: 1.5rem !important; }
  .ml-xxl-5 {
    margin-left: 3rem !important; }
  .ml-xxl-auto {
    margin-left: auto !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .p-xxl-1 {
    padding: 0.25rem !important; }
  .p-xxl-2 {
    padding: 0.5rem !important; }
  .p-xxl-3 {
    padding: 1rem !important; }
  .p-xxl-4 {
    padding: 1.5rem !important; }
  .p-xxl-5 {
    padding: 3rem !important; }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xxl-0 {
    padding-top: 0 !important; }
  .pt-xxl-1 {
    padding-top: 0.25rem !important; }
  .pt-xxl-2 {
    padding-top: 0.5rem !important; }
  .pt-xxl-3 {
    padding-top: 1rem !important; }
  .pt-xxl-4 {
    padding-top: 1.5rem !important; }
  .pt-xxl-5 {
    padding-top: 3rem !important; }
  .pr-xxl-0 {
    padding-right: 0 !important; }
  .pr-xxl-1 {
    padding-right: 0.25rem !important; }
  .pr-xxl-2 {
    padding-right: 0.5rem !important; }
  .pr-xxl-3 {
    padding-right: 1rem !important; }
  .pr-xxl-4 {
    padding-right: 1.5rem !important; }
  .pr-xxl-5 {
    padding-right: 3rem !important; }
  .pb-xxl-0 {
    padding-bottom: 0 !important; }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xxl-3 {
    padding-bottom: 1rem !important; }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xxl-5 {
    padding-bottom: 3rem !important; }
  .pl-xxl-0 {
    padding-left: 0 !important; }
  .pl-xxl-1 {
    padding-left: 0.25rem !important; }
  .pl-xxl-2 {
    padding-left: 0.5rem !important; }
  .pl-xxl-3 {
    padding-left: 1rem !important; }
  .pl-xxl-4 {
    padding-left: 1.5rem !important; }
  .pl-xxl-5 {
    padding-left: 3rem !important; } }

@media print {
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-print-none {
    display: none !important; } }

</style>