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
    <meta property="og:url" content="https://whatabouthotels.com/">
    <meta property="og:title" content="Tech talks for non-tech startup founders">
    <meta property="og:description" content="For non-tech startup founders with tech teams. We'll chat about how to manage them better, productivity, expectations, communication, and so much more.">
    <meta property="og:image" content="https://whatabouthotels.com/images/hotel-pool-view.jpg">

    <!-- Open Graph / Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@nateritter">
    <meta property="twitter:domain" content="whatabouthotels.com">
    <meta property="twitter:url" content="https://whatabouthotels.com">
    <meta name="twitter:title" content="CTO.chat | Tech talks for non-tech startup founders">
    <meta name="twitter:description" content="For non-tech startup founders with tech teams. We'll chat about how to manage them better, productivity, expectations, communication, and so much more.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="https://whatabouthotels.com/images/hotel-pool-view.jpg">

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
                                        Get help with these issues by attending this live chat.<br>
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
                                        Thanks! We'll notify you as soon as the next chat is scheduled. ⇨
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
                                        <div class="flex-1 min-w-0 py-1 pl-5 text-sm text-gray-500 sm:py-3"><span class="font-medium text-gray-900">Rated 5 stars</span> by <span class="font-medium text-rose-500">the guy who's building it</span></div>
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
                            <!-- <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="/images/screenshots.jpg" alt="Screenshot"> -->
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
                            <!-- <div class="relative pt-64 pb-10 overflow-hidden shadow-xl rounded-2xl">
                                <img class="absolute inset-0 object-cover w-full h-full" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100" alt="Photo of a camper">
                                <div class="absolute inset-0 bg-rose-500 mix-blend-multiply"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-rose-600 via-rose-600 opacity-80">
                                </div>
                                <div class="relative px-8">
                                    <div>
                                        <img class="h-12" src="https://roomsteals.com/images/logo/Logo_White.svg" alt="Room Steals">
                                    </div>
                                    <blockquote class="mt-8">
                                        <div class="relative text-lg font-medium text-white md:flex-grow">
                                            <svg class="absolute top-0 left-0 w-8 h-8 transform -translate-x-3 -translate-y-2 text-rose-400" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                            </svg>
                                            <p class="relative">
                                                [quote]
                                            </p>
                                        </div>

                                        <footer class="mt-4">
                                            <p class="text-base font-semibold text-rose-200">
                                                [foo bar], Founder of [x]
                                            </p>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div> -->
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
                                    I've seen it all. I've been there. I've done that. I've got the t-shirt.
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
                                        Thanks! We'll notify you as soon as the next chat is scheduled. ⇨
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
        // (function() {
        //     var t = document.createElement('script'),
        //         s = document.getElementsByTagName('script')[0];
        //     t.async = true;
        //     t.id = 'cio-forms-handler';
        //     t.setAttribute('data-site-id', 'c371beeb8fb593a90435');
        //     t.setAttribute('data-base-url', 'https://customerioforms.com');

        //     t.src = 'https://customerioforms.com/assets/forms.js';

        //     s.parentNode.insertBefore(t, s);
        // })();
    </script>
</body>

</html>
