
<body>
    <div class="flex justify-between" >
        <h3 class="font-bold pt-3">Home</h3>
        <div class="flex items-center">
            <div>
                <p class="text-slate-400">Today's Date</p>
                <h3 class="font-bold"><?php echo date('Y-m-d') ;?></h3>
            </div>

            <div class="mx-2 p-1 border-inherit rounded bg-slate-200">
                <i class="fa fa-calendar-alt  p-3 "></i>
            </div>
        </div>
    </div>
    <div class="bg-cover bg-no-repeat rounded my-4 p-10" style="background-image: url('../../img/b3.jpg')">
        <h3 class="font-bold">Welcom!</h3>
        <h1 class="font-bold text-2xl my-3 ">hanane hanane.</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima in sunt! Laborum ipsum similique impedit eveniet sint ad optio rem? Quae nostrum eveniet accusantium amet repellendus facilis rem modi!</p>
        <h1 class="font-bold pt-20 pb-4 text-lg">Channel a Doctor here</h1>

        <div class="flex items-center relative">
            <i class="fa fa-search absolute mx-3"></i><input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient" placeholder="Search Doctor and will Find The Session Available" style="width: 700px;">
            <button class="bg-blue-500 hover:bg-blue-700 text-white rounded py-2 px-6 ml-2">Search</button>
        </div>
    </div>


    <div class="grid grid-cols-12 gap-3">
        <div class="col-span-6">
            <div class="mt-10">
                <h1 class="text-lg font-bold text-black">Status</h1>
            </div>
            <div class="grid grid-rows-2 mt-3 grid-flow-col gap-3">
                <div class="row-span-1 p-5 border border-inherit rounded-md bg-slate-50">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-blue-500 font-bold">1</p>
                            <h3 class="">All Doctors</h3>
                        </div>

                        <div class="mr-2 py-5 px-2 border-inherit rounded bg-slate-200">
                            <img src="../../img/icons/doctors-hover.svg"/>
                        </div>
                    </div>
                </div>

                <div class="row-span-1 p-5 border border-inherit rounded-md bg-slate-50">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-blue-500 font-bold ">0</p>
                            <h3 class="">New Booking</h3>
                        </div>

                        <div class="mr-2 py-5 px-2 border-inherit rounded bg-slate-200">
                            <img src="../../img/icons/book-hover.svg"/>
                        </div>
                    </div>
                </div>


                <div class="row-span-1 p-5 border border-inherit rounded-md bg-slate-50">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-blue-500 font-bold">3</p>
                            <h3 class="">All Patients</h3>
                        </div>

                        <div class="mr-2 py-5 px-2 border-inherit rounded bg-slate-200">
                            <img src="../../img/icons/patients-hover.svg"/>
                        </div>
                    </div>
                </div>


                <div class="row-span-1 p-5 border border-inherit rounded-md bg-slate-50">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-blue-500 font-bold">0</p>
                            <h3 class="">Today Session</h3>
                        </div>

                        <div class="mr-2 py-5 px-2 border-inherit rounded bg-slate-200">
                            <img src="../../img/icons/session-iceblue.svg"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-span-6">
            <div class="mt-10">
                <h1 class="text-lg font-bold text-black">Your Upcoming booking</h1>
            </div>



            <table class="table-fixed border rounded mt-6 w-full">
                <thead>
                <tr>
                    <th class="border-b-2 border-b-blue-500 px-4 py-2">Appoint. number</th>
                    <th class="border-b-2 border-b-blue-500 px-4 py-2">Session Title</th>
                    <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor</th>
                    <th class="border-b-2 border-b-blue-500 px-4 py-2">Sheduled Date & Time</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-lg font-bold p-5">2</td>
                    <td class="text-lg p-5">test Session</td>
                    <td class="text-lg p-5">Test Doctor</td>
                    <td class="text-lg p-5">2050-01-01 18:00</td>
                </tr>
                <tr>
                    <td class="text-lg font-bold p-5">3</td>
                    <td class="text-lg p-5">test Session</td>
                    <td class="text-lg p-5">Test Doctor</td>
                    <td class="text-lg p-5">2050-01-01 18:00</td>
                </tr>

                </tbody>
            </table>
        </div>

    </div>
</body>