{extends "index.tpl"}
{block "title"}Not Found{/block}

{block "body"}
    <div class="content">
        <div class="errorBlock">
            {$error.message|strip_tags|escape}
        </div>

        {* pigs do oink oink *}
        <div style="margin: 50px auto;width: 520px">
            <div style="float: left;width:200px;">
                <h2 style="font-size: 60px;">404</h2>
                <div style="font-size: 40px">oink, oink</div>
            </div>

            <svg id="triad-pig-image" viewBox="0 0 640 480" style="background-color:#ffffff00" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                 x="0px" y="0px" width="320px" height="240px">
                <g id="triad-pig">
                    <path d="M 611 370 L 632 366 C 632 366 631 369 616.8368 364.2728 C 592.3542 356.1013 611 370 611 370 Z" fill="#f4caba"/>
                    <path d="M 156 106 C 156 106 142 61 153 33 C 153 33 183 89 208 84 L 156 106 Z" stroke="#000000" stroke-width="10" fill="#c6a497"/>
                    <path d="M 67 174 C 67 174 25.7988 118.6006 93 85 C 153 55 182 152 182 152 L 67 174 Z" stroke="#0c0b09" stroke-width="10" fill="#ffffff"/>
                    <path d="M 571.2824 359.3054 C 571.2824 359.3054 596.0479 379.8344 610.5604 369.2665 C 625.0729 358.6986 599.3498 347.9424 600.3524 362.0602 C 600.3524 362.0602 596.9978 372.0026 569 348 L 571.2824 359.3054 Z" stroke="#000000" stroke-width="4" fill="#f4caba"/>
                    <path d="M 529 347 C 529 347 571 371 590 351 C 609 331 568 322 573 343 C 573 343 576 364 531 330 C 486 296 529 347 529 347 Z" fill="#f4caba"/>
                    <path d="M 529 347 C 529 347 571 371 590 351 C 609 331 567.8333 315 573.1667 347.5 " stroke="#000000" stroke-width="7" fill="none"/>
                    <path d="M 584 340 C 584 340 568 361 540 334 " stroke="#000000" stroke-width="7" fill="none"/>
                    <path d="M 611 370 L 632 366 C 632 366 628.5 365.8333 616.8368 364.2728 " stroke="#000000" stroke-width="2" fill="none"/>
                    <path d="M 357 387 C 355 488 439 450 424 396 " stroke="#000000" stroke-width="10" fill="#c6a497"/>
                    <path d="M 158 372 C 156 473 239 433 249 395 " stroke="#000000" stroke-width="10" fill="#c6a497"/>
                    <path d="M 478.5931 391.9706 C 492.4858 385.1124 503.4978 378.3348 510 374 C 525 364 555 336 560 288 C 565 240 563 185 514 116 C 465 47 351 41 330 40 C 309 39 248 39 204 54 C 142.3677 75.011 105 151 105 151 C 105 151 110.0361 335.5581 111 338 C 126 376 158 386 225 405 C 290.2825 423.5129 363.7107 421.6614 407.315 415.055 C 425.0438 473.318 481.7279 450.0338 474.6667 396.3333 L 478.5931 391.9706 Z" fill="#f4caba"/>
                    <path d="M 483 87 C 573 221 452 388 257 422 L 412 413 C 412 413 414 468 458 445 C 477.1351 434.9976 475 388 475 388 C 475 388 644 327 515 120 L 483 87 Z" fill="#c6a497"/>
                    <path d="M 478.5931 391.9706 C 492.4858 385.1124 503.4978 378.3348 510 374 C 525 364 555 336 560 288 C 565 240 563 185 514 116 C 465 47 351 41 330 40 C 309 39 248 39 204 54 C 142.3677 75.011 105 151 105 151 C 105 151 110.0361 335.5581 111 338 C 126 376 158 386 225 405 C 290.2825 423.5129 363.7107 421.6614 407.315 415.055 C 425.0438 473.318 481.7279 450.0338 474.6667 396.3333 L 478.5931 391.9706 Z" stroke="#000000" stroke-width="10" fill="none"/>
                    <path d="M 111 329 C 111 329 193 339 200 252 C 205.8634 179.126 157.2096 159.8179 114.5137 157.1758 C 93.2143 155.8578 72.4362 158.9048 58 171 C 21 202 8.1946 263.859 54 306 C 69.9648 320.6876 91.1109 326.4971 111 329 Z" fill="#f4caba"/>
                    <path d="M 67 314 L 120 332 L 172 312 L 200 265 L 191 198 C 184 259 183 326 67 314 Z" fill="#c6a497"/>
                    <path d="M 111 329 C 111 329 193 339 200 252 C 205.8634 179.126 157.2096 159.8179 114.5137 157.1758 C 93.2143 155.8578 72.4362 158.9048 58 171 C 21 202 8.1946 263.859 54 306 C 69.9648 320.6876 91.1109 326.4971 111 329 Z" stroke="#000000" stroke-width="10" fill="none"/>
                    <path d="M 119.8968 330.0281 C 162.2979 335.3641 204 321 204 321 " stroke="#040303" stroke-width="10" fill="none"/>
                    <path d="M 202 180 C 202 180 157.2096 159.8179 114.5137 157.1758 " stroke="#090707" stroke-width="10" fill="none"/>
                    <path d="M 45 230 C 50.7769 186.0953 82 188 76 232 C 68.0238 290.4925 40 268 45 230 Z" stroke="#020201" stroke-width="10" fill="#613e41"/>
                    <path d="M 389 94 C 364 119 320 77 320 77 C 347 48 402 22 402 22 C 403 64 389 94 389 94 Z" fill="#f4caba"/>
                    <path d="M 114 240 C 119.7769 196.0953 178.5709 190.9476 166 248 C 153 307 109 278 114 240 Z" stroke="#000000" stroke-width="10" fill="#613e41"/>
                    <path d="M 389 93 C 389 93 374 101 357 89 L 401 22 L 389 93 Z" fill="#c6a497"/>
                    <path d="M 321.4338 75.4897 C 348.8965 47.1035 402 22 402 22 C 402.8248 56.6407 393.4457 83.1183 390.1335 91.3336 " stroke="#000000" stroke-width="10" fill="none"/>
                    <path d="M 156 341 C 156 341 189 343 201 349 " stroke="#030303" stroke-width="10" fill="none"/>
                    <path d="M 352 178 C 352 178 331.0377 245.2238 262 221 C 205 201 208 143 230 114 C 252 85 293 77 332 104 C 371 131 352 178 352 178 Z" stroke="#000000" stroke-width="10" fill="#ffffff"/>
                    <path d="M 330 394 C 343 435 246 489 235 391 L 330 394 Z" fill="#f4caba"/>
                    <path d="M 330 394 C 343 435 246 489 235 391 " stroke="#000000" stroke-width="10" fill="none"/>
                    <path id="Ellipse" d="M 283 141 C 283 136.5817 286.5817 133 291 133 C 295.4183 133 299 136.5817 299 141 C 299 145.4183 295.4183 149 291 149 C 286.5817 149 283 145.4183 283 141 Z" fill="#000000"/>
                    <path id="Ellipse2" d="M 75 112.5 C 75 108.9101 78.3431 106 80 106 C 81.6569 106 87 108.4101 87 112 C 87 115.5899 81.6569 119 80 119 C 78.3431 119 75 116.0899 75 112.5 Z" fill="#000000"/>
                    <path d="M 607.8344 361.462 C 607.8344 361.462 596.6305 371.6997 582.5439 355.6461 " stroke="#000000" stroke-width="4" fill="none"/>
                    <path d="M 419.9576 354.6443 C 419.5819 353.2704 419.3233 352.2254 419.1522 351.5341 C 419.0487 351.1161 418.8758 350.9213 418.6748 350.9733 C 418.0049 351.1465 417.0327 351.4662 415.7166 351.909 C 414.4007 352.3518 413.4077 352.6598 412.7211 352.8373 L 411.9412 349.6863 C 411.5417 348.2159 411.0364 346.1742 410.4213 343.5451 L 408.9015 337.4038 L 407.4254 331.4394 L 405.9453 325.459 C 405.7821 324.7998 405.2105 324.4344 404.268 324.3701 C 399.8944 323.9784 396.7342 324.0256 394.7914 324.5278 C 394.3894 324.6317 394.0551 325.0089 393.7717 325.6638 C 392.8046 328.3085 392.1042 330.3027 391.6498 331.6346 C 390.1724 335.7454 388.0476 341.2722 385.2753 348.2151 C 382.9258 353.3382 381.1057 357.1442 379.8022 359.6535 C 379.4885 360.4017 379.6558 362.0861 380.3004 364.6905 C 381.12 368.0022 382.3672 369.4416 384.0421 369.0087 C 386.303 368.4242 389.6464 367.3889 394.0809 365.8663 C 398.5193 364.3597 401.8587 363.3083 404.1364 362.7196 C 404.6053 362.5983 404.9282 362.8228 405.0714 363.4015 L 406.1775 367.8708 L 407.2001 372.0025 C 407.3353 372.5491 408.9941 372.4111 412.193 371.5842 C 414.0688 371.0993 415.3887 370.6725 416.1401 370.3244 C 416.6856 370.0807 416.8868 369.6695 416.7515 369.1229 C 416.5367 368.2548 416.1434 366.9538 415.6053 365.2114 C 415.0671 363.4689 414.6906 362.1636 414.4718 361.2794 C 414.3326 360.7167 414.3455 360.3371 414.5314 360.1522 C 414.6159 360.0619 415.006 359.9098 415.6927 359.7322 C 417.5349 359.256 418.9833 358.9158 420.0168 358.7 C 420.6445 358.572 420.907 358.2646 420.7876 357.7823 C 420.6126 357.0749 420.3372 356.0343 419.9576 354.6443 L 419.9576 354.6443 ZM 398.4031 336.4572 L 400.6869 345.6852 L 403.0264 355.1382 C 400.68 355.8816 397.1118 356.8723 392.2883 358.1192 L 390.513 358.5782 C 388.3022 359.1497 387.098 359.3241 386.8924 359.0693 C 390.0357 351.8253 393.1908 344.6295 396.3747 337.4776 C 396.5449 336.8691 396.6943 336.2489 396.819 335.6009 C 397.0564 334.6159 397.3007 334.0909 397.5519 334.026 C 397.7305 334.0995 397.854 334.2386 397.9017 334.4315 L 398.4031 336.4572 L 398.4031 336.4572 Z" fill="#000000"/>
                    <path d="M 454.8123 312.0978 C 448.5742 309.4669 442.3444 309.6594 436.1457 312.6827 C 429.9469 315.7061 425.9826 320.504 424.2381 327.0468 C 422.5806 333.2145 423.2082 339.2841 426.128 345.2707 C 429.0551 351.2721 433.4662 355.5333 439.3615 358.0542 C 445.6204 360.7674 451.8492 360.6123 458.0479 357.589 C 464.2466 354.5657 468.2193 349.7452 469.9502 343.1351 C 471.5765 336.9826 470.9344 330.8831 467.9928 324.8518 C 465.0657 318.8504 460.6618 314.6041 454.8123 312.0978 L 454.8123 312.0978 ZM 460.5501 340.069 C 459.6058 344.2995 457.3426 347.2884 453.7916 349.0203 C 450.1159 350.813 446.3892 350.8012 442.5967 348.9548 C 439.3694 347.2394 436.8756 344.5378 435.099 340.8952 C 433.3078 337.2227 432.7059 333.6169 433.3391 330.0925 C 434.2316 326.072 436.5395 323.1353 440.2774 321.3122 C 444.0154 319.4891 447.766 319.4709 451.5148 321.2276 C 454.7421 322.9431 457.2524 325.5995 459.0218 329.2273 C 460.7183 332.7057 461.2278 336.3196 460.5501 340.069 L 460.5501 340.069 Z" fill="#000000"/>
                    <path d="M 509.2141 303.7171 C 508.4297 302.5241 507.8593 301.6087 507.482 301.0034 C 507.254 300.6374 507.0287 300.506 506.8531 300.6185 C 506.2679 300.9932 505.4406 301.6017 504.3251 302.4338 C 503.211 303.2649 502.3634 303.8665 501.7668 304.2484 L 500.0576 301.4982 C 499.2269 300.2271 498.121 298.4478 496.7319 296.1475 L 493.4138 290.8088 L 490.1984 285.6354 L 486.9815 280.4595 C 486.6273 279.8897 485.9812 279.7286 485.081 279.9709 C 480.8868 281.0038 477.9686 282.0575 476.3229 283.1477 C 475.9828 283.373 475.7882 283.8332 475.7249 284.5375 C 475.6334 287.3247 475.591 289.4159 475.575 290.8079 C 475.4567 295.1243 475.1701 300.9629 474.7159 308.3155 C 474.1021 313.8223 473.5781 317.9289 473.1382 320.6638 C 473.0758 321.4565 473.7372 322.9822 475.1147 325.2288 C 476.8683 328.0887 478.4523 329.0719 479.8669 328.1747 C 481.7805 326.9611 484.5661 325.0005 488.2297 322.2491 C 491.9184 319.4994 494.7296 317.5002 496.692 316.2542 C 497.0965 315.9973 497.4696 316.1121 497.7822 316.617 L 500.1984 320.52 L 502.4356 324.1339 C 502.7318 324.6123 504.2615 323.9846 507.0461 322.237 C 508.6831 321.2096 509.8105 320.404 510.4203 319.8445 C 510.8663 319.4467 510.9312 318.9935 510.6328 318.5132 C 510.1588 317.7506 509.3807 316.63 508.3285 315.1335 C 507.2769 313.6383 506.5151 312.5107 506.0338 311.7361 C 505.7275 311.2433 505.6227 310.878 505.7424 310.6449 C 505.795 310.533 506.1193 310.2682 506.7184 309.8878 C 508.3278 308.8659 509.6057 308.0938 510.5272 307.5678 C 511.0882 307.251 511.2442 306.8762 510.9805 306.4529 C 510.5936 305.8322 510.0076 304.9247 509.2141 303.7171 L 509.2141 303.7171 ZM 483.2994 293.2223 L 488.2434 301.2085 L 493.3253 309.4176 C 491.3517 310.8373 488.3169 312.858 484.2037 315.491 L 482.6948 316.4568 C 480.8196 317.6572 479.7585 318.1815 479.4913 318.0039 C 480.2032 310.2558 480.9427 302.5301 481.724 294.8174 C 481.697 294.1918 481.6472 293.5616 481.5659 292.9129 C 481.4868 291.9118 481.554 291.3412 481.7677 291.2011 C 481.9561 291.2142 482.1132 291.3063 482.2164 291.4728 L 483.2994 293.2223 L 483.2994 293.2223 Z" fill="#000000"/>
                </g>
            </svg>

        </div>

    </div>
{/block}