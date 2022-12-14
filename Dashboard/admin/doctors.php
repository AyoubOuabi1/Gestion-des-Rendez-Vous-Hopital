
    <section class="mx-3 my-2">
        <div class="flex justify-between">
            <div class="flex items-center">
                <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-arrow-left mr-2"></i>Back</button>
            </div>

            <div class="flex items-center relative">
                <i class="fa fa-search absolute mx-3"></i><input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient" placeholder="Search Patient Name or Email" style="width: 700px;">
                <button class="bg-blue-500 hover:bg-blue-700 text-white rounded py-2 px-6 ml-2">Search</button>
            </div>

            <div class="flex items-center">
                <div>
                    <p class="text-slate-400">Today's Date</p>
                    <h3 class="font-bold"><?php echo date("d-m-Y")?>  </h3>
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
                <button class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-4 rounded mb-6 ml-2"><i class="fa fa-plus mr-2"></i>Add New</button>
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
              <tr>
                <td class="px-4 py-2 text-center">Test Doctor</td>
                <td class="px-4 py-2 text-center">doctor@youcode.ma</td>
                <td class="px-4 py-2 text-center">Accident and emergen</td>
                <td class="px-4 py-2 text-center">
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-pencil-alt mr-2"></i>Edit</button>
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-eye mr-2"></i>View</button>
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-trash mr-2"></i>Remove</button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>