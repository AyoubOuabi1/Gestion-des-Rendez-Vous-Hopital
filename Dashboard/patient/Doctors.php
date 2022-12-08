<section class="mx-3 my-2">
    <div class="flex justify-between">
        <div class="flex items-center">
            <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="mr-2 fa fa-arrow-left"></i>Back</button>
        </div>

        <div class="flex items-center relative">
            <i class="fa fa-search absolute ml-3"></i><input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient" placeholder="Search Doctor Name or Email" style="width: 700px;">
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
    <div class="mb-6 mt-6">
        <h4>All Doctors <span>(2)</span></h4>
    </div>

    <table class="table-fixed border rounded w-full">
        <thead>
          <tr>
            <th class="border-b-2 border-b-blue-500 px-4 py-2">Doctor Name</th>
            <th class="border-b-2 border-b-blue-500 px-4 py-2">Email</th>
            <th class="border-b-2 border-b-blue-500 px-4 py-2">Specialties</th>
            <th class="border-b-2 border-b-blue-500 px-4 py-2">Events</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-2 text-center">test Doctor</td>
            <td class="px-4 py-2 text-center">doc@doc</td>
            <td class="px-4 py-2 text-center">Emergen</td>
            <td class="px-4 py-2 text-center">
                <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="fa fa-eye mr-2"></i>View</button>
                <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded">Sessions<i class="fa fa-eye mr-2"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
      </section>
