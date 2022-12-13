<div class="ml-5 mr-3">
    <div class="flex justify-between" >
        <h3 class="font-bold pt-3">Dashboard</h3>
        <div class="flex items-center">
            <div>
                <p class="text-slate-400">Today's Date</p>
                <h3 class="font-bold">2022-12-02</h3>
            </div>

            <div class="mx-2 p-1 border-inherit rounded bg-slate-200">
                <i class="fa fa-calendar-alt  p-3 "></i>
            </div>
        </div>
    </div>
    <div class="bg-cover bg-no-repeat rounded my-4 p-10" style="background-image: url('../../img/b8.jpg')">
        <h3 class="font-bold">Welcom!</h3>
        <h1 class="font-bold text-2xl my-3 ">Test Doctor</h1>
        <p>Thanks For Joinnig with us. we are Always trying to get you a complete service </br> You Can view your daily schedule,Reach
        Patients Appointments at home!</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mt-9 py-2 px-4 rounded"
                type="button">
            View My Appointment
        </button>
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
                <h1 class="text-lg font-bold text-black">Your up coming Sessions until Next Week</h1>
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


                    
                    <?php
                    $result1=Session::selectsessuntilweek();
        ?>
                
                <?php
foreach($result1 as $row){
                ?>

                <tr>
                    <td><?= $row['title'] ?></td>
                    <!-- <td class="py-2">
                        <img src="../../img/notfound.svg" alt="" style="width: 300px; height:100px;">
                    </td> -->

                    <td></td>
                    <td></td>
                </tr>
<?php } ?>
                </tbody>
            </table>

            <div>
                <button class="bg-blue-500 w-full hover:bg-blue-700 text-white py-1 px-4 rounded mb-6">Show all Sessions</button>
            </div>
        </div>

    </div>
</div>