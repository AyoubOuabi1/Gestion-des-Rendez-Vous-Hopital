
<section class="mx-3 my-2">
        <div class="flex justify-between">
            <div class="flex items-center relative">
                <i class="fa fa-search absolute ml-3"></i>
                <input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient" placeholder="Search Patient Name or Email" style="width: 700px;">
                <button class="ml-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-6 rounded">Search</button>
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

        <h3 class="font-bold my-6">Status</h3>

        <div class="flex justify-between">
            <div class="flex justify-between items-center border py-3 px-6 rounded w-64">
                <div>
                    <span class="font-bold text-sky-500">1</span>
                    <h3>Doctors</h3>
                </div>
                <div>
                    <i class="text-sky-500 fa fa-briefcase-medical bg-slate-100 p-3 rounded"></i>
                </div>
            </div>

            <div class="flex justify-between items-center border py-3 px-6 rounded w-64">
                <div>
                    <?php 
                        // $count = new Patient ;
                        $data  = Patient::countPatient() ;
                    ?>
                    <span class="font-bold text-sky-500"><?php echo $data['numberOfPatients'] ; ?></span>
                    <h3>Patients</h3>
                </div>
                <div>
                    <i class="text-sky-500 fa fa-procedures bg-slate-100 p-3 rounded"></i>
                </div>
            </div>

            <div class="flex justify-between items-center border py-3 px-6 rounded w-64">
                <div>
                    <span class="font-bold text-sky-500">0</span>
                    <h3>New Booking</h3>
                </div>
                <div>
                    <i class="text-sky-500 fa fa-bookmark bg-slate-100 p-3 rounded"></i>
                </div>
            </div>

            <div class="flex justify-between items-center border py-3 px-6 rounded w-64">
                <div>
                    <span class="font-bold text-sky-500">0</span>
                    <h3>Today Sessions</h3>
                </div>
                <div>
                    <i class="text-sky-500 fa fa-heartbeat bg-slate-100 p-3 rounded"></i>
                </div>
            </div> 
        </div>
        <div class="grid grid-cols-2 gap-28">
            <div>
                <div class="mt-10">
                    <h1 class="text-lg font-bold text-blue-500">Upcoming Appointments until Tuesday</h1>
                </div>

                <div class="mt-6">
                    <p>Here's Quick access to Upcoming Appointments until 7 days More details available in @Appointment section.</p>
                </div>
                <table class="table-fixed border rounded mt-6 w-full">
                    <thead>
                    <tr>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2 w-1/3">Appointment number</th>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Patient Name</th>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor</th>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Session</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="py-2" colspan="2" >
                                <img src="../../img/notfound.svg" alt="" style="width: 300px; height:100px;">
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <button class="bg-blue-500 w-full hover:bg-blue-700 text-white py-1 px-4 rounded mb-6">Show all Appointments</button>
                </div>
            </div>

            <div>
                <div class="mt-10">
                    <h1 class="text-lg font-bold text-blue-500">Upcoming Sessions until Next Tuesday</h1>
                </div>

                <div class="mt-6">
                    <p>Here's Quick access to Upcoming Sessions that Scheduled until 7 days Add, Remove and Many features available in @Schedule section.</p>
                </div>

                <table class="table-fixed border rounded mt-6 w-full">
                    <thead>
                    <tr>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Session Title</th>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor</th>
                        <th class="border-b-2 border-b-blue-500 px-4 py-2">Sheduled Date & Time</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="py-2">
                                <img src="../../img/notfound.svg" alt="" style="width: 300px; height:100px;">
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div>
                    <button class="bg-blue-500 w-full hover:bg-blue-700 text-white py-1 px-4 rounded mb-6">Show all Sessions</button>
                </div>
            </div>
        </div>
    </section>