<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTO.chat | Tech talks for non-tech startup founders</title>
    <meta name="description" content="For non-tech startup founders with tech teams. We'll chat about how to manage them better, productivity, expectations, communication, and so much more.">

    <link rel="icon" href="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500">
    <link rel="mask-icon" href="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500" color="#F43F5F">
    <link rel="apple-touch-icon" href="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500">
    <meta name="theme-color" content="#F43F5F">

    <link href="/dist/output.css" type="text/css" rel="stylesheet">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://cto.chat/">
    <meta property="og:title" content="Tech talks for non-tech startup founders">
    <meta property="og:description" content="For non-tech startup founders with tech teams. We'll chat about how to manage them better, productivity, expectations, communication, and so much more.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80">
    <!-- <meta property="og:image" content="https://images.unsplash.com/photo-1555421689-3f034debb7a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"> -->

    <!-- Open Graph / Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@nateritter">
    <meta property="twitter:domain" content="cto.chat">
    <meta property="twitter:url" content="https://cto.chat">
    <meta name="twitter:title" content="CTO.chat | Tech talks for non-tech startup founders">
    <meta name="twitter:description" content="For non-tech startup founders with tech teams. We'll chat about how to manage them better, productivity, expectations, communication, and so much more.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1513258496099-48168024aec0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80">
    <!-- <meta property="twitter:image" content="https://images.unsplash.com/photo-1555421689-3f034debb7a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"> -->

</head>

<body>
    <div class="bg-white">
        <main>
            <!-- Hero section -->
            <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
                <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                    <div>
                        <div>
                            <img class="w-auto h-11" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500" alt="Workflow">
                        </div>
                        <div class="mt-20">
                            <!-- <div> -->
                            <!-- <div class="inline-flex space-x-4"> -->
                            <!-- <span class="rounded bg-rose-50 px-2.5 py-1 text-xs font-semibold text-rose-500 tracking-wide uppercase">
                                        What's new
                                    </span>
                                    <span class="inline-flex items-center space-x-1 text-sm font-medium text-rose-500">
                                        <span>Just shipped version 0.1.0</span> -->
                            <!-- Heroicon name: solid/chevron-right -->
                            <!-- <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span> -->
                            <!-- </div> -->
                            <!-- </div> -->
                            <div class="mt-6 sm:max-w-xl">
                                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl" id="header">
                                    Non-tech startup founders, frustrated with your tech team?
                                </h1>
                                <p class="mt-6 text-xl text-gray-500">
                                    <span id="subhead-line-1">
                                        You have a team but, they miss deadlines.<br>
                                        You have regular standups, but nobody seems to talk.<br>
                                        You have a tech lead, but they don't seem to be leading.<br>
                                        ... And you aren't technical enough to fix it!<br><br>
                                    </span>
                                    <span id="subhead-line-2" class="pt-2">
                                        Get help with these issues by attending this live chat, hosted by an experienced CTO.<br>
                                    </span>
                                    <span id="subhead-line-3" class="pt-2 text-sm">
                                        (Even get on the "hot seat" if you want your specific issue addressed.)
                                    </span>
                                </p>
                            </div>
                            <?php if (empty($_GET['email'])) : ?>
                                <form action="#" class="mt-12 sm:max-w-lg sm:w-full sm:flex" name="notify-top">
                                    <div class="flex-1 min-w-0">
                                        <label for="hero-email" class="sr-only">Email address</label>
                                        <input id="hero-email" type="email" class="block w-full px-5 py-3 text-base text-gray-900 placeholder-gray-500 border border-gray-300 rounded-md shadow-sm focus:border-rose-500 focus:ring-rose-500" placeholder="Enter your email" name="email">
                                    </div>
                                    <div class="mt-4 sm:mt-0 sm:ml-3">
                                        <button type="submit" class="block w-full px-5 py-3 text-base font-medium text-white border border-transparent rounded-md shadow bg-rose-500 hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 sm:px-10">Notify me</button>
                                    </div>
                                </form>
                            <?php else : ?>
                                <form action="#" class="mt-12 sm:max-w-lg sm:w-full sm:flex" name="notify-top">
                                    <div class="flex-1 min-w-0 py-6">
                                        Thanks! We'll notify you as soon as the next chat is scheduled.
                                    </div>
                                </form>
                            <?php endif; ?>
                            <?php if (empty($_GET['email'])) : ?>
                                <div class="mt-6">
                                    <div class="inline-flex items-center divide-x divide-gray-300">
                                        <div class="flex flex-shrink-0 pr-5">
                                            <!-- Heroicon name: solid/star -->
                                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <!-- Heroicon name: solid/star -->
                                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <!-- Heroicon name: solid/star -->
                                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <!-- Heroicon name: solid/star -->
                                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            <!-- Heroicon name: solid/star -->
                                            <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        </div>
                                        <div class="flex-1 min-w-0 py-1 pl-5 text-sm text-gray-500 sm:py-3"><span class="font-medium text-gray-900">Rated 5 stars</span> by <span class="font-medium text-rose-500">people Nate has helped</span></div>
                                    </div>
                                <?php endif; ?>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                    <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                        <div class="hidden sm:block">
                            <div class="absolute inset-y-0 w-screen left-1/2 bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full">
                            </div>
                            <svg class="absolute -mr-3 top-8 right-1/2 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                            </svg>
                        </div>
                        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                            <!-- <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/task-app-rose.jpg" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial/stats section -->
            <div class="relative mt-20">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                    <div class="relative sm:py-16 lg:py-0">
                        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                            <div class="absolute inset-y-0 w-full right-1/2 bg-gray-50 rounded-r-3xl lg:right-72"></div>
                            <svg class="absolute -ml-3 top-8 left-1/2 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                                <defs>
                                    <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                    </pattern>
                                </defs>
                                <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                            </svg>
                        </div>
                        <div class="relative max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                            <!-- Testimonial card-->
                            <div class="relative pt-64 pb-10 overflow-hidden shadow-xl rounded-2xl">
                                <img class="absolute inset-0 object-cover w-full h-full" src="https://media-exp1.licdn.com/dms/image/C4E03AQHQpPfhpbK__Q/profile-displayphoto-shrink_800_800/0/1613870647988?e=1674086400&v=beta&t=uqMlHt3bHQYPLb9FsxdTLUtzDXF9i456JxTuS_XqG7s" alt="Alissa McDonald - Co-Founder and CEO, PopPD" />
                                <div class="absolute inset-0 bg-rose-500 mix-blend-multiply"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-rose-600 via-rose-600 opacity-80"></div>
                                <div class="relative px-8">
                                    <div>
                                        <!-- <img class="h-12" src="https://roomsteals.com/images/logo/Logo_White.svg" alt="Room Steals"> -->
                                        <svg width="114" height="32" viewBox="0 0 114 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_645_3343)">
                                                <path d="M40.8995 15.3991V7.70721H44.9761C46.0554 7.68468 47.1068 8.05079 47.9388 8.73879C48.347 9.03857 48.6818 9.42734 48.9175 9.87566C49.1533 10.324 49.2839 10.8201 49.2995 11.3263C49.3527 11.8828 49.2696 12.4437 49.0576 12.9609C48.8455 13.4781 48.5108 13.9358 48.0823 14.2948C47.2665 15.0349 46.1958 15.4307 45.0947 15.3991H40.8995ZM40.8995 17.0699H45.4622C46.95 17.1013 48.3916 16.5522 49.4813 15.5388C50.0223 15.0675 50.4559 14.4858 50.7531 13.8327C51.0502 13.1797 51.2039 12.4706 51.2038 11.7531C51.2287 10.1015 50.6546 8.71199 49.4354 7.63257C48.2163 6.55314 46.6986 5.98663 44.888 5.98663H38.9875V24.379H40.9014L40.8995 17.0699Z" fill="#073A3A"></path>
                                                <path d="M54.266 21.2268C53.3155 20.2047 52.8089 18.8475 52.8574 17.4526C52.8535 16.7626 52.989 16.079 53.2557 15.4426C53.5224 14.8062 53.9149 14.2303 54.4096 13.7493C54.8847 13.2489 55.4598 12.854 56.0975 12.5902C56.7352 12.3264 57.4212 12.1997 58.111 12.2182C58.775 12.2084 59.4336 12.3398 60.043 12.6038C60.6524 12.8677 61.1988 13.2582 61.6459 13.7493C62.6129 14.7332 63.1686 16.0486 63.2 17.4277C63.2221 18.1522 63.0956 18.8736 62.8284 19.5474C62.5611 20.2212 62.1587 20.8331 61.6459 21.3454C61.1694 21.8801 60.5765 22.2983 59.9128 22.5677C59.2492 22.8372 58.5326 22.9507 57.8182 22.8995C57.1409 22.8849 56.4741 22.7285 55.861 22.4404C55.2479 22.1523 54.7019 21.7388 54.2584 21.2268H54.266ZM65.0067 17.5713C65.0182 16.6585 64.8497 15.7524 64.5108 14.9048C64.1719 14.0572 63.6692 13.2847 63.0316 12.6316C62.4195 11.9556 61.6759 11.4117 60.8462 11.0333C60.0166 10.6548 59.1184 10.4497 58.2067 10.4306C56.2488 10.3579 54.5531 11.0507 53.1426 12.4842C52.4596 13.1471 51.9189 13.9423 51.5536 14.8213C51.1884 15.7002 51.0062 16.6444 51.0182 17.5962C51.003 18.5085 51.1682 19.4148 51.5041 20.2632C51.8401 21.1115 52.3403 21.8851 52.9761 22.5397C53.5911 23.2076 54.3362 23.7428 55.1656 24.1124C55.995 24.482 56.8911 24.6782 57.799 24.689C59.7588 24.7598 61.4545 24.067 62.8631 22.6584C64.2718 21.2497 65.0124 19.5292 65.0124 17.5694" fill="#073A3A"></path>
                                                <path d="M68.0956 17.9024C68.0861 17.711 68.0861 17.5196 68.0956 17.3282C68.1521 16.0071 68.6939 14.7533 69.6172 13.8067C70.0995 13.2739 70.696 12.857 71.3622 12.5872C72.0284 12.3174 72.7469 12.2017 73.4641 12.2488C74.1426 12.2677 74.8096 12.4284 75.4223 12.7204C76.0351 13.0124 76.58 13.4294 77.022 13.9445C77.4958 14.4448 77.8663 15.0337 78.1123 15.6773C78.3583 16.321 78.4749 17.0069 78.4555 17.6957C78.455 18.387 78.3151 19.0711 78.0441 19.7071C77.7731 20.3431 77.3767 20.9179 76.8784 21.3971C76.4035 21.891 75.832 22.2818 75.1995 22.5453C74.5669 22.8087 73.887 22.939 73.2019 22.9282C71.9886 22.953 70.8125 22.5096 69.9177 21.69V23.8488C70.8851 24.3936 71.9714 24.6926 73.0813 24.7196C75.0411 24.7924 76.7368 24.0995 78.1454 22.689C78.8272 22.0203 79.3669 21.2208 79.7323 20.3384C80.0977 19.4561 80.2812 18.509 80.2717 17.5541C80.2825 16.6399 80.1129 15.7325 79.7727 14.884C79.4325 14.0354 78.9283 13.2622 78.289 12.6086C77.6793 11.9406 76.9391 11.4047 76.1142 11.034C75.2893 10.6634 74.3971 10.4658 73.4928 10.4536C71.5349 10.3828 69.8392 11.0756 68.4057 12.5091C67.7252 13.1636 67.1856 13.9502 66.82 14.8207C66.4543 15.6912 66.2704 16.6272 66.2794 17.5713V29.156H68.1014V17.9024H68.0956Z" fill="#073A3A"></path>
                                                <path d="M86.5703 15.399V7.70717H90.6545C91.7332 7.68459 92.7841 8.05074 93.6153 8.73875C94.0241 9.03813 94.3593 9.42678 94.5955 9.87514C94.8316 10.3235 94.9624 10.8198 94.9779 11.3263C95.0309 11.8829 94.9475 12.444 94.7351 12.9611C94.5227 13.4783 94.1876 13.936 93.7588 14.2947C92.9439 15.0351 91.8737 15.4309 90.7732 15.399H86.5703ZM86.5703 17.0698H91.1311C92.6188 17.1011 94.0603 16.552 95.1502 15.5387C95.6911 15.0675 96.1248 14.4857 96.4219 13.8327C96.719 13.1797 96.8728 12.4705 96.8727 11.7531C96.8956 10.1014 96.3234 8.71195 95.1043 7.63253C93.8851 6.5531 92.3808 5.98468 90.5665 5.98468H84.6583V24.377H86.5722L86.5703 17.0698Z" fill="#073A3A"></path>
                                                <path d="M99.6842 22.6603V7.70721H103.529C105.567 7.67292 107.54 8.41772 109.047 9.7895C109.791 10.425 110.392 11.2121 110.808 12.0984C111.224 12.9846 111.445 13.9494 111.458 14.9283C111.502 15.93 111.337 16.9298 110.975 17.8647C110.613 18.7996 110.06 19.6492 109.353 20.3598C108.682 21.0957 107.862 21.6808 106.948 22.0767C106.033 22.4725 105.046 22.6702 104.05 22.6565L99.6842 22.6603ZM104.149 24.3828C105.352 24.3973 106.544 24.1654 107.653 23.7012C108.763 23.2371 109.765 22.5507 110.599 21.6842C111.475 20.8482 112.168 19.8405 112.637 18.7241C113.106 17.6078 113.339 16.4068 113.322 15.1962C113.322 12.5646 112.365 10.3618 110.48 8.61438C108.595 6.86702 106.18 5.98663 103.242 5.98663H97.9158V24.379L104.149 24.3828Z" fill="#073A3A"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7838 32L13.8488 28.5742L7.91199 25.1464V18.2928V11.4392L13.8488 8.01149L17.5235 5.89091L18.934 6.70431L9.32251 12.2526V24.3311L10.5991 25.0679L19.7838 30.3713L30.245 24.3311V4.92249L24.6067 8.02297V6.4134L31.6555 2.53589V11.4392V18.2928V25.1464L25.7187 28.5742L19.7838 32Z" fill="#EE43A7"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8718 0L17.8067 3.42775L23.7435 6.85359V9.48708V13.7072V20.5627L17.8067 23.9885L14.1321 26.111L12.7215 25.2957L22.3311 19.7474V7.6689L20.6622 6.70431L17.5215 4.89187L11.8718 1.62871L1.41053 7.6689V27.0775L7.04689 23.977V25.5866L0 29.4641V20.5627V13.7072V6.85359L5.93493 3.42775L11.8718 0Z" fill="#ECAB00"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_645_3343">
                                                    <rect width="113.322" height="32" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg class="absolute top-0 left-0 w-8 h-8 transform -translate-x-3 -translate-y-2 text-rose-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                            </svg>
                                            <p class="relative">
                                                I was stuck (for MONTHS!) on a strategic problem in my business that involved product and technology concepts that I haven't been able to wrap my head around.  Within an hour... I feel complete clarity around next steps. I can't wait to continue learning from Nate!
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-rose-200">
                                                Alissa McDonald, Co-Founder and CEO, PopPD | ?????? Techstars '22
                                            </p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Testimonial card-->
                            <div class="relative pt-64 pb-10 mt-20 overflow-hidden shadow-xl rounded-2xl">
                                <img class="absolute inset-0 object-cover w-full h-full" src="https://media-exp1.licdn.com/dms/image/C4E03AQHGzbRDm0N_xQ/profile-displayphoto-shrink_800_800/0/1658046847083?e=1674086400&v=beta&t=ygsXMIR6aWT5Wx5vdhv_HQbSonjhysdt-3RAwGir6rY" alt="Julien de Bats - Founder and CEO, Digital Envision" />
                                <div class="absolute inset-0 bg-rose-500 mix-blend-multiply"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-rose-600 via-rose-600 opacity-80"></div>
                                <div class="relative px-8">
                                    <div>
                                        <img class="h-12" src="https://media-exp1.licdn.com/dms/image/C4D0BAQGH8mPwvEumng/company-logo_200_200/0/1644453219356?e=1676505600&v=beta&t=MlymQxFTSf2BLiudtCrRMXNbDKhn25NWdqicAy6D5T4" alt="Digital Envision">
                                    </div>
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg class="absolute top-0 left-0 w-8 h-8 transform -translate-x-3 -translate-y-2 text-rose-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                            </svg>
                                            <p class="relative">
                                                Nate helped me navigate to essential business decisions during a time I had no clue what to do and what next steps to take. Through his help I was able to 10x my revenue (& profit!) in a matter of weeks.
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-rose-200">
                                                Julien de Bats - Founder and CEO, Digital Envision
                                            </p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-0">
                        <!-- Content area -->
                        <div class="pt-12 sm:pt-16 lg:pt-20">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Startup founders, relax!
                            </h2>
                            <div class="mt-6 space-y-6 text-gray-500">
                                <p class="text-lg">
                                    You've built your business from the ground up. You know it inside and out. You've built a great product. You've built a great brand. You've built a great story.
                                </p>
                                <p class="text-base leading-7">
                                    But when it came time to grow and hire, you needed technical help.
                                </p>
                                <p class="text-base leading-7">
                                    That came with some issues. Maybe a team tried to steal your code. Maybe they just aren't as productive as you thought they'd be. Maybe they tell you certain things can't be done, but you're sure they can be. Talking to them can be frustrating and maybe you feel like you're going around in circles.
                                </p>
                                <p class="text-base leading-7">
                                    Whatever the issues, you're not alone. I've been there. I've hired in-house and outsourced teams. I've been a founder, developer, consultant, and CTO for my own companies as well as on executive teams.
                                </p>
                                <p class="text-base leading-7">
                                    I've seen it. I've been there. I've done that. I've got the t-shirt.
                                </p>
                                <p class="text-base leading-7">
                                    I'm here to help you get back to what you do best: building your business.
                                </p>
                                <p class="text-base leading-7">
                                    On this chat, we'll talk about common issues between non-technical startup founders and their technical teams. We'll talk about how to avoid them, and how to fix them if you're already there.
                                </p>
                                <p class="text-base leading-7">
                                    But here's the thing... I know your issues are probably not so common. Your issues are specific to your business and your team. We can talk about those on the hot-seat, too.
                                </p>
                                <p class="text-base leading-7">
                                    The chat is free. So, get notified when the next one is scheduled!
                                </p>
                            </div>
                        </div>

                        <!-- Stats section -->
                        <!-- <div class="mt-10">
                            <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                                <div class="pt-6 border-t-2 border-gray-100">
                                    <dt class="text-base font-medium text-gray-500">Founded</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">2021</dd>
                                </div>

                                <div class="pt-6 border-t-2 border-gray-100">
                                    <dt class="text-base font-medium text-gray-500">Employees</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">1</dd>
                                </div>

                                <div class="pt-6 border-t-2 border-gray-100">
                                    <dt class="text-base font-medium text-gray-500">Beta Users</dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">521</dd>
                                </div>

                                <div class="pt-6 border-t-2 border-gray-100">
                                    <dt class="text-base font-medium text-gray-500">    </dt>
                                    <dd class="text-3xl font-extrabold tracking-tight text-gray-900">$25M</dd>
                                </div>
                            </dl>
                            <div class="mt-10">
                                <a href="#" class="text-base font-medium text-rose-500">
                                    Learn more about how we're changing the world&nbsp&rarr;
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Logo cloud section -->
            <!-- <div class="mt-32">
                <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
                    <div class="lg:grid lg:grid-cols-2 lg:gap-24 lg:items-center">
                        <div>
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                                Backed by world-renowned investors
                            </h2>
                            <p class="max-w-3xl mt-6 text-lg leading-7 text-gray-500">
                                Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi. Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus vitae.
                            </p>
                            <div class="mt-6">
                                <a href="#" class="text-base font-medium text-rose-500">
                                    Meet our investors and advisors&nbsp&rarr;
                                </a>
                            </div>
                        </div>
                        <div class="mt-12 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
                            </div>

                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
                            </div>

                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
                            </div>

                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/laravel-logo-gray-400.svg" alt="Laravel">
                            </div>

                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
                            </div>

                            <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
                                <img class="max-h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- CTA section -->
            <div class="relative mt-24 sm:mt-32 sm:py-16">
                <div aria-hidden="true" class="hidden sm:block">
                    <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 rounded-r-3xl"></div>
                    <svg class="absolute -ml-3 top-8 left-1/2" width="404" height="392" fill="none" viewBox="0 0 404 392">
                        <defs>
                            <pattern id="8228f071-bcee-4ec8-905a-2a059a2cc4fb" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="404" height="392" fill="url(#8228f071-bcee-4ec8-905a-2a059a2cc4fb)" />
                    </svg>
                </div>
                <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="relative px-6 py-10 overflow-hidden shadow-xl rounded-2xl bg-rose-500 sm:px-12 sm:py-20">
                        <div aria-hidden="true" class="absolute inset-0 -mt-72 sm:-mt-32 md:mt-0">
                            <svg class="absolute inset-0 w-full h-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
                                <path class="text-rose-400 text-opacity-40" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
                                <path class="text-rose-600 text-opacity-40" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
                            </svg>
                        </div>
                        <div class="relative">
                            <?php if (!isset($_GET['email'])) : ?>
                                <div class="sm:text-center">
                                    <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                                        Get notified when the next chat is scheduled
                                    </h2>
                                    <p class="max-w-2xl mx-auto mt-6 text-lg text-rose-100">
                                        Tired of spending hours trying to get through to your tech team?<br />Enter your email address below to be notified when the next chat is scheduled.
                                    </p>
                                </div>
                                <form action="#" class="mt-12 sm:mx-auto sm:max-w-lg sm:flex" name="notify-bottom">
                                    <div class="flex-1 min-w-0">
                                        <label for="cta-email" class="sr-only">Email address</label>
                                        <input id="cta-email" type="email" class="block w-full px-5 py-3 text-base text-gray-900 placeholder-gray-500 border border-transparent rounded-md shadow-sm focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-500" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mt-4 sm:mt-0 sm:ml-3">
                                        <button type="submit" class="block w-full px-5 py-3 text-base font-medium text-white bg-gray-900 border border-transparent rounded-md shadow hover:bg-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-500 sm:px-10">Notify
                                            me</button>
                                    </div>
                                </form>
                            <?php else : ?>
                                <div class="sm:text-center">
                                    <h2 class="py-5 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                                        Thanks! We'll notify you as soon as the next chat is scheduled.
                                    </h2>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer section -->
        <footer class="mt-24 bg-gray-900 sm:mt-12">
            <div class="max-w-md px-4 py-12 mx-auto overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
                <nav class="flex flex-wrap justify-center -mx-5 -my-2" aria-label="Footer">
                    <!-- <div class="px-5 py-2">
                        <a href="https://nateritter.com" target="_blank" class="text-base text-gray-400 hover:text-gray-300">
                            About Nate Ritter, the developer behind this service.
                        </a>
                    </div> -->

                    <!-- <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Blog
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Jobs
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Press
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Accessibility
                        </a>
                    </div>

                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">
                            Partners
                        </a>
                    </div> -->
                </nav>
                <div class="flex justify-center mt-8 space-x-6">
                    <!-- <a href="https://www.facebook.com/nateritter" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a> -->

                    <!-- <a href="https://instagram.com/nateandtilly" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                        </svg>
                    </a> -->

                    <!-- <a href="https://twitter.com/nateritter" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a> -->

                    <!-- <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">GitHub</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a> -->

                    <!-- <a href="#" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Dribbble</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a> -->
                </div>
                <p class="mt-8 text-base text-center text-gray-400">
                    &copy;<?php echo date('Y'); ?> Nate Ritter. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        /** Customer.io form action */
        (function() {
            var t = document.createElement('script'),
                s = document.getElementsByTagName('script')[0];
            t.async = true;
            t.id = 'cio-forms-handler';
            t.setAttribute('data-site-id', '26f19cf9b363569e77e2');
            t.setAttribute('data-base-url', 'https://customerioforms.com');

            t.src = 'https://customerioforms.com/assets/forms.js';

            s.parentNode.insertBefore(t, s);
        })();
    </script>
    <!-- Crisp.chat -->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="dd718907-5c8c-44a9-b706-60bd98ed7c32";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>

</html>
