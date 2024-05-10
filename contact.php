<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/44c48dbaca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styyle.css">
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
  <title>contact</title>
</head>

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
            <!-- <div onClick={()=>setOpen(!open)} class="text-white text-3xl absolute right-8 top-6 cursor-pointer md:hidden">
                  {
                      open ? <IoMdClose /> :  <RiMenu2Fill />
                  }
                  </div> -->
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


  <div class="flex  flex-col w-full h-full ">
    <div class="bg-cover bg-no-repeat bg-center w-full h-screen mt-20"
      style="background-image: url('https://i.ibb.co/R4GY4rb/footer.jpg')">
      <div class="container">
        <form action="config\contract.php" method="POST">
          <h1>Contract Us</h1>
          <h6>Thank you for reaching us! We are always happy to hear from you</h6>
          <input type="text" id="FirstName" name="firstname" placeholder="First Name" required>
          <input type="text" id="LastName" name="lastname" placeholder="Last Name" required>
          <input type="email" id="email" name="emaill" placeholder="example@email.com" required>
          <input type="text" id="mobile" name="mobilee" placeholder="01XXXXXXXXX" required>
          <textarea name="messagee" placeholder="Write your message here........." required></textarea>
          <input type="submit" class="close" value="Send" id="button">
        </form>
      </div>
    </div>
  </div>

  <!-- footer -->
  <!-- footer -->
  <section>
    <div class="flex flex-col w-full h-full">
      <div style="background-image: url('https://i.ibb.co/R4GY4rb/footer.jpg');"
        class="bg-cover bg-no-repeat bg-center h-[700px] text-center">
        <div class="flex flex-col justify-center items-center md:w-full h-full">
          <div class="bg-[#3fc495] rounded-lg px-10 py-6 mx-7 lg:m-0 lg:px-16 lg:py-10 text-white">
            <h1 class="md:text-5xl text-3xl font-semibold md:pb-0 pb-3 md:leading-loose">Subscribe our newsletter</h1>
            <p class="pb-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sapiente labore,
              eius est architecto eos!</p>
            <div
              class="md:w-11/12 sm:bg-white md:h-10 flex sm:flex-row flex-col sm:justify-center sm:items-center md:py-6 md:px-1 sm:border-2 sm:border-red-300 sm:rounded-full sm:overflow-hidden">
              <input type="text" placeholder="Enter your email"
                class="sm:border-none rounded focus:outline-none w-full h-10 ps-5 text-black" name="subscribe"
                id="subscribe" />
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
            <p class="text-white text-lg font-mono w-full text-justify">Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Aspernatur labore ea alias sunt voluptate quaerat, quia facilis, magnam rerum saepe id
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