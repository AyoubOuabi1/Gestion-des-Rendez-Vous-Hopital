    <section class=" mx-3 my-2">
        <div class="flex justify-between">
            <div class="flex items-center">
                <button class="mr-3 bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded"><i class="mr-2 fa fa-arrow-left"></i>Back</button>
            </div>

            <div class="flex items-center relative">
                <i class="fa fa-search absolute ml-3"></i><input class="block border rounded py-2 px-8 w-full" type="search" name="searchPatient" id="searchPatient" placeholder="Search Patient Name or Email" style="width: 700px;">
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
          <?php
             $count = new Patient ;
             $data  = $count->countPatient() ;
           ?>
            <h4>All Patients <span>(<?php echo $data['numberOfPatients'] ?>)</span></h4>
        </div>  
        <table class="table-fixed border rounded w-full">
            <thead>
              <tr>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">Name</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">CIN</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">Telephone</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">Email</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">Date of Birth</th>
                <th class="border-b-2 border-b-blue-500 px-4 py-2 text-center">Events</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $select = new Patient ;
                $row    = $select->selectPatient() ; 
                foreach($row as $rows){
                ?>
              <tr>
                <td class="px-4 py-2 text-center"><?php echo $rows['firstName']." ".$rows['lastName']?></td>
                <td class="px-4 py-2 text-center"><?php echo $rows['cin'] ?></td>
                <td class="px-4 py-2 text-center"><?php echo $rows['telephone'] ?></td>
                <td class="px-4 py-2 text-center"><?php echo $rows['email'] ?></td>
                <td class="px-4 py-2 text-center"><?php echo $rows['birthday'] ?></td>
                <td class="px-4 py-2 text-center">
                    <button class="bg-sky-100 hover:bg-blue-700 hover:text-white text-sky-500 py-2 px-4 rounded" data-bs-toggle="modal" data-bs-target="#viewPatient"><i class="fa fa-eye mr-2"></i>View</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </section>


<!-- Modal -->
<div class="modal fade" id="viewPatient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Patient</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mt-2"><b class="mr-2">First Name: </b></p>
        <p class="mt-5"><b class="mr-2">Last Name: </b></p>
        <p class="mt-5"><b class="mr-2">CIN: </b></p>
        <p class="mt-5"><b class="mr-2">Phone: </b></p>
        <p class="mt-5"><b class="mr-2">Email: </b></p>
        <p class="mt-5"><b class="mr-2">Address: </b></p>
        <p class="mt-5 mb-2"><b class="mr-2">Birthday: </b></p>
      </div>
    </div>
  </div>
</div>