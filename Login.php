
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-slate-100">
    <div class="grid  place-content-center h-full" style="margin-top: 5%">
        <section class="bg-white shadow-md rounded   pt-6 pb-8 mb-4 " id="loginSection">
            <div class="md:mx-14">
                <h2 class="text-2xl mt-4 mb-3 font-bold text-center w-full">Welcome Back!</h2>
                <p class="text-slate-500 text-center w-full">Login with your details to continue</p>
            </div>

            <form class="md:mx-14" action="./Includes/login_inc.php" method="POST">
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fLoginEmail">Email:</label>
                    <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fLoginEmail" name="fLoginEmail" placeholder="Email Address" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fLoginPsd">Password:</label>
                    <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fLoginPsd" name="fLoginPsd" placeholder="Password" required>
                </div>
                <div class="mt-14 mb-4 mx-6 w-96">
                    <button class="bg-blue-500 min-w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-8" type="submit" name="submit">
                        Login
                    </button>
                    <p class="text-center text-slate-500">Don't have an account? <a class="font-bold text-xl text-black" style="cursor: pointer" onclick="changeSectionIntoSignUp()">Sign Up</a></p>

                </div>

            </form>
        </section>
        <section class="bg-white shadow-md rounded content-center  pt-6 pb-8 mb-4" style="display: none" id="signupSection">
            <div class="text-center md:mx-14 w-96">
                <h2 class="text-2xl mt-4 mb-3 font-bold">Let's Get Started </h2>
                <p class="text-slate-500">Add Your Personal Details To Continue</p>
            </div>

            <form class="md:mx-14" action="./Includes/signup_inc.php" method="POST">
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fFirstName" name="fFirstName">Name</label>
                    <div class="grid grid-cols-2 gap-1 content-center">
                        <input type="text" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fFirstName" name="firstName" placeholder="First Name" required>
                        <input type="text" class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fLastName" name="lastName" placeholder="Last Name" required>

                    </div>

                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fAddress">Telophone Number:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telephone" name="telephone" placeholder="tele" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fAddress">Address:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fAddress" name="fAddress" placeholder="Address" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fCin">Cin:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fCin" name="fCin" placeholder="Code CIN" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fDate">Date Of Birth:</label>
                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fDate" name="fDate" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fSgnEmain">Email:</label>
                    <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fSgnEmain" name="fSgnEmail" placeholder="Email" required>
                </div>
                <div class="m-6 w-96">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fSgnpsd">Password:</label>
                    <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fSgnpsd" name="fSgnpsd" placeholder="Password" required>
                </div>
                <div class="mt-14 mb-4 mx-6 w-96">
                    <div class="grid grid-cols-2 gap-1 content-center">
                        <button class="bg-sky-200	 min-w-full hover:bg-blue-700 hover:text-white text-sky-500 font-bold py-2 px-4 rounded mb-8" type="button">
                            Reset
                        </button>
                        <button class="bg-blue-500 min-w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-8" type="submit" name="submit">
                            Sign Up
                        </button>
                    </div>

                    <p class="text-center text-slate-500">Already have an account? <a class="font-bold text-xl text-black" style="cursor: pointer" onclick="changeSectionIntoLogin()">Login</a></p>

                </div>

            </form>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
    <script src="Scripts/main.js"></script>
</body>

</html>