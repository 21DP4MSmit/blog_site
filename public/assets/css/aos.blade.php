<style>
    @for ($i = 50; $i <= 3000; $i += 50)
        [data-aos][data-aos][data-aos-duration="{{ $i }}"], body[data-aos-duration="{{ $i }}"] [data-aos] {
            transition-duration: {{ $i / 1000 }}s;
        }
        [data-aos][data-aos][data-aos-delay="{{ $i }}"], body[data-aos-delay="{{ $i }}"] [data-aos] {
            transition-delay: 0;
        }
        [data-aos][data-aos][data-aos-delay="{{ $i }}"].aos-animate, body[data-aos-delay="{{ $i }}"] [data-aos].aos-animate {
            transition-delay: {{ $i / 1000 }}s;
        }
    @endfor

    @for ($i = 50; $i <= 3000; $i += 50)
        [data-aos][data-aos][data-aos-easing="linear"], body[data-aos-easing="linear"] [data-aos] {
            transition-timing-function: cubic-bezier(.25,.25,.75,.75);
        }
        [data-aos][data-aos][data-aos-easing="ease"], body[data-aos-easing="ease"] [data-aos] {
            transition-timing-function: ease;
        }
        [data-aos][data-aos][data-aos-easing="ease-in"], body[data-aos-easing="ease-in"] [data-aos] {
            transition-timing-function: ease-in;
        }
        [data-aos][data-aos][data-aos-easing="ease-out"], body[data-aos-easing="ease-out"] [data-aos] {
            transition-timing-function: ease-out;
        }
        [data-aos][data-aos][data-aos-easing="ease-in-out"], body[data-aos-easing="ease-in-out"] [data-aos] {
            transition-timing-function: ease-in-out;
        }
    @endfor

    /* Add more easing styles here */

    [data-aos^=fade][data-aos^=fade] {
        opacity: 0;
        transition-property: opacity, transform;
    }
    [data-aos^=fade][data-aos^=fade].aos-animate {
        opacity: 1;
        transform: translateZ(0);
    }
    [data-aos=fade-up] {
        transform: translate3d(0, 100px, 0);
    }
    [data-aos=fade-down] {
        transform: translate3d(0, -100px, 0);
    }
    [data-aos=fade-right] {
        transform: translate3d(-100px, 0, 0);
    }
    [data-aos=fade-left] {
        transform: translate3d(100px, 0, 0);
    }
    /* Add more fade styles here */

    [data-aos^=zoom][data-aos^=zoom] {
        opacity: 0;
        transition-property: opacity, transform;
    }
    [data-aos^=zoom][data-aos^=zoom].aos-animate {
        opacity: 1;
        transform: translateZ(0);
    }
    /* Add more zoom styles here */
</style>
