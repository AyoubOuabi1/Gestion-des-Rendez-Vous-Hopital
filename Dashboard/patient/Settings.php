<section class=" mx-3 my-2">
    <div class="flex justify-between">
        <div class="flex items-center">

            <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="mr-2 fa fa-arrow-left"></i>Back</button>
            <h1 class="text-2xl font-bold">Setting</h1>
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

    <div class="shadow-md p-6 flex border w-full  m-2">

        <div class="mr-4 py-5 px-6 border-inherit rounded bg-slate-200">
            <img src="../../img/icons/session-iceblue.svg"/>
        </div>
        <div>
            <a style="cursor: pointer;" onclick="changePatientDashIntoEditPage()" class="text-blue-700  font-bold text-xl">
                Account Settings
            </a>
            <h1>Edit your account details & change passwords</h1>
        </div>

    </div>

    <div class="shadow-md p-6 flex border w-full m-2">

        <div class="mr-4 py-5 px-6 border-inherit rounded bg-slate-200">
            <img src="../../img/icons/session-iceblue.svg"/>
        </div>
        <div>
            <button data-modal-toggle="viewPatientInfos" class="text-blue-700  font-bold text-xl">
                View Account Details
            </button>
            <h1>View Personal information About you account</h1>
        </div>

    </div>
    <?php 
        $data      = Patient::getInfosOfPatient() ;
        $patientId = $data['id'] ;
    ?>
    <div class="shadow-md p-6 flex border w-full m-2">

        <div class="mr-4 py-5 px-6 border-inherit rounded bg-slate-200">
            <img src="../../img/icons/session-iceblue.svg"/>
        </div>
        <div>
            <a class="text-red-600  font-bold text-xl" href="../../Classes/patient.php?patientId=<?= $patientId ?>">
                Delete Account
            </a>
            <h1>Will permannetly remove your account</h1>
        </div>

    </div>

</section>
<!-- Main modal -->
<div id="viewPatientInfos" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-md md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="viewPatientInfos">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <?php $data = Patient::getInfosOfPatient() ?>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Informations of patient</h3>
                <form class="space-y-6" action="../../Classes/patient.php" method="POST">
                    <div>
                        <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                        <input value="<?php echo $data['firstName'] ?>" type="text" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                        <input value="<?= $data['lastName'] ?>" type="text" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="cin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CIN</label>
                        <input value="<?= $data['cin'] ?>" type="text" name="cin" id="cin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                        <input value="<?= $data['telephone'] ?>" type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input value="<?= $data['email'] ?>" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input value="<?= $data['address'] ?>" type="text" name="addres" id="addres" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                    <div>
                        <label for="birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                        <input value="<?= $data['birthday'] ?>" type="text" name="birthday" id="birthday" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


