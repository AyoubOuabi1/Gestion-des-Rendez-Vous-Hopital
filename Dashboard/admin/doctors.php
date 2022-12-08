
<section class="mx-3 my-2">
    <div class="flex justify-between">
        <div class="flex items-center">
            <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-arrow-left mr-2"></i>Back</button>
        </div>

        <div class="flex items-center relative">
            <i class="fa fa-search absolute mx-3"></i><input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient1" placeholder="Search Patient Name or Email" style="width: 700px;">
            <button class="bg-blue-500 hover:bg-blue-700 text-white rounded py-2 px-6 ml-2">Search</button>
        </div>

        <div class="flex items-center">
            <div>
                <p class="text-slate-400">Today's Date</p>
                <h3 class="font-bold">2022-12-02</h3>
            </div>

            <div class="mx-2">
                <i class="fa fa-calendar-alt bg-slate-100 p-3 rounded"></i>
            </div>
        </div>
    </div>
</section>
<section class="mx-10">
    <div class="flex justify-between mt-6">
        <h4>Add New Doctor</h4>
        <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded mb-6 ml-2" data-modal-toggle="add-modal"><i class="fa fa-plus mr-2"></i>Add New</button>
    </div>
    <div class="mb-6">
        <h4>All Doctors <span>(1)</span></h4>
    </div>

    <table class="table-fixed border rounded w-full">
        <thead>
            <tr>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor Name</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Email</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2">Specialities</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 w-1/3">Events</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $row = Doctor::selecetDoctors();
            foreach ($row as $rows) {
                echo '<tr>
                    <td class="px-4 py-2 text-center">' . $rows['firstName'] . ' ' . $rows['lastName'] . '</td>
                    <td class="px-4 py-2 text-center">' . $rows['email'] . '</td>
                    <td class="px-4 py-2 text-center"><' . $rows['speciality'] . '</td>
                    <td class="px-4 py-2 text-center">
                        <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-pencil-alt mr-2"></i>Edit</button>
                        <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded" data-modal-toggle="authentication-modal"><i class="fa fa-eye mr-2"></i>View</button>
                        <button class=" bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Remove</button>
                    </td>
                </tr>';
            } ?>
        </tbody>
    </table>

    <!-- Modal of view informations -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">if (isset($_POST['submit'])) addDoctor();
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Informations of Doctor</h3>
                    <form class="space-y-6" action="#" method=POST>
                        <?php 
                        $row = Doctor::selecetDoctors();
                        foreach ($rows as $row) { ?>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIN</label>
                                <input type="text" name="cin" id="cin1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['cin'] ?>">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National Code</label>
                                <input type="text" name="Ncode" id="Ncode1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['nationalCode'] ?>">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                <input type="text" name="firstName" id="firstName1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['firstName'] . " " . $rows['lastName'] ?>">
                            </div>

                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Adress</label>
                                <input type="text" name="email" id="email1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['email'] ?>">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speciality</label>
                                <input type="text" name="speciality" id="speciality1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['speciality'] ?>">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                                <input type="text" name="pNumber" id="pNumber1" readonly class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $rows['teleNumber'] ?>">
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal of Add doctors -->
    <div id="add-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="add-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Doctors</h3>
                    <form class="space-y-6" action="http://localhost/Gestion-des-Rendez-Vous-Hopital/Includes/doctor.inc.php" method="POST">

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIN</label>
                            <input type="text" name="cin" id="dcin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National Code</label>
                            <input type="text" name="Ncode" id="Nacode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                            <input type="text" name="firstName" id="firstName2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                            <input type="text" name="lastName" id="lastName2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>

                        <div>
                            <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Adress</label>
                            <input type="text" name="email" id="email2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speciality</label>
                            <input type="text" name="speciality" id="speciality2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                            <input type="text" name="pNumber" id="pNumber2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="">
                        </div>
                        <div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Doctor</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


</section>