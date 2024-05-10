<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/44c48dbaca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styyle.css">
</head>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: "#da373d",
                },
            },
        },
    };
</script>
<title>About US</title>

<body>
    <!-- nav -->
    <section class="nav">
        <div class="md:shadow-lg fixed w-full top-0 z-10 left-0">
            <nav class="bg-[#3FC495]">
                <div class="md:flex md:justify-around md:items-center">
                    <a href="index.php" class="w-40 h-20 flex flex-col justify-center items-center">
                        <img class="h-auto" src="https://i.ibb.co/1KWBVYx/navlogo.png" alt="nav image" />
                    </a>
                    <div>
                        <ul
                            class="md:flex px-10 md:px-0 lg:flex-row lg:space-x-8 lg:mt-0 pb-5 md:pb-0 md:mb-0 absolute md:static bg-[#3FC495] md:z-auto z-[-1] left-0 w-full transition-all ease-in duration-500 md:opacity-100 opacity-0">
                            <li>
                                <a href="bus.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-solid fa-bus"></i>
                                    <span class="font-semibold">Bus</span>
                                </a>
                            </li>
                            <li>
                                <a href="air.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-solid fa-plane-departure"></i>
                                    <span class="font-semibold">Air</span>
                                </a>
                            </li>
                            <li>
                                <a href="train.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-solid fa-train"></i>
                                    <span class="font-semibold">Train</span>
                                </a>
                            </li>
                            <li>
                                <a href="event.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-regular fa-calendar"></i>
                                    <span class="font-semibold">Event</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-solid fa-question"></i>
                                    <span class="font-semibold">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href="login.php"
                                    class="hover:bg-white hover:text-black hover:rounded-full p-5 duration-500 flex justify-center items-center h-8 gap-2 rounded-full text-white">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="font-semibold">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <!-- main page -->
    <section class="mt-20">
        <div class="bg-white flex items-center justify-center py-10">
            <div class="w-3/4">
                <p class="text-center text-5xl font-bold font-serif pb-5">Who we are?</p>
                <div>
                    <p class="text-justify font-mono text-xl font-think">We started our journey back in 2024 with one
                        goal in mind- to make lives
                        easier!
                        As a technology-first company, we develop tech-driven solutions for the everyday challenges of
                        Bangladeshi people. Uniride , a pioneer in Bangladesh’s travel industry is now the largest
                        online
                        ticket destination in the country. We put customers first and facilitate them with the freedom
                        to
                        choose from hundreds of operators and routes, compare prices, offer the best deals and
                        safeguards-
                        all within a few minutes and with just a few taps on their phone.

                        Uniride is more than just a ticketing platform, Uniride is a lifestyle! We empower our people by
                        solving and simplifying their travel needs and let them enjoy travelling, the Uniride way!</p>
                </div>
            </div>
        </div>
        <div class="bg-[#e9f5e6] flex items-center justify-center py-10">
            <div class="w-[90%]">
                <p class="text-center text-5xl font-bold font-serif pb-5">Leadership Team</p>
                <div class="flex items-center justify-center">

                    <div class=" flex flex-col items-center justify-center">
                        <img class="w-2/4 border-2 border-white rounded-full" src="https://i.ibb.co/1G2jF4B/ebrahim.png"
                            alt="M.Ebrahim Islam Shuvo">
                        <p class="font-semibold text-lg">M.Ebrahim Islam Shuvo</p>
                        <span class="text-gray-600 font-normal text-center">Founding Managing Director <br /> & Chairman
                        </span>
                    </div>
                    <div class=" flex flex-col items-center justify-center">
                        <img class="w-2/4 border-2 border-white rounded-full" src="https://i.ibb.co/2gWRsDY/mostak.png"
                            alt="Mostak Shahariyar">
                        <p class="font-semibold text-lg">Mostak Shahariyar</p>
                        <span class="text-gray-600 font-normal text-center">CEO AND Co-founder
                            <span class="text-gray-600 font-normal">Director, Engineering</span>
                            <span class="text-gray-600 font-normal">Director, Tickets</span>
                    </div>

                    <div class=" flex flex-col items-center justify-center">
                        <img class="w-2/4 border-2 border-white rounded-full" src="https://i.ibb.co/ZhjTFjc/salik.png"
                            alt="Ummay Salik Rumya Zinu">
                        <p class="font-semibold text-lg">Ummay Salik Rumya Zinu</p>
                        <span class="text-gray-600 font-normal">Employee of the Uniride</span>
                    </div>
                    <div class=" flex flex-col items-center justify-center">
                        <img class="w-2/4 border-2 border-white rounded-full" src="https://i.ibb.co/27H5CPC/summa.png"
                            alt="Summa Akter Midu">
                        <p class="font-semibold text-lg">Summa Akter Midu</p>
                        <span class="text-gray-600 font-normal">Employee of the Uniride</span>
                    </div>
                    <div class=" flex flex-col items-center justify-center">
                        <img class="w-2/4 border-2 border-white rounded-full" src="https://i.ibb.co/27H5CPC/summa.png"
                            alt="Sanjida Islam">
                        <!-- <i class="fa-regular fa-user"></i> -->
                        <p class="font-semibold text-lg">Sanjida Islam</p>
                        <span class="text-gray-600 font-normal">Employee of the Uniride</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white flex flex-col items-center justify-center py-10">
            <p class="text-center text-5xl font-bold font-serif pb-5">Our Values</p>
            <div class="w-3/4 flex items-center justify-center gap-5">
                <div class="shadow-2xl flex flex-col items-center justify-center p-5 gap-5 rounded-2xl">
                    <i class="fa-solid fa-hand-holding-heart text-5xl bg-[#3fc496] rounded-full p-5"></i>
                    <p class="text-xl font-semibold">Love to innovate</p>
                    <p class="text-gray-500 text-justify">We are the pioneer of digitizing transportation in Bangladesh.
                        We innovate
                        services that solve daily hassles, all the while leveraging technology!</p>
                </div>
                <div class="shadow-2xl flex flex-col items-center justify-center p-5 gap-5 rounded-2xl">
                    <i class="fa-solid fa-shield-heart text-5xl bg-[#3fc496] rounded-full p-5"></i>
                    <p class="text-xl font-semibold">Committed to safety</p>
                    <p class="text-gray-500 text-justify">
                        We go the extra mile when it comes to our commitment to safety. Since the inception of Shohoz,
                        the company has gone above and beyond to ensure the safety of its valued passengers.</p>
                </div>
                <div class="shadow-2xl flex flex-col items-center justify-center p-5 gap-5 rounded-2xl">
                    <i class="fa-solid fa-handshake text-5xl bg-[#3fc496] rounded-full p-5"></i>
                    <p class="text-xl font-semibold">Believe in empowerment</p>
                    <p class="text-gray-500 text-justify">
                        We absolutely believe in the economic empowerment of Bangladeshi people. Thus, offering freedom
                        to choose from the multiple services to make life easier.</p>
                </div>

            </div>
        </div>
    </section>


    <!-- footer -->
    <section>
        <div class="flex flex-col w-full h-full">
            <div style="background-image: url('https://i.ibb.co/R4GY4rb/footer.jpg');"
                class="bg-cover bg-no-repeat bg-center h-[700px] text-center">
                <div class="flex flex-col justify-center items-center md:w-full h-full">
                    <div class="bg-[#3fc495] rounded-lg px-10 py-6 mx-7 lg:m-0 lg:px-16 lg:py-10 text-white">
                        <h1 class="md:text-5xl text-3xl font-semibold md:pb-0 pb-3 md:leading-loose">Subscribe our
                            newsletter</h1>
                        <p class="pb-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
                            sapiente labore,
                            eius est architecto eos!</p>
                        <div
                            class="md:w-11/12 sm:bg-white md:h-10 flex sm:flex-row flex-col sm:justify-center sm:items-center md:py-6 md:px-1 sm:border-2 sm:border-red-300 sm:rounded-full sm:overflow-hidden">
                            <input type="text" placeholder="Enter your email"
                                class="sm:border-none rounded focus:outline-none w-full h-10 ps-5 text-black"
                                name="subscribe" id="subscribe" />
                            <button
                                class="bg-red-500 hover:text-black duration-300 text-lg rounded-full font-semibold px-3 py-2 sm:mt-0 mt-4">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#188A62] pb-5">
                <div class="lg:flex md:grid md:grid-cols-2 justify-around items-center py-20 px-11">
                    <div class="flex flex-col gap-y-6 justify-center md:mr-16 lg:w-[30%]">
                        <a href="/" class="w-44 h-20 ms-3">
                            <img src="https://i.ibb.co/1KWBVYx/navlogo.png
                  " alt="logo" />
                        </a>
                        <p class="text-white text-lg font-mono w-full text-justify">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Aspernatur labore ea alias sunt voluptate quaerat, quia facilis, magnam
                            rerum saepe id
                            ducimus quibusdam doloremque dignissimos! Expedita voluptatum quae possimus doloremque.</p>
                    </div>
                    <div class="md:mr-0 md:mt-0 mt-5 mr-9 flex flex-col justify-center gap-y-6">
                        <div class="flex flex-col justify-center">
                            <div class="flex items-center gap-y-2">
                                <MdEmail class="text-white text-2xl" />
                                <p class="text-white text-xl">Email</p>
                            </div>
                            <div>
                                <p class="text-white text-xl underline decoration-white decoration-1.5">info@ur.com</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="flex items-center gap-y-2">
                                <MdOutlineLocalPhone class="text-white text-2xl" />
                                <p class="text-white text-xl">Phone</p>
                            </div>
                            <div>
                                <p class="text-white text-xl">+88017 6120 8866</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="flex items-center gap-y-2">
                                <MdLocationOn class="text-white text-2xl" />
                                <p class="text-white text-xl">Address</p>
                            </div>
                            <div>
                                <p class="text-white text-xl ">Embankment Drive Road, Dhaka 1230</p>
                            </div>
                        </div>

                    </div>
                    <div class="flex flex-col justify-center lg:mt-0 mt-5">
                        <h1 class="text-2xl text-white underline decoration-white decoreation-1.5 mb-3">Quick Link</h1>
                        <div class="md:flex  items-center gap-x-10">
                            <div class="flex flex-col gap-y-3 mb-3 md:mb-0">
                                <a href="aboutUs.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">About</a>
                                <a href="cookies.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">Cookie
                                    Policy</a>
                                <a href="booking.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">Booking
                                    Policy</a>
                                <a href="contact.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">Contact
                                    Us</a>
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <a href="policy.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">Privacy
                                    Policy</a>
                                <a href="treams.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">Treams
                                    and conditon</a>
                                <a href="login.php"
                                    class="text-xl text-white underline hover:text-black transition-all duration-200 hover:decoration-black decoration-white decoration-1.5">My
                                    Account</a>
                            </div>
                        </div>
                        <div class="flex justify-center items-center gap-5 md:gap-20 mt-6">
                            <div
                                class="text-black text-xl bg-white px-3 py-1 hover:text-[#188A62] hover:bg-black shadow-md shadow-gray-300 transition-all ease-in duration-300 rounded-full">
                                <a href="https://www.facebook.com">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </div>
                            <div
                                class="text-black text-xl bg-white p-2 hover:text-[#188A62] hover:bg-black shadow-md shadow-gray-300 px-3 py-1 transition-all ease-in duration-300 rounded-full">
                                <a href="https://www.instagram.com">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <div
                                class="text-black text-xl bg-white p-2 hover:text-[#188A62] hover:bg-black shadow-md shadow-gray-300 px-3 py-1 transition-all ease-in duration-300 rounded-full">
                                <a href="https://www.twitter.com">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </div>
                            <div
                                class="text-black text-xl bg-white p-2 hover:text-[#188A62] hover:bg-black shadow-md shadow-gray-300 px-3 py-1 transition-all ease-in duration-300 rounded-full">
                                <a href="https://www.linkedin.com">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="text-white pb-5" />
                <div class="flex md:flex-row flex-col justify-between items-center mx-20">
                    <div class="md:mb-0 mb-3 flex gap-2 justify-center items-start">
                        <i class="fa-regular fa-copyright text-white text-2xl"></i>
                        <p class="text-white font-think text-justify">Copyright
                            2024. All Rights Reserved
                        </p>
                    </div>
                    <div class="flex justify-center items-center gap-x-4">

                        <img class="w-12 h-10" src="https://i.ibb.co/dPV1Nrz/visa.jpg" alt="rocket logo" />
                        <img class="w-12 h-10" src="https://i.ibb.co/84cFppJ/rocket.png" alt="rocket logo" />
                        <img class="w-12 h-10"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSl_0ydm5a7qKD1uwWZWV-jLzsvt3kS6ZC2xQ2qtFJxTw&s"
                            alt="nogod logo" />
                        <img class="w-12 h-10" src="https://i.ibb.co/QpxdXwQ/bkash.jpg" alt="bkash" />
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>